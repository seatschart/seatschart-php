<?php
// PHPUnit test of the organizer workspace helpers against the generated client and a fake Guzzle handler (run inside
// the generated package by CI: scripts/publish-server-sdks.mjs).

namespace SeatsChart\Client\Test\Runtime;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use SeatsChart\Client\Api\WorkspaceApi;
use SeatsChart\Client\ApiException;
use SeatsChart\Client\Configuration;
use SeatsChart\Client\Model\PostApiWorkspacesRequest;
use SeatsChart\Client\Runtime\Retry;
use SeatsChart\Client\Runtime\Workspaces;

final class WorkspacesTest extends TestCase
{
    /** A Guzzle client answering with $answer(path?query) (null: 404 not_found), recording every request. */
    private function http(callable $answer, \ArrayObject $history): Client
    {
        $stack = HandlerStack::create(function (RequestInterface $request, array $options) use ($answer) {
            $target = $request->getUri()->getPath() . ($request->getUri()->getQuery() === '' ? '' : '?' . $request->getUri()->getQuery());
            $json = $answer($target);
            return \GuzzleHttp\Promise\Create::promiseFor(new Response($json === null ? 404 : 200, ['Content-Type' => 'application/json'],
                $json ?? '{"error":"not_found","message":"x"}'));
        });
        $client = Retry::client(new Retry(1), ['handler' => $stack]);
        $stack->push(Middleware::history($history));
        return $client;
    }

    private function config(): Configuration
    {
        return (new Configuration())->setHost('http://api.test')->setApiKey('x-api-key', 'sk_live_platform');
    }

    private static function quiet(callable $call): void
    {
        try {
            $call();
        } catch (ApiException $expected) {
            // 404 from the fake server
        }
    }

    /** @return string[] "METHOD path" of every recorded request */
    private static function routes(\ArrayObject $history): array
    {
        $out = [];
        foreach ($history as $entry) {
            $out[] = $entry['request']->getMethod() . ' ' . $entry['request']->getUri()->getPath();
        }
        return $out;
    }

    private static function item(string $id): string
    {
        return '{"workspaceId":"' . $id . '","displayName":"' . $id . '","externalId":null,"status":"active","createdByApi":true,'
            . '"createdAt":"2026-11-14T00:00:00.000Z","pricingSource":"partner","charts":0,"events":0,'
            . '"seats":{"sold":0,"held":0,"available":0},"revenue":{"known":false,"cents":null},'
            . '"usage":{"month":"2026-11","usedObjects":0,"usedSeats":0,"projectedSeats":0}}';
    }

    private static function page(?string $next, string ...$ids): string
    {
        return '{"month":"2026-11","items":[' . implode(',', array_map([self::class, 'item'], $ids)) . '],"nextCursor":'
            . ($next === null ? 'null' : '"' . $next . '"') . ',"seats":null,"account":null,"totals":{"workspaces":3,"active":3,'
            . '"charts":0,"events":0,"seats":{"sold":0,"held":0,"available":0},"revenue":{"cents":0,"complete":false},"usedObjects":0}}';
    }

    public function testForWorkspaceScopesEveryCallAndLeavesTheOriginal(): void
    {
        $history = new \ArrayObject();
        $http = $this->http(function () { return '{"ok":true}'; }, $history);
        $org = Workspaces::forWorkspace($http, '  org-1042 ');
        $member = '6f1c2d4e-0000-4000-8000-000000000001';
        (new Workspaces(new WorkspaceApi($org, $this->config())))->members()->remove('org-1042', $member);
        (new Workspaces(new WorkspaceApi($http, $this->config())))->members()->remove('org-1042', $member);
        $this->assertSame('org-1042', $history[0]['request']->getHeaderLine(Workspaces::HEADER));
        $this->assertSame('sk_live_platform', $history[0]['request']->getHeaderLine('x-api-key'));
        $this->assertFalse($history[1]['request']->hasHeader(Workspaces::HEADER), 'the original client is unchanged');
        $this->assertSame('org-7', Workspaces::forWorkspace($org, 'org-7')->getConfig('headers')[Workspaces::HEADER]);
        $this->expectException(\InvalidArgumentException::class);
        Workspaces::forWorkspace($http, '  ');
    }

    public function testCreateAlwaysSendsAnIdempotencyKeyAndAcceptsArrays(): void
    {
        $history = new \ArrayObject();
        $ws = new Workspaces(new WorkspaceApi($this->http(function () { return null; }, $history), $this->config()));
        self::quiet(function () use ($ws) {
            $ws->create(['displayName' => 'Teatro Aurora', 'externalId' => 'org-1042', 'issueKey' => ['name' => 'Server key']]);
        });
        self::quiet(function () use ($ws) {
            $ws->create((new PostApiWorkspacesRequest())->setDisplayName('Teatro Aurora'), 'provision-org-1042');
        });
        $this->assertSame(['POST /api/workspaces', 'POST /api/workspaces'], self::routes($history));
        $this->assertSame(36, strlen($history[0]['request']->getHeaderLine('Idempotency-Key')));
        $this->assertSame('provision-org-1042', $history[1]['request']->getHeaderLine('Idempotency-Key'));
        $sent = json_decode((string) $history[0]['request']->getBody(), true);
        $this->assertSame(['displayName' => 'Teatro Aurora', 'externalId' => 'org-1042', 'issueKey' => ['name' => 'Server key']], $sent);
    }

    public function testEveryHelperReachesItsRoute(): void
    {
        $history = new \ArrayObject();
        $ws = new Workspaces(new WorkspaceApi($this->http(function () { return null; }, $history), $this->config()));
        $k = '00000000-0000-4000-8000-000000000001';
        foreach ([
            function () use ($ws) { $ws->get('ws_1'); },
            function () use ($ws) { $ws->getByExternalId('org-1042'); },
            function () use ($ws) { $ws->keys()->list('org-1042'); },
            function () use ($ws) { $ws->keys()->create('org-1042', ['name' => 'Box office']); },
            function () use ($ws, $k) { $ws->keys()->update('org-1042', $k, ['name' => 'Renamed']); },
            function () use ($ws, $k) { $ws->keys()->rotate('org-1042', $k); },
            function () use ($ws, $k) { $ws->keys()->revoke('org-1042', $k); },
            function () use ($ws) { $ws->members()->list('org-1042'); },
            function () use ($ws) { $ws->invitations()->list('org-1042'); },
            function () use ($ws) { $ws->invitations()->create('org-1042', ['email' => 'a@example.test', 'role' => 'viewer']); },
            function () use ($ws, $k) { $ws->invitations()->revoke('org-1042', $k); },
        ] as $call) {
            self::quiet($call);
        }
        $this->assertSame([
            'GET /api/workspaces/ws_1', 'GET /api/workspaces/by-external-id/org-1042', 'GET /api/workspaces/org-1042/keys',
            'POST /api/workspaces/org-1042/keys', "PATCH /api/workspaces/org-1042/keys/$k", "POST /api/workspaces/org-1042/keys/$k/actions/rotate",
            "DELETE /api/workspaces/org-1042/keys/$k", 'GET /api/workspaces/org-1042/members', 'GET /api/workspaces/org-1042/invitations',
            'POST /api/workspaces/org-1042/invitations', "DELETE /api/workspaces/org-1042/invitations/$k",
        ], self::routes($history));
        $this->assertSame(['name' => 'Box office'], json_decode((string) $history[3]['request']->getBody(), true));
    }

    public function testListAllOverviewWalksEveryPageWithTheFilters(): void
    {
        $history = new \ArrayObject();
        $ws = new Workspaces(new WorkspaceApi($this->http(function (string $target) {
            return strpos($target, 'cursor=c2') !== false ? self::page(null, 'ws_3') : self::page('c2', 'ws_1', 'ws_2');
        }, $history), $this->config()));
        $ids = [];
        foreach ($ws->listAllOverview(['created_by_api' => true]) as $item) {
            $ids[] = $item->getWorkspaceId();
        }
        $this->assertSame(['ws_1', 'ws_2', 'ws_3'], $ids);
        $this->assertCount(2, $history);
        foreach ($history as $entry) {
            $this->assertStringContainsString('createdByApi=true', $entry['request']->getUri()->getQuery());
        }
    }
}

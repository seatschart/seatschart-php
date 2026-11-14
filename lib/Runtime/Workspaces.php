<?php
/**
 * One workspace per organizer (ticketing platforms) for the SeatsChart PHP client.
 * Copied into the generated package (lib/Runtime/Workspaces.php) by scripts/generate-server-sdks.sh.
 *
 * A platform operates every organizer workspace it administers with one workspace admin key:
 *
 *   $http = Retry::client();
 *   $org  = Workspaces::forWorkspace($http, 'org-1042');      // every call sends X-Workspace-Key: org-1042
 *   (new \SeatsChart\Client\Api\EmbedApi($org, $config))->postApiEmbedTokens(...);
 *   $workspaces = new Workspaces(new \SeatsChart\Client\Api\WorkspaceApi($http, $config));
 *   $created = $workspaces->create(['displayName' => 'Teatro Aurora', 'externalId' => 'org-1042',
 *       'templateWorkspaceId' => 'org-template', 'issueKey' => ['name' => 'Server key']], 'provision-org-1042');
 *   foreach ($workspaces->listAllOverview(['created_by_api' => true]) as $row) { echo $row->getExternalId(); }
 *
 * Bodies are the generated request models or arrays with the API's JSON field names. Every $workspaceId argument also
 * takes the external id you gave the workspace.
 */

namespace SeatsChart\Client\Runtime;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use SeatsChart\Client\Api\WorkspaceApi;
use SeatsChart\Client\ObjectSerializer;

final class Workspaces
{
    /** Header naming the workspace a workspace admin key acts in (its id or external id). */
    public const HEADER = 'X-Workspace-Key';

    /** @var WorkspaceApi|object */ private $api;
    /** @var WorkspaceKeys */ private $keys;
    /** @var WorkspaceMembers */ private $members;
    /** @var WorkspaceInvitations */ private $invitations;

    /** @param WorkspaceApi|object $api the generated WorkspaceApi (any object with its methods) */
    public function __construct($api)
    {
        $this->api = $api;
        $this->keys = new WorkspaceKeys($api);
        $this->members = new WorkspaceMembers($api);
        $this->invitations = new WorkspaceInvitations($api);
    }

    /**
     * A Guzzle client like $client whose every request carries X-Workspace-Key and acts exactly as that workspace's own
     * full-access key would (its rate limits, usage and audit trail). It keeps $client's handler stack (retries,
     * timeouts) and options; $client is unchanged. Ordinary keys get 403 ERR_WORKSPACE_HEADER_NOT_ALLOWED; a workspace
     * of another account answers 404.
     */
    public static function forWorkspace(ClientInterface $client, string $idOrExternalId): Client
    {
        $workspace = trim($idOrExternalId);
        if ($workspace === '') {
            throw new \InvalidArgumentException('forWorkspace needs a workspace id or external id');
        }
        $config = $client instanceof Client ? $client->getConfig() : [];
        $config['headers'] = array_merge(is_array($config['headers'] ?? null) ? $config['headers'] : [], [self::HEADER => $workspace]);
        return new Client($config);
    }

    public function keys(): WorkspaceKeys
    {
        return $this->keys;
    }

    public function members(): WorkspaceMembers
    {
        return $this->members;
    }

    public function invitations(): WorkspaceInvitations
    {
        return $this->invitations;
    }

    /**
     * POST /api/workspaces: displayName and, for an organizer, externalId, templateWorkspaceId and issueKey. Always sent
     * with an Idempotency-Key (yours, or a fresh one the retries reuse): a replay returns the same workspace with
     * idempotentReplay true and every secret null.
     *
     * @param array|object $body
     */
    public function create($body, ?string $idempotencyKey = null)
    {
        $key = $idempotencyKey === null || trim($idempotencyKey) === '' ? Retry::newIdempotencyKey() : $idempotencyKey;
        return $this->api->postApiWorkspaces(self::model('PostApiWorkspacesRequest', $body), $key);
    }

    public function get(string $workspaceId)
    {
        return $this->api->getApiWorkspacesByWorkspaceId($workspaceId);
    }

    /** The workspace with this external id among the workspaces you belong to (404 otherwise). */
    public function getByExternalId(string $externalId)
    {
        return $this->api->getApiWorkspacesByExternalIdByExternalId($externalId);
    }

    /**
     * Consolidated overview per workspace and in total (one page). Filters: external_id, status, created_by_api,
     * created_from, created_to, month, limit, cursor.
     */
    public function overview(array $query = [])
    {
        return $this->api->getApiWorkspacesOverview($query['external_id'] ?? null, $query['status'] ?? null,
            $query['created_by_api'] ?? null, $query['created_from'] ?? null, $query['created_to'] ?? null,
            $query['month'] ?? null, $query['limit'] ?? null, $query['cursor'] ?? null);
    }

    /** Every overview item matching the filters, page after page (walks nextCursor). */
    public function listAllOverview(array $query = []): \Generator
    {
        unset($query['cursor']);
        $cursor = null;
        do {
            $page = $this->overview($cursor === null ? $query : $query + ['cursor' => $cursor]);
            foreach (self::field($page, 'items') ?? [] as $item) {
                yield $item;
            }
            $next = self::field($page, 'nextCursor');
            $cursor = $next === null || $next === '' ? null : $next;
        } while ($cursor !== null);
    }

    /**
     * An array body (JSON field names) becomes the generated model $name; a model passes through.
     *
     * @param array|object $body
     * @return object
     */
    public static function model(string $name, $body)
    {
        if (!is_array($body)) {
            return $body;
        }
        return ObjectSerializer::deserialize(json_decode(json_encode($body)), '\\SeatsChart\\Client\\Model\\' . $name);
    }

    /** Reads a field (JSON name) of a generated model (getter) or an array. */
    public static function field($value, string $name)
    {
        if (is_array($value)) {
            return $value[$name] ?? null;
        }
        $getter = 'get' . ucfirst($name);
        return is_object($value) && method_exists($value, $getter) ? $value->$getter() : null;
    }
}

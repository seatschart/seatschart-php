<?php
/**
 * WorkspaceKeys: part of the organizer workspace helpers (Workspaces.php).
 * Copied into the generated package (lib/Runtime/WorkspaceKeys.php) by scripts/generate-server-sdks.sh.
 */

namespace SeatsChart\Client\Runtime;

use SeatsChart\Client\Api\WorkspaceApi;

/** API keys of a workspace you administer (workspace admin keys are read only here). */
final class WorkspaceKeys
{
    /** @var WorkspaceApi|object */ private $api;

    public function __construct($api)
    {
        $this->api = $api;
    }

    /** Live keys (prefix only). */
    public function list(string $workspaceId)
    {
        return $this->api->getApiWorkspacesByWorkspaceIdKeys($workspaceId);
    }

    /** New ordinary key (full access by default, or scopes); its secret is returned once. */
    public function create(string $workspaceId, $body)
    {
        return $this->api->postApiWorkspacesByWorkspaceIdKeys($workspaceId, Workspaces::model('PostApiWorkspacesByWorkspaceIdKeysRequest', $body));
    }

    /** Renames or rescopes a key (next request). */
    public function update(string $workspaceId, string $keyId, $body)
    {
        return $this->api->patchApiWorkspacesByWorkspaceIdKeysByKeyId($workspaceId, $keyId,
            Workspaces::model('PatchApiWorkspacesByWorkspaceIdKeysByKeyIdRequest', $body));
    }

    /** New secret for the same key (returned once); the old one stops at once. */
    public function rotate(string $workspaceId, string $keyId)
    {
        return $this->api->postApiWorkspacesByWorkspaceIdKeysByKeyIdActionsRotate($workspaceId, $keyId);
    }

    public function revoke(string $workspaceId, string $keyId)
    {
        return $this->api->deleteApiWorkspacesByWorkspaceIdKeysByKeyId($workspaceId, $keyId);
    }
}

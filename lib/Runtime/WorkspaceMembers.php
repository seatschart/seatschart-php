<?php
/**
 * WorkspaceMembers: part of the organizer workspace helpers (Workspaces.php).
 * Copied into the generated package (lib/Runtime/WorkspaceMembers.php) by scripts/generate-server-sdks.sh.
 */

namespace SeatsChart\Client\Runtime;

use SeatsChart\Client\Api\WorkspaceApi;

/** Dashboard members of a workspace you administer. */
final class WorkspaceMembers
{
    /** @var WorkspaceApi|object */ private $api;

    public function __construct($api)
    {
        $this->api = $api;
    }

    public function list(string $workspaceId)
    {
        return $this->api->getApiWorkspacesByWorkspaceIdMembers($workspaceId);
    }

    /** Removes a member (not the last admin, not yourself). */
    public function remove(string $workspaceId, string $userId)
    {
        return $this->api->deleteApiWorkspacesByWorkspaceIdMembersByUserId($workspaceId, $userId);
    }
}

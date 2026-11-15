<?php
/**
 * WorkspaceInvitations: part of the organizer workspace helpers (Workspaces.php).
 * Copied into the generated package (lib/Runtime/WorkspaceInvitations.php) by scripts/generate-server-sdks.sh.
 */

namespace SeatsChart\Client\Runtime;

use SeatsChart\Client\Api\WorkspaceApi;

/** Invitations of an organizer's team to the dashboard of its workspace. */
final class WorkspaceInvitations
{
    /** @var WorkspaceApi|object */ private $api;

    public function __construct($api)
    {
        $this->api = $api;
    }

    public function list(string $workspaceId)
    {
        return $this->api->getApiWorkspacesByWorkspaceIdInvitations($workspaceId);
    }

    /** Invites ['email' => …, 'role' => 'admin'|'map_editor'|'viewer']; inviteToken is returned once. */
    public function create(string $workspaceId, $body)
    {
        return $this->api->postApiWorkspacesByWorkspaceIdInvitations($workspaceId,
            Workspaces::model('PostApiWorkspacesByWorkspaceIdInvitationsRequest', $body));
    }

    public function revoke(string $workspaceId, string $invitationId)
    {
        return $this->api->deleteApiWorkspacesByWorkspaceIdInvitationsByInvitationId($workspaceId, $invitationId);
    }
}

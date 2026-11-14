# # PostApiWorkspacesByWorkspaceIdActionsDelete200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**workspace_id** | **string** |  |
**status** | **string** |  |
**deleted_at** | **\DateTime** |  |
**switch_to** | **string** | Set when the deleted workspace was the one of the calling session: the workspace to switch to (POST /auth/switch-workspace). It is also your default workspace when the deleted one was. |
**deleted_sandbox_ids** | **string[]** | Sandboxes of the workspace, soft-deleted with it. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # GetApiWorkspaces200ResponseItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**workspace_id** | **string** |  |
**display_name** | **string** |  |
**role** | **string** |  |
**plan_id** | **string** |  |
**subscription_status** | **string** |  |
**status** | **string** |  |
**deactivated_at** | **\DateTime** |  |
**is_current** | **bool** | True for the workspace of the calling session (or of the calling workspace admin key). |
**is_default** | **bool** | The default workspace of the user (for a workspace admin key: of the admin it is bound to): dashboard sign-in opens it. See POST /workspaces/{workspaceId}/actions/set-default. |
**is_test** | **bool** | Test (sandbox) workspace: not billed or metered, &#x60;sk_test_&#x60; keys, TEST badge for buyers. |
**parent_workspace_id** | **string** | Production workspace a test workspace was created from. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

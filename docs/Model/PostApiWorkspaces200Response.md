# # PostApiWorkspaces200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id** | **string** | Id of the new workspace (also its &#x60;workspaceId&#x60;). |
**display_name** | **string** |  |
**public_key** | **string** | Public renderer key (&#x60;pub_…&#x60;): not a secret, not a credential. |
**role** | **string** |  |
**is_test** | **bool** |  |
**kind** | **string** |  |
**parent_workspace_id** | **string** |  |
**copied_charts** | **int** |  |
**external_id** | **string** |  |
**created_by_api** | **bool** | Provisioned by a workspace admin key: billed to the platform account, no upgrade prompts for the organizer. |
**template_workspace_id** | **string** |  |
**template** | [**\SeatsChart\Client\Model\PostApiWorkspaces200ResponseTemplate**](PostApiWorkspaces200ResponseTemplate.md) |  |
**api_key** | [**\SeatsChart\Client\Model\PostApiWorkspaces200ResponseApiKey**](PostApiWorkspaces200ResponseApiKey.md) |  |
**idempotent_replay** | **bool** | True when this is the stored result of an earlier call with the same Idempotency-Key (secrets are null). |
**warning** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

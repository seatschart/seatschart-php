# # GetApiSandboxes200ResponseItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sandbox_id** | **string** | Workspace id of the sandbox (&#x60;ws_…&#x60;): switch to it, or call it with its own &#x60;sk_test_&#x60; key. |
**display_name** | **string** |  |
**kind** | **string** |  |
**parent_workspace_id** | **string** | The production workspace the sandbox belongs to. |
**public_key** | **string** | Public renderer key (&#x60;pub_…&#x60;) of the sandbox; not a secret. |
**status** | **string** |  |
**created_at** | **\DateTime** |  |
**last_reset_at** | **\DateTime** |  |
**usage** | [**\SeatsChart\Client\Model\GetApiSandboxes200ResponseItemsInnerUsage**](GetApiSandboxes200ResponseItemsInnerUsage.md) |  |
**rate_limits** | [**\SeatsChart\Client\Model\GetApiSandboxes200ResponseItemsInnerRateLimits**](GetApiSandboxes200ResponseItemsInnerRateLimits.md) |  |
**role** | **string** | Role of the calling dashboard user in the sandbox (null for API keys or non-members). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

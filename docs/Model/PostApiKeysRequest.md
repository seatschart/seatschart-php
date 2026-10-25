# # PostApiKeysRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**scopes** | **string[]** | Granted scopes: &#x60;read&#x60;, &#x60;holds&#x60;, &#x60;bookings&#x60;, &#x60;inventory_admin&#x60;, &#x60;charts_write&#x60;, &#x60;events_write&#x60;, &#x60;reports&#x60;, &#x60;webhooks&#x60;. Granting every scope is full access. | [optional]
**workspace_admin** | **bool** | Workspace admin key: it may also list, activate and deactivate every workspace **you** administer (&#x60;/api/workspaces&#x60;). Bound to the calling admin and re-checked on each call; requires the &#x60;admin&#x60; role in this workspace. &#x60;false&#x60; removes the capability. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

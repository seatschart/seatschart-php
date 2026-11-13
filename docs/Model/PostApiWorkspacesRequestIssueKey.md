# # PostApiWorkspacesRequestIssueKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Key name (default \&quot;Organizer key\&quot;). | [optional]
**full_access** | **bool** | Every scope (default when &#x60;scopes&#x60; is absent). Never a workspace admin key. | [optional]
**scopes** | **string[]** | Granted scopes when not full access: &#x60;read&#x60;, &#x60;holds&#x60;, &#x60;bookings&#x60;, &#x60;inventory_admin&#x60;, &#x60;charts_write&#x60;, &#x60;events_write&#x60;, &#x60;reports&#x60;, &#x60;webhooks&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

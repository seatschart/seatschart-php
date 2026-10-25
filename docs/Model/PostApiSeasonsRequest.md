# # PostApiSeasonsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**key** | **string** | Partner key: unique per workspace, 1–100 URL-safe characters (letters, digits, &#x60;_ . ~ -&#x60;, starting with a letter or digit), never UUID-shaped. Every season route accepts the key in place of the id (path, body and query &#x60;seasonId&#x60;), like event and chart keys. | [optional]
**chart_id** | **string** |  | [optional]
**source_event_id** | **string** |  | [optional]
**event_keys** | **string[]** | Create one season event per key (requires chartId). | [optional]
**number_of_events** | **int** | Create this many season events (requires chartId). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

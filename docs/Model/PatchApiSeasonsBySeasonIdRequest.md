# # PatchApiSeasonsBySeasonIdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**key** | **string** | Set or rename the key; &#x60;null&#x60; or &#x60;\&quot;\&quot;&#x60; clears it. 409 &#x60;season_key_taken&#x60;. Partner key: unique per workspace, 1–100 URL-safe characters (letters, digits, &#x60;_ . ~ -&#x60;, starting with a letter or digit), never UUID-shaped. Every season route accepts the key in place of the id (path, body and query &#x60;seasonId&#x60;), like event and chart keys. | [optional]
**source_event_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

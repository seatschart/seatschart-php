# # PostApiEmbedTokensRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purpose** | **string** |  |
**chart_id** | **string** |  | [optional]
**event_id** | **string** |  | [optional]
**mode** | **string** | Designer tokens only, enforced by the API (default &#x60;normal&#x60;, full edit). &#x60;safe&#x60;: saves, publishes and version restores that would delete or relabel published objects, change the booking type of a published table or area, or change the capacity of a published area are refused with 403 &#x60;forbidden&#x60; / &#x60;ERR_DESIGNER_SAFE_MODE&#x60; (&#x60;reason&#x60;, &#x60;objectIds&#x60;). &#x60;readOnly&#x60;: every write is refused with 403 &#x60;forbidden&#x60; / &#x60;ERR_DESIGNER_READ_ONLY&#x60;. | [optional]
**safe_mode_options** | [**\SeatsChart\Client\Model\PostApiEmbedTokensRequestSafeModeOptions**](PostApiEmbedTokensRequestSafeModeOptions.md) |  | [optional]
**ttl_seconds** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

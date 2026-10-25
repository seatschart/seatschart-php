# # PostApiChartsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**key** | **string** | Partner key, unique in the workspace (409 &#x60;chart_key_taken&#x60;), accepted wherever a chart id is. Never UUID-shaped. | [optional]
**venue_type** | **string** | Designer template: &#x60;simple&#x60; (rows), &#x60;sections&#x60; (sections and floors) or &#x60;zones&#x60;. Default &#x60;simple&#x60;. | [optional]
**categories** | [**\SeatsChart\Client\Model\PostApiChartsRequestCategoriesInner[]**](PostApiChartsRequestCategoriesInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

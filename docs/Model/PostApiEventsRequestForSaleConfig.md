# # PostApiEventsRequestForSaleConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**for_sale** | **bool** | &#x60;false&#x60;: the listed objects/categories are not for sale and &#x60;areaPlaces&#x60; are withheld places. &#x60;true&#x60;: only the listed objects/categories are for sale and &#x60;areaPlaces&#x60; are the places left for sale. |
**objects** | **string[]** | Seat labels or UUIDs and GA area names or UUIDs of the new event. | [optional]
**categories** | **string[]** |  | [optional]
**area_places** | **array<string,int>** | GA area name or UUID → number of places. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

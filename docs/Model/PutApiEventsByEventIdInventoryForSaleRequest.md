# # PutApiEventsByEventIdInventoryForSaleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**for_sale** | **bool** | &#x60;false&#x60;: the listed objects are not for sale, everything else is. &#x60;true&#x60;: only the listed objects are for sale. |
**seat_ids** | **string[]** |  | [optional]
**ga_area_ids** | **string[]** |  | [optional]
**categories** | **string[]** |  | [optional]
**area_places** | **array<string,int>** | GA area id → places: withheld (&#x60;forSale: false&#x60;) or the only places on sale (&#x60;forSale: true&#x60;). | [optional]
**cascade_season** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

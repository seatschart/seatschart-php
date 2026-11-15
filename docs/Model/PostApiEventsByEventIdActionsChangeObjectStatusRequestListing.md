# # PostApiEventsByEventIdActionsChangeObjectStatusRequestListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Listing key (default: &#x60;resaleListingId&#x60;, else a generated UUID). | [optional]
**type** | **string** | Listing type key; omitted &#x3D; untyped (resale). | [optional]
**sell_as_whole** | **bool** | Default true: the objects are held and sold together. | [optional]
**price_cents** | **int** | Price per object (default: &#x60;resalePriceCents&#x60;). | [optional]
**total_price_cents** | **int** |  | [optional]
**partner_metadata** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

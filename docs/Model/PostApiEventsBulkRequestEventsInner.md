# # PostApiEventsBulkRequestEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**date** | **string** |  | [optional]
**key** | **string** | Optional partner key, unique per workspace, accepted wherever an event id is (URL-safe, not UUID-shaped). | [optional]
**table_booking_config** | [**\SeatsChart\Client\Model\PostApiEventsRequestTableBookingConfig**](PostApiEventsRequestTableBookingConfig.md) |  | [optional]
**category_overrides** | [**array<string,\SeatsChart\Client\Model\PostApiEventsRequestCategoryOverridesValue>**](PostApiEventsRequestCategoryOverridesValue.md) | Per-event category overrides (same semantics as PATCH /events/{eventId}). | [optional]
**channels** | [**\SeatsChart\Client\Model\PostApiEventsRequestChannelsInner[]**](PostApiEventsRequestChannelsInner.md) | Inventory channels created with the event; &#x60;channelKey&#x60; secrets are returned once. | [optional]
**for_sale_config** | [**\SeatsChart\Client\Model\PostApiEventsRequestForSaleConfig**](PostApiEventsRequestForSaleConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

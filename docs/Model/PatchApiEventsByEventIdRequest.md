# # PatchApiEventsByEventIdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_in_the_past** | **bool** |  | [optional]
**name** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**date** | **string** |  | [optional]
**table_booking_config** | [**\SeatsChart\Client\Model\PatchApiEventsByEventIdRequestTableBookingConfig**](PatchApiEventsByEventIdRequestTableBookingConfig.md) |  | [optional]
**category_overrides** | [**array<string,\SeatsChart\Client\Model\PostApiEventsRequestCategoryOverridesValue>**](PostApiEventsRequestCategoryOverridesValue.md) |  | [optional]
**for_sale_per_category** | **array<string,bool>** |  | [optional]
**key** | **string** | Set, rename (&#x60;\&quot;new-key\&quot;&#x60;) or clear (&#x60;null&#x60;) the event key. 409 &#x60;event_key_taken&#x60; when another event of the workspace uses it. | [optional]
**chart_id** | **string** | Switch the event to another published chart of the workspace (see description). | [optional]
**categories** | [**\SeatsChart\Client\Model\PostApiEventsRequestCategoriesInner[]**](PostApiEventsRequestCategoriesInner.md) | Event-only categories (replaces the list; null clears). | [optional]
**object_categories** | **array<string,string>** | Object label (seat label or GA area name) → category key (event category key, chart category id or name). Replaces the map; null clears. | [optional]
**withdraw_affected_listings** | **bool** | Chart switch only: withdraw the active listings whose objects have no counterpart in the target chart, in the same transaction (409 &#x60;listing_has_holds&#x60; while any of their objects is held). Without it such a switch is refused with 409 &#x60;listing_objects_removed&#x60; (&#x60;listings&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

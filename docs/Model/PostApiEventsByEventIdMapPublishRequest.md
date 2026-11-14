# # PostApiEventsByEventIdMapPublishRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**withdraw_affected_listings** | **bool** | When the draft removes seats of active listings, withdraw those listings in the publish transaction (refused with 409 &#x60;listing_has_holds&#x60; while any object of them is held). Without it such a publish is refused with 409 &#x60;listing_objects_removed&#x60; (&#x60;listings&#x60;: id, key and removed objects of each affected listing). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

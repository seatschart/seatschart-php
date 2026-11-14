# # PostApiWebhooksRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  |
**is_active** | **bool** |  | [optional]
**event_types** | **string[]** | Subscribed event types: &#x60;[\&quot;*\&quot;]&#x60; (default) for every type, or a list of &#x60;reservations.confirmed&#x60;, &#x60;holds.created&#x60;, &#x60;holds.released&#x60;, &#x60;ga.confirmed&#x60;, &#x60;ga.released&#x60;, &#x60;objects.updated&#x60;, &#x60;season.objects.updated&#x60;, &#x60;hold.expired&#x60;, &#x60;event.created&#x60;, &#x60;event.updated&#x60;, &#x60;event.deleted&#x60;, &#x60;chart.published&#x60;, &#x60;lots.switched&#x60;, &#x60;chart.created&#x60;, &#x60;event.for_sale_changed&#x60;, &#x60;event.channels_updated&#x60;, &#x60;event.categories_updated&#x60;, &#x60;event.table_booking_changed&#x60;, &#x60;event.listings_updated&#x60;. Seats.io-named aliases (&#x60;event.for.sale.config.updated&#x60;, &#x60;event.channels.updated&#x60;, &#x60;event.categories.updated&#x60;, &#x60;event.table.booking.config.updated&#x60;) are opt-in: listed explicitly, the endpoint also receives the aliased event under that name (same payload, &#x60;type&#x60; &#x3D; the alias); &#x60;[\&quot;*\&quot;]&#x60; never includes them. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

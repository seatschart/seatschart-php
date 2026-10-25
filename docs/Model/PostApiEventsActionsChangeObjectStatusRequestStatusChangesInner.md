# # PostApiEventsActionsChangeObjectStatusRequestStatusChangesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Event UUID (exactly one of eventId / eventKey). | [optional]
**event_key** | **string** | Event key (your event id; exactly one of eventId / eventKey). | [optional]
**objects** | [**\SeatsChart\Client\Model\PostApiEventsActionsChangeObjectStatusRequestStatusChangesInnerObjectsInner[]**](PostApiEventsActionsChangeObjectStatusRequestStatusChangesInnerObjectsInner.md) |  |
**status** | **string** | &#x60;booked&#x60;, &#x60;free&#x60;, &#x60;resale&#x60;, &#x60;retired&#x60; or a custom status (required unless type is RELEASE). | [optional]
**type** | **string** | &#x60;RELEASE&#x60; frees the objects (same as status &#x60;free&#x60;). | [optional]
**order_id** | **string** | Existing booking order to act on (UUID). | [optional]
**hold_token** | **string** | Books seats held by this buyer hold token (status &#x60;booked&#x60;). | [optional]
**keep_extra_data** | **bool** |  | [optional]
**resale_price_cents** | **int** |  | [optional]
**resale_listing_id** | **string** | Resale listing: stored on extraData.resaleListingId of every object; the renderer can select a listing as one group (resaleListings.selectAsGroup). | [optional]
**allowed_previous_statuses** | **string[]** |  | [optional]
**rejected_previous_statuses** | **string[]** |  | [optional]
**channel_keys** | **string[]** |  | [optional]
**ignore_channels** | **bool** |  | [optional]
**ticket_buyer_id** | **string** | Optional opaque ticket buyer id from your system (≤ 256 printable characters). Persisted on holds, orders, reservations, GA receipts, object statuses and status history; never interpreted as an internal user id. Query with GET /events/{eventId}/objects?ticketBuyerId&#x3D;…. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

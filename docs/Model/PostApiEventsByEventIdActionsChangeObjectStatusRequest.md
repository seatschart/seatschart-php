# # PostApiEventsByEventIdActionsChangeObjectStatusRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**objects** | [**\SeatsChart\Client\Model\PostApiEventsActionsChangeObjectStatusRequestStatusChangesInnerObjectsInner[]**](PostApiEventsActionsChangeObjectStatusRequestStatusChangesInnerObjectsInner.md) |  |
**status** | **string** |  | [optional]
**type** | **string** |  | [optional]
**order_id** | **string** |  | [optional]
**keep_extra_data** | **bool** |  | [optional]
**season_id** | **string** |  | [optional]
**resale_price_cents** | **int** |  | [optional]
**resale_listing_id** | **string** | Resale listing: stored on extraData.resaleListingId of every object; the renderer can select a listing as one group (resaleListings.selectAsGroup). | [optional]
**hold_token** | **string** |  | [optional]
**allowed_previous_statuses** | **string[]** |  | [optional]
**rejected_previous_statuses** | **string[]** |  | [optional]
**channel_keys** | **string[]** |  | [optional]
**ignore_channels** | **bool** |  | [optional]
**events** | **string[]** |  | [optional]
**atomic** | **bool** | With &#x60;events&#x60;: all-or-nothing across the events (one SQL transaction). Default false (each event on its own). | [optional]
**user_id** | **string** | GA holds only: customer identity of the hold (POST /ga/confirm must send the same userId). | [optional]
**hold_expires_in_minutes** | **int** | GA holds only: hold lifetime (default: seat hold TTL). | [optional]
**ticket_buyer_id** | **string** | Optional opaque ticket buyer id from your system (≤ 256 printable characters). Persisted on holds, orders, reservations, GA receipts, object statuses and status history; never interpreted as an internal user id. Query with GET /events/{eventId}/objects?ticketBuyerId&#x3D;…. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

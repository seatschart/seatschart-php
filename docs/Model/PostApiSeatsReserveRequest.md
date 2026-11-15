# # PostApiSeatsReserveRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** |  |
**seat_ids** | **string[]** |  |
**user_id** | **string** |  |
**channel** | **string** |  | [optional]
**season_id** | **string** |  | [optional]
**event_ids** | **string[]** |  | [optional]
**hold_token** | **string** |  | [optional]
**ticket_buyer_id** | **string** | Optional opaque ticket buyer id from your system (≤ 256 printable characters). Persisted on holds, orders, reservations, GA receipts, object statuses and status history; never interpreted as an internal user id. Query with GET /events/{eventId}/objects?ticketBuyerId&#x3D;…. | [optional]
**seat_ticket_types** | **array<string,string>** | Optional ticket type per seat (e.g. meia / inteira). Counted atomically against the event quotas when the hold is placed; quote and confirm may still change it within the quota. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

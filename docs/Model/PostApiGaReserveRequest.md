# # PostApiGaReserveRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** |  |
**area_id** | **string** |  |
**quantity** | **int** |  |
**user_id** | **string** |  |
**channel** | **string** |  | [optional]
**ticket_buyer_id** | **string** | Optional opaque ticket buyer id from your system (≤ 256 printable characters). Persisted on holds, orders, reservations, GA receipts, object statuses and status history; never interpreted as an internal user id. Query with GET /events/{eventId}/objects?ticketBuyerId&#x3D;…. | [optional]
**ticket_type_id** | **string** | Optional ticket type of every place (e.g. meia), counted against the event quotas at hold time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

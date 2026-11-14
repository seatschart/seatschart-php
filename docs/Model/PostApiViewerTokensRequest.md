# # PostApiViewerTokensRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ttl_seconds** | **int** | Token lifetime in seconds (default 900). | [optional]
**ticket_buyer_id** | **string** | Optional opaque ticket buyer id from your system (≤ 256 printable characters). Persisted on holds, orders, reservations, GA receipts, object statuses and status history; never interpreted as an internal user id. Query with GET /events/{eventId}/objects?ticketBuyerId&#x3D;…. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

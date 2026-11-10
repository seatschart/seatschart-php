# # PostApiSeatsConfirmRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scope** | **string** |  | [optional]
**external_order_id** | **string** |  | [optional]
**external_payment_id** | **string** |  | [optional]
**quote_id** | **string** |  | [optional]
**paid_amount_cents** | **int** |  | [optional]
**paid_currency** | **string** |  | [optional]
**event_id** | **string** |  |
**seat_ids** | **string[]** |  |
**user_id** | **string** |  |
**seat_ticket_types** | **array<string,string>** |  | [optional]
**hold_token** | **string** |  | [optional]
**channel** | **string** |  | [optional]
**ticket_buyer_id** | **string** | Optional opaque ticket buyer id from your system (≤ 256 printable characters). Persisted on holds, orders, reservations, GA receipts, object statuses and status history; never interpreted as an internal user id. Query with GET /events/{eventId}/objects?ticketBuyerId&#x3D;…. | [optional]
**seat_prices** | **array<string,int>** | Partner and synced-catalog pricing: amount charged per seat in cents (stored on the order items for reports; validated against the synced price table). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

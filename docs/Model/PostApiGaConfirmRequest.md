# # PostApiGaConfirmRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** |  |
**area_id** | **string** |  |
**quantity** | **int** |  |
**user_id** | **string** |  |
**hold_token** | **string** |  | [optional]
**ticket_type_id** | **string** |  | [optional]
**quote_id** | **string** |  | [optional]
**external_payment_id** | **string** |  | [optional]
**paid_amount_cents** | **int** |  | [optional]
**paid_currency** | **string** |  | [optional]
**channel** | **string** |  | [optional]
**ticket_buyer_id** | **string** | Optional opaque ticket buyer id from your system (≤ 256 printable characters). Persisted on holds, orders, reservations, GA receipts, object statuses and status history; never interpreted as an internal user id. Query with GET /events/{eventId}/objects?ticketBuyerId&#x3D;…. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

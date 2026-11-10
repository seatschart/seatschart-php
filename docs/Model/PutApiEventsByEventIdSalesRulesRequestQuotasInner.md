# # PutApiEventsByEventIdSalesRulesRequestQuotasInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**label** | **string** |  |
**ticket_types** | **string[]** | Ticket type ids counted by this quota (e.g. [\&quot;meia\&quot;]). |
**max_share** | **float** | Share of the event capacity (0.4 &#x3D; 40%, Lei 12.933). | [optional]
**max_count** | **int** | Absolute ticket count; with maxShare the lower limit applies. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # PostApiSeatsBestAvailableRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** |  |
**quantity** | **int** |  | [optional]
**category** | **string** |  | [optional]
**categories** | **string[]** |  | [optional]
**ticket_types** | **array<string,int>** |  | [optional]
**section_id** | **string** |  | [optional]
**sections** | **string[]** | Layout section ids or names; the candidate pool is the union of their seats (XOR with sectionId). | [optional]
**channel_keys** | **string[]** | API keys only: channel secret keys or channel ids whose seats may be picked (public seats always can). | [optional]
**ignore_channels** | **bool** | API keys only: pick from every channel. | [optional]
**order_id** | **string** | Requires hold: partner order reference stored on the held seats (extraData.orderId) and echoed back. | [optional]
**zone** | **string** | Layout zone id or name. | [optional]
**channel** | **string** |  | [optional]
**prefer_adjacent** | **bool** |  | [optional]
**try_to_prevent_orphan_seats** | **bool** |  | [optional]
**accessible_seats** | **int** |  | [optional]
**hold** | **bool** |  | [optional]
**hold_token** | **string** |  | [optional]
**extra_data** | **array<string,mixed>** |  | [optional]
**user_id** | **string** |  | [optional]
**status** | **string** | &#x60;booked&#x60;: book the best window directly (API keys with the bookings scope / dashboard); &#x60;reservedByToken&#x60;: same as hold: true. | [optional]
**keep_extra_data** | **bool** | Keep the seats&#39; stored extraData; extraData / orderId are merged on top. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

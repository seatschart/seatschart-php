# # PatchApiSeasonsBySeasonIdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**key** | **string** | Set or rename the key; &#x60;null&#x60; or &#x60;\&quot;\&quot;&#x60; clears it. 409 &#x60;season_key_taken&#x60;. Partner key: unique per workspace, 1–100 URL-safe characters (letters, digits, &#x60;_ . ~ -&#x60;, starting with a letter or digit), never UUID-shaped. Every season route accepts the key in place of the id (path, body and query &#x60;seasonId&#x60;), like event and chart keys. | [optional]
**source_event_id** | **string** |  | [optional]
**bookings_propagated** | **bool** | seats.io seasons whose bookings do not propagate. &#x60;true&#x60; (default): a season booking (&#x60;seasonId&#x60; on hold / reserve, confirm and change-object-status) locks the object in every live member event. &#x60;false&#x60;: the season source event is the season&#39;s own inventory — season bookings lock the object there only and the other member events keep selling it on their own. For-sale configuration, channels and category sync are not affected. Season reports default their &#x60;seasonBookingsPropagated&#x60; parameter to this value. Changing it never moves existing bookings; it decides where later season bookings go. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

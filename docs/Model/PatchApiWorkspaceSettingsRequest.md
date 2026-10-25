# # PatchApiWorkspaceSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hold_period_minutes** | **int** | Minutes (1–120); &#x60;null&#x60; &#x3D; use the default. | [optional]
**max_seats_per_hold_token** | **int** | Seats per hold token (1–64); &#x60;null&#x60; &#x3D; use the default. | [optional]
**ticket_buyer_validation** | **bool** | &#x60;null&#x60; &#x3D; use the default (off). | [optional]
**ga_places_to_channels** | **bool** | &#x60;null&#x60; &#x3D; use the default (on). | [optional]
**new_events_not_for_sale** | **bool** | New events start not for sale; &#x60;null&#x60; &#x3D; use the default (off). | [optional]
**require_two_factor** | **bool** | Members must sign in with two-factor authentication (enforced at login with a guided enrolment). Dashboard session only; the caller must have 2FA enabled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

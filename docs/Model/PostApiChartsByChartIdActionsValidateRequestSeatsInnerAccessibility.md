# # PostApiChartsByChartIdActionsValidateRequestSeatsInnerAccessibility

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wheelchair** | **bool** | Wheelchair space. | [optional]
**companion** | **bool** | Companion seat next to a wheelchair space. | [optional]
**restricted_view** | **bool** | Partially restricted view. | [optional]
**obstructed_view** | **bool** | View obstructed (e.g. by a pillar). | [optional]
**view_note** | **string** | Short buyer-facing note about the view. | [optional]
**amenities** | **int** | Compact bitmask of the other accessibility and amenity flags: 16 wheelchair space without a seat in place (requires wheelchair), 32 semi-ambulatory, 64 plus-size, 128 hearing impaired (CART services), 256 hearing impaired (sign language interpretation), 512 not suitable for vertigo sufferers, 1024 limited legroom, 2048 lift-up armrests. Bits 1/2/4/8 mirror wheelchair / companion / restrictedView / obstructedView, which are always stored and returned as booleans. | [optional]
**seat_type** | **string** | Seat display type. \&quot;chair\&quot; is the default and is not stored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

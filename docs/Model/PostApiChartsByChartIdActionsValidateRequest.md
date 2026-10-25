# # PostApiChartsByChartIdActionsValidateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seats** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequestSeatsInner[]**](PostApiChartsByChartIdActionsValidateRequestSeatsInner.md) |  |
**shapes** | **mixed[]** |  | [optional]
**background** | **string** |  | [optional]
**reference** | **string** |  | [optional]
**base_draft_updated_at** | **string** | Draft version this save is based on (&#x60;draftUpdatedAt&#x60; from the last load or save; null for a never-saved draft). When given and the stored draft changed meanwhile, the save is refused with 409 &#x60;draft_conflict&#x60; (designer autosave). Omit it for last-writer-wins. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

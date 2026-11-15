# # PostApiChartsByChartIdMapPublish422ResponseIssuesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Chart validation rule id. |
**severity** | **string** |  |
**object_ids** | **string[]** | Seat, GA area, section, zone or floor ids, depending on the code. |
**message** | **string** |  |
**count** | **int** |  |
**label** | **string** |  | [optional]
**section_id** | **string** |  | [optional]
**table_ids** | **string[]** |  | [optional]
**scope** | **string** | Section or floor name the offenders belong to (empty &#x3D; whole map). | [optional]
**floor_id** | **string** |  | [optional]
**sections** | **int** | &#x60;duplicate_label&#x60; across sections: how many sections sharing the label &#x60;sectionId&#x60; (or unlabeled sections) hold the object. | [optional]
**bytes** | **int** | &#x60;images_size&#x60;: known total download size of the chart images, in bytes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

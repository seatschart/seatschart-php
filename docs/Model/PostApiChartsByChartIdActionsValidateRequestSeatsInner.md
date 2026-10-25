# # PostApiChartsByChartIdActionsValidateRequestSeatsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**label** | **string** |  |
**pos_x** | **float** |  |
**pos_y** | **float** |  |
**category** | **string** |  | [optional]
**price** | **float** |  | [optional]
**row_label** | **string** | Row label (structural; e.g. \&quot;A\&quot;). | [optional]
**section_id** | **string** | Section scope (structural). Seat labels must be unique within a section. | [optional]
**displayed_label** | **string** | Short label printed on the seat (e.g. \&quot;12\&quot;). &#x60;label&#x60; stays the API identity. | [optional]
**accessibility** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequestSeatsInnerAccessibility**](PostApiChartsByChartIdActionsValidateRequestSeatsInnerAccessibility.md) |  | [optional]
**entrance** | **string** | Entrance shown to buyers (e.g. \&quot;Gate 3\&quot;). Rows (layoutMeta.rowSettings), tables, sections and GA areas (an \&quot;entrance\&quot; field on their layout shape) can set one too; the most specific wins: seat, row, table, section. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

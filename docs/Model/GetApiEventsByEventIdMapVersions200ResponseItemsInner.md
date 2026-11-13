# # GetApiEventsByEventIdMapVersions200ResponseItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **int** |  |
**kind** | **string** | &#x60;baseline&#x60; &#x3D; the map that was live before the first recorded publish (cloned from a chart, or published before history). |
**geometry_hash** | **string** | SHA-256 of the canonical snapshot. Equal hashes mean identical published content. |
**published_at** | **\DateTime** |  |
**published_by** | [**\SeatsChart\Client\Model\GetApiChartsByChartIdVersions200ResponseItemsInnerPublishedBy**](GetApiChartsByChartIdVersions200ResponseItemsInnerPublishedBy.md) |  |
**seat_count** | **int** |  |
**ga_area_count** | **int** |  |
**thumbnail_url** | **string** | Relative API path (authenticated) of the placeholder preview of this version. |
**is_current** | **bool** | True for the newest version (the one currently published). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # GetApiChartsByChartIdVersions200ResponseItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **int** |  |
**kind** | **string** | &#x60;baseline&#x60; &#x3D; the map that was live before version history existed (recorded on the first publish after upgrade). |
**geometry_hash** | **string** | SHA-256 of the canonical snapshot. Equal hashes mean identical published content. |
**published_at** | **\DateTime** |  |
**published_by** | [**\SeatsChart\Client\Model\GetApiChartsByChartIdVersions200ResponseItemsInnerPublishedBy**](GetApiChartsByChartIdVersions200ResponseItemsInnerPublishedBy.md) |  |
**seat_count** | **int** |  |
**ga_area_count** | **int** |  |
**note** | **string** |  |
**has_thumbnail** | **bool** | True when the designer uploaded a rendered thumbnail; otherwise the thumbnail URL serves a placeholder. |
**thumbnail_url** | **string** | Relative API path (authenticated) of the immutable thumbnail for this version. |
**is_current** | **bool** | True for the newest version (the one currently published). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

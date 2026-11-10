# # GetApiMonitoringRequests200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**range** | **string** |  |
**bucket_seconds** | **int** | 60 for 10m/1h, 900 for 24h, 3600 for 7d, 86400 for 30d. |
**from** | **\DateTime** | Window start (first bucket). |
**to** | **\DateTime** | Window end: now for the live window, else the (exclusive) &#x60;before&#x60;. |
**before** | **\DateTime** | Aligned cursor of this window; null for the live window. |
**previous_before** | **\DateTime** | &#x60;before&#x60; of the previous (older) window; null when nothing older is kept. |
**next_before** | **\DateTime** | &#x60;before&#x60; of the next (newer) window; null when the next window is the live one (omit &#x60;before&#x60;) or this is the live window. |
**retention_start** | **\DateTime** | Oldest instant kept at this window size (24 hours of minutes, 31 days of hours and days). |
**plan** | **string** | Plan whose limits apply (a test workspace uses its production workspace plan). |
**is_test** | **bool** |  |
**window_seconds** | **int** | Rate limit window (RATE_LIMIT_TENANT_WINDOW_SEC). |
**lanes** | [**\SeatsChart\Client\Model\GetApiMonitoringRequests200ResponseLanes**](GetApiMonitoringRequests200ResponseLanes.md) |  |
**concurrency** | [**\SeatsChart\Client\Model\GetApiMonitoringRequests200ResponseConcurrency**](GetApiMonitoringRequests200ResponseConcurrency.md) |  |
**points** | [**\SeatsChart\Client\Model\GetApiMonitoringRequests200ResponsePointsInner[]**](GetApiMonitoringRequests200ResponsePointsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

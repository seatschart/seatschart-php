# # GetApiMonitoringRequests200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**range** | **string** |  |
**bucket_seconds** | **int** | 60 for 10m/1h, 900 for 24h, 3600 for 7d. |
**from** | **\DateTime** |  |
**to** | **\DateTime** |  |
**plan** | **string** | Plan whose limits apply (a test workspace uses its production workspace plan). |
**is_test** | **bool** |  |
**window_seconds** | **int** | Rate limit window (RATE_LIMIT_TENANT_WINDOW_SEC). |
**lanes** | [**\SeatsChart\Client\Model\GetApiMonitoringRequests200ResponseLanes**](GetApiMonitoringRequests200ResponseLanes.md) |  |
**concurrency** | [**\SeatsChart\Client\Model\GetApiMonitoringRequests200ResponseConcurrency**](GetApiMonitoringRequests200ResponseConcurrency.md) |  |
**points** | [**\SeatsChart\Client\Model\GetApiMonitoringRequests200ResponsePointsInner[]**](GetApiMonitoringRequests200ResponsePointsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

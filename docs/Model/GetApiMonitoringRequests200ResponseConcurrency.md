# # GetApiMonitoringRequests200ResponseConcurrency

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current** | **int** | Workspace requests in flight now on the API instance that answered (this request excluded). |
**peak_last_hour** | **int** | Highest concurrent requests in any minute of the last hour. |
**peak_last_hour_at** | **\DateTime** | Start of the minute (hour for the day) of the peak. |
**peak_last_day** | **int** | Highest concurrent requests in any hour of the last 24 hours. |
**peak_last_day_at** | **\DateTime** | Start of the minute (hour for the day) of the peak. |
**instances** | **int** | API instances that reported in-flight peaks in the last 24 hours (peaks are summed across them). |
**api_keys** | [**\SeatsChart\Client\Model\GetApiMonitoringRequests200ResponseConcurrencyApiKeysInner[]**](GetApiMonitoringRequests200ResponseConcurrencyApiKeysInner.md) | Per API key, busiest first (keys without traffic in the last 24 hours are omitted). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

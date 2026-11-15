# # GetApiStatus200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**generated_at** | **\DateTime** |  |
**history_days** | **int** | Days in every &#x60;days&#x60; array (90). |
**sample_interval_seconds** | **int** | Sampler interval; null before the first sample. |
**last_sample_at** | **\DateTime** | Time of the latest sample; null when nothing was sampled yet. |
**stale** | **bool** | True when the latest sample is older than three intervals (at least 3 minutes): the sampler is not running and current states are &#x60;unknown&#x60;. |
**overall** | **string** |  |
**components** | [**\SeatsChart\Client\Model\GetApiStatus200ResponseComponentsInner[]**](GetApiStatus200ResponseComponentsInner.md) |  |
**incidents** | [**\SeatsChart\Client\Model\GetApiStatus200ResponseIncidentsInner[]**](GetApiStatus200ResponseIncidentsInner.md) | Newest first, last 90 days, at most 50. |
**maintenance** | [**\SeatsChart\Client\Model\GetApiStatus200ResponseMaintenanceInner[]**](GetApiStatus200ResponseMaintenanceInner.md) | Scheduled and in-progress windows, and those completed in the last 7 days. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # GetApiStatus200ResponseComponentsInnerDaysInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | UTC day (&#x60;YYYY-MM-DD&#x60;). |
**uptime** | **float** | Percent of the sampled minutes that were up (degraded counts as up), rounded down to 2 decimals; null when the day has no sample (\&quot;no data\&quot;, never \&quot;up\&quot;). |
**coverage** | **float** | Share of the day (so far, for today) with a sample: 0–1. Below 1 the sampler was not running part of the day. |
**degraded_minutes** | **int** |  |
**down_minutes** | **int** |  |
**incidents** | **int** | Incidents (automatic and manual) that overlap the day. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

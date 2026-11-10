# # GetApiStatus200ResponseComponentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Component: &#x60;api&#x60; (REST API readiness), &#x60;realtime&#x60; (Pub/Sub fan-out behind the SSE streams), &#x60;queue&#x60; (reservation worker queue), &#x60;database&#x60; (PostgreSQL), &#x60;cache&#x60; (KeyDB / Redis), &#x60;assets&#x60; (map asset CDN), &#x60;dashboard&#x60; (web app and dashboard). |
**status** | **string** | &#x60;not_monitored&#x60; when the component has no probe configured on this deployment. |
**latency_ms** | **float** | Latest probe round trip in ms (for &#x60;queue&#x60;: age of the oldest unprocessed job). |
**uptime** | **float** | Uptime over the sampled minutes of the 90 days; null without samples. |
**days** | [**\SeatsChart\Client\Model\GetApiStatus200ResponseComponentsInnerDaysInner[]**](GetApiStatus200ResponseComponentsInnerDaysInner.md) | Oldest first; the last entry is today (UTC). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

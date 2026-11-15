# # GetApiStatus200ResponseIncidentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**source** | **string** | &#x60;automatic&#x60;: derived from three consecutive failed samples (resolved after three good ones); &#x60;manual&#x60;: posted by an operator. |
**components** | **string[]** |  |
**severity** | **string** | &#x60;major&#x60; when the component was down, &#x60;minor&#x60; when degraded. |
**title** | **string** | Manual incidents only (English). |
**message** | **string** | Manual incidents only (English). |
**started_at** | **\DateTime** |  |
**resolved_at** | **\DateTime** | Null while the incident is open. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

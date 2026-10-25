# SeatsChart\Client\SseApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiEventsByEventIdStream()**](SseApi.md#getApiEventsByEventIdStream) | **GET** /api/events/{eventId}/stream | Indexed visual projection stream |


## `getApiEventsByEventIdStream()`

```php
getApiEventsByEventIdStream($event_id)
```

Indexed visual projection stream

Protocol 5: compact bootstrap or exact checkpoint, absolute indexed deltas and shared heartbeat. Geometry is immutable and separate. No periodic snapshots on the wire. Periodic authority reconciliation repairs lost publications and passive expiry. Transport cursor is independent of geometry identity and verified projection digest. Gaps, dirty subscriptions, overflow and incompatible revisions close with resync_required. Reconnect submits mapRevision, stateToken, epoch and sequence; continuity must be proven or a compact snapshot is returned. Visual state is bounded-stale; reserve/confirm remain authoritative.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\SseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdStream($event_id);
} catch (Exception $e) {
    echo 'Exception when calling SseApi->getApiEventsByEventIdStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

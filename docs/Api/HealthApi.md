# SeatsChart\Client\HealthApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiHealth()**](HealthApi.md#getApiHealth) | **GET** /api/health | Health check |
| [**getApiStatus()**](HealthApi.md#getApiStatus) | **GET** /api/status | Public platform status and 90-day uptime |
| [**getHealthLive()**](HealthApi.md#getHealthLive) | **GET** /health/live | Liveness probe |
| [**getInternalMetrics()**](HealthApi.md#getInternalMetrics) | **GET** /internal/metrics | Prometheus metrics |
| [**putInternalStatusNotices()**](HealthApi.md#putInternalStatusNotices) | **PUT** /internal/status/notices | Replace status page notices (operators) |


## `getApiHealth()`

```php
getApiHealth()
```

Health check

Readiness probe with Redis, PostgreSQL and release schema checks (503 when degraded).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getApiHealth();
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getApiHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiStatus()`

```php
getApiStatus(): \SeatsChart\Client\Model\GetApiStatus200Response
```

Public platform status and 90-day uptime

Current state, latest latency and 90 days of daily uptime per component, automatic incidents and operator notices (incidents and maintenance). A sampler in the reservation worker probes every component every 30 s (STATUS_SAMPLE_INTERVAL_SEC) and keeps compact per-minute and per-day rollups in Redis (`status:*` keys, 90 days, bounded). Minutes without a sample — for example while the sampler itself is down — are reported as no data (`uptime: null`, `coverage` below 1), never as up. No authentication; IP rate limited; `Cache-Control: public, max-age=30, stale-while-revalidate=60`; gzip or br by `Accept-Encoding` with a weak `ETag` (304 on `If-None-Match`). No hostnames, error texts or other internals are exposed. 503 `redis_unavailable` when Redis cannot be read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getApiStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SeatsChart\Client\Model\GetApiStatus200Response**](../Model/GetApiStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHealthLive()`

```php
getHealthLive()
```

Liveness probe

Answers 200 `{ status: \"ok\" }` while the process serves requests, with no Redis or PostgreSQL check (use `GET /api/health` for readiness). Still served while the API drains on shutdown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getHealthLive();
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getHealthLive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInternalMetrics()`

```php
getInternalMetrics()
```

Prometheus metrics

Prometheus text exposition (`text/plain; version=0.0.4`) of the API process metrics. Requires `Authorization: Bearer <OBSERVABILITY_TOKEN>` (at least 32 characters); any other request, or an API without the token configured, gets 404 `not_found`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getInternalMetrics();
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getInternalMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putInternalStatusNotices()`

```php
putInternalStatusNotices($put_internal_status_notices_request, $idempotency_key)
```

Replace status page notices (operators)

Replaces the manual incident and maintenance notices shown on the public status page (at most 20, English text). An incident with `endsAt` in the past is resolved; a maintenance window is scheduled, in progress or completed from its times. Requires `Authorization: Bearer <OBSERVABILITY_TOKEN>`; any other request gets 404 `not_found`. Send `{ \"notices\": [] }` to clear.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$put_internal_status_notices_request = new \SeatsChart\Client\Model\PutInternalStatusNoticesRequest(); // \SeatsChart\Client\Model\PutInternalStatusNoticesRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putInternalStatusNotices($put_internal_status_notices_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->putInternalStatusNotices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **put_internal_status_notices_request** | [**\SeatsChart\Client\Model\PutInternalStatusNoticesRequest**](../Model/PutInternalStatusNoticesRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

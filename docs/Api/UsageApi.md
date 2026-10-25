# SeatsChart\Client\UsageApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiMonitoringRequests()**](UsageApi.md#getApiMonitoringRequests) | **GET** /api/monitoring/requests | Request monitoring per rate-limit lane, with in-flight (concurrent) requests |
| [**getApiUsage()**](UsageApi.md#getApiUsage) | **GET** /api/usage | Monthly usage: used objects, charts and events |
| [**getApiUsageCharts()**](UsageApi.md#getApiUsageCharts) | **GET** /api/usage/charts | Monthly used objects per chart and event |
| [**getApiUsageEvents()**](UsageApi.md#getApiUsageEvents) | **GET** /api/usage/events | Monthly used objects per event (paginated) |
| [**getApiUsageEventsByEventId()**](UsageApi.md#getApiUsageEventsByEventId) | **GET** /api/usage/events/{eventId} | Monthly used objects of one event (paginated) |
| [**getApiUsageHistory()**](UsageApi.md#getApiUsageHistory) | **GET** /api/usage/history | Used objects per month over a range |
| [**getApiUsageWorkspaces()**](UsageApi.md#getApiUsageWorkspaces) | **GET** /api/usage/workspaces | Monthly used objects across my workspaces (admin view) |


## `getApiMonitoringRequests()`

```php
getApiMonitoringRequests($range): \SeatsChart\Client\Model\GetApiMonitoringRequests200Response
```

Request monitoring per rate-limit lane, with in-flight (concurrent) requests

Peak requests per minute and 429 counts per lane for the last 10 minutes, hour, 24 hours or 7 days. The **sales lane** carries the buyer path (seat map reads, manifest/geometry/state, the live stream, holds, renewals, best-available, releases, quotes, confirmations); the **api lane** carries everything else (reports, events, charts, workspaces, webhooks, keys), so reporting bursts never starve sales. Counters are written by the rate limiter in its existing Redis call (no extra round trip); minute data is kept 25 hours, hourly peaks 8 days. 10m/1h: one bucket per minute; 24h: 15-minute buckets (peak minute); 7d: hourly buckets. `concurrency` reports requests in flight now and the highest number of concurrent requests in the last hour and day, for the workspace and per API key (live SSE streams are connections and are not counted). Each API instance counts in memory and stores a new per-minute peak in the same limiter call, so with several instances the peaks are summed (an upper bound) and `current` is the instance that answered. Dashboard session (any role) or an API key with the `reports` scope.

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


$apiInstance = new SeatsChart\Client\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$range = 'range_example'; // string | Time range (default `1h`).

try {
    $result = $apiInstance->getApiMonitoringRequests($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getApiMonitoringRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **range** | **string**| Time range (default &#x60;1h&#x60;). | [optional] |

### Return type

[**\SeatsChart\Client\Model\GetApiMonitoringRequests200Response**](../Model/GetApiMonitoringRequests200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiUsage()`

```php
getApiUsage($month)
```

Monthly usage: used objects, charts and events

Test (sandbox) workspaces (`isTest: true`) are never metered and have no limits (`limit: null`). `usedObjects.count` is the number of distinct objects booked in the UTC calendar month (seats.io-style billing unit): every seat that became booked counts once per month however often it is retried, released and re-booked; each sold general-admission place counts as one. Holds, test events and replays never count. `history` has exactly 12 months ending at `month` (zero-filled); `byEvent` lists the top 100 events of the month. `charts`/`events` are current totals against the plan limits. Dashboard JWT (any role) or an API key with the `reports` scope.

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


$apiInstance = new SeatsChart\Client\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string | UTC calendar month `YYYY-MM` (default: current month).

try {
    $apiInstance->getApiUsage($month);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getApiUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**| UTC calendar month &#x60;YYYY-MM&#x60; (default: current month). | [optional] |

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

## `getApiUsageCharts()`

```php
getApiUsageCharts($month)
```

Monthly used objects per chart and event

Breakdown of `usedObjects` (see GET /usage) by chart, each with its events (most used first). Events are grouped under their current chart; deleted events or events without a chart are listed under `chartId: null`. Read from the metering table (no counters on the booking path). Dashboard JWT (any role) or an API key.

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


$apiInstance = new SeatsChart\Client\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string | UTC calendar month `YYYY-MM` (default: current month).

try {
    $apiInstance->getApiUsageCharts($month);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getApiUsageCharts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**| UTC calendar month &#x60;YYYY-MM&#x60; (default: current month). | [optional] |

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

## `getApiUsageEvents()`

```php
getApiUsageEvents($month, $limit, $cursor)
```

Monthly used objects per event (paginated)

Every event with used objects in the month, most used first (ties by event id): `items: [{ eventId, eventKey, eventName, chartId, usedObjects }]` (`eventName: null` for deleted events), `eventCount` and the month total `usedObjects`. `limit` 1..100 (default 50); pass `nextCursor` as `cursor` for the next page. Unlike `byEvent` of GET /usage (top 100) this lists every event. Closed months are immutable and their per-event totals are cached by the API. Dashboard JWT (any role) or an API key with the `reports` scope.

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


$apiInstance = new SeatsChart\Client\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string | UTC calendar month `YYYY-MM` (default: current month).
$limit = 3.4; // float | Page size (1..100, default 50).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` of the previous page.

try {
    $apiInstance->getApiUsageEvents($month, $limit, $cursor);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getApiUsageEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**| UTC calendar month &#x60;YYYY-MM&#x60; (default: current month). | [optional] |
| **limit** | **float**| Page size (1..100, default 50). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; of the previous page. | [optional] |

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

## `getApiUsageEventsByEventId()`

```php
getApiUsageEventsByEventId($event_id, $month, $limit, $cursor)
```

Monthly used objects of one event (paginated)

Total `usedObjects` of the event in the month, `objectCount` (metered objects) and one page of the metered objects (`objectKey`: seat id, or `ga:<receiptId>` with `units` places; `firstUsedAt` with microseconds), newest first. `limit` 1..1000 (default 1000); pass `nextCursor` as `cursor` for the next page (`null` on the last page; `truncated` is true when more pages follow). Keyset pagination over the primary-key range of the event and month. Works for deleted events that were metered. Dashboard JWT (any role) or an API key with the `reports` scope.

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


$apiInstance = new SeatsChart\Client\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$month = 'month_example'; // string | UTC calendar month `YYYY-MM` (default: current month).
$limit = 3.4; // float | Page size (1..1000, default 1000).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` of the previous page.

try {
    $apiInstance->getApiUsageEventsByEventId($event_id, $month, $limit, $cursor);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getApiUsageEventsByEventId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **month** | **string**| UTC calendar month &#x60;YYYY-MM&#x60; (default: current month). | [optional] |
| **limit** | **float**| Page size (1..1000, default 1000). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; of the previous page. | [optional] |

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

## `getApiUsageHistory()`

```php
getApiUsageHistory($from, $to)
```

Used objects per month over a range

Monthly used objects from `from` to `to` inclusive (oldest first, zero-filled), at most 120 months (400 otherwise), plus the range total. One grouped read over the primary-key range `(tenant_id, month)`; closed months are immutable and cached by the API. Dashboard JWT (any role) or an API key with the `reports` scope.

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


$apiInstance = new SeatsChart\Client\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 'from_example'; // string | First month `YYYY-MM` (default: 11 months before `to`).
$to = 'to_example'; // string | Last month `YYYY-MM` (default: current month; not in the future).

try {
    $apiInstance->getApiUsageHistory($from, $to);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getApiUsageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| First month &#x60;YYYY-MM&#x60; (default: 11 months before &#x60;to&#x60;). | [optional] |
| **to** | **string**| Last month &#x60;YYYY-MM&#x60; (default: current month; not in the future). | [optional] |

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

## `getApiUsageWorkspaces()`

```php
getApiUsageWorkspaces($month)
```

Monthly used objects across my workspaces (admin view)

Every workspace the caller administers (role admin), with its plan, status and used objects of the month against the plan limit (`null` for test workspaces, which are never metered), plus the total. Dashboard session, or a **workspace admin API key** (the admin it is bound to); other API keys: 403 `ERR_PARTNER_SCOPE`. One grouped read of the metering table.

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


$apiInstance = new SeatsChart\Client\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 'month_example'; // string | UTC calendar month `YYYY-MM` (default: current month).

try {
    $apiInstance->getApiUsageWorkspaces($month);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getApiUsageWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **string**| UTC calendar month &#x60;YYYY-MM&#x60; (default: current month). | [optional] |

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

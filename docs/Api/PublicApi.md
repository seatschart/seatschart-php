# SeatsChart\Client\PublicApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiPublicByPublicKeyEventsByEventIdGeometryByHash()**](PublicApi.md#getApiPublicByPublicKeyEventsByEventIdGeometryByHash) | **GET** /api/public/{publicKey}/events/{eventId}/geometry/{hash} | Public immutable geometry (CDN-cacheable) |
| [**getApiPublicByPublicKeyEventsByEventIdManifest()**](PublicApi.md#getApiPublicByPublicKeyEventsByEventIdManifest) | **GET** /api/public/{publicKey}/events/{eventId}/manifest | Public geometry manifest (CDN-cacheable) |
| [**getApiPublicByPublicKeyEventsByEventIdState()**](PublicApi.md#getApiPublicByPublicKeyEventsByEventIdState) | **GET** /api/public/{publicKey}/events/{eventId}/state | Public compact visual state (CDN-cacheable) |
| [**getApiPublicChartPreviewsByChartIdGeometryByHash()**](PublicApi.md#getApiPublicChartPreviewsByChartIdGeometryByHash) | **GET** /api/public/chart-previews/{chartId}/geometry/{hash} | Chart preview geometry (signed link) |
| [**getApiPublicChartPreviewsByChartIdManifest()**](PublicApi.md#getApiPublicChartPreviewsByChartIdManifest) | **GET** /api/public/chart-previews/{chartId}/manifest | Chart preview manifest (signed link) |


## `getApiPublicByPublicKeyEventsByEventIdGeometryByHash()`

```php
getApiPublicByPublicKeyEventsByEventIdGeometryByHash($public_key, $event_id, $hash)
```

Public immutable geometry (CDN-cacheable)

Content-addressed geometry (sha256 of the canonical JSON). br/gzip negotiated from Accept-Encoding. `Cache-Control: public, max-age=31536000, immutable`. Clients must verify the hash. Unknown key, event or hash: 404 no-store. `eventId` also accepts the event key. A deactivated workspace returns 403 `workspace_deactivated` (no-store). CDN cache key: path + Origin + normalized Accept-Encoding. Never forward or key on cookies, Authorization, x-api-key, x-channel-key or the query string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$public_key = 'public_key_example'; // string | Workspace public key (`pub_…`).
$event_id = 'event_id_example'; // string
$hash = 'hash_example'; // string

try {
    $apiInstance->getApiPublicByPublicKeyEventsByEventIdGeometryByHash($public_key, $event_id, $hash);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getApiPublicByPublicKeyEventsByEventIdGeometryByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_key** | **string**| Workspace public key (&#x60;pub_…&#x60;). | |
| **event_id** | **string**|  | |
| **hash** | **string**|  | |

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

## `getApiPublicByPublicKeyEventsByEventIdManifest()`

```php
getApiPublicByPublicKeyEventsByEventIdManifest($public_key, $event_id)
```

Public geometry manifest (CDN-cacheable)

Published geometry pointer for the event. `geometryUrl` points at the public geometry path. ETag = mapRevision + currency. Includes the event catalog `currency` (ISO 4217, null for legacy events). `Cache-Control: public, max-age=5, stale-while-revalidate=30` (PUBLIC_MANIFEST_* env). A stale manifest is safe: the state carries mapRevision and clients switch geometry when it differs. Unknown key or event: 404 no-store. `eventId` also accepts the event key. A deactivated workspace returns 403 `workspace_deactivated` (no-store). CDN cache key: path + Origin + normalized Accept-Encoding. Never forward or key on cookies, Authorization, x-api-key, x-channel-key or the query string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$public_key = 'public_key_example'; // string | Workspace public key (`pub_…`).
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiPublicByPublicKeyEventsByEventIdManifest($public_key, $event_id);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getApiPublicByPublicKeyEventsByEventIdManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_key** | **string**| Workspace public key (&#x60;pub_…&#x60;). | |
| **event_id** | **string**|  | |

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

## `getApiPublicByPublicKeyEventsByEventIdState()`

```php
getApiPublicByPublicKeyEventsByEventIdState($public_key, $event_id)
```

Public compact visual state (CDN-cacheable)

Compact availability of the default public cohort (channel-restricted objects are reported as not for sale; no holder identities or ops fields). Coalesced per API process (single-flight + micro-cache validated by the inventory version, <= 1 s). Weak ETag = stateToken + epoch.sequence; If-None-Match returns 304. `Cache-Control: public, max-age=1, s-maxage=2, stale-while-revalidate=5` (PUBLIC_STATE_* env). Live changes continue on the authenticated SSE stream; reserve/confirm remain authoritative. `eventId` also accepts the event key. A deactivated workspace returns 403 `workspace_deactivated` (no-store). CDN cache key: path + Origin + normalized Accept-Encoding. Never forward or key on cookies, Authorization, x-api-key, x-channel-key or the query string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$public_key = 'public_key_example'; // string | Workspace public key (`pub_…`).
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiPublicByPublicKeyEventsByEventIdState($public_key, $event_id);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getApiPublicByPublicKeyEventsByEventIdState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_key** | **string**| Workspace public key (&#x60;pub_…&#x60;). | |
| **event_id** | **string**|  | |

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

## `getApiPublicChartPreviewsByChartIdGeometryByHash()`

```php
getApiPublicChartPreviewsByChartIdGeometryByHash($chart_id, $hash, $exp, $sig)
```

Chart preview geometry (signed link)

Content-addressed published geometry (sha256 of the canonical JSON; clients verify it). Structural fields only — no prices, inventory or event data. Cacheable while the link is valid (max one day).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chart_id = 'chart_id_example'; // string
$hash = 'hash_example'; // string
$exp = 'exp_example'; // string | Expiry (unix seconds) from the link.
$sig = 'sig_example'; // string | Signature from the link.

try {
    $apiInstance->getApiPublicChartPreviewsByChartIdGeometryByHash($chart_id, $hash, $exp, $sig);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getApiPublicChartPreviewsByChartIdGeometryByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **hash** | **string**|  | |
| **exp** | **string**| Expiry (unix seconds) from the link. | |
| **sig** | **string**| Signature from the link. | |

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

## `getApiPublicChartPreviewsByChartIdManifest()`

```php
getApiPublicChartPreviewsByChartIdManifest($chart_id, $exp, $sig)
```

Chart preview manifest (signed link)

Validates a preview link and returns `{ chartId, name, mapRevision, geometryHash, seatCount, gaCount, expiresAt, geometryUrl }`. 403 `preview_link_invalid` (bad signature or revoked), 410 `preview_link_expired`, 404 unknown/unpublished/archived chart. `Cache-Control: public, max-age=30`; `X-Robots-Tag: noindex`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chart_id = 'chart_id_example'; // string
$exp = 'exp_example'; // string | Expiry (unix seconds) from the link.
$sig = 'sig_example'; // string | Signature from the link.

try {
    $apiInstance->getApiPublicChartPreviewsByChartIdManifest($chart_id, $exp, $sig);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getApiPublicChartPreviewsByChartIdManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **exp** | **string**| Expiry (unix seconds) from the link. | |
| **sig** | **string**| Signature from the link. | |

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

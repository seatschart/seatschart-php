# SeatsChart\Client\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiChartsByChartIdCategoriesByCategoryId()**](DefaultApi.md#deleteApiChartsByChartIdCategoriesByCategoryId) | **DELETE** /api/charts/{chartId}/categories/{categoryId} |  |
| [**getApiEventsByEventIdGeometryByHash()**](DefaultApi.md#getApiEventsByEventIdGeometryByHash) | **GET** /api/events/{eventId}/geometry/{hash} |  |
| [**getApiEventsByEventIdManifest()**](DefaultApi.md#getApiEventsByEventIdManifest) | **GET** /api/events/{eventId}/manifest |  |
| [**getHealthLive()**](DefaultApi.md#getHealthLive) | **GET** /health/live |  |
| [**getInternalMetrics()**](DefaultApi.md#getInternalMetrics) | **GET** /internal/metrics |  |
| [**patchApiChartsByChartIdCategoriesByCategoryId()**](DefaultApi.md#patchApiChartsByChartIdCategoriesByCategoryId) | **PATCH** /api/charts/{chartId}/categories/{categoryId} |  |
| [**postApiChartsByChartIdActionsScanChart()**](DefaultApi.md#postApiChartsByChartIdActionsScanChart) | **POST** /api/charts/{chartId}/actions/scan-chart |  |
| [**postApiChartsByChartIdCategories()**](DefaultApi.md#postApiChartsByChartIdCategories) | **POST** /api/charts/{chartId}/categories |  |
| [**postApiChartsByChartIdVersionsByVersionActionsCopy()**](DefaultApi.md#postApiChartsByChartIdVersionsByVersionActionsCopy) | **POST** /api/charts/{chartId}/versions/{version}/actions/copy |  |
| [**postApiEventsByEventIdActionsScanChart()**](DefaultApi.md#postApiEventsByEventIdActionsScanChart) | **POST** /api/events/{eventId}/actions/scan-chart |  |


## `deleteApiChartsByChartIdCategoriesByCategoryId()`

```php
deleteApiChartsByChartIdCategoriesByCategoryId($chart_id, $category_id, $reassign_to, $idempotency_key)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chart_id = 'chart_id_example'; // string
$category_id = 'category_id_example'; // string
$reassign_to = 'reassign_to_example'; // string | Category id that receives the seats/GA areas of the deleted category.
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiChartsByChartIdCategoriesByCategoryId($chart_id, $category_id, $reassign_to, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteApiChartsByChartIdCategoriesByCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **category_id** | **string**|  | |
| **reassign_to** | **string**| Category id that receives the seats/GA areas of the deleted category. | [optional] |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

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

## `getApiEventsByEventIdGeometryByHash()`

```php
getApiEventsByEventIdGeometryByHash($event_id, $hash)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$event_id = 'event_id_example'; // string
$hash = 'hash_example'; // string

try {
    $apiInstance->getApiEventsByEventIdGeometryByHash($event_id, $hash);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApiEventsByEventIdGeometryByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getApiEventsByEventIdManifest()`

```php
getApiEventsByEventIdManifest($event_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdManifest($event_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApiEventsByEventIdManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getHealthLive()`

```php
getHealthLive()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getHealthLive();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getHealthLive: ', $e->getMessage(), PHP_EOL;
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



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getInternalMetrics();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInternalMetrics: ', $e->getMessage(), PHP_EOL;
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

## `patchApiChartsByChartIdCategoriesByCategoryId()`

```php
patchApiChartsByChartIdCategoriesByCategoryId($chart_id, $category_id, $patch_api_charts_by_chart_id_categories_by_category_id_request, $idempotency_key)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chart_id = 'chart_id_example'; // string
$category_id = 'category_id_example'; // string
$patch_api_charts_by_chart_id_categories_by_category_id_request = new \SeatsChart\Client\Model\PatchApiChartsByChartIdCategoriesByCategoryIdRequest(); // \SeatsChart\Client\Model\PatchApiChartsByChartIdCategoriesByCategoryIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiChartsByChartIdCategoriesByCategoryId($chart_id, $category_id, $patch_api_charts_by_chart_id_categories_by_category_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchApiChartsByChartIdCategoriesByCategoryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **category_id** | **string**|  | |
| **patch_api_charts_by_chart_id_categories_by_category_id_request** | [**\SeatsChart\Client\Model\PatchApiChartsByChartIdCategoriesByCategoryIdRequest**](../Model/PatchApiChartsByChartIdCategoriesByCategoryIdRequest.md)|  | |
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

## `postApiChartsByChartIdActionsScanChart()`

```php
postApiChartsByChartIdActionsScanChart($chart_id, $idempotency_key)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chart_id = 'chart_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdActionsScanChart($chart_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postApiChartsByChartIdActionsScanChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

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

## `postApiChartsByChartIdCategories()`

```php
postApiChartsByChartIdCategories($chart_id, $post_api_charts_by_chart_id_categories_request, $idempotency_key)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chart_id = 'chart_id_example'; // string
$post_api_charts_by_chart_id_categories_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdCategoriesRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdCategoriesRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdCategories($chart_id, $post_api_charts_by_chart_id_categories_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postApiChartsByChartIdCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **post_api_charts_by_chart_id_categories_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdCategoriesRequest**](../Model/PostApiChartsByChartIdCategoriesRequest.md)|  | |
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

## `postApiChartsByChartIdVersionsByVersionActionsCopy()`

```php
postApiChartsByChartIdVersionsByVersionActionsCopy($chart_id, $version, $post_api_charts_by_chart_id_versions_by_version_actions_copy_request, $idempotency_key)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chart_id = 'chart_id_example'; // string
$version = 3.4; // float
$post_api_charts_by_chart_id_versions_by_version_actions_copy_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdVersionsByVersionActionsCopyRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdVersionsByVersionActionsCopyRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdVersionsByVersionActionsCopy($chart_id, $version, $post_api_charts_by_chart_id_versions_by_version_actions_copy_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postApiChartsByChartIdVersionsByVersionActionsCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **float**|  | |
| **post_api_charts_by_chart_id_versions_by_version_actions_copy_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdVersionsByVersionActionsCopyRequest**](../Model/PostApiChartsByChartIdVersionsByVersionActionsCopyRequest.md)|  | |
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

## `postApiEventsByEventIdActionsScanChart()`

```php
postApiEventsByEventIdActionsScanChart($event_id, $idempotency_key)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$event_id = 'event_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsScanChart($event_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postApiEventsByEventIdActionsScanChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

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

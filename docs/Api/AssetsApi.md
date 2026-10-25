# SeatsChart\Client\AssetsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAssetsMapByTenantIdByEventIdByFilename()**](AssetsApi.md#getAssetsMapByTenantIdByEventIdByFilename) | **GET** /assets/map/{tenantId}/{eventId}/{filename} | Serve persisted map reference/background images |


## `getAssetsMapByTenantIdByEventIdByFilename()`

```php
getAssetsMapByTenantIdByEventIdByFilename($tenant_id, $event_id, $filename)
```

Serve persisted map reference/background images

Serves map images from local disk or proxies from R2. Production requires HMAC `exp`/`sig` unless MAP_ASSET_REQUIRE_SIGNED=0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$event_id = 'event_id_example'; // string
$filename = 'filename_example'; // string

try {
    $apiInstance->getAssetsMapByTenantIdByEventIdByFilename($tenant_id, $event_id, $filename);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetsMapByTenantIdByEventIdByFilename: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **event_id** | **string**|  | |
| **filename** | **string**|  | |

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

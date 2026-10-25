# SeatsChart\Client\EmbedOriginsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiEmbedOriginsById()**](EmbedOriginsApi.md#deleteApiEmbedOriginsById) | **DELETE** /api/embed-origins/{id} | Remove an embed origin |
| [**getApiEmbedOrigins()**](EmbedOriginsApi.md#getApiEmbedOrigins) | **GET** /api/embed-origins | List allowed embed origins for the workspace |
| [**getApiEventsByEventIdEmbedPolicy()**](EmbedOriginsApi.md#getApiEventsByEventIdEmbedPolicy) | **GET** /api/events/{eventId}/embed-policy | Resolve tenant embed origins for an event |
| [**postApiEmbedOrigins()**](EmbedOriginsApi.md#postApiEmbedOrigins) | **POST** /api/embed-origins | Register an allowed embed origin |


## `deleteApiEmbedOriginsById()`

```php
deleteApiEmbedOriginsById($id, $idempotency_key)
```

Remove an embed origin

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


$apiInstance = new SeatsChart\Client\Api\EmbedOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Embed origin UUID (stored lowercase)
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiEmbedOriginsById($id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EmbedOriginsApi->deleteApiEmbedOriginsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Embed origin UUID (stored lowercase) | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

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

## `getApiEmbedOrigins()`

```php
getApiEmbedOrigins()
```

List allowed embed origins for the workspace

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


$apiInstance = new SeatsChart\Client\Api\EmbedOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiEmbedOrigins();
} catch (Exception $e) {
    echo 'Exception when calling EmbedOriginsApi->getApiEmbedOrigins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getApiEventsByEventIdEmbedPolicy()`

```php
getApiEventsByEventIdEmbedPolicy($event_id)
```

Resolve tenant embed origins for an event

Public read used by the Next.js viewer to build CSP frame-ancestors and validate parent_origin. Also returns `publicKey` (`pub_…`) so `?workspaceKey=` can be allowlisted. Also returns `event` (`name`, `startsAt` ISO-8601 or null when the date was never set) for the buyer page header. Returns origins, public key and the event name/date only (no tenant id). Does not require authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\EmbedOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdEmbedPolicy($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EmbedOriginsApi->getApiEventsByEventIdEmbedPolicy: ', $e->getMessage(), PHP_EOL;
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

## `postApiEmbedOrigins()`

```php
postApiEmbedOrigins($post_api_embed_origins_request, $idempotency_key)
```

Register an allowed embed origin

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


$apiInstance = new SeatsChart\Client\Api\EmbedOriginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_embed_origins_request = new \SeatsChart\Client\Model\PostApiEmbedOriginsRequest(); // \SeatsChart\Client\Model\PostApiEmbedOriginsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEmbedOrigins($post_api_embed_origins_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EmbedOriginsApi->postApiEmbedOrigins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_embed_origins_request** | [**\SeatsChart\Client\Model\PostApiEmbedOriginsRequest**](../Model/PostApiEmbedOriginsRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# SeatsChart\Client\ApiKeysApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiKeysById()**](ApiKeysApi.md#deleteApiKeysById) | **DELETE** /api/keys/{id} | Soft-revoke an API key |
| [**getApiKeys()**](ApiKeysApi.md#getApiKeys) | **GET** /api/keys | List active tenant API keys (prefix fingerprint only) |
| [**getApiKeysScopes()**](ApiKeysApi.md#getApiKeysScopes) | **GET** /api/keys/scopes | List API key scopes and presets |
| [**patchApiKeysById()**](ApiKeysApi.md#patchApiKeysById) | **PATCH** /api/keys/{id} | Rename an API key, change its scopes or its workspace admin capability |
| [**postApiKeys()**](ApiKeysApi.md#postApiKeys) | **POST** /api/keys | Mint a tenant API key (secret returned once) |


## `deleteApiKeysById()`

```php
deleteApiKeysById($id, $idempotency_key)
```

Soft-revoke an API key

Sets `revoked_at` and drops Redis auth cache entries for this hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | API key UUID (lowercase canonical)
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiKeysById($id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->deleteApiKeysById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| API key UUID (lowercase canonical) | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKeys()`

```php
getApiKeys()
```

List active tenant API keys (prefix fingerprint only)

Returns non-revoked keys for the JWT `tenant_id` tenant with their `scopes` and `fullAccess` flag (keys minted before scopes existed have full access). **`x-api-key` partners cannot access this endpoint** (returns `403`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiKeys();
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->getApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKeysScopes()`

```php
getApiKeysScopes()
```

List API key scopes and presets

Scopes restrict what an `x-api-key` may call; a missing scope yields `403 {\"error\":\"insufficient_scope\",\"requiredScope\":…}`. Presets: `read_only` = read; `box_office` = read, holds, bookings, reports; `full_access` = every scope. Unlisted mutating routes require a full-access key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiKeysScopes();
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->getApiKeysScopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchApiKeysById()`

```php
patchApiKeysById($id, $patch_api_keys_by_id_request, $idempotency_key)
```

Rename an API key, change its scopes or its workspace admin capability

Scope changes take effect on the next request (the auth cache entry is dropped). The secret is unchanged. `workspaceAdmin: true` binds the key to the calling admin (workspace admins only); `false` removes the capability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | API key UUID (lowercase canonical)
$patch_api_keys_by_id_request = new \SeatsChart\Client\Model\PatchApiKeysByIdRequest(); // \SeatsChart\Client\Model\PatchApiKeysByIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiKeysById($id, $patch_api_keys_by_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->patchApiKeysById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| API key UUID (lowercase canonical) | |
| **patch_api_keys_by_id_request** | [**\SeatsChart\Client\Model\PatchApiKeysByIdRequest**](../Model/PatchApiKeysByIdRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiKeys()`

```php
postApiKeys($post_api_keys_request, $idempotency_key)
```

Mint a tenant API key (secret returned once)

Generates `sk_live_…` (`sk_test_…` in a test workspace), stores SHA-256 only. Response includes **`secret`** exactly once. `scopes` defaults to full access. `workspaceAdmin: true` (workspace admins only) mints a workspace admin key that can also manage your workspaces via `/api/workspaces`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_keys_request = new \SeatsChart\Client\Model\PostApiKeysRequest(); // \SeatsChart\Client\Model\PostApiKeysRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiKeys($post_api_keys_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->postApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_keys_request** | [**\SeatsChart\Client\Model\PostApiKeysRequest**](../Model/PostApiKeysRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

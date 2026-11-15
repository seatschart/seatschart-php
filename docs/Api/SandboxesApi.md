# SeatsChart\Client\SandboxesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiSandboxesBySandboxId()**](SandboxesApi.md#deleteApiSandboxesBySandboxId) | **DELETE** /api/sandboxes/{sandboxId} | Delete a sandbox |
| [**getApiSandboxes()**](SandboxesApi.md#getApiSandboxes) | **GET** /api/sandboxes | List the sandboxes of this workspace |
| [**getApiSandboxesBySandboxId()**](SandboxesApi.md#getApiSandboxesBySandboxId) | **GET** /api/sandboxes/{sandboxId} | Get a sandbox |
| [**postApiSandboxes()**](SandboxesApi.md#postApiSandboxes) | **POST** /api/sandboxes | Create a sandbox |
| [**postApiSandboxesBySandboxIdActionsCopyFromProduction()**](SandboxesApi.md#postApiSandboxesBySandboxIdActionsCopyFromProduction) | **POST** /api/sandboxes/{sandboxId}/actions/copy-from-production | Copy charts (and events) from production into a sandbox |
| [**postApiSandboxesBySandboxIdActionsJoin()**](SandboxesApi.md#postApiSandboxesBySandboxIdActionsJoin) | **POST** /api/sandboxes/{sandboxId}/actions/join | Join a sandbox (dashboard) |
| [**postApiSandboxesBySandboxIdActionsReset()**](SandboxesApi.md#postApiSandboxesBySandboxIdActionsReset) | **POST** /api/sandboxes/{sandboxId}/actions/reset | Reset a sandbox |
| [**postApiSandboxesBySandboxIdAdminKey()**](SandboxesApi.md#postApiSandboxesBySandboxIdAdminKey) | **POST** /api/sandboxes/{sandboxId}/admin-key | Create or rotate the sandbox admin key |


## `deleteApiSandboxesBySandboxId()`

```php
deleteApiSandboxesBySandboxId($sandbox_id, $idempotency_key): \SeatsChart\Client\Model\DeleteApiSandboxesBySandboxId200Response
```

Delete a sandbox

Deletes the sandbox for good in one transaction: its data (as a reset) and its configuration (API keys, webhooks, members, invitations, embed domains). Its keys and sessions stop working at once; members whose default workspace it was default to this workspace. Unlike production workspaces (soft delete), a sandbox is hard-deleted. Irreversible. Callers: a dashboard session of the **production** workspace (any member reads; admins change) or an API key of it (`read` reads; changes need a full-access key). Sandbox keys and sessions get 403 `ERR_SANDBOX_SCOPE`: a sandbox can never act on its production workspace or on another sandbox, and production keys never work inside a sandbox (each workspace has its own keys).

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


$apiInstance = new SeatsChart\Client\Api\SandboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_id = 'sandbox_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->deleteApiSandboxesBySandboxId($sandbox_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxesApi->deleteApiSandboxesBySandboxId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sandbox_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\DeleteApiSandboxesBySandboxId200Response**](../Model/DeleteApiSandboxesBySandboxId200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiSandboxes()`

```php
getApiSandboxes(): \SeatsChart\Client\Model\GetApiSandboxes200Response
```

List the sandboxes of this workspace

Sandboxes of the calling production workspace (oldest first) with this month's usage (shown, never billed) and the rate limits they run at. Callers: a dashboard session of the **production** workspace (any member reads; admins change) or an API key of it (`read` reads; changes need a full-access key). Sandbox keys and sessions get 403 `ERR_SANDBOX_SCOPE`: a sandbox can never act on its production workspace or on another sandbox, and production keys never work inside a sandbox (each workspace has its own keys).

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


$apiInstance = new SeatsChart\Client\Api\SandboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiSandboxes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxesApi->getApiSandboxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SeatsChart\Client\Model\GetApiSandboxes200Response**](../Model/GetApiSandboxes200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiSandboxesBySandboxId()`

```php
getApiSandboxesBySandboxId($sandbox_id): \SeatsChart\Client\Model\GetApiSandboxes200ResponseItemsInner
```

Get a sandbox

One sandbox of this workspace (404 for any other id). Callers: a dashboard session of the **production** workspace (any member reads; admins change) or an API key of it (`read` reads; changes need a full-access key). Sandbox keys and sessions get 403 `ERR_SANDBOX_SCOPE`: a sandbox can never act on its production workspace or on another sandbox, and production keys never work inside a sandbox (each workspace has its own keys).

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


$apiInstance = new SeatsChart\Client\Api\SandboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_id = 'sandbox_id_example'; // string

try {
    $result = $apiInstance->getApiSandboxesBySandboxId($sandbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxesApi->getApiSandboxesBySandboxId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sandbox_id** | **string**|  | |

### Return type

[**\SeatsChart\Client\Model\GetApiSandboxes200ResponseItemsInner**](../Model/GetApiSandboxes200ResponseItemsInner.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiSandboxes()`

```php
postApiSandboxes($post_api_sandboxes_request, $idempotency_key): \SeatsChart\Client\Model\PostApiSandboxes201Response
```

Create a sandbox

Creates an isolated sandbox of this workspace: a workspace of its own (`kind: sandbox`) with its own charts, events, seasons, holds, orders, ticket buyer ids, webhooks and API keys (`sk_test_…`). It is never billed: its usage is shown but not counted against the plan, it has no chart or event caps, webhooks are marked sandbox, billing emails are suppressed and other emails are marked, and buyers see a small Sandbox ribbon. Every member of this workspace becomes a member with the same role, and the team keeps following: members who join later get access with their role, role changes apply and members removed from this workspace lose its sandboxes. At most 10 per workspace (409 `sandbox_limit_reached`). Optionally copies charts (and their events). Callers: a dashboard session of the **production** workspace (any member reads; admins change) or an API key of it (`read` reads; changes need a full-access key). Sandbox keys and sessions get 403 `ERR_SANDBOX_SCOPE`: a sandbox can never act on its production workspace or on another sandbox, and production keys never work inside a sandbox (each workspace has its own keys).

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


$apiInstance = new SeatsChart\Client\Api\SandboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_sandboxes_request = new \SeatsChart\Client\Model\PostApiSandboxesRequest(); // \SeatsChart\Client\Model\PostApiSandboxesRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiSandboxes($post_api_sandboxes_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxesApi->postApiSandboxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_sandboxes_request** | [**\SeatsChart\Client\Model\PostApiSandboxesRequest**](../Model/PostApiSandboxesRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiSandboxes201Response**](../Model/PostApiSandboxes201Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiSandboxesBySandboxIdActionsCopyFromProduction()`

```php
postApiSandboxesBySandboxIdActionsCopyFromProduction($sandbox_id, $post_api_sandboxes_by_sandbox_id_actions_copy_from_production_request, $idempotency_key): \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsCopyFromProduction200Response
```

Copy charts (and events) from production into a sandbox

Copies charts of this workspace into the sandbox (the WP18 cross-workspace copy): a published chart becomes a published copy with fresh object ids, a draft-only chart a draft; tags travel with them. With `includeEvents`, the events of each published chart are copied too, with their for-sale configuration and every object available. Chart and event keys are kept when the sandbox does not use them yet (`keyConflicts` lists the others, copied without a key), so the same integration code runs against both workspaces. Sandbox copies never share ids or secrets with production. Callers: a dashboard session of the **production** workspace (any member reads; admins change) or an API key of it (`read` reads; changes need a full-access key). Sandbox keys and sessions get 403 `ERR_SANDBOX_SCOPE`: a sandbox can never act on its production workspace or on another sandbox, and production keys never work inside a sandbox (each workspace has its own keys).

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


$apiInstance = new SeatsChart\Client\Api\SandboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_id = 'sandbox_id_example'; // string
$post_api_sandboxes_by_sandbox_id_actions_copy_from_production_request = new \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsCopyFromProductionRequest(); // \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsCopyFromProductionRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiSandboxesBySandboxIdActionsCopyFromProduction($sandbox_id, $post_api_sandboxes_by_sandbox_id_actions_copy_from_production_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxesApi->postApiSandboxesBySandboxIdActionsCopyFromProduction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sandbox_id** | **string**|  | |
| **post_api_sandboxes_by_sandbox_id_actions_copy_from_production_request** | [**\SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsCopyFromProductionRequest**](../Model/PostApiSandboxesBySandboxIdActionsCopyFromProductionRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsCopyFromProduction200Response**](../Model/PostApiSandboxesBySandboxIdActionsCopyFromProduction200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiSandboxesBySandboxIdActionsJoin()`

```php
postApiSandboxesBySandboxIdActionsJoin($sandbox_id, $idempotency_key): \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsJoin200Response
```

Join a sandbox (dashboard)

Adds the calling admin of the production workspace to one of its sandboxes (as admin; an existing membership is kept) so they can switch to it. Members are also added automatically (listing or reading sandboxes, and accepting an invitation), so this is rarely needed. Dashboard sessions only.

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


$apiInstance = new SeatsChart\Client\Api\SandboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_id = 'sandbox_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiSandboxesBySandboxIdActionsJoin($sandbox_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxesApi->postApiSandboxesBySandboxIdActionsJoin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sandbox_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsJoin200Response**](../Model/PostApiSandboxesBySandboxIdActionsJoin200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiSandboxesBySandboxIdActionsReset()`

```php
postApiSandboxesBySandboxIdActionsReset($sandbox_id, $post_api_sandboxes_by_sandbox_id_actions_reset_request, $idempotency_key): \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsReset200Response
```

Reset a sandbox

Deletes **all data** of the sandbox in one transaction (all or nothing): orders, bookings, holds, events with their inventory, seasons, charts, listings, ticket buyer ids, usage, webhook deliveries and its audit log; live holds are cleared from the cache. Members, settings, the public key, embed domains, API keys (unless `rotateKeys`) and webhook endpoints (unless `keepWebhooks: false`) stay. A concurrent confirmation either commits before the reset (and is deleted) or fails after it. Irreversible. Callers: a dashboard session of the **production** workspace (any member reads; admins change) or an API key of it (`read` reads; changes need a full-access key). Sandbox keys and sessions get 403 `ERR_SANDBOX_SCOPE`: a sandbox can never act on its production workspace or on another sandbox, and production keys never work inside a sandbox (each workspace has its own keys).

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


$apiInstance = new SeatsChart\Client\Api\SandboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_id = 'sandbox_id_example'; // string
$post_api_sandboxes_by_sandbox_id_actions_reset_request = new \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsResetRequest(); // \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsResetRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiSandboxesBySandboxIdActionsReset($sandbox_id, $post_api_sandboxes_by_sandbox_id_actions_reset_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxesApi->postApiSandboxesBySandboxIdActionsReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sandbox_id** | **string**|  | |
| **post_api_sandboxes_by_sandbox_id_actions_reset_request** | [**\SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsResetRequest**](../Model/PostApiSandboxesBySandboxIdActionsResetRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiSandboxesBySandboxIdActionsReset200Response**](../Model/PostApiSandboxesBySandboxIdActionsReset200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiSandboxesBySandboxIdAdminKey()`

```php
postApiSandboxesBySandboxIdAdminKey($sandbox_id, $post_api_sandboxes_by_sandbox_id_admin_key_request, $idempotency_key): \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdAdminKey201Response
```

Create or rotate the sandbox admin key

Mints a full-access `sk_test_…` key of the sandbox (secret returned once). It works only inside the sandbox: it can never read or change this workspace, another sandbox, or manage workspaces. `revokeExisting: true` rotates (revokes the other keys at once). Callers: a dashboard session of the **production** workspace (any member reads; admins change) or an API key of it (`read` reads; changes need a full-access key). Sandbox keys and sessions get 403 `ERR_SANDBOX_SCOPE`: a sandbox can never act on its production workspace or on another sandbox, and production keys never work inside a sandbox (each workspace has its own keys).

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


$apiInstance = new SeatsChart\Client\Api\SandboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sandbox_id = 'sandbox_id_example'; // string
$post_api_sandboxes_by_sandbox_id_admin_key_request = new \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdAdminKeyRequest(); // \SeatsChart\Client\Model\PostApiSandboxesBySandboxIdAdminKeyRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiSandboxesBySandboxIdAdminKey($sandbox_id, $post_api_sandboxes_by_sandbox_id_admin_key_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxesApi->postApiSandboxesBySandboxIdAdminKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sandbox_id** | **string**|  | |
| **post_api_sandboxes_by_sandbox_id_admin_key_request** | [**\SeatsChart\Client\Model\PostApiSandboxesBySandboxIdAdminKeyRequest**](../Model/PostApiSandboxesBySandboxIdAdminKeyRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiSandboxesBySandboxIdAdminKey201Response**](../Model/PostApiSandboxesBySandboxIdAdminKey201Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

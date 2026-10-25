# SeatsChart\Client\WebhooksApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiWebhooksById()**](WebhooksApi.md#deleteApiWebhooksById) | **DELETE** /api/webhooks/{id} | Delete a webhook |
| [**getApiWebhooks()**](WebhooksApi.md#getApiWebhooks) | **GET** /api/webhooks | List webhooks for the authenticated tenant |
| [**getApiWebhooksByIdDeliveries()**](WebhooksApi.md#getApiWebhooksByIdDeliveries) | **GET** /api/webhooks/{id}/deliveries | List deliveries of a webhook endpoint |
| [**getApiWebhooksByIdDeliveriesByDeliveryId()**](WebhooksApi.md#getApiWebhooksByIdDeliveriesByDeliveryId) | **GET** /api/webhooks/{id}/deliveries/{deliveryId} | Get one webhook delivery with its request payload |
| [**getApiWebhooksEventTypes()**](WebhooksApi.md#getApiWebhooksEventTypes) | **GET** /api/webhooks/event-types | List subscribable webhook event types |
| [**patchApiWebhooksById()**](WebhooksApi.md#patchApiWebhooksById) | **PATCH** /api/webhooks/{id} | Update a webhook |
| [**postApiWebhooks()**](WebhooksApi.md#postApiWebhooks) | **POST** /api/webhooks | Create a webhook endpoint |
| [**postApiWebhooksByIdDeliveriesByDeliveryIdReplay()**](WebhooksApi.md#postApiWebhooksByIdDeliveriesByDeliveryIdReplay) | **POST** /api/webhooks/{id}/deliveries/{deliveryId}/replay | Replay a webhook delivery |
| [**postApiWebhooksByIdRotateSecret()**](WebhooksApi.md#postApiWebhooksByIdRotateSecret) | **POST** /api/webhooks/{id}/rotate-secret | Rotate a webhook signing secret |
| [**postApiWebhooksByIdTest()**](WebhooksApi.md#postApiWebhooksByIdTest) | **POST** /api/webhooks/{id}/test | Send a signed test event |


## `deleteApiWebhooksById()`

```php
deleteApiWebhooksById($id, $idempotency_key)
```

Delete a webhook

Removes the registration permanently. Idempotent `404` applies when the webhook id is unknown or belongs to another tenant.

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook UUID (stored lowercase)
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiWebhooksById($id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteApiWebhooksById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook UUID (stored lowercase) | |
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

## `getApiWebhooks()`

```php
getApiWebhooks()
```

List webhooks for the authenticated tenant

Returns all outbound webhook endpoints of the authenticated tenant with their event-type subscription (`eventTypes`, `[\"*\"]` = all) and the outcome of the most recent delivery (`lastDelivery`). Requires the `webhooks` scope for scoped API keys.

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiWebhooks();
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getApiWebhooks: ', $e->getMessage(), PHP_EOL;
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

## `getApiWebhooksByIdDeliveries()`

```php
getApiWebhooksByIdDeliveries($id, $limit, $cursor, $status, $event_type, $source)
```

List deliveries of a webhook endpoint

Newest first, cursor-paginated (`nextCursor`). Combines the durable SQL outbox (`reservations.confirmed`, retried with exponential backoff) with fire-and-forget dispatches (`holds.*`, `ga.*`, `objects.updated`, …), test events and replays. Entries expose event id, type, status, attempts, HTTP status and a stable error code only — never response bodies, URLs or credentials. Direct-send entries are retained for `WEBHOOK_DELIVERY_RETENTION_DAYS` (default 30).

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook UUID (stored lowercase)
$limit = 3.4; // float | Page size (1..100, default 20).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` value from the previous page.
$status = 'status_example'; // string | `pending` also matches deliveries currently being attempted (`processing`).
$event_type = 'event_type_example'; // string
$source = 'source_example'; // string

try {
    $apiInstance->getApiWebhooksByIdDeliveries($id, $limit, $cursor, $status, $event_type, $source);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getApiWebhooksByIdDeliveries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook UUID (stored lowercase) | |
| **limit** | **float**| Page size (1..100, default 20). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; value from the previous page. | [optional] |
| **status** | **string**| &#x60;pending&#x60; also matches deliveries currently being attempted (&#x60;processing&#x60;). | [optional] |
| **event_type** | **string**|  | [optional] |
| **source** | **string**|  | [optional] |

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

## `getApiWebhooksByIdDeliveriesByDeliveryId()`

```php
getApiWebhooksByIdDeliveriesByDeliveryId($id, $delivery_id)
```

Get one webhook delivery with its request payload

Same fields as the list plus `payload`: the JSON request body that was sent (identical bytes are re-sent by replay). Remote response bodies are never stored.

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook UUID (stored lowercase)
$delivery_id = 'delivery_id_example'; // string

try {
    $apiInstance->getApiWebhooksByIdDeliveriesByDeliveryId($id, $delivery_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getApiWebhooksByIdDeliveriesByDeliveryId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook UUID (stored lowercase) | |
| **delivery_id** | **string**|  | |

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

## `getApiWebhooksEventTypes()`

```php
getApiWebhooksEventTypes()
```

List subscribable webhook event types

Event types an endpoint can subscribe to through `eventTypes`. `webhook.test` is sent only by `POST /api/webhooks/{id}/test` and cannot be subscribed to.

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiWebhooksEventTypes();
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getApiWebhooksEventTypes: ', $e->getMessage(), PHP_EOL;
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

## `patchApiWebhooksById()`

```php
patchApiWebhooksById($id, $patch_api_webhooks_by_id_request, $idempotency_key)
```

Update a webhook

Partial update of `url`, `isActive` and/or `eventTypes` (`[\"*\"]` = every type). Subscription changes apply to events emitted afterwards; queued outbox retries keep their original destinations. Only webhooks owned by the authenticated tenant can be modified.

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook UUID (stored lowercase)
$patch_api_webhooks_by_id_request = new \SeatsChart\Client\Model\PatchApiWebhooksByIdRequest(); // \SeatsChart\Client\Model\PatchApiWebhooksByIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiWebhooksById($id, $patch_api_webhooks_by_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->patchApiWebhooksById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook UUID (stored lowercase) | |
| **patch_api_webhooks_by_id_request** | [**\SeatsChart\Client\Model\PatchApiWebhooksByIdRequest**](../Model/PatchApiWebhooksByIdRequest.md)|  | |
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

## `postApiWebhooks()`

```php
postApiWebhooks($post_api_webhooks_request, $idempotency_key)
```

Create a webhook endpoint

Registers an HTTPS callback URL (except `http://localhost` / `127.0.0.1` only for local development). Duplicate URLs per tenant are rejected with `409 Conflict`. `eventTypes` defaults to `[\"*\"]` (every type); unknown types are rejected with `400`. The response includes `signingSecret` exactly once: deliveries to this endpoint carry `x-seatschart-signature: sha256=<hex HMAC-SHA256 of the raw body>` keyed with it, plus `x-seatschart-timestamp` and `x-seatschart-signature-v2: t=<unix seconds>,v1=<hex HMAC-SHA256 of \"t.rawBody\">` (recommended: verify v1 in constant time and reject timestamps more than 5 minutes old), `X-SeatsChart-Event` and `X-SeatsChart-Event-Id`. In production the host is DNS-resolved at registration and refused when any record is loopback, private, link-local, CGNAT or metadata; every send re-resolves and pins a public address and never follows redirects.

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_webhooks_request = new \SeatsChart\Client\Model\PostApiWebhooksRequest(); // \SeatsChart\Client\Model\PostApiWebhooksRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiWebhooks($post_api_webhooks_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postApiWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_webhooks_request** | [**\SeatsChart\Client\Model\PostApiWebhooksRequest**](../Model/PostApiWebhooksRequest.md)|  | |
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

## `postApiWebhooksByIdDeliveriesByDeliveryIdReplay()`

```php
postApiWebhooksByIdDeliveriesByDeliveryIdReplay($id, $delivery_id, $idempotency_key)
```

Replay a webhook delivery

Re-sends the identical request body and `X-SeatsChart-Event-Id` of the original delivery, signed with the endpoint’s CURRENT secret (`x-seatschart-signature`), so receivers can deduplicate by event id. One synchronous attempt; the result is recorded as a new `replay` delivery and returned with `200` whether the remote accepted it or not (inspect `delivery.status`). Works for paused endpoints. Rate limited per workspace (`WEBHOOK_MANUAL_SEND_MAX` per `WEBHOOK_MANUAL_SEND_WINDOW_SEC`, default 30/60 s): `429` with `Retry-After`.

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook UUID (stored lowercase)
$delivery_id = 'delivery_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Optional. Repeating a replay with the same key returns the first result instead of sending again.

try {
    $apiInstance->postApiWebhooksByIdDeliveriesByDeliveryIdReplay($id, $delivery_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postApiWebhooksByIdDeliveriesByDeliveryIdReplay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook UUID (stored lowercase) | |
| **delivery_id** | **string**|  | |
| **idempotency_key** | **string**| Optional. Repeating a replay with the same key returns the first result instead of sending again. | [optional] |

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

## `postApiWebhooksByIdRotateSecret()`

```php
postApiWebhooksByIdRotateSecret($id, $idempotency_key)
```

Rotate a webhook signing secret

Replaces the endpoint HMAC key and returns the new `signingSecret` once. The old key stops working immediately, including for queued retries. Endpoints created before per-endpoint secrets are signed with the deployment `WEBHOOK_SIGNING_SECRET` until rotated.

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook UUID (stored lowercase)
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiWebhooksByIdRotateSecret($id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postApiWebhooksByIdRotateSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook UUID (stored lowercase) | |
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

## `postApiWebhooksByIdTest()`

```php
postApiWebhooksByIdTest($id, $idempotency_key)
```

Send a signed test event

Sends `{\"eventId\",\"type\":\"webhook.test\",\"occurred_at\",\"tenant_id\",\"test\":true,\"items\":[]}` signed with the endpoint’s current secret, regardless of its event-type subscription or paused state. One synchronous attempt recorded as a `test` delivery; `200` with `delivery.status` `delivered` or `failed` (`httpStatus`, `lastErrorCode`). Shares the replay rate limit (`429` + `Retry-After`).

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


$apiInstance = new SeatsChart\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook UUID (stored lowercase)
$idempotency_key = 'idempotency_key_example'; // string

try {
    $apiInstance->postApiWebhooksByIdTest($id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postApiWebhooksByIdTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook UUID (stored lowercase) | |
| **idempotency_key** | **string**|  | [optional] |

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

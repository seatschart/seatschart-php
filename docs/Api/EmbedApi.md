# SeatsChart\Client\EmbedApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiTicketBuyers()**](EmbedApi.md#getApiTicketBuyers) | **GET** /api/ticket-buyers | List registered ticket buyer ids |
| [**postApiEmbedTokens()**](EmbedApi.md#postApiEmbedTokens) | **POST** /api/embed-tokens | Mint a short-lived designer/manager embed token |
| [**postApiTicketBuyers()**](EmbedApi.md#postApiTicketBuyers) | **POST** /api/ticket-buyers | Register ticket buyer ids |
| [**postApiTicketBuyersActionsRemove()**](EmbedApi.md#postApiTicketBuyersActionsRemove) | **POST** /api/ticket-buyers/actions/remove | Remove ticket buyer ids |
| [**postApiViewerTokens()**](EmbedApi.md#postApiViewerTokens) | **POST** /api/viewer-tokens | Mint a short-lived buyer (viewer) token with the partner API key |


## `getApiTicketBuyers()`

```php
getApiTicketBuyers($limit, $cursor)
```

List registered ticket buyer ids

Ordered by id; page with `cursor` = the previous `nextCursor`. API key (`holds` scope) or a dashboard session that manages integrations.

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


$apiInstance = new SeatsChart\Client\Api\EmbedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$cursor = 'cursor_example'; // string | `nextCursor` of the previous page.

try {
    $apiInstance->getApiTicketBuyers($limit, $cursor);
} catch (Exception $e) {
    echo 'Exception when calling EmbedApi->getApiTicketBuyers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] |
| **cursor** | **string**| &#x60;nextCursor&#x60; of the previous page. | [optional] |

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

## `postApiEmbedTokens()`

```php
postApiEmbedTokens($post_api_embed_tokens_request, $idempotency_key)
```

Mint a short-lived designer/manager embed token

HS256 audience `embed`, max TTL 30 minutes. Never put the workspace API secret in the browser. See docs/SEATSIO_PARITY.md.

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


$apiInstance = new SeatsChart\Client\Api\EmbedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_embed_tokens_request = new \SeatsChart\Client\Model\PostApiEmbedTokensRequest(); // \SeatsChart\Client\Model\PostApiEmbedTokensRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEmbedTokens($post_api_embed_tokens_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EmbedApi->postApiEmbedTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_embed_tokens_request** | [**\SeatsChart\Client\Model\PostApiEmbedTokensRequest**](../Model/PostApiEmbedTokensRequest.md)|  | |
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

## `postApiTicketBuyers()`

```php
postApiTicketBuyers($post_api_ticket_buyers_request, $idempotency_key)
```

Register ticket buyer ids

Adds ids to the workspace allow-list (idempotent). With ticket buyer validation on (`PATCH /workspace/settings`), `POST /viewer-tokens` mints a buyer token only for a registered `ticketBuyerId` and binds it (`tbid` claim): the buyer's holds carry that id, and a different `ticketBuyerId` is refused. Holds never query this list.

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


$apiInstance = new SeatsChart\Client\Api\EmbedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_ticket_buyers_request = new \SeatsChart\Client\Model\PostApiTicketBuyersRequest(); // \SeatsChart\Client\Model\PostApiTicketBuyersRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiTicketBuyers($post_api_ticket_buyers_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EmbedApi->postApiTicketBuyers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_ticket_buyers_request** | [**\SeatsChart\Client\Model\PostApiTicketBuyersRequest**](../Model/PostApiTicketBuyersRequest.md)|  | |
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

## `postApiTicketBuyersActionsRemove()`

```php
postApiTicketBuyersActionsRemove($post_api_ticket_buyers_request, $idempotency_key)
```

Remove ticket buyer ids

Removes ids from the allow-list. Buyer tokens already minted keep their binding until they expire (at most one hour).

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


$apiInstance = new SeatsChart\Client\Api\EmbedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_ticket_buyers_request = new \SeatsChart\Client\Model\PostApiTicketBuyersRequest(); // \SeatsChart\Client\Model\PostApiTicketBuyersRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiTicketBuyersActionsRemove($post_api_ticket_buyers_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EmbedApi->postApiTicketBuyersActionsRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_ticket_buyers_request** | [**\SeatsChart\Client\Model\PostApiTicketBuyersRequest**](../Model/PostApiTicketBuyersRequest.md)|  | |
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

## `postApiViewerTokens()`

```php
postApiViewerTokens($post_api_viewer_tokens_request, $idempotency_key)
```

Mint a short-lived buyer (viewer) token with the partner API key

Server-to-server only (`x-api-key`, `holds` scope). Returns an HS256 buyer JWT bound to the API key's workspace (`tenant_id` claim) for the viewer `?token=` / `token` prop or `Authorization: Bearer` on consumer routes. Partners never need the platform `JWT_SECRET`. Mint one per buyer session from your server; never expose the API key in the browser. Lifetime 60-3600 seconds (default 900). Buyer tokens cannot mint tokens (403). Optional `ticketBuyerId` binds the token to a ticket buyer: holds made with it carry that id. With the workspace setting **ticket buyer validation** on, `ticketBuyerId` is required (400 `ticket_buyer_id_required`) and must be registered (`POST /ticket-buyers`; 403 `ticket_buyer_not_registered`); buyer holds then refuse a different id (403 `ticket_buyer_mismatch`) and tokens without one (403 `ticket_buyer_required`). Response: `{ token, tokenType: \"Bearer\", expiresInSeconds, expiresAt, ticketBuyerId? }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SeatsChart\Client\Api\EmbedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_viewer_tokens_request = new \SeatsChart\Client\Model\PostApiViewerTokensRequest(); // \SeatsChart\Client\Model\PostApiViewerTokensRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiViewerTokens($post_api_viewer_tokens_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EmbedApi->postApiViewerTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_viewer_tokens_request** | [**\SeatsChart\Client\Model\PostApiViewerTokensRequest**](../Model/PostApiViewerTokensRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

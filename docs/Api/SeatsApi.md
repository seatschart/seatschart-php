# SeatsChart\Client\SeatsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiChannels()**](SeatsApi.md#getApiChannels) | **GET** /api/channels | List sales channels |
| [**getApiHoldTokensByToken()**](SeatsApi.md#getApiHoldTokensByToken) | **GET** /api/hold-tokens/{token} | Validate a hold-token session |
| [**getApiSeatsGroup()**](SeatsApi.md#getApiSeatsGroup) | **GET** /api/seats/group | Event-group availability intersection by label |
| [**postApiGaConfirm()**](SeatsApi.md#postApiGaConfirm) | **POST** /api/ga/confirm | Confirm GA purchase (Postgres sold_count) |
| [**postApiGaRelease()**](SeatsApi.md#postApiGaRelease) | **POST** /api/ga/release | Release a GA capacity hold |
| [**postApiGaReserve()**](SeatsApi.md#postApiGaReserve) | **POST** /api/ga/reserve | Hold GA area capacity (Redis) |
| [**postApiHoldTokens()**](SeatsApi.md#postApiHoldTokens) | **POST** /api/hold-tokens | Create an empty hold-token session |
| [**postApiHoldTokensByToken()**](SeatsApi.md#postApiHoldTokensByToken) | **POST** /api/hold-tokens/{token} | Change hold-token expiration (max 2h from creation) |
| [**postApiSeatsBestAvailable()**](SeatsApi.md#postApiSeatsBestAvailable) | **POST** /api/seats/best-available | Suggest or atomically hold best available seats |
| [**postApiSeatsConfirm()**](SeatsApi.md#postApiSeatsConfirm) | **POST** /api/seats/confirm | Accept a durable confirmation intent before asynchronous seat materialization |
| [**postApiSeatsHoldsRelease()**](SeatsApi.md#postApiSeatsHoldsRelease) | **POST** /api/seats/holds/release | Release all seats held by a hold token |
| [**postApiSeatsHoldsRenew()**](SeatsApi.md#postApiSeatsHoldsRenew) | **POST** /api/seats/holds/renew | Renew Redis TTL for all seats in a hold session |
| [**postApiSeatsRelease()**](SeatsApi.md#postApiSeatsRelease) | **POST** /api/seats/release | Clear Redis TTL holds before expiry (checkout abandoned / declined) |
| [**postApiSeatsReserve()**](SeatsApi.md#postApiSeatsReserve) | **POST** /api/seats/reserve | Place a temporary Redis hold (Lua TTL) before payment |


## `getApiChannels()`

```php
getApiChannels()
```

List sales channels

Returns channel ids with per-order seat limits (web, box_office, partner). Pass `channel` on best-available, reserve, and confirm.

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiChannels();
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->getApiChannels: ', $e->getMessage(), PHP_EOL;
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

## `getApiHoldTokensByToken()`

```php
getApiHoldTokensByToken($token)
```

Validate a hold-token session

Returns seatIds and expiry for a live hold token. Does not mutate Redis locks or the hold:token JSON. 410 when expired, 404 when the token is not in this tenant.

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $apiInstance->getApiHoldTokensByToken($token);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->getApiHoldTokensByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

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

## `getApiSeatsGroup()`

```php
getApiSeatsGroup($event_ids)
```

Event-group availability intersection by label

A label is selectable only when it is free on every non-past member (cap 50). Does not join seasons. See docs/SEATSIO_PARITY.md.

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_ids = 'event_ids_example'; // string

try {
    $apiInstance->getApiSeatsGroup($event_ids);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->getApiSeatsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_ids** | **string**|  | |

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

## `postApiGaConfirm()`

```php
postApiGaConfirm($idempotency_key, $post_api_ga_confirm_request)
```

Confirm GA purchase (Postgres sold_count)

Server-to-server only (`x-api-key`): commits GA capacity after payment. SeatsChart-catalog events require a durable quote and matching externalPaymentId/paidAmountCents/paidCurrency; partner-priced events accept the declared paidAmountCents without a quote and synced catalogs validate it (409 `price_mismatch`). The final ticketTypeId is re-checked against the event sales rules (409 `quota_exceeded`, `buyer_limit_exceeded`, `lot_sold_out`) and the quantity against the organizer's booking limits (409 `booking_limit_exceeded`; holds placed before the current limits were published stay confirmable). Previously accepted legacy receipts remain retryable. Consumer JWTs are rejected. Durably records Idempotency-Key and conditionally increments sold_count before reconciling Redis holds. **Idempotency-Key** required. Optional `ticketBuyerId` is stored on the GA receipt (inherited from the hold token when omitted). Quote failures return 409 with `error: quote_required` (no quoteId) or `error: quote_mismatch` (quote or payment attestation does not match).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | Required. Reuse with the same request on retry; a different payload conflicts. Seat confirmation binds this key durably in PostgreSQL; hold mutations use bounded Redis receipts.
$post_api_ga_confirm_request = new \SeatsChart\Client\Model\PostApiGaConfirmRequest(); // \SeatsChart\Client\Model\PostApiGaConfirmRequest

try {
    $apiInstance->postApiGaConfirm($idempotency_key, $post_api_ga_confirm_request);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiGaConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| Required. Reuse with the same request on retry; a different payload conflicts. Seat confirmation binds this key durably in PostgreSQL; hold mutations use bounded Redis receipts. | |
| **post_api_ga_confirm_request** | [**\SeatsChart\Client\Model\PostApiGaConfirmRequest**](../Model/PostApiGaConfirmRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiGaRelease()`

```php
postApiGaRelease($idempotency_key, $post_api_ga_release_request)
```

Release a GA capacity hold

Clears this user's Redis GA hold for an area. Optional `holdToken` is deleted when it matches tenant/event/user. **Idempotency-Key** required. Emits SSE `ga` and webhook `ga.released`.

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | Required. Reuse with the same request on retry; a different payload conflicts. Seat confirmation binds this key durably in PostgreSQL; hold mutations use bounded Redis receipts.
$post_api_ga_release_request = new \SeatsChart\Client\Model\PostApiGaReleaseRequest(); // \SeatsChart\Client\Model\PostApiGaReleaseRequest

try {
    $apiInstance->postApiGaRelease($idempotency_key, $post_api_ga_release_request);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiGaRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| Required. Reuse with the same request on retry; a different payload conflicts. Seat confirmation binds this key durably in PostgreSQL; hold mutations use bounded Redis receipts. | |
| **post_api_ga_release_request** | [**\SeatsChart\Client\Model\PostApiGaReleaseRequest**](../Model/PostApiGaReleaseRequest.md)|  | |

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

## `postApiGaReserve()`

```php
postApiGaReserve($idempotency_key, $post_api_ga_reserve_request)
```

Hold GA area capacity (Redis)

Places a temporary hold on unnumbered GA capacity. **Idempotency-Key** is required; repeats within ~24h return the cached hold response. Optional `ticketBuyerId` is stored on the GA hold token and inherited by `POST /ga/confirm`. The organizer's booking limits cap `quantity` (designer *Max GA tickets per order*, else *Max seats per order*; strictest with the sales-channel default): 409 `booking_limit_exceeded` (`limit`, `current`, `requested`, `kind: \"ga\"`). GA tables sold as a whole (`shape.bookAs: \"whole\"`) take every place in one hold: any other `quantity` answers 409 `ga_table_whole` (`capacity`, `requested`).

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | Required. Reuse with the same request on retry; a different payload conflicts. Seat confirmation binds this key durably in PostgreSQL; hold mutations use bounded Redis receipts.
$post_api_ga_reserve_request = new \SeatsChart\Client\Model\PostApiGaReserveRequest(); // \SeatsChart\Client\Model\PostApiGaReserveRequest

try {
    $apiInstance->postApiGaReserve($idempotency_key, $post_api_ga_reserve_request);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiGaReserve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| Required. Reuse with the same request on retry; a different payload conflicts. Seat confirmation binds this key durably in PostgreSQL; hold mutations use bounded Redis receipts. | |
| **post_api_ga_reserve_request** | [**\SeatsChart\Client\Model\PostApiGaReserveRequest**](../Model/PostApiGaReserveRequest.md)|  | |

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

## `postApiHoldTokens()`

```php
postApiHoldTokens($post_api_hold_tokens_request, $idempotency_key)
```

Create an empty hold-token session

Seats.io-style session start. Attach seats via reserve using this token later, or renew TTL with POST /hold-tokens/:token. Optional `ticketBuyerId` (opaque partner buyer id) is stored on the session and inherited by its confirmation. Optional `expiresInMinutes` (1–120, seats.io `holdTokens.create(expiresInMinutes)`) sets the session lifetime instead of the workspace hold period; buyer tokens get 403.

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_hold_tokens_request = new \SeatsChart\Client\Model\PostApiHoldTokensRequest(); // \SeatsChart\Client\Model\PostApiHoldTokensRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiHoldTokens($post_api_hold_tokens_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiHoldTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_hold_tokens_request** | [**\SeatsChart\Client\Model\PostApiHoldTokensRequest**](../Model/PostApiHoldTokensRequest.md)|  | |
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

## `postApiHoldTokensByToken()`

```php
postApiHoldTokensByToken($token, $post_api_hold_tokens_by_token_request, $idempotency_key)
```

Change hold-token expiration (max 2h from creation)

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$post_api_hold_tokens_by_token_request = new \SeatsChart\Client\Model\PostApiHoldTokensByTokenRequest(); // \SeatsChart\Client\Model\PostApiHoldTokensByTokenRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiHoldTokensByToken($token, $post_api_hold_tokens_by_token_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiHoldTokensByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |
| **post_api_hold_tokens_by_token_request** | [**\SeatsChart\Client\Model\PostApiHoldTokensByTokenRequest**](../Model/PostApiHoldTokensByTokenRequest.md)|  | |
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

## `postApiSeatsBestAvailable()`

```php
postApiSeatsBestAvailable($post_api_seats_best_available_request, $idempotency_key)
```

Suggest or atomically hold best available seats

Returns seat IDs for the requested quantity, preferring adjacent same-row groups near the map center. Filter the candidate pool by `category` (or ordered `categories`, max 10: windows of the first category are tried before the second, and so on), optional `sectionId` (layout section id or name) and optional `zone` (layout zone id or name; seats resolve explicit zone assignment, then their section zone, then the zone outline) before ranking. `tryToPreventOrphanSeats` (default **true**) skips adjacent windows that would leave a single empty seat at either end of the run, falling back to them only when nothing else fits. `ticketTypes` (`{ ticketTypeId: count }`) sets `quantity` to the sum, restricts the search to categories whose ticket catalog offers every requested type, and returns `ticketTypes` (seatId → ticketTypeId) ready to send as `seatTicketTypes` on confirm; events without ticket types reject it. `accessibleSeats` (N) only returns windows containing at least N seats flagged `accessibility.wheelchair` in the published seat structure (409 when no such window exists). `channel` is salesChannel order limits only. Pass **`x-channel-key`** for inventory partitions — do not send the secret in the body. **`hold: false` (default):** suggest only — does not lock. **`hold: true`:** ranks up to 32 candidate windows across the category preferences, locks the first fit in one Lua call each (all-or-nothing per window), then O(cart) PG gates (available/forSale/channel); on gate failure releases only the locks it added. Requires **Idempotency-Key**, and `userId` unless `holdToken` is given. `holdToken` appends the seats to that existing hold session (same expiry bound; 409 `hold_token_conflict` when the session is expired, foreign, confirming or full). `extraData` is stored on the held seats (requires hold). Returns `hold_token` for confirm. The organizer's booking limits (designer *Max seats per order*) cap `quantity` and, with `holdToken`, the seats already on the token: best-available never picks more than allowed (409 `booking_limit_exceeded` with `limit`, `current`, `requested`). `sections` (max 20 section ids or names, XOR with `sectionId`) ranks across the union of those sections. **API keys / dashboard sessions only:** `channelKeys` (channel secret keys or ids) restricts the pool to public seats plus those channels, `ignoreChannels: true` allows every channel (both replace `x-channel-key`; buyers get 403). `orderId` (with `hold`) is stored on the held seats as `extraData.orderId` and echoed in the response; pass it as `externalOrderId` on confirm. **`status: \"booked\"`** (API keys with the `bookings` scope, or dashboard sessions allowed to change object statuses; buyers get 403) books the best window directly instead of holding it: the same administrative booking as POST /events/{eventId}/actions/book (one SQL transaction under the seat row locks; a seat held by a buyer is never taken; when a ranked window was taken meanwhile the next one is tried). Requires **Idempotency-Key**: the booking order id is derived from it, so a retry returns the same booking. `ticketTypes` are recorded per seat, `extraData` and `orderId` (as `extraData.orderId`) are stored on the booked seats. Response: `status: \"booked\"`, `booked: true`, `bookingOrderId` (cancel with POST /orders/{orderId}/cancel) and `objects` (status, extraData, orderId, ticketType per seat). `status: \"reservedByToken\"` is the same as `hold: true`. **`keepExtraData: true`** (hold or booked) keeps the seats' stored extraData and merges `extraData` / `orderId` on top instead of replacing it.

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_seats_best_available_request = new \SeatsChart\Client\Model\PostApiSeatsBestAvailableRequest(); // \SeatsChart\Client\Model\PostApiSeatsBestAvailableRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeatsBestAvailable($post_api_seats_best_available_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiSeatsBestAvailable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_seats_best_available_request** | [**\SeatsChart\Client\Model\PostApiSeatsBestAvailableRequest**](../Model/PostApiSeatsBestAvailableRequest.md)|  | |
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

## `postApiSeatsConfirm()`

```php
postApiSeatsConfirm($x_api_key, $idempotency_key, $post_api_seats_confirm_request, $x_tenant_id)
```

Accept a durable confirmation intent before asynchronous seat materialization

Server-to-server only (`x-api-key`). **Pricing source** (workspace integration mode or event sales rules): `partner` events confirm the declared `seatTicketTypes` and `seatPrices` (or `paidAmountCents`) without a quote; `synced_catalog` events validate them against the pushed price table (409 `price_mismatch`, `price_table_missing`, `ticket_type_required`); `seatschart_catalog` events require a durable catalog quote created before external payment. Final ticket types are re-checked against the event quotas and buyer limit (409 `quota_exceeded`, `buyer_limit_exceeded`, `lot_sold_out`). Configure event currency before quoting. The organizer's booking limits are re-checked (defence in depth; holds enforce them atomically): 409 `booking_limit_exceeded` (`limit`, `requested`), except for holds placed before the current limits were published. After verifying payment with your provider, send quoteId, externalPaymentId, paidAmountCents, paidCurrency and the **`holdToken`** capability returned via `POST /api/seats/reserve`. These payment fields are the authenticated partner's attestation, not gateway verification by SeatsChart. Retries of already accepted legacy decisions remain supported without a quote. Consumer JWTs are rejected — confirmation must not run from the browser. Validates Redis holds, then commits the order and requested items in PostgreSQL before 202. Stream delivery is a best-effort trigger; pending SQL items are reconciled by the worker. Provide externalOrderId for stable partner identity. Legacy callers use a durable tenant-scoped Idempotency-Key identity. Season/group holds require scope=hold and the full source seatIds set; all frozen destinations form one atomic order. GET /api/orders/:orderId reports the atomic cart outcome. HTTP keys are durably bound to the authenticated credential and request; changed payload returns 409. Optional `ticketBuyerId` (opaque partner buyer id) is stored on the order, its reservations and object statuses; when omitted it is inherited from the hold token. Quote failures return 409 with `error: quote_required` (no quoteId) or `error: quote_mismatch` (quote or payment attestation does not match).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_key = 'x_api_key_example'; // string | Partner B2B API key (required for payment commit).
$idempotency_key = 'idempotency_key_example'; // string | Required key (max 255 chars after trim); durable fallback identity when externalOrderId is omitted.
$post_api_seats_confirm_request = new \SeatsChart\Client\Model\PostApiSeatsConfirmRequest(); // \SeatsChart\Client\Model\PostApiSeatsConfirmRequest
$x_tenant_id = 'x_tenant_id_example'; // string | Ignored for bootstrap env keys (bound to DEFAULT_TENANT_ID). Dashboard `sk_live_…` keys are tenant-scoped by hash.

try {
    $apiInstance->postApiSeatsConfirm($x_api_key, $idempotency_key, $post_api_seats_confirm_request, $x_tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiSeatsConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**| Partner B2B API key (required for payment commit). | |
| **idempotency_key** | **string**| Required key (max 255 chars after trim); durable fallback identity when externalOrderId is omitted. | |
| **post_api_seats_confirm_request** | [**\SeatsChart\Client\Model\PostApiSeatsConfirmRequest**](../Model/PostApiSeatsConfirmRequest.md)|  | |
| **x_tenant_id** | **string**| Ignored for bootstrap env keys (bound to DEFAULT_TENANT_ID). Dashboard &#x60;sk_live_…&#x60; keys are tenant-scoped by hash. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiSeatsHoldsRelease()`

```php
postApiSeatsHoldsRelease($post_api_seats_holds_renew_request, $idempotency_key)
```

Release all seats held by a hold token

Explicit abandon checkout — clears seat locks and GA holds, emits SSE `seat`/`ga` available. Idempotent when token already expired.

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_seats_holds_renew_request = new \SeatsChart\Client\Model\PostApiSeatsHoldsRenewRequest(); // \SeatsChart\Client\Model\PostApiSeatsHoldsRenewRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeatsHoldsRelease($post_api_seats_holds_renew_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiSeatsHoldsRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_seats_holds_renew_request** | [**\SeatsChart\Client\Model\PostApiSeatsHoldsRenewRequest**](../Model/PostApiSeatsHoldsRenewRequest.md)|  | |
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

## `postApiSeatsHoldsRenew()`

```php
postApiSeatsHoldsRenew($post_api_seats_holds_renew_request, $idempotency_key)
```

Renew Redis TTL for all seats in a hold session

Seat sessions require a capability. Renews only existing owned locks, capped at two hours from creation; never recreates expired locks. GA-only tokens retain their separate legacy lifecycle.

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_seats_holds_renew_request = new \SeatsChart\Client\Model\PostApiSeatsHoldsRenewRequest(); // \SeatsChart\Client\Model\PostApiSeatsHoldsRenewRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeatsHoldsRenew($post_api_seats_holds_renew_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiSeatsHoldsRenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_seats_holds_renew_request** | [**\SeatsChart\Client\Model\PostApiSeatsHoldsRenewRequest**](../Model/PostApiSeatsHoldsRenewRequest.md)|  | |
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

## `postApiSeatsRelease()`

```php
postApiSeatsRelease($idempotency_key, $post_api_seats_release_request, $x_api_key, $authorization, $x_tenant_id)
```

Clear Redis TTL holds before expiry (checkout abandoned / declined)

Deletes KeyDB TTL seat locks when they are authorized by the **`holdToken`** capability, rejects seats already sold in Postgres, publishes **`SSE` `available`** only for locks actually removed. **`Idempotency-Key`** header is **required**; repeats within ~24h return the cached response (no duplicate side effects). Also: **`x-api-key`** or **`Authorization: Bearer`**.

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | Required deduplication key (max 255 chars after trim); 24h cache replay in Redis per tenant + route.
$post_api_seats_release_request = new \SeatsChart\Client\Model\PostApiSeatsReleaseRequest(); // \SeatsChart\Client\Model\PostApiSeatsReleaseRequest
$x_api_key = 'x_api_key_example'; // string | Partner B2B API key (alternative to Bearer).
$authorization = 'authorization_example'; // string | Bearer + HS256 JWT for B2C clients.
$x_tenant_id = 'x_tenant_id_example'; // string | Tenant id for partner integrations.

try {
    $apiInstance->postApiSeatsRelease($idempotency_key, $post_api_seats_release_request, $x_api_key, $authorization, $x_tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiSeatsRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| Required deduplication key (max 255 chars after trim); 24h cache replay in Redis per tenant + route. | |
| **post_api_seats_release_request** | [**\SeatsChart\Client\Model\PostApiSeatsReleaseRequest**](../Model/PostApiSeatsReleaseRequest.md)|  | |
| **x_api_key** | **string**| Partner B2B API key (alternative to Bearer). | [optional] |
| **authorization** | **string**| Bearer + HS256 JWT for B2C clients. | [optional] |
| **x_tenant_id** | **string**| Tenant id for partner integrations. | [optional] |

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

## `postApiSeatsReserve()`

```php
postApiSeatsReserve($idempotency_key, $post_api_seats_reserve_request, $x_api_key, $authorization, $x_tenant_id)
```

Place a temporary Redis hold (Lua TTL) before payment

JSON body: `eventId`, `seatIds` (1–64 UUIDs, unique), `userId`, optional `holdToken` capability to append seats to an existing session. `userId` is customer metadata, never ownership proof. Renew/append share a two-hour maximum session lifetime. Optional `ticketBuyerId` (opaque partner buyer id) is stored on a new hold token and inherited by its confirmation. `eventId` also accepts the event key. Headers: **x-api-key** (B2B) *or* **Authorization: Bearer** (HS256 JWT); optional **x-tenant-id**; **`Idempotency-Key` is required** (1–255 chars after trim; use a fresh UUID v4 per checkout attempt). Repeats with the same key within ~24h return the cached HTTP status and JSON without re-running the Lua lock. Applies Redis TTL locks (**default 600 s**, overridden by **`SEAT_HOLD_TTL_SEC`**, or by the workspace **hold period** setting — `PATCH /workspace/settings`) with SSE `seat` → **`locked`**; Postgres remains **`available`** until **`POST /api/seats/confirm`** persists **`sold`** via the reservation worker. A hold token holds at most the workspace `maxSeatsPerHoldToken` seats (409 `seat_limit`). **Booking limits:** the organizer's *Max seats per order* (designer → Booking limits, stored as `layoutMeta.bookingRules` of the published chart/event layout) caps the seats one hold token holds, appends included, checked in the same atomic call as the locks (parallel appends cannot exceed it); the strictest of the sales-channel default, this limit, the per-buyer limit and `maxSeatsPerHoldToken` wins. Refused with 409 `booking_limit_exceeded` (`limit`, `current` seats already on the token, `requested`, `kind: \"seats\"`). Holds placed before a lower limit was published keep their seats and stay confirmable; they only cannot grow. With ticket buyer validation on, buyer tokens must carry a bound ticket buyer id (403 `ticket_buyer_required` / `ticket_buyer_mismatch`).

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


$apiInstance = new SeatsChart\Client\Api\SeatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | Required deduplication key (max 255 chars after trim; UUID v4 recommended). 24h idempotent cache replay in Redis per tenant.
$post_api_seats_reserve_request = new \SeatsChart\Client\Model\PostApiSeatsReserveRequest(); // \SeatsChart\Client\Model\PostApiSeatsReserveRequest
$x_api_key = 'x_api_key_example'; // string | Partner B2B API key (alternative to Bearer).
$authorization = 'authorization_example'; // string | Bearer + HS256 JWT for B2C clients.
$x_tenant_id = 'x_tenant_id_example'; // string | Tenant id for partner integrations.

try {
    $apiInstance->postApiSeatsReserve($idempotency_key, $post_api_seats_reserve_request, $x_api_key, $authorization, $x_tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling SeatsApi->postApiSeatsReserve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| Required deduplication key (max 255 chars after trim; UUID v4 recommended). 24h idempotent cache replay in Redis per tenant. | |
| **post_api_seats_reserve_request** | [**\SeatsChart\Client\Model\PostApiSeatsReserveRequest**](../Model/PostApiSeatsReserveRequest.md)|  | |
| **x_api_key** | **string**| Partner B2B API key (alternative to Bearer). | [optional] |
| **authorization** | **string**| Bearer + HS256 JWT for B2C clients. | [optional] |
| **x_tenant_id** | **string**| Tenant id for partner integrations. | [optional] |

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

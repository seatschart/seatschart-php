# SeatsChart\Client\ListingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiListingTypesByKey()**](ListingsApi.md#deleteApiListingTypesByKey) | **DELETE** /api/listing-types/{key} | Delete a listing type |
| [**getApiEventsByEventIdListings()**](ListingsApi.md#getApiEventsByEventIdListings) | **GET** /api/events/{eventId}/listings | List the listings of an event |
| [**getApiEventsByEventIdListingsByListingId()**](ListingsApi.md#getApiEventsByEventIdListingsByListingId) | **GET** /api/events/{eventId}/listings/{listingId} | Read a listing |
| [**getApiListingTypes()**](ListingsApi.md#getApiListingTypes) | **GET** /api/listing-types | List the listing types of the workspace |
| [**patchApiEventsByEventIdListingsByListingId()**](ListingsApi.md#patchApiEventsByEventIdListingsByListingId) | **PATCH** /api/events/{eventId}/listings/{listingId} | Update an active listing |
| [**patchApiListingTypesByKey()**](ListingsApi.md#patchApiListingTypesByKey) | **PATCH** /api/listing-types/{key} | Update a listing type |
| [**postApiEventsByEventIdListings()**](ListingsApi.md#postApiEventsByEventIdListings) | **POST** /api/events/{eventId}/listings | Create a listing |
| [**postApiEventsByEventIdListingsByListingIdActionsMarkSold()**](ListingsApi.md#postApiEventsByEventIdListingsByListingIdActionsMarkSold) | **POST** /api/events/{eventId}/listings/{listingId}/actions/mark-sold | Mark a listing as sold |
| [**postApiEventsByEventIdListingsByListingIdActionsWithdraw()**](ListingsApi.md#postApiEventsByEventIdListingsByListingIdActionsWithdraw) | **POST** /api/events/{eventId}/listings/{listingId}/actions/withdraw | Withdraw a listing |
| [**postApiListingTypes()**](ListingsApi.md#postApiListingTypes) | **POST** /api/listing-types | Create a listing type |


## `deleteApiListingTypesByKey()`

```php
deleteApiListingTypesByKey($key, $idempotency_key)
```

Delete a listing type

Refused while active listings use it (409 `listing_type_in_use`); closed listings keep their history without the type.

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiListingTypesByKey($key, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->deleteApiListingTypesByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
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

## `getApiEventsByEventIdListings()`

```php
getApiEventsByEventIdListings($event_id, $status, $type, $limit, $cursor)
```

List the listings of an event

Creation order; page with `cursor` = the previous `nextCursor`. Filter by `status` and `type` (`resale` includes untyped listings). A listing groups objects of one event sold together (`sellAsWhole`, default true) or one by one, with a price per object (`priceCents`, or per object in `objects[].priceCents`) or a `totalPriceCents` (sold as a whole only). An object belongs to at most one active listing (409 `listing_object_conflict`). **Holds:** holding any seat of a sold-as-whole listing holds all of its seats in the same atomic hold (POST /seats/reserve returns every seat); general-admission places of such a listing are held exactly as listed; confirming part of it is refused (409 `listing_incomplete`); best available never picks its seats. A confirmed order that sells every seat of an active listing closes it as `sold` with the order id. **With live holds**, withdrawing, or changing `objects` or `sellAsWhole`, is refused with 409 `listing_has_holds` (`heldObjects`) until the holds end (confirmed, released or expired); price, type and metadata changes apply at once. Viewers receive listings in the compact state (`listings` block) and live over SSE. Changes are written to the event log (`event.listings_updated`) and delivered as the `event.listings_updated` webhook.

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$status = 'status_example'; // string
$type = 'type_example'; // string
$limit = 56; // int | Page size (1..100, default 20).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` value from the previous page.

try {
    $apiInstance->getApiEventsByEventIdListings($event_id, $status, $type, $limit, $cursor);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getApiEventsByEventIdListings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **status** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **limit** | **int**| Page size (1..100, default 20). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; value from the previous page. | [optional] |

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

## `getApiEventsByEventIdListingsByListingId()`

```php
getApiEventsByEventIdListingsByListingId($event_id, $listing_id)
```

Read a listing

By id or key.

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$listing_id = 'listing_id_example'; // string | Listing id or key.

try {
    $apiInstance->getApiEventsByEventIdListingsByListingId($event_id, $listing_id);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getApiEventsByEventIdListingsByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **listing_id** | **string**| Listing id or key. | |

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

## `getApiListingTypes()`

```php
getApiListingTypes()
```

List the listing types of the workspace

Listing types give listings their look (`backgroundColor`, `iconColor`, `icon`, shown on seats, in the legend and on the listing price) and their semantics (`kind`: primary | resale, used by the viewer listingType filter). The reserved key `resale` styles every listing created without a type (seats.io convention).

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiListingTypes();
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getApiListingTypes: ', $e->getMessage(), PHP_EOL;
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

## `patchApiEventsByEventIdListingsByListingId()`

```php
patchApiEventsByEventIdListingsByListingId($event_id, $listing_id, $patch_api_events_by_event_id_listings_by_listing_id_request, $idempotency_key)
```

Update an active listing

Closed listings return 409 `listing_closed`. A listing groups objects of one event sold together (`sellAsWhole`, default true) or one by one, with a price per object (`priceCents`, or per object in `objects[].priceCents`) or a `totalPriceCents` (sold as a whole only). An object belongs to at most one active listing (409 `listing_object_conflict`). **Holds:** holding any seat of a sold-as-whole listing holds all of its seats in the same atomic hold (POST /seats/reserve returns every seat); general-admission places of such a listing are held exactly as listed; confirming part of it is refused (409 `listing_incomplete`); best available never picks its seats. A confirmed order that sells every seat of an active listing closes it as `sold` with the order id. **With live holds**, withdrawing, or changing `objects` or `sellAsWhole`, is refused with 409 `listing_has_holds` (`heldObjects`) until the holds end (confirmed, released or expired); price, type and metadata changes apply at once. Viewers receive listings in the compact state (`listings` block) and live over SSE. Changes are written to the event log (`event.listings_updated`) and delivered as the `event.listings_updated` webhook.

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$listing_id = 'listing_id_example'; // string | Listing id or key.
$patch_api_events_by_event_id_listings_by_listing_id_request = new \SeatsChart\Client\Model\PatchApiEventsByEventIdListingsByListingIdRequest(); // \SeatsChart\Client\Model\PatchApiEventsByEventIdListingsByListingIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiEventsByEventIdListingsByListingId($event_id, $listing_id, $patch_api_events_by_event_id_listings_by_listing_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->patchApiEventsByEventIdListingsByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **listing_id** | **string**| Listing id or key. | |
| **patch_api_events_by_event_id_listings_by_listing_id_request** | [**\SeatsChart\Client\Model\PatchApiEventsByEventIdListingsByListingIdRequest**](../Model/PatchApiEventsByEventIdListingsByListingIdRequest.md)|  | |
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

## `patchApiListingTypesByKey()`

```php
patchApiListingTypesByKey($key, $patch_api_listing_types_by_key_request, $idempotency_key)
```

Update a listing type

Viewers of events with active listings of this type receive the new look at once (SSE).

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string
$patch_api_listing_types_by_key_request = new \SeatsChart\Client\Model\PatchApiListingTypesByKeyRequest(); // \SeatsChart\Client\Model\PatchApiListingTypesByKeyRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiListingTypesByKey($key, $patch_api_listing_types_by_key_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->patchApiListingTypesByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**|  | |
| **patch_api_listing_types_by_key_request** | [**\SeatsChart\Client\Model\PatchApiListingTypesByKeyRequest**](../Model/PatchApiListingTypesByKeyRequest.md)|  | |
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

## `postApiEventsByEventIdListings()`

```php
postApiEventsByEventIdListings($event_id, $post_api_events_by_event_id_listings_request, $idempotency_key)
```

Create a listing

Objects by id or label (max 50); key unique per event (409 `listing_key_taken`; a UUID is generated when omitted). Partner keys need the `bookings` scope. A listing groups objects of one event sold together (`sellAsWhole`, default true) or one by one, with a price per object (`priceCents`, or per object in `objects[].priceCents`) or a `totalPriceCents` (sold as a whole only). An object belongs to at most one active listing (409 `listing_object_conflict`). **Holds:** holding any seat of a sold-as-whole listing holds all of its seats in the same atomic hold (POST /seats/reserve returns every seat); general-admission places of such a listing are held exactly as listed; confirming part of it is refused (409 `listing_incomplete`); best available never picks its seats. A confirmed order that sells every seat of an active listing closes it as `sold` with the order id. **With live holds**, withdrawing, or changing `objects` or `sellAsWhole`, is refused with 409 `listing_has_holds` (`heldObjects`) until the holds end (confirmed, released or expired); price, type and metadata changes apply at once. Viewers receive listings in the compact state (`listings` block) and live over SSE. Changes are written to the event log (`event.listings_updated`) and delivered as the `event.listings_updated` webhook.

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_listings_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdListingsRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdListingsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdListings($event_id, $post_api_events_by_event_id_listings_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->postApiEventsByEventIdListings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_listings_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdListingsRequest**](../Model/PostApiEventsByEventIdListingsRequest.md)|  | |
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

## `postApiEventsByEventIdListingsByListingIdActionsMarkSold()`

```php
postApiEventsByEventIdListingsByListingIdActionsMarkSold($event_id, $listing_id, $post_api_events_by_event_id_listings_by_listing_id_actions_mark_sold_request, $idempotency_key)
```

Mark a listing as sold

For listings sold outside SeatsChart (for example a resale settled by the partner). Listings sold through a confirmed order close by themselves.

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$listing_id = 'listing_id_example'; // string | Listing id or key.
$post_api_events_by_event_id_listings_by_listing_id_actions_mark_sold_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdListingsByListingIdActionsMarkSoldRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdListingsByListingIdActionsMarkSoldRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdListingsByListingIdActionsMarkSold($event_id, $listing_id, $post_api_events_by_event_id_listings_by_listing_id_actions_mark_sold_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->postApiEventsByEventIdListingsByListingIdActionsMarkSold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **listing_id** | **string**| Listing id or key. | |
| **post_api_events_by_event_id_listings_by_listing_id_actions_mark_sold_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdListingsByListingIdActionsMarkSoldRequest**](../Model/PostApiEventsByEventIdListingsByListingIdActionsMarkSoldRequest.md)|  | |
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

## `postApiEventsByEventIdListingsByListingIdActionsWithdraw()`

```php
postApiEventsByEventIdListingsByListingIdActionsWithdraw($event_id, $listing_id, $idempotency_key)
```

Withdraw a listing

The objects leave the listing (they keep their status; resale objects stay booked). Refused with 409 `listing_has_holds` while any object is held: retry after the holds end. Closed listings return 409 `listing_closed`.

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$listing_id = 'listing_id_example'; // string | Listing id or key.
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdListingsByListingIdActionsWithdraw($event_id, $listing_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->postApiEventsByEventIdListingsByListingIdActionsWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **listing_id** | **string**| Listing id or key. | |
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

## `postApiListingTypes()`

```php
postApiListingTypes($post_api_listing_types_request, $idempotency_key)
```

Create a listing type

Key unique per workspace (409 `listing_type_exists`). Partner keys need the `events_write` scope.

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


$apiInstance = new SeatsChart\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_listing_types_request = new \SeatsChart\Client\Model\PostApiListingTypesRequest(); // \SeatsChart\Client\Model\PostApiListingTypesRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiListingTypes($post_api_listing_types_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->postApiListingTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_listing_types_request** | [**\SeatsChart\Client\Model\PostApiListingTypesRequest**](../Model/PostApiListingTypesRequest.md)|  | |
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

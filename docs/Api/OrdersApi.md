# SeatsChart\Client\OrdersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiOrdersByOrderId()**](OrdersApi.md#getApiOrdersByOrderId) | **GET** /api/orders/{orderId} | Read a durable confirmation and its requested items |
| [**postApiOrdersByOrderIdCancel()**](OrdersApi.md#postApiOrdersByOrderIdCancel) | **POST** /api/orders/{orderId}/cancel | Cancel the entire order and preserve its history; does not refund payment |


## `getApiOrdersByOrderId()`

```php
getApiOrdersByOrderId($order_id)
```

Read a durable confirmation and its requested items

Partner API key with the `bookings` scope, or a dashboard session of a workspace member (any role); tenant-scoped. Returns the order status, `ticketBuyerId`, seat `items` and general-admission receipts (`gaItems`: quantity, `remaining` places after administrative releases, `cancelledAt`).

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


$apiInstance = new SeatsChart\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string

try {
    $apiInstance->getApiOrdersByOrderId($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getApiOrdersByOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |

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

## `postApiOrdersByOrderIdCancel()`

```php
postApiOrdersByOrderIdCancel($order_id, $post_api_orders_by_order_id_cancel_request, $idempotency_key)
```

Cancel the entire order and preserve its history; does not refund payment

Requires `Idempotency-Key`. Partner API key with the `bookings` scope, or a dashboard session of a workspace admin / map editor; `reason` is stored on the cancelled reservations and receipts. Cancels every seat of the order (seats become free, or retired when not for sale) and, for **administrative bookings**, every general-admission receipt: its remaining places (quantity minus administrative releases) are returned to the area under the GA row lock in the same transaction (`gaAreas: [{ eventId, areaId, returnedPlaces }]`). Receipts stay as history with `cancelledAt`. Retrying a cancelled order returns it unchanged. Orders with non-administrative GA receipts, legacy or failed orders fail closed (409 `inventory_conflict`). Payment refunds are the integrator's responsibility.

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


$apiInstance = new SeatsChart\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string
$post_api_orders_by_order_id_cancel_request = new \SeatsChart\Client\Model\PostApiOrdersByOrderIdCancelRequest(); // \SeatsChart\Client\Model\PostApiOrdersByOrderIdCancelRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiOrdersByOrderIdCancel($order_id, $post_api_orders_by_order_id_cancel_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->postApiOrdersByOrderIdCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**|  | |
| **post_api_orders_by_order_id_cancel_request** | [**\SeatsChart\Client\Model\PostApiOrdersByOrderIdCancelRequest**](../Model/PostApiOrdersByOrderIdCancelRequest.md)|  | |
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

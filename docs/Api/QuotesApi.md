# SeatsChart\Client\QuotesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiQuotes()**](QuotesApi.md#postApiQuotes) | **POST** /api/quotes | Freeze a server-calculated catalog quote before external payment |


## `postApiQuotes()`

```php
postApiQuotes($idempotency_key, $post_api_quotes_request)
```

Freeze a server-calculated catalog quote before external payment

Partner server only. Requires an organizer-configured event currency and live hold. Quotes expire after 10 minutes and do not extend inventory ownership. Amounts, currency, fees and discounts cannot be supplied by the caller. Every new confirm must attest the matching external payment reference, paidAmountCents and paidCurrency together with quoteId; only already accepted legacy decisions may retry without a quote. This API does not verify or charge an external payment gateway.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new SeatsChart\Client\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string
$post_api_quotes_request = new \SeatsChart\Client\Model\PostApiQuotesRequest(); // \SeatsChart\Client\Model\PostApiQuotesRequest

try {
    $apiInstance->postApiQuotes($idempotency_key, $post_api_quotes_request);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->postApiQuotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**|  | |
| **post_api_quotes_request** | [**\SeatsChart\Client\Model\PostApiQuotesRequest**](../Model/PostApiQuotesRequest.md)|  | |

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

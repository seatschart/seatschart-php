# SeatsChart\Client\MapDesignerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiExtractSeats()**](MapDesignerApi.md#postApiExtractSeats) | **POST** /api/extract-seats | Extract seat candidates with OpenCV |


## `postApiExtractSeats()`

```php
postApiExtractSeats($post_api_extract_seats_request, $seat_diameter, $closing_kernel, $canny_low, $canny_high, $idempotency_key)
```

Extract seat candidates with OpenCV

Multipart file and optional calibration JSON (sample patches, rotations and grouping); returns source-image pixel coordinates for review. Does not persist seats. Requires CV_SERVICE_URL.

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


$apiInstance = new SeatsChart\Client\Api\MapDesignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_extract_seats_request = new \SeatsChart\Client\Model\PostApiExtractSeatsRequest(); // \SeatsChart\Client\Model\PostApiExtractSeatsRequest
$seat_diameter = 3.4; // float
$closing_kernel = 'closing_kernel_example'; // string
$canny_low = 3.4; // float
$canny_high = 3.4; // float
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiExtractSeats($post_api_extract_seats_request, $seat_diameter, $closing_kernel, $canny_low, $canny_high, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling MapDesignerApi->postApiExtractSeats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_extract_seats_request** | [**\SeatsChart\Client\Model\PostApiExtractSeatsRequest**](../Model/PostApiExtractSeatsRequest.md)|  | |
| **seat_diameter** | **float**|  | [optional] |
| **closing_kernel** | **string**|  | [optional] |
| **canny_low** | **float**|  | [optional] |
| **canny_high** | **float**|  | [optional] |
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

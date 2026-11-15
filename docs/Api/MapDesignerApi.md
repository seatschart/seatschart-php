# SeatsChart\Client\MapDesignerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postApiExtractSeats()**](MapDesignerApi.md#postApiExtractSeats) | **POST** /api/extract-seats | Extract seat candidates from a floor-plan image |


## `postApiExtractSeats()`

```php
postApiExtractSeats($post_api_extract_seats_request, $seat_diameter, $closing_kernel, $canny_low, $canny_high, $idempotency_key): \SeatsChart\Client\Model\PostApiExtractSeats200Response
```

Extract seat candidates from a floor-plan image

Multipart image (PNG/JPEG/WebP, at most 8 MiB and 16 megapixels). Returns seat centres in source-image pixels for review in the map designer, plus the `mode` that produced them; nothing is persisted. Requires CV_SERVICE_URL.  Review (`auto` and `examples`): every seat carries a `confidence` (0-1) and the uncertain ones `doubtful: true`; `review` counts them and the designer shows them for a keep/remove decision instead of keeping them silently. `legibility` is `ok`, `low_resolution` or `no_individual_seats`; when it is not `ok` every seat is doubtful and the count is not reliable. `suggested` lists places where a seat was probably missed (not part of `seats`); the designer offers them in the review. Clicks never remove a seat on weak evidence: a seat they argue against stays, flagged `doubtful`. When the clicked seats (or, without clicks, an illegible plan) are tiny, the scanner reads the plan again upscaled. Vector plans: send the PDF or SVG as `vector` (and `vector_page`) next to its rendered image; the response says whether its geometry was `used`.  Modes: `auto` (default) finds the repeated seat glyphs on its own and infers size, rotation and threshold; `examples` uses 1-24 clicked seats (`examples`): a click on a missed seat adds that look, then only detections consistent with the clicked seats (their look, size and spacing, or the same drawn vector shape) stay, plus seats of another look that the scanner is confident about; every clicked seat is kept; `edges` is the legacy contour mode tuned by the `seat_diameter`/`closing_kernel` query parameters.  Refinements for `auto` and `examples`: `negatives` (points the user marked as not a seat after a scan) remove that detection and its look-alikes, or the whole style when most of it looks alike; `region` limits the scan to a rectangle.  `calibration` (sample patches) and `profile` (the mapa1-mapa6 regression benchmark) are kept for backward compatibility and cannot be combined with `mode`, `examples`, `negatives` or `region`. Errors: 422 for invalid parameters or work budgets, 413/415 for oversized or unsupported images (or a `vector` file that is neither PDF nor SVG), 503 when the scanner is busy or not configured, 504 on its 80-second deadline.

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
    $result = $apiInstance->postApiExtractSeats($post_api_extract_seats_request, $seat_diameter, $closing_kernel, $canny_low, $canny_high, $idempotency_key);
    print_r($result);
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

[**\SeatsChart\Client\Model\PostApiExtractSeats200Response**](../Model/PostApiExtractSeats200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# SeatsChart\Client\EventLogApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiEventLog()**](EventLogApi.md#getApiEventLog) | **GET** /api/event-log | Event log: admin changes of charts and events (cursor-paginated) |


## `getApiEventLog()`

```php
getApiEventLog($limit, $cursor, $types, $from, $to, $resource_id)
```

Event log: admin changes of charts and events (cursor-paginated)

Newest first, from the workspace audit log. Types: `chart.created`, `chart.published`, `chart.draft_discarded`, `chart.version_restored`, `chart.archived`, `chart.unarchived`, `chart.deleted`, `chart.tags_updated`, `chart.categories_updated`, `event.created`, `event.updated`, `event.deleted`, `event.map_published`, `event.for_sale_changed`, `event.channels_updated`, `event.categories_updated`, `event.table_booking_changed`, `event.sales_rules_updated`, `event.pricing_synced`, `event.moved_to_chart_copy`, `event.season_status_changed`. Filter with `types` (comma-separated), `from` (inclusive) / `to` (exclusive) ISO-8601 instants and `resourceId` (chart or event id). Pass `nextCursor` back as `cursor` with the same filters until it is null; pages are stable while new entries arrive. `data` carries the change details (never the actor e-mail). The admin types `chart.created`, `event.for_sale_changed`, `event.channels_updated`, `event.categories_updated` and `event.table_booking_changed` are also delivered as webhooks whose items carry `log_id` = the entry `id`. API key, or a dashboard member with the integrations permission (admin).

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


$apiInstance = new SeatsChart\Client\Api\EventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | Page size (1..100, default 20).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` value from the previous page.
$types = 'types_example'; // string | Comma-separated event log types (default: all).
$from = 'from_example'; // string | Inclusive lower bound (ISO-8601 instant).
$to = 'to_example'; // string | Exclusive upper bound (ISO-8601 instant).
$resource_id = 'resource_id_example'; // string | Only entries of this chart or event id.

try {
    $apiInstance->getApiEventLog($limit, $cursor, $types, $from, $to, $resource_id);
} catch (Exception $e) {
    echo 'Exception when calling EventLogApi->getApiEventLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| Page size (1..100, default 20). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; value from the previous page. | [optional] |
| **types** | **string**| Comma-separated event log types (default: all). | [optional] |
| **from** | **string**| Inclusive lower bound (ISO-8601 instant). | [optional] |
| **to** | **string**| Exclusive upper bound (ISO-8601 instant). | [optional] |
| **resource_id** | **string**| Only entries of this chart or event id. | [optional] |

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

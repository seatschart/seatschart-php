# SeatsChart\Client\SeasonsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiSeasonsBySeasonId()**](SeasonsApi.md#deleteApiSeasonsBySeasonId) | **DELETE** /api/seasons/{seasonId} | Delete season |
| [**deleteApiSeasonsBySeasonIdEventsByEventId()**](SeasonsApi.md#deleteApiSeasonsBySeasonIdEventsByEventId) | **DELETE** /api/seasons/{seasonId}/events/{eventId} | Detach event from season |
| [**deleteApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId()**](SeasonsApi.md#deleteApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId) | **DELETE** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId} | Delete a partial season |
| [**getApiEventsByEventIdSeasonStatus()**](SeasonsApi.md#getApiEventsByEventIdSeasonStatus) | **GET** /api/events/{eventId}/season-status | Season membership and status overrides of an event |
| [**getApiSeasons()**](SeasonsApi.md#getApiSeasons) | **GET** /api/seasons | List seasons |
| [**getApiSeasonsBySeasonId()**](SeasonsApi.md#getApiSeasonsBySeasonId) | **GET** /api/seasons/{seasonId} | Get season detail |
| [**getApiSeasonsBySeasonIdPartialSeasons()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasons) | **GET** /api/seasons/{seasonId}/partial-seasons | List partial seasons of a season |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId} | Get one partial season |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-availability.csv | Partial season report by availability (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-availability.json | Partial season report by availability |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-category.csv | Partial season report by category (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-category.json | Partial season report by category |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-status.csv | Partial season report by status (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-status.json | Partial season report by status |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-zone.csv | Partial season report by zone (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-zone.json | Partial season report by zone |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-availability.csv | Partial season summary by availability (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-availability.json | Partial season summary by availability |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-availability-reason.csv | Partial season summary by availability reason (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-availability-reason.json | Partial season summary by availability reason |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-category.csv | Partial season summary by category (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-category.json | Partial season summary by category |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-section.csv | Partial season summary by section (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-section.json | Partial season summary by section |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-status.csv | Partial season summary by status (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-status.json | Partial season summary by status |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-zone.csv | Partial season summary by zone (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-zone.json | Partial season summary by zone |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryCsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary.csv | Partial season summary across member events (CSV) |
| [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryJson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary.json | Partial season summary across member events |
| [**getApiSeasonsBySeasonIdReportsByAvailabilityCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsByAvailabilityCsv) | **GET** /api/seasons/{seasonId}/reports/by-availability.csv | Season report by availability (CSV) |
| [**getApiSeasonsBySeasonIdReportsByAvailabilityJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsByAvailabilityJson) | **GET** /api/seasons/{seasonId}/reports/by-availability.json | Season report by availability |
| [**getApiSeasonsBySeasonIdReportsByCategoryCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsByCategoryCsv) | **GET** /api/seasons/{seasonId}/reports/by-category.csv | Season report by category (CSV) |
| [**getApiSeasonsBySeasonIdReportsByCategoryJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsByCategoryJson) | **GET** /api/seasons/{seasonId}/reports/by-category.json | Season report by category |
| [**getApiSeasonsBySeasonIdReportsByStatusCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsByStatusCsv) | **GET** /api/seasons/{seasonId}/reports/by-status.csv | Season report by status (CSV) |
| [**getApiSeasonsBySeasonIdReportsByStatusJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsByStatusJson) | **GET** /api/seasons/{seasonId}/reports/by-status.json | Season report by status |
| [**getApiSeasonsBySeasonIdReportsByZoneCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsByZoneCsv) | **GET** /api/seasons/{seasonId}/reports/by-zone.csv | Season report by zone (CSV) |
| [**getApiSeasonsBySeasonIdReportsByZoneJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsByZoneJson) | **GET** /api/seasons/{seasonId}/reports/by-zone.json | Season report by zone |
| [**getApiSeasonsBySeasonIdReportsSummaryByAvailabilityCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByAvailabilityCsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-availability.csv | Season summary by availability (CSV) |
| [**getApiSeasonsBySeasonIdReportsSummaryByAvailabilityJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByAvailabilityJson) | **GET** /api/seasons/{seasonId}/reports/summary/by-availability.json | Season summary by availability |
| [**getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonCsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-availability-reason.csv | Season summary by availability reason (CSV) |
| [**getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonJson) | **GET** /api/seasons/{seasonId}/reports/summary/by-availability-reason.json | Season summary by availability reason |
| [**getApiSeasonsBySeasonIdReportsSummaryByCategoryCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByCategoryCsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-category.csv | Season summary by category (CSV) |
| [**getApiSeasonsBySeasonIdReportsSummaryByCategoryJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByCategoryJson) | **GET** /api/seasons/{seasonId}/reports/summary/by-category.json | Season summary by category |
| [**getApiSeasonsBySeasonIdReportsSummaryBySectionCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryBySectionCsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-section.csv | Season summary by section (CSV) |
| [**getApiSeasonsBySeasonIdReportsSummaryBySectionJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryBySectionJson) | **GET** /api/seasons/{seasonId}/reports/summary/by-section.json | Season summary by section |
| [**getApiSeasonsBySeasonIdReportsSummaryByStatusCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByStatusCsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-status.csv | Season summary by status (CSV) |
| [**getApiSeasonsBySeasonIdReportsSummaryByStatusJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByStatusJson) | **GET** /api/seasons/{seasonId}/reports/summary/by-status.json | Season summary by status |
| [**getApiSeasonsBySeasonIdReportsSummaryByZoneCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByZoneCsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-zone.csv | Season summary by zone (CSV) |
| [**getApiSeasonsBySeasonIdReportsSummaryByZoneJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryByZoneJson) | **GET** /api/seasons/{seasonId}/reports/summary/by-zone.json | Season summary by zone |
| [**getApiSeasonsBySeasonIdReportsSummaryCsv()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryCsv) | **GET** /api/seasons/{seasonId}/reports/summary.csv | Season summary across member events (CSV) |
| [**getApiSeasonsBySeasonIdReportsSummaryJson()**](SeasonsApi.md#getApiSeasonsBySeasonIdReportsSummaryJson) | **GET** /api/seasons/{seasonId}/reports/summary.json | Season summary across member events |
| [**getApiSeasonsBySeasonIdSeats()**](SeasonsApi.md#getApiSeasonsBySeasonIdSeats) | **GET** /api/seasons/{seasonId}/seats | Season booking view (source geometry + intersection status) |
| [**patchApiSeasonsBySeasonId()**](SeasonsApi.md#patchApiSeasonsBySeasonId) | **PATCH** /api/seasons/{seasonId} | Update season |
| [**patchApiSeasonsBySeasonIdEventsByEventId()**](SeasonsApi.md#patchApiSeasonsBySeasonIdEventsByEventId) | **PATCH** /api/seasons/{seasonId}/events/{eventId} | Season member settings (forSalePropagated) |
| [**postApiEventsByEventIdActionsOverrideSeasonStatus()**](SeasonsApi.md#postApiEventsByEventIdActionsOverrideSeasonStatus) | **POST** /api/events/{eventId}/actions/override-season-status | Override the season status of objects in an event (OVERRIDE_SEASON_STATUS) |
| [**postApiEventsByEventIdActionsUseSeasonStatus()**](SeasonsApi.md#postApiEventsByEventIdActionsUseSeasonStatus) | **POST** /api/events/{eventId}/actions/use-season-status | Make objects follow the season status again (USE_SEASON_STATUS) |
| [**postApiSeasons()**](SeasonsApi.md#postApiSeasons) | **POST** /api/seasons | Create season |
| [**postApiSeasonsBySeasonIdActionsAddEvents()**](SeasonsApi.md#postApiSeasonsBySeasonIdActionsAddEvents) | **POST** /api/seasons/{seasonId}/actions/add-events | Add several events to a season (atomic) |
| [**postApiSeasonsBySeasonIdActionsCreateEvents()**](SeasonsApi.md#postApiSeasonsBySeasonIdActionsCreateEvents) | **POST** /api/seasons/{seasonId}/actions/create-events | Create events in a season |
| [**postApiSeasonsBySeasonIdActionsRemoveEvents()**](SeasonsApi.md#postApiSeasonsBySeasonIdActionsRemoveEvents) | **POST** /api/seasons/{seasonId}/actions/remove-events | Remove several events from a season (atomic) |
| [**postApiSeasonsBySeasonIdEvents()**](SeasonsApi.md#postApiSeasonsBySeasonIdEvents) | **POST** /api/seasons/{seasonId}/events | Attach event to season |
| [**postApiSeasonsBySeasonIdInventorySync()**](SeasonsApi.md#postApiSeasonsBySeasonIdInventorySync) | **POST** /api/seasons/{seasonId}/inventory/sync | Sync season inventory from source |
| [**postApiSeasonsBySeasonIdPartialSeasons()**](SeasonsApi.md#postApiSeasonsBySeasonIdPartialSeasons) | **POST** /api/seasons/{seasonId}/partial-seasons | Create a partial season |
| [**postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsAddEvents()**](SeasonsApi.md#postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsAddEvents) | **POST** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/actions/add-events | Add events to a partial season (bulk, all-or-nothing) |
| [**postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsRemoveEvents()**](SeasonsApi.md#postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsRemoveEvents) | **POST** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/actions/remove-events | Remove events from a partial season (bulk) |


## `deleteApiSeasonsBySeasonId()`

```php
deleteApiSeasonsBySeasonId($season_id, $idempotency_key)
```

Delete season

Removes the season grouping; does not delete events or wipe inventory.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiSeasonsBySeasonId($season_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->deleteApiSeasonsBySeasonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
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

## `deleteApiSeasonsBySeasonIdEventsByEventId()`

```php
deleteApiSeasonsBySeasonIdEventsByEventId($season_id, $event_id, $idempotency_key)
```

Detach event from season

If the event was the source, clears sourceEventId (sync blocked until reset).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$event_id = 'event_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiSeasonsBySeasonIdEventsByEventId($season_id, $event_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->deleteApiSeasonsBySeasonIdEventsByEventId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **event_id** | **string**|  | |
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

## `deleteApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId()`

```php
deleteApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId($season_id, $partial_season_id, $idempotency_key)
```

Delete a partial season

Removes the grouping only; event inventory and sales are untouched.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId($season_id, $partial_season_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->deleteApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
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

## `getApiEventsByEventIdSeasonStatus()`

```php
getApiEventsByEventIdSeasonStatus($event_id)
```

Season membership and status overrides of an event

Response `{ eventId, season: { id, name, sourceEventId } | null, isSource, forSalePropagated, overriddenObjects: string[] }` (`overriddenObjects` = seat labels whose status this event overrides).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdSeasonStatus($event_id);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiEventsByEventIdSeasonStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

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

## `getApiSeasons()`

```php
getApiSeasons()
```

List seasons

Lists multi-event seasons for the tenant. Seasons group events for inventory ops sync (NFS + channelKey). Distinct from salesChannel and from inventory channelKey partitions.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiSeasons();
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasons: ', $e->getMessage(), PHP_EOL;
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

## `getApiSeasonsBySeasonId()`

```php
getApiSeasonsBySeasonId($season_id)
```

Get season detail

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string

try {
    $apiInstance->getApiSeasonsBySeasonId($season_id);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |

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

## `getApiSeasonsBySeasonIdPartialSeasons()`

```php
getApiSeasonsBySeasonIdPartialSeasons($season_id)
```

List partial seasons of a season

Response `{ partialSeasons: [{ id, seasonId, name, eventIds, createdAt }] }`. Booking or releasing with `seasonId` set to a partial season id on POST /api/events/:eventId/actions/change-object-status fans out to the partial season members only, atomically, exactly like a full season.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasons($season_id);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId($season_id, $partial_season_id)
```

Get one partial season

Response `{ partialSeason: { id, seasonId, name, eventIds, createdAt } }`; 404 when it is not a partial season of this season. Booking or releasing with `seasonId` set to a partial season id on POST /api/events/:eventId/actions/change-object-status fans out to the partial season members only, atomically, exactly like a full season.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId($season_id, $partial_season_id);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityCsv($season_id, $partial_season_id, $availability, $live_holds)
```

Partial season report by availability (CSV)

Objects of the partial season grouped by availability. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$availability = 'availability_example'; // string | Only this availability bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityCsv($season_id, $partial_season_id, $availability, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **availability** | **string**| Only this availability bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityJson($season_id, $partial_season_id, $availability, $live_holds)
```

Partial season report by availability

Objects of the partial season grouped by availability. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$availability = 'availability_example'; // string | Only this availability bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityJson($season_id, $partial_season_id, $availability, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **availability** | **string**| Only this availability bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryCsv($season_id, $partial_season_id, $category, $live_holds)
```

Partial season report by category (CSV)

Objects of the partial season grouped by category. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$category = 'category_example'; // string | Only this category bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryCsv($season_id, $partial_season_id, $category, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **category** | **string**| Only this category bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryJson($season_id, $partial_season_id, $category, $live_holds)
```

Partial season report by category

Objects of the partial season grouped by category. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$category = 'category_example'; // string | Only this category bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryJson($season_id, $partial_season_id, $category, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **category** | **string**| Only this category bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusCsv($season_id, $partial_season_id, $status, $live_holds)
```

Partial season report by status (CSV)

Objects of the partial season grouped by status. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$status = 'status_example'; // string | Only this status bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusCsv($season_id, $partial_season_id, $status, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **status** | **string**| Only this status bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusJson($season_id, $partial_season_id, $status, $live_holds)
```

Partial season report by status

Objects of the partial season grouped by status. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$status = 'status_example'; // string | Only this status bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusJson($season_id, $partial_season_id, $status, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **status** | **string**| Only this status bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneCsv($season_id, $partial_season_id, $zone, $live_holds)
```

Partial season report by zone (CSV)

Objects of the partial season grouped by zone. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$zone = 'zone_example'; // string | Only this zone bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneCsv($season_id, $partial_season_id, $zone, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **zone** | **string**| Only this zone bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneJson($season_id, $partial_season_id, $zone, $live_holds)
```

Partial season report by zone

Objects of the partial season grouped by zone. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$zone = 'zone_example'; // string | Only this zone bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneJson($season_id, $partial_season_id, $zone, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **zone** | **string**| Only this zone bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityCsv($season_id, $partial_season_id, $live_holds)
```

Partial season summary by availability (CSV)

Season-level counts grouped by availability. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityCsv($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityJson($season_id, $partial_season_id, $live_holds)
```

Partial season summary by availability

Season-level counts grouped by availability. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityJson($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonCsv($season_id, $partial_season_id, $live_holds)
```

Partial season summary by availability reason (CSV)

Season-level counts grouped by availabilityReason. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonCsv($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonJson($season_id, $partial_season_id, $live_holds)
```

Partial season summary by availability reason

Season-level counts grouped by availabilityReason. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonJson($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryCsv($season_id, $partial_season_id, $live_holds)
```

Partial season summary by category (CSV)

Season-level counts grouped by category. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryCsv($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryJson($season_id, $partial_season_id, $live_holds)
```

Partial season summary by category

Season-level counts grouped by category. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryJson($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionCsv($season_id, $partial_season_id, $live_holds)
```

Partial season summary by section (CSV)

Season-level counts grouped by section. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionCsv($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionJson($season_id, $partial_season_id, $live_holds)
```

Partial season summary by section

Season-level counts grouped by section. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionJson($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusCsv($season_id, $partial_season_id, $live_holds)
```

Partial season summary by status (CSV)

Season-level counts grouped by status. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusCsv($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusJson($season_id, $partial_season_id, $live_holds)
```

Partial season summary by status

Season-level counts grouped by status. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusJson($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneCsv($season_id, $partial_season_id, $live_holds)
```

Partial season summary by zone (CSV)

Season-level counts grouped by zone. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneCsv($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneJson($season_id, $partial_season_id, $live_holds)
```

Partial season summary by zone

Season-level counts grouped by zone. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneJson($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryCsv()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryCsv($season_id, $partial_season_id, $live_holds)
```

Partial season summary across member events (CSV)

`totals`: season-level availability (an object counts as available only when free in every evaluated event). `events`: each member event's own totals (date order) with `isInThePast` and `evaluated`. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryCsv($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryJson()`

```php
getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryJson($season_id, $partial_season_id, $live_holds)
```

Partial season summary across member events

`totals`: season-level availability (an object counts as available only when free in every evaluated event). `events`: each member event's own totals (date order) with `isInThePast` and `evaluated`. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryJson($season_id, $partial_season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsByAvailabilityCsv()`

```php
getApiSeasonsBySeasonIdReportsByAvailabilityCsv($season_id, $availability, $live_holds)
```

Season report by availability (CSV)

Objects of the season grouped by availability. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$availability = 'availability_example'; // string | Only this availability bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsByAvailabilityCsv($season_id, $availability, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsByAvailabilityCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **availability** | **string**| Only this availability bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsByAvailabilityJson()`

```php
getApiSeasonsBySeasonIdReportsByAvailabilityJson($season_id, $availability, $live_holds)
```

Season report by availability

Objects of the season grouped by availability. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$availability = 'availability_example'; // string | Only this availability bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsByAvailabilityJson($season_id, $availability, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsByAvailabilityJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **availability** | **string**| Only this availability bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsByCategoryCsv()`

```php
getApiSeasonsBySeasonIdReportsByCategoryCsv($season_id, $category, $live_holds)
```

Season report by category (CSV)

Objects of the season grouped by category. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$category = 'category_example'; // string | Only this category bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsByCategoryCsv($season_id, $category, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsByCategoryCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **category** | **string**| Only this category bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsByCategoryJson()`

```php
getApiSeasonsBySeasonIdReportsByCategoryJson($season_id, $category, $live_holds)
```

Season report by category

Objects of the season grouped by category. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$category = 'category_example'; // string | Only this category bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsByCategoryJson($season_id, $category, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsByCategoryJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **category** | **string**| Only this category bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsByStatusCsv()`

```php
getApiSeasonsBySeasonIdReportsByStatusCsv($season_id, $status, $live_holds)
```

Season report by status (CSV)

Objects of the season grouped by status. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$status = 'status_example'; // string | Only this status bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsByStatusCsv($season_id, $status, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsByStatusCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **status** | **string**| Only this status bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsByStatusJson()`

```php
getApiSeasonsBySeasonIdReportsByStatusJson($season_id, $status, $live_holds)
```

Season report by status

Objects of the season grouped by status. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$status = 'status_example'; // string | Only this status bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsByStatusJson($season_id, $status, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsByStatusJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **status** | **string**| Only this status bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsByZoneCsv()`

```php
getApiSeasonsBySeasonIdReportsByZoneCsv($season_id, $zone, $live_holds)
```

Season report by zone (CSV)

Objects of the season grouped by zone. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$zone = 'zone_example'; // string | Only this zone bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsByZoneCsv($season_id, $zone, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsByZoneCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **zone** | **string**| Only this zone bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsByZoneJson()`

```php
getApiSeasonsBySeasonIdReportsByZoneJson($season_id, $zone, $live_holds)
```

Season report by zone

Objects of the season grouped by zone. Objects are matched by label across the member events (same rule as season booking). Evaluated events are the live (not past) members — all members when none is live. Rows: `label`, `objectType`, `category`, `section`, `zone` (from the source event), `status` (shared status or `mixed`), `availability` (available only when free in every evaluated event), `availabilityReason` (the most definitive blocking reason; a label missing from an event counts as not_for_sale), `eventCount`, `availableIn`, `notAvailableEventIds`; GA rows add `capacity` and `availableCount` (places free in every evaluated event). `events` lists every member with `evaluated`. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$zone = 'zone_example'; // string | Only this zone bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsByZoneJson($season_id, $zone, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsByZoneJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **zone** | **string**| Only this zone bucket. | [optional] |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByAvailabilityCsv()`

```php
getApiSeasonsBySeasonIdReportsSummaryByAvailabilityCsv($season_id, $live_holds)
```

Season summary by availability (CSV)

Season-level counts grouped by availability. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByAvailabilityCsv($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByAvailabilityCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByAvailabilityJson()`

```php
getApiSeasonsBySeasonIdReportsSummaryByAvailabilityJson($season_id, $live_holds)
```

Season summary by availability

Season-level counts grouped by availability. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByAvailabilityJson($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByAvailabilityJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonCsv()`

```php
getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonCsv($season_id, $live_holds)
```

Season summary by availability reason (CSV)

Season-level counts grouped by availabilityReason. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonCsv($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonJson()`

```php
getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonJson($season_id, $live_holds)
```

Season summary by availability reason

Season-level counts grouped by availabilityReason. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonJson($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByCategoryCsv()`

```php
getApiSeasonsBySeasonIdReportsSummaryByCategoryCsv($season_id, $live_holds)
```

Season summary by category (CSV)

Season-level counts grouped by category. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByCategoryCsv($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByCategoryCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByCategoryJson()`

```php
getApiSeasonsBySeasonIdReportsSummaryByCategoryJson($season_id, $live_holds)
```

Season summary by category

Season-level counts grouped by category. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByCategoryJson($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByCategoryJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryBySectionCsv()`

```php
getApiSeasonsBySeasonIdReportsSummaryBySectionCsv($season_id, $live_holds)
```

Season summary by section (CSV)

Season-level counts grouped by section. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryBySectionCsv($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryBySectionCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryBySectionJson()`

```php
getApiSeasonsBySeasonIdReportsSummaryBySectionJson($season_id, $live_holds)
```

Season summary by section

Season-level counts grouped by section. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryBySectionJson($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryBySectionJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByStatusCsv()`

```php
getApiSeasonsBySeasonIdReportsSummaryByStatusCsv($season_id, $live_holds)
```

Season summary by status (CSV)

Season-level counts grouped by status. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByStatusCsv($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByStatusCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByStatusJson()`

```php
getApiSeasonsBySeasonIdReportsSummaryByStatusJson($season_id, $live_holds)
```

Season summary by status

Season-level counts grouped by status. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByStatusJson($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByStatusJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByZoneCsv()`

```php
getApiSeasonsBySeasonIdReportsSummaryByZoneCsv($season_id, $live_holds)
```

Season summary by zone (CSV)

Season-level counts grouped by zone. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByZoneCsv($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByZoneCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryByZoneJson()`

```php
getApiSeasonsBySeasonIdReportsSummaryByZoneJson($season_id, $live_holds)
```

Season summary by zone

Season-level counts grouped by zone. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryByZoneJson($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryByZoneJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryCsv()`

```php
getApiSeasonsBySeasonIdReportsSummaryCsv($season_id, $live_holds)
```

Season summary across member events (CSV)

`totals`: season-level availability (an object counts as available only when free in every evaluated event). `events`: each member event's own totals (date order) with `isInThePast` and `evaluated`. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryCsv($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdReportsSummaryJson()`

```php
getApiSeasonsBySeasonIdReportsSummaryJson($season_id, $live_holds)
```

Season summary across member events

`totals`: season-level availability (an object counts as available only when free in every evaluated event). `events`: each member event's own totals (date order) with `isInThePast` and `evaluated`. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). At most 100 member events. Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiSeasonsBySeasonIdReportsSummaryJson($season_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdReportsSummaryJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **live_holds** | **string**| Merge active buyer holds from the per-event hold index (default &#x60;true&#x60;). &#x60;false&#x60; &#x3D; Postgres only. | [optional] |

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

## `getApiSeasonsBySeasonIdSeats()`

```php
getApiSeasonsBySeasonIdSeats($season_id)
```

Season booking view (source geometry + intersection status)

Returns the source event seat map with visualStatus sold when a label is not free on every live (non-past) member. Source NFS/channel is the season mask (no second table). lockAliases maps member seat ids to source ids for SSE fan-in. Does not join seasons from GET /events/:id/seats. See docs/SEATSIO_PARITY.md.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string

try {
    $apiInstance->getApiSeasonsBySeasonIdSeats($season_id);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->getApiSeasonsBySeasonIdSeats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |

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

## `patchApiSeasonsBySeasonId()`

```php
patchApiSeasonsBySeasonId($season_id, $patch_api_seasons_by_season_id_request, $idempotency_key)
```

Update season

Rename or set sourceEventId (must be a member). Clearing source blocks sync until reset.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$patch_api_seasons_by_season_id_request = new \SeatsChart\Client\Model\PatchApiSeasonsBySeasonIdRequest(); // \SeatsChart\Client\Model\PatchApiSeasonsBySeasonIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiSeasonsBySeasonId($season_id, $patch_api_seasons_by_season_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->patchApiSeasonsBySeasonId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **patch_api_seasons_by_season_id_request** | [**\SeatsChart\Client\Model\PatchApiSeasonsBySeasonIdRequest**](../Model/PatchApiSeasonsBySeasonIdRequest.md)|  | |
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

## `patchApiSeasonsBySeasonIdEventsByEventId()`

```php
patchApiSeasonsBySeasonIdEventsByEventId($season_id, $event_id, $patch_api_seasons_by_season_id_events_by_event_id_request, $idempotency_key)
```

Season member settings (forSalePropagated)

seats.io `forSalePropagated`: while true (default) season sync and the source's for-sale cascade copy the season source's for-sale flags onto this member. A direct for-sale change on the member (POST /events/{eventId}/inventory/for-sale/apply, or category availability in PATCH /events/{eventId}) sets it to false so the member keeps its own configuration. Setting it back to `true` copies the source's for-sale flags right away (`syncSummary`). Channels and statuses are not affected. The source event itself is refused (409 `season_source_event`).

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$event_id = 'event_id_example'; // string
$patch_api_seasons_by_season_id_events_by_event_id_request = new \SeatsChart\Client\Model\PatchApiSeasonsBySeasonIdEventsByEventIdRequest(); // \SeatsChart\Client\Model\PatchApiSeasonsBySeasonIdEventsByEventIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiSeasonsBySeasonIdEventsByEventId($season_id, $event_id, $patch_api_seasons_by_season_id_events_by_event_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->patchApiSeasonsBySeasonIdEventsByEventId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **event_id** | **string**|  | |
| **patch_api_seasons_by_season_id_events_by_event_id_request** | [**\SeatsChart\Client\Model\PatchApiSeasonsBySeasonIdEventsByEventIdRequest**](../Model/PatchApiSeasonsBySeasonIdEventsByEventIdRequest.md)|  | |
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

## `postApiEventsByEventIdActionsOverrideSeasonStatus()`

```php
postApiEventsByEventIdActionsOverrideSeasonStatus($event_id, $post_api_events_by_event_id_actions_override_season_status_request, $idempotency_key)
```

Override the season status of objects in an event (OVERRIDE_SEASON_STATUS)

Requires **Idempotency-Key**. The objects of the path event (a non-source season member) stop following the season status. Idempotent per object. Response `{ ok, eventId, seasonId, overridden, added, released, objects? }`.  **No overbooking.** Every object keeps exactly one authority per event (its seat row and Redis key), so an override only changes which (event, object) pairs the season fan-outs touch: season booking (`seasonId` on reserve), season status changes (`seasonId` on change-object-status), season inventory sync and the season booking view skip overridden pairs. Overriding never changes the status: a seat booked for the season stays booked in the event. `release: true` frees the objects in this event only. Unsold objects go through the administrative transition engine (held seats and accepted orders are refused, 409 `inventory_conflict`). Sold objects are refused with 409 `season_booked` (`objects: [{ objectId, label, orderId, seasonTicket }]`) unless `allowBookedRelease: true` is sent explicitly; then only seats of a season (multi-event) order are given back for this event, under the seat row lock: the reservation and the order item of this event are cancelled (`season_status_override`), the seat becomes available and its Redis confirmed marker is cleared; the order stays confirmed for its other events (refunds are up to you). The event's own sales are never released here (409 `event_sale`: cancel the order). Nothing changes on any refusal. The season source event cannot override (409 `season_source_event`); events outside a season get 409 `not_season_member`.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_actions_override_season_status_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdActionsOverrideSeasonStatusRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdActionsOverrideSeasonStatusRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsOverrideSeasonStatus($event_id, $post_api_events_by_event_id_actions_override_season_status_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiEventsByEventIdActionsOverrideSeasonStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_actions_override_season_status_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdActionsOverrideSeasonStatusRequest**](../Model/PostApiEventsByEventIdActionsOverrideSeasonStatusRequest.md)|  | |
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

## `postApiEventsByEventIdActionsUseSeasonStatus()`

```php
postApiEventsByEventIdActionsUseSeasonStatus($event_id, $post_api_events_by_event_id_actions_use_season_status_request, $idempotency_key)
```

Make objects follow the season status again (USE_SEASON_STATUS)

Requires **Idempotency-Key**. Removes the overrides of the listed objects in one transaction (event override rows and seat rows of the event and of the season source locked in id order). Allowed only when the event and the season agree commercially for every object: both free, or both sold in the same order; otherwise **409 `season_status_conflict`** with `objects: [{ objectId, label, reason: held | event_sold | season_sold | retired | missing }]` and nothing changes. Then the season source state of those objects is copied (for sale when `forSalePropagated`, channel, custom statuses; custom statuses the event set on its own are cleared). Objects that were not overridden are listed in `notOverridden`. Response `{ ok, eventId, seasonId, reverted, notOverridden, syncSummary }`.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_actions_use_season_status_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdActionsUseSeasonStatusRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdActionsUseSeasonStatusRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsUseSeasonStatus($event_id, $post_api_events_by_event_id_actions_use_season_status_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiEventsByEventIdActionsUseSeasonStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_actions_use_season_status_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdActionsUseSeasonStatusRequest**](../Model/PostApiEventsByEventIdActionsUseSeasonStatusRequest.md)|  | |
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

## `postApiSeasons()`

```php
postApiSeasons($post_api_seasons_request, $idempotency_key)
```

Create season

Creates an empty season (optionally bound to `chartId` and seeded with `sourceEventId`), or — seats.io `seasons.create` — the season **and its events** in one transaction with `eventKeys` (one event per key, named \"{season} · {key}\") or `numberOfEvents` (N events \"{season} · 1…N\") on `chartId`. Every created event joins the season, the first becomes its source; all or nothing (402 plan event limit, 409 key already used). Response adds `events: [{ id, key, name }]`.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_seasons_request = new \SeatsChart\Client\Model\PostApiSeasonsRequest(); // \SeatsChart\Client\Model\PostApiSeasonsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeasons($post_api_seasons_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiSeasons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_seasons_request** | [**\SeatsChart\Client\Model\PostApiSeasonsRequest**](../Model/PostApiSeasonsRequest.md)|  | |
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

## `postApiSeasonsBySeasonIdActionsAddEvents()`

```php
postApiSeasonsBySeasonIdActionsAddEvents($season_id, $post_api_seasons_by_season_id_actions_add_events_request, $idempotency_key)
```

Add several events to a season (atomic)

Up to 50 events in **one transaction** (all or nothing, under the season row lock): 404 `events_not_found`, 409 `already_in_other_season` or `chart_mismatch` list the offending `eventIds` and nothing is added. Events already in this season are ignored. New members are synced from the source after COMMIT (`sync`, default true). Response `{ added, eventIds (all members), syncSummary }`.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$post_api_seasons_by_season_id_actions_add_events_request = new \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsAddEventsRequest(); // \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsAddEventsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeasonsBySeasonIdActionsAddEvents($season_id, $post_api_seasons_by_season_id_actions_add_events_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiSeasonsBySeasonIdActionsAddEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **post_api_seasons_by_season_id_actions_add_events_request** | [**\SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsAddEventsRequest**](../Model/PostApiSeasonsBySeasonIdActionsAddEventsRequest.md)|  | |
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

## `postApiSeasonsBySeasonIdActionsCreateEvents()`

```php
postApiSeasonsBySeasonIdActionsCreateEvents($season_id, $post_api_seasons_by_season_id_actions_create_events_request, $idempotency_key)
```

Create events in a season

seats.io `seasons.createEvents`: creates new events on the **season chart** and adds them to this season in **one transaction** (all or nothing, under the season row lock). Send exactly one of `eventKeys`, `numberOfEvents` or `events` (`{ key?, name?, date? }`), at most 50. A season without a source event gets the first new event as source; otherwise the new events receive the season inventory (for-sale state, channels, holds) from the source after COMMIT (`syncSummary`). 402 plan event limit, 409 key already used, 409 `season_has_no_chart` when the season has no chart yet. Response `{ events: [{ id, key, name, date }], syncSummary }`.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$post_api_seasons_by_season_id_actions_create_events_request = new \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsCreateEventsRequest(); // \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsCreateEventsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeasonsBySeasonIdActionsCreateEvents($season_id, $post_api_seasons_by_season_id_actions_create_events_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiSeasonsBySeasonIdActionsCreateEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **post_api_seasons_by_season_id_actions_create_events_request** | [**\SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsCreateEventsRequest**](../Model/PostApiSeasonsBySeasonIdActionsCreateEventsRequest.md)|  | |
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

## `postApiSeasonsBySeasonIdActionsRemoveEvents()`

```php
postApiSeasonsBySeasonIdActionsRemoveEvents($season_id, $post_api_seasons_by_season_id_actions_remove_events_request, $idempotency_key)
```

Remove several events from a season (atomic)

One transaction: the events leave the season and its partial seasons; when the source leaves, `sourceEventId` is cleared (`sourceCleared: true`, sync waits for a new source). Events not in the season are ignored; inventory and sales are untouched. Response `{ removed, eventIds (remaining members), sourceCleared }`.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$post_api_seasons_by_season_id_actions_remove_events_request = new \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsRemoveEventsRequest(); // \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsRemoveEventsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeasonsBySeasonIdActionsRemoveEvents($season_id, $post_api_seasons_by_season_id_actions_remove_events_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiSeasonsBySeasonIdActionsRemoveEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **post_api_seasons_by_season_id_actions_remove_events_request** | [**\SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsRemoveEventsRequest**](../Model/PostApiSeasonsBySeasonIdActionsRemoveEventsRequest.md)|  | |
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

## `postApiSeasonsBySeasonIdEvents()`

```php
postApiSeasonsBySeasonIdEvents($season_id, $post_api_seasons_by_season_id_events_request, $idempotency_key)
```

Attach event to season

Rejects chart mismatch. Default sync materialises NFS + channelKey + object_statuses from the source onto the new member (unique labels). Past members are skipped. Inheritance is cascade-on-write + skip-past on attach — not a second table. GET /events/:id/seats does not join seasons.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$post_api_seasons_by_season_id_events_request = new \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdEventsRequest(); // \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdEventsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeasonsBySeasonIdEvents($season_id, $post_api_seasons_by_season_id_events_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiSeasonsBySeasonIdEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **post_api_seasons_by_season_id_events_request** | [**\SeatsChart\Client\Model\PostApiSeasonsBySeasonIdEventsRequest**](../Model/PostApiSeasonsBySeasonIdEventsRequest.md)|  | |
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

## `postApiSeasonsBySeasonIdInventorySync()`

```php
postApiSeasonsBySeasonIdInventorySync($season_id, $post_api_seasons_by_season_id_inventory_sync_request, $idempotency_key)
```

Sync season inventory from source

Materialises for_sale + inventory channels (same secrets) + assignments + object_statuses into live (non-isInThePast) child events. Label match requires uniqueness on both sides. Caps at 50 members per call when eventIds omitted. Past members are skipped (inheritance, not a second table). Does not touch GET /seats hot path tables beyond child event rows.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$post_api_seasons_by_season_id_inventory_sync_request = new \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdInventorySyncRequest(); // \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdInventorySyncRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeasonsBySeasonIdInventorySync($season_id, $post_api_seasons_by_season_id_inventory_sync_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiSeasonsBySeasonIdInventorySync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **post_api_seasons_by_season_id_inventory_sync_request** | [**\SeatsChart\Client\Model\PostApiSeasonsBySeasonIdInventorySyncRequest**](../Model/PostApiSeasonsBySeasonIdInventorySyncRequest.md)|  | |
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

## `postApiSeasonsBySeasonIdPartialSeasons()`

```php
postApiSeasonsBySeasonIdPartialSeasons($season_id, $post_api_seasons_by_season_id_partial_seasons_request, $idempotency_key)
```

Create a partial season

Every event must already be a member of the parent season (400 `not_season_member` lists the others). Max 100 partial seasons per season. Booking or releasing with `seasonId` set to a partial season id on POST /api/events/:eventId/actions/change-object-status fans out to the partial season members only, atomically, exactly like a full season.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$post_api_seasons_by_season_id_partial_seasons_request = new \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdPartialSeasonsRequest(); // \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdPartialSeasonsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeasonsBySeasonIdPartialSeasons($season_id, $post_api_seasons_by_season_id_partial_seasons_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiSeasonsBySeasonIdPartialSeasons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **post_api_seasons_by_season_id_partial_seasons_request** | [**\SeatsChart\Client\Model\PostApiSeasonsBySeasonIdPartialSeasonsRequest**](../Model/PostApiSeasonsBySeasonIdPartialSeasonsRequest.md)|  | |
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

## `postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsAddEvents()`

```php
postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsAddEvents($season_id, $partial_season_id, $post_api_seasons_by_season_id_actions_remove_events_request, $idempotency_key)
```

Add events to a partial season (bulk, all-or-nothing)

Up to 50 events per call; each must be a member of the parent season. Already-present events are ignored.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$post_api_seasons_by_season_id_actions_remove_events_request = new \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsRemoveEventsRequest(); // \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsRemoveEventsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsAddEvents($season_id, $partial_season_id, $post_api_seasons_by_season_id_actions_remove_events_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsAddEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **post_api_seasons_by_season_id_actions_remove_events_request** | [**\SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsRemoveEventsRequest**](../Model/PostApiSeasonsBySeasonIdActionsRemoveEventsRequest.md)|  | |
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

## `postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsRemoveEvents()`

```php
postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsRemoveEvents($season_id, $partial_season_id, $post_api_seasons_by_season_id_actions_remove_events_request, $idempotency_key)
```

Remove events from a partial season (bulk)

Up to 50 events per call. Events detached from the parent season leave its partial seasons automatically.

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


$apiInstance = new SeatsChart\Client\Api\SeasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$season_id = 'season_id_example'; // string
$partial_season_id = 'partial_season_id_example'; // string
$post_api_seasons_by_season_id_actions_remove_events_request = new \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsRemoveEventsRequest(); // \SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsRemoveEventsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsRemoveEvents($season_id, $partial_season_id, $post_api_seasons_by_season_id_actions_remove_events_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling SeasonsApi->postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsRemoveEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **string**|  | |
| **partial_season_id** | **string**|  | |
| **post_api_seasons_by_season_id_actions_remove_events_request** | [**\SeatsChart\Client\Model\PostApiSeasonsBySeasonIdActionsRemoveEventsRequest**](../Model/PostApiSeasonsBySeasonIdActionsRemoveEventsRequest.md)|  | |
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

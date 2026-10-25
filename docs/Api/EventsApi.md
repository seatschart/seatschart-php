# SeatsChart\Client\EventsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiEventsByEventId()**](EventsApi.md#deleteApiEventsByEventId) | **DELETE** /api/events/{eventId} | Delete event |
| [**deleteApiEventsByEventIdInventoryChannelsByChannelKeyId()**](EventsApi.md#deleteApiEventsByEventIdInventoryChannelsByChannelKeyId) | **DELETE** /api/events/{eventId}/inventory/channels/{channelKeyId} | Delete inventory channel |
| [**getApiEvents()**](EventsApi.md#getApiEvents) | **GET** /api/events | List events for the authenticated tenant |
| [**getApiEventsByEventId()**](EventsApi.md#getApiEventsByEventId) | **GET** /api/events/{eventId} | Retrieve one event |
| [**getApiEventsByEventIdChannelMembership()**](EventsApi.md#getApiEventsByEventIdChannelMembership) | **GET** /api/events/{eventId}/channel-membership | Do objects belong to my inventory channel? (renderer isObjectInChannel) |
| [**getApiEventsByEventIdInventoryChannels()**](EventsApi.md#getApiEventsByEventIdInventoryChannels) | **GET** /api/events/{eventId}/inventory/channels | List inventory channels (ops) |
| [**getApiEventsByEventIdMapDraft()**](EventsApi.md#getApiEventsByEventIdMapDraft) | **GET** /api/events/{eventId}/map/draft | Load map draft for designer |
| [**getApiEventsByEventIdMapVersions()**](EventsApi.md#getApiEventsByEventIdMapVersions) | **GET** /api/events/{eventId}/map/versions | List event map versions |
| [**getApiEventsByEventIdMapVersionsByVersionThumbnail()**](EventsApi.md#getApiEventsByEventIdMapVersionsByVersionThumbnail) | **GET** /api/events/{eventId}/map/versions/{version}/thumbnail | Event map version preview |
| [**getApiEventsByEventIdObjects()**](EventsApi.md#getApiEventsByEventIdObjects) | **GET** /api/events/{eventId}/objects | List the objects of a ticket buyer |
| [**getApiEventsByEventIdObjectsByObjectId()**](EventsApi.md#getApiEventsByEventIdObjectsByObjectId) | **GET** /api/events/{eventId}/objects/{objectId} | Retrieve one object (seat or GA area) |
| [**getApiEventsByEventIdObjectsByObjectIdStatusChanges()**](EventsApi.md#getApiEventsByEventIdObjectsByObjectIdStatusChanges) | **GET** /api/events/{eventId}/objects/{objectId}/status-changes | List status changes of one object |
| [**getApiEventsByEventIdPricing()**](EventsApi.md#getApiEventsByEventIdPricing) | **GET** /api/events/{eventId}/pricing | Read the synced price table of an event |
| [**getApiEventsByEventIdReportsByAvailabilityCsv()**](EventsApi.md#getApiEventsByEventIdReportsByAvailabilityCsv) | **GET** /api/events/{eventId}/reports/by-availability.csv | Detailed report grouped by availability (available / not_available) (CSV) |
| [**getApiEventsByEventIdReportsByAvailabilityJson()**](EventsApi.md#getApiEventsByEventIdReportsByAvailabilityJson) | **GET** /api/events/{eventId}/reports/by-availability.json | Detailed report grouped by availability (available / not_available) |
| [**getApiEventsByEventIdReportsByAvailabilityReasonCsv()**](EventsApi.md#getApiEventsByEventIdReportsByAvailabilityReasonCsv) | **GET** /api/events/{eventId}/reports/by-availability-reason.csv | Detailed report grouped by availability reason (CSV) |
| [**getApiEventsByEventIdReportsByAvailabilityReasonJson()**](EventsApi.md#getApiEventsByEventIdReportsByAvailabilityReasonJson) | **GET** /api/events/{eventId}/reports/by-availability-reason.json | Detailed report grouped by availability reason |
| [**getApiEventsByEventIdReportsByCategoryJson()**](EventsApi.md#getApiEventsByEventIdReportsByCategoryJson) | **GET** /api/events/{eventId}/reports/by-category.json | Seat and GA counts by category |
| [**getApiEventsByEventIdReportsByCategoryKeyCsv()**](EventsApi.md#getApiEventsByEventIdReportsByCategoryKeyCsv) | **GET** /api/events/{eventId}/reports/by-category-key.csv | Detailed report grouped by category key (CSV) |
| [**getApiEventsByEventIdReportsByCategoryKeyJson()**](EventsApi.md#getApiEventsByEventIdReportsByCategoryKeyJson) | **GET** /api/events/{eventId}/reports/by-category-key.json | Detailed report grouped by category key |
| [**getApiEventsByEventIdReportsByCategoryLabelCsv()**](EventsApi.md#getApiEventsByEventIdReportsByCategoryLabelCsv) | **GET** /api/events/{eventId}/reports/by-category-label.csv | Detailed report grouped by category label (CSV) |
| [**getApiEventsByEventIdReportsByCategoryLabelJson()**](EventsApi.md#getApiEventsByEventIdReportsByCategoryLabelJson) | **GET** /api/events/{eventId}/reports/by-category-label.json | Detailed report grouped by category label |
| [**getApiEventsByEventIdReportsByChannelJson()**](EventsApi.md#getApiEventsByEventIdReportsByChannelJson) | **GET** /api/events/{eventId}/reports/by-channel.json | Detailed report grouped by inventory channel |
| [**getApiEventsByEventIdReportsByLabelJson()**](EventsApi.md#getApiEventsByEventIdReportsByLabelJson) | **GET** /api/events/{eventId}/reports/by-label.json | Detailed report grouped by object label (Postgres) |
| [**getApiEventsByEventIdReportsByObjectTypeJson()**](EventsApi.md#getApiEventsByEventIdReportsByObjectTypeJson) | **GET** /api/events/{eventId}/reports/by-object-type.json | Detailed report grouped by object type (seat|ga) |
| [**getApiEventsByEventIdReportsByOrderIdJson()**](EventsApi.md#getApiEventsByEventIdReportsByOrderIdJson) | **GET** /api/events/{eventId}/reports/by-order-id.json | Detailed report grouped by orderId (Postgres) |
| [**getApiEventsByEventIdReportsBySectionJson()**](EventsApi.md#getApiEventsByEventIdReportsBySectionJson) | **GET** /api/events/{eventId}/reports/by-section.json | Detailed report grouped by section |
| [**getApiEventsByEventIdReportsByStatusJson()**](EventsApi.md#getApiEventsByEventIdReportsByStatusJson) | **GET** /api/events/{eventId}/reports/by-status.json | Seat counts by Postgres status |
| [**getApiEventsByEventIdReportsByZoneCsv()**](EventsApi.md#getApiEventsByEventIdReportsByZoneCsv) | **GET** /api/events/{eventId}/reports/by-zone.csv | Detailed report grouped by zone (CSV) |
| [**getApiEventsByEventIdReportsByZoneJson()**](EventsApi.md#getApiEventsByEventIdReportsByZoneJson) | **GET** /api/events/{eventId}/reports/by-zone.json | Detailed report grouped by zone |
| [**getApiEventsByEventIdReportsDeepSummaryJson()**](EventsApi.md#getApiEventsByEventIdReportsDeepSummaryJson) | **GET** /api/events/{eventId}/reports/deep-summary.json | Deep summary: status counts nested by category |
| [**getApiEventsByEventIdReportsOccupancyCsv()**](EventsApi.md#getApiEventsByEventIdReportsOccupancyCsv) | **GET** /api/events/{eventId}/reports/occupancy.csv | Export seat and GA occupancy as CSV |
| [**getApiEventsByEventIdReportsSalesCsv()**](EventsApi.md#getApiEventsByEventIdReportsSalesCsv) | **GET** /api/events/{eventId}/reports/sales.csv | Export confirmed seat and GA sales as CSV |
| [**getApiEventsByEventIdReportsSummaryByAvailabilityCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByAvailabilityCsv) | **GET** /api/events/{eventId}/reports/summary/by-availability.csv | Summary report by availability (CSV) |
| [**getApiEventsByEventIdReportsSummaryByAvailabilityJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByAvailabilityJson) | **GET** /api/events/{eventId}/reports/summary/by-availability.json | Summary report by availability |
| [**getApiEventsByEventIdReportsSummaryByAvailabilityReasonCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByAvailabilityReasonCsv) | **GET** /api/events/{eventId}/reports/summary/by-availability-reason.csv | Summary report by availability reason (CSV) |
| [**getApiEventsByEventIdReportsSummaryByAvailabilityReasonJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByAvailabilityReasonJson) | **GET** /api/events/{eventId}/reports/summary/by-availability-reason.json | Summary report by availability reason |
| [**getApiEventsByEventIdReportsSummaryByCategoryCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByCategoryCsv) | **GET** /api/events/{eventId}/reports/summary/by-category.csv | Summary report by category (CSV) |
| [**getApiEventsByEventIdReportsSummaryByCategoryJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByCategoryJson) | **GET** /api/events/{eventId}/reports/summary/by-category.json | Summary report by category |
| [**getApiEventsByEventIdReportsSummaryByCategoryKeyCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByCategoryKeyCsv) | **GET** /api/events/{eventId}/reports/summary/by-category-key.csv | Summary report by category key (CSV) |
| [**getApiEventsByEventIdReportsSummaryByCategoryKeyJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByCategoryKeyJson) | **GET** /api/events/{eventId}/reports/summary/by-category-key.json | Summary report by category key |
| [**getApiEventsByEventIdReportsSummaryByCategoryLabelCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByCategoryLabelCsv) | **GET** /api/events/{eventId}/reports/summary/by-category-label.csv | Summary report by category label (CSV) |
| [**getApiEventsByEventIdReportsSummaryByCategoryLabelJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByCategoryLabelJson) | **GET** /api/events/{eventId}/reports/summary/by-category-label.json | Summary report by category label |
| [**getApiEventsByEventIdReportsSummaryByChannelCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByChannelCsv) | **GET** /api/events/{eventId}/reports/summary/by-channel.csv | Summary report by channel (CSV) |
| [**getApiEventsByEventIdReportsSummaryByChannelJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByChannelJson) | **GET** /api/events/{eventId}/reports/summary/by-channel.json | Summary report by channel |
| [**getApiEventsByEventIdReportsSummaryByObjectTypeCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByObjectTypeCsv) | **GET** /api/events/{eventId}/reports/summary/by-object-type.csv | Summary report by object type (CSV) |
| [**getApiEventsByEventIdReportsSummaryByObjectTypeJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByObjectTypeJson) | **GET** /api/events/{eventId}/reports/summary/by-object-type.json | Summary report by object type |
| [**getApiEventsByEventIdReportsSummaryBySectionCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryBySectionCsv) | **GET** /api/events/{eventId}/reports/summary/by-section.csv | Summary report by section (CSV) |
| [**getApiEventsByEventIdReportsSummaryBySectionJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryBySectionJson) | **GET** /api/events/{eventId}/reports/summary/by-section.json | Summary report by section |
| [**getApiEventsByEventIdReportsSummaryByStatusCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByStatusCsv) | **GET** /api/events/{eventId}/reports/summary/by-status.csv | Summary report by status (CSV) |
| [**getApiEventsByEventIdReportsSummaryByStatusJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByStatusJson) | **GET** /api/events/{eventId}/reports/summary/by-status.json | Summary report by status |
| [**getApiEventsByEventIdReportsSummaryByZoneCsv()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByZoneCsv) | **GET** /api/events/{eventId}/reports/summary/by-zone.csv | Summary report by zone (CSV) |
| [**getApiEventsByEventIdReportsSummaryByZoneJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryByZoneJson) | **GET** /api/events/{eventId}/reports/summary/by-zone.json | Summary report by zone |
| [**getApiEventsByEventIdReportsSummaryJson()**](EventsApi.md#getApiEventsByEventIdReportsSummaryJson) | **GET** /api/events/{eventId}/reports/summary.json | Occupancy summary JSON (Postgres only) |
| [**getApiEventsByEventIdSalesCounters()**](EventsApi.md#getApiEventsByEventIdSalesCounters) | **GET** /api/events/{eventId}/sales-counters | Live sales counters (quotas, lots) of an event |
| [**getApiEventsByEventIdSalesRules()**](EventsApi.md#getApiEventsByEventIdSalesRules) | **GET** /api/events/{eventId}/sales-rules | Read the sales rules of an event |
| [**getApiEventsByEventIdSeatViews()**](EventsApi.md#getApiEventsByEventIdSeatViews) | **GET** /api/events/{eventId}/seat-views | List view-from-seat image and optional 360 URLs |
| [**getApiEventsByEventIdSeats()**](EventsApi.md#getApiEventsByEventIdSeats) | **GET** /api/events/{eventId}/seats | List seats for an event |
| [**getApiEventsByEventIdState()**](EventsApi.md#getApiEventsByEventIdState) | **GET** /api/events/{eventId}/state | Compact visual state (protocol 5) |
| [**getApiEventsByEventIdStatusChanges()**](EventsApi.md#getApiEventsByEventIdStatusChanges) | **GET** /api/events/{eventId}/status-changes | List status changes of an event |
| [**getApiEventsByEventIdZones()**](EventsApi.md#getApiEventsByEventIdZones) | **GET** /api/events/{eventId}/zones | List the zones of an event |
| [**patchApiEventsByEventId()**](EventsApi.md#patchApiEventsByEventId) | **PATCH** /api/events/{eventId} | Patch event: name, date, currency, overrides (isInThePast is irreversible) |
| [**patchApiEventsByEventIdInventoryChannelsByChannelKeyId()**](EventsApi.md#patchApiEventsByEventIdInventoryChannelsByChannelKeyId) | **PATCH** /api/events/{eventId}/inventory/channels/{channelKeyId} | Rename or recolor an inventory channel |
| [**postApiEvents()**](EventsApi.md#postApiEvents) | **POST** /api/events | Create event |
| [**postApiEventsBulk()**](EventsApi.md#postApiEventsBulk) | **POST** /api/events/bulk | Create up to 50 events for one chart |
| [**postApiEventsByEventIdActionsMoveToNewChartCopy()**](EventsApi.md#postApiEventsByEventIdActionsMoveToNewChartCopy) | **POST** /api/events/{eventId}/actions/move-to-new-chart-copy | Move the event to a new copy of its chart |
| [**postApiEventsByEventIdDuplicate()**](EventsApi.md#postApiEventsByEventIdDuplicate) | **POST** /api/events/{eventId}/duplicate | Duplicate event |
| [**postApiEventsByEventIdInventoryChannels()**](EventsApi.md#postApiEventsByEventIdInventoryChannels) | **POST** /api/events/{eventId}/inventory/channels | Create inventory channel |
| [**postApiEventsByEventIdInventoryChannelsAssign()**](EventsApi.md#postApiEventsByEventIdInventoryChannelsAssign) | **POST** /api/events/{eventId}/inventory/channels/assign | Assign seats/GA to inventory channel |
| [**postApiEventsByEventIdInventoryForSaleApply()**](EventsApi.md#postApiEventsByEventIdInventoryForSaleApply) | **POST** /api/events/{eventId}/inventory/for-sale/apply | Apply for-sale / not-for-sale to a selection (incremental) |
| [**postApiEventsByEventIdMapDraftActionsDiscard()**](EventsApi.md#postApiEventsByEventIdMapDraftActionsDiscard) | **POST** /api/events/{eventId}/map/draft/actions/discard | Discard event map draft |
| [**postApiEventsByEventIdMapPublish()**](EventsApi.md#postApiEventsByEventIdMapPublish) | **POST** /api/events/{eventId}/map/publish | Publish draft map to live seats |
| [**postApiEventsByEventIdMapVersionsByVersionActionsRestoreToDraft()**](EventsApi.md#postApiEventsByEventIdMapVersionsByVersionActionsRestoreToDraft) | **POST** /api/events/{eventId}/map/versions/{version}/actions/restore-to-draft | Restore an event map version into the draft |
| [**postApiEventsByEventIdObjectsActionsRetrieve()**](EventsApi.md#postApiEventsByEventIdObjectsActionsRetrieve) | **POST** /api/events/{eventId}/objects/actions/retrieve | Retrieve several objects at once (seats.io retrieveObjectInfos) |
| [**postApiEventsByEventIdSalesCountersActionsRebuild()**](EventsApi.md#postApiEventsByEventIdSalesCountersActionsRebuild) | **POST** /api/events/{eventId}/sales-counters/actions/rebuild | Rebuild the sold counters of an event from its orders |
| [**putApiEventsByEventIdInventoryChannels()**](EventsApi.md#putApiEventsByEventIdInventoryChannels) | **PUT** /api/events/{eventId}/inventory/channels | Replace all inventory channel assignments atomically |
| [**putApiEventsByEventIdInventoryChannelsDefinitions()**](EventsApi.md#putApiEventsByEventIdInventoryChannelsDefinitions) | **PUT** /api/events/{eventId}/inventory/channels/definitions | Replace all inventory channels (definitions and assignments) atomically |
| [**putApiEventsByEventIdInventoryForSale()**](EventsApi.md#putApiEventsByEventIdInventoryForSale) | **PUT** /api/events/{eventId}/inventory/for-sale | Replace the whole for-sale configuration atomically |
| [**putApiEventsByEventIdMap()**](EventsApi.md#putApiEventsByEventIdMap) | **PUT** /api/events/{eventId}/map | Save map draft (legacy path) |
| [**putApiEventsByEventIdMapDraft()**](EventsApi.md#putApiEventsByEventIdMapDraft) | **PUT** /api/events/{eventId}/map/draft | Save map draft (does not go live) |
| [**putApiEventsByEventIdPricing()**](EventsApi.md#putApiEventsByEventIdPricing) | **PUT** /api/events/{eventId}/pricing | Push the synced price table of an event (synced catalog mode) |
| [**putApiEventsByEventIdSalesRules()**](EventsApi.md#putApiEventsByEventIdSalesRules) | **PUT** /api/events/{eventId}/sales-rules | Replace the sales rules of an event (quotas, lots, buyer limit, pricing source) |


## `deleteApiEventsByEventId()`

```php
deleteApiEventsByEventId($event_id, $idempotency_key)
```

Delete event

Deletes an event and its layout map data. `eventId` may be the event key. 409 when the event has commercial history. Emits the `event.deleted` webhook.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiEventsByEventId($event_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->deleteApiEventsByEventId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `deleteApiEventsByEventIdInventoryChannelsByChannelKeyId()`

```php
deleteApiEventsByEventIdInventoryChannelsByChannelKeyId($event_id, $channel_key_id, $idempotency_key)
```

Delete inventory channel

Reassigns members to public, deletes the channel, rebuilds memo, invalidates map cache once.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$channel_key_id = 'channel_key_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiEventsByEventIdInventoryChannelsByChannelKeyId($event_id, $channel_key_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->deleteApiEventsByEventIdInventoryChannelsByChannelKeyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **channel_key_id** | **string**|  | |
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

## `getApiEvents()`

```php
getApiEvents($limit, $cursor, $chart_id, $from, $to, $q, $key, $ended, $sort)
```

List events for the authenticated tenant

Without query parameters, returns the legacy unpaginated `{ events }` shape (id, name, date, seat counter, map template, currency, isInThePast, createdAt). When any of `limit`, `cursor`, `chartId`, `from`, `to`, `q`, `key`, `ended` or `sort` is sent, returns a cursor page `{ items, nextCursor }` ordered by event date ascending, then id — or by creation time, newest first, with `sort=created` (stable across pages). Pass `nextCursor` back as `cursor` with the same filters until it is null. Paginated items include currency, isInThePast and createdAt and omit `mapTemplate` (no layout geometry is read).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | Page size (1..100, default 20).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` value from the previous page.
$chart_id = 'chart_id_example'; // string | Only events created from this chart.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive lower bound on the event date (ISO 8601 date-time).
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive upper bound on the event date (ISO 8601 date-time).
$q = 'q_example'; // string | Case-insensitive substring match on the event name.
$key = 'key_example'; // string | Exact event key.
$ended = 'ended_example'; // string | Events marked as ended (`isInThePast`): `include` (default), `exclude` or `only`.
$sort = 'sort_example'; // string | `date` (default): event date ascending. `created`: creation time, newest first.

try {
    $apiInstance->getApiEvents($limit, $cursor, $chart_id, $from, $to, $q, $key, $ended, $sort);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| Page size (1..100, default 20). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; value from the previous page. | [optional] |
| **chart_id** | **string**| Only events created from this chart. | [optional] |
| **from** | **\DateTime**| Inclusive lower bound on the event date (ISO 8601 date-time). | [optional] |
| **to** | **\DateTime**| Inclusive upper bound on the event date (ISO 8601 date-time). | [optional] |
| **q** | **string**| Case-insensitive substring match on the event name. | [optional] |
| **key** | **string**| Exact event key. | [optional] |
| **ended** | **string**| Events marked as ended (&#x60;isInThePast&#x60;): &#x60;include&#x60; (default), &#x60;exclude&#x60; or &#x60;only&#x60;. | [optional] |
| **sort** | **string**| &#x60;date&#x60; (default): event date ascending. &#x60;created&#x60;: creation time, newest first. | [optional] |

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

## `getApiEventsByEventId()`

```php
getApiEventsByEventId($event_id, $expand)
```

Retrieve one event

Returns event metadata (key, name, date, chartId, currency, isInThePast, createdAt, `seasons` containing the event `[{ id, name }]`, map publication timestamps, per-event `categoryOverrides` and `tableBookingConfig` override, event-only `categories` and `objectCategories`) and Postgres inventory counters (`counts`). Counters reflect durable seat status only — live Redis holds are not included; use GET /api/events/:eventId/seats for real-time visual status. 404 when the event belongs to another tenant. `?expand=chartTableBooking` adds `chartTableBooking`: the table booking mode of the layout the event is drawn from (the published chart, or the event layout of a chart-less event) without the per-event override.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string | Event id (UUID) or event key.
$expand = 'expand_example'; // string | Comma-separated. `chartTableBooking` adds the table booking of the chart (`{ mode, tables? }` or null) — what `tableBookingConfig` overrides. `zones` adds `zones[]` (same items as GET /events/{eventId}/zones).

try {
    $apiInstance->getApiEventsByEventId($event_id, $expand);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| Event id (UUID) or event key. | |
| **expand** | **string**| Comma-separated. &#x60;chartTableBooking&#x60; adds the table booking of the chart (&#x60;{ mode, tables? }&#x60; or null) — what &#x60;tableBookingConfig&#x60; overrides. &#x60;zones&#x60; adds &#x60;zones[]&#x60; (same items as GET /events/{eventId}/zones). | [optional] |

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

## `getApiEventsByEventIdChannelMembership()`

```php
getApiEventsByEventIdChannelMembership($event_id, $objects)
```

Do objects belong to my inventory channel? (renderer isObjectInChannel)

Seats.io `isObjectInChannel` for the holder of a channel key: send the key(s) in `x-channel-key` (comma-separated for several) and get `{ objects: { [ref]: true | false }, unknown: [ref] }` — `true` when the object belongs to the channel of one of those keys. Only channels whose key you send are answered (public objects and other partitions are `false`), so buyer tokens can ask too. One indexed read; not cached (`private, no-store`).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$objects = 'objects_example'; // string | Comma-separated seat ids / labels or GA area ids / names (max 100).

try {
    $apiInstance->getApiEventsByEventIdChannelMembership($event_id, $objects);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdChannelMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **objects** | **string**| Comma-separated seat ids / labels or GA area ids / names (max 100). | |

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

## `getApiEventsByEventIdInventoryChannels()`

```php
getApiEventsByEventIdInventoryChannels($event_id)
```

List inventory channels (ops)

Returns id, name, color, and keyPrefix — never the full channelKey secret. Not the same as GET /channels (salesChannel order limits).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdInventoryChannels($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdInventoryChannels: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdMapDraft()`

```php
getApiEventsByEventIdMapDraft($event_id)
```

Load map draft for designer

Returns unpublished draft when present; otherwise bootstraps from the published map. Does not affect the B2C viewer.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdMapDraft($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdMapDraft: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdMapVersions()`

```php
getApiEventsByEventIdMapVersions($event_id, $limit, $cursor): \SeatsChart\Client\Model\GetApiEventsByEventIdMapVersions200Response
```

List event map versions

Immutable publish history of the event seat map, newest first, cursor-paginated (`limit` 1..100, default 20; pass `nextCursor` back as `cursor`). Every successful `POST /api/events/:eventId/map/publish` appends one version; snapshots are content-addressed (identical content shares a `geometryHash`). The map that was live before the first recorded publish is kept as the `baseline` version 1.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$limit = 3.4; // float | Page size (1..100, default 20).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` value from the previous page.

try {
    $result = $apiInstance->getApiEventsByEventIdMapVersions($event_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdMapVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **limit** | **float**| Page size (1..100, default 20). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; value from the previous page. | [optional] |

### Return type

[**\SeatsChart\Client\Model\GetApiEventsByEventIdMapVersions200Response**](../Model/GetApiEventsByEventIdMapVersions200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiEventsByEventIdMapVersionsByVersionThumbnail()`

```php
getApiEventsByEventIdMapVersionsByVersionThumbnail($event_id, $version)
```

Event map version preview

PNG preview of one version: zone / section / GA outlines, decorative shapes and category-coloured seat dots (first floor of multi-floor maps), rendered server-side and cached by content hash. Immutable: `Cache-Control: private, max-age=31536000, immutable` with an `ETag` (send `If-None-Match` for `304`).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$version = 3.4; // float | Version number (1-based).

try {
    $apiInstance->getApiEventsByEventIdMapVersionsByVersionThumbnail($event_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdMapVersionsByVersionThumbnail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **version** | **float**| Version number (1-based). | |

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

## `getApiEventsByEventIdObjects()`

```php
getApiEventsByEventIdObjects($event_id, $ticket_buyer_id)
```

List the objects of a ticket buyer

Every object of the event associated with `ticketBuyerId`: booked/resale/custom-status seats (object status overlays and active sales), booked general-admission places (remaining quantity per area, administrative releases deducted), and live holds created with that buyer id (`reservedByToken`; seat locks still owned by the hold, GA places still held). Hold tokens are never returned. Cancelled orders and released objects drop out. Requires content_write (partner API key or admin/map editor).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string | Event id (UUID) or event key.
$ticket_buyer_id = 'ticket_buyer_id_example'; // string | Opaque ticket buyer id (required).

try {
    $apiInstance->getApiEventsByEventIdObjects($event_id, $ticket_buyer_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| Event id (UUID) or event key. | |
| **ticket_buyer_id** | **string**| Opaque ticket buyer id (required). | [optional] |

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

## `getApiEventsByEventIdObjectsByObjectId()`

```php
getApiEventsByEventIdObjectsByObjectId($event_id, $object_id)
```

Retrieve one object (seat or GA area)

Looks the object up by id, then by exact label (409 when the label is not unique). Returns label, category, price (cents), durable `dbStatus`, `visualStatus` (Postgres status merged with live Redis hold presence), `ticketBuyerId` of the current state, `forSale`, the object status overlay (`objectStatus`, `orderId`, `extraData`) and `section` when the seat lies inside a named section guide, and `zone` / `zoneId` (layout zone: explicit assignment, then the section zone, then the zone outline; null outside every zone), and `entrance` (the most specific of seat, row, table and section; GA areas use their own). Seats add `rowLabel`, `displayedLabel`, `accessibility` (stored form: the four original flags as booleans, newer flags in the `amenities` bitmask, `seatType`), `amenityFlags` (every set flag by name) and `seatType` (default chair). GA areas add capacity, soldCount, heldCount and availableCount. `channelKeyId` is returned to partner API keys and workspace admins only. Requires content_write.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$object_id = 'object_id_example'; // string | Seat or GA area id (UUID), or its exact label / GA name.

try {
    $apiInstance->getApiEventsByEventIdObjectsByObjectId($event_id, $object_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdObjectsByObjectId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **object_id** | **string**| Seat or GA area id (UUID), or its exact label / GA name. | |

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

## `getApiEventsByEventIdObjectsByObjectIdStatusChanges()`

```php
getApiEventsByEventIdObjectsByObjectIdStatusChanges($event_id, $object_id, $limit, $cursor, $action, $order_id, $label, $label_match, $origin, $sort)
```

List status changes of one object

Same as GET /api/events/:eventId/status-changes, scoped to one seat. Items: `id`, `objectId`, `objectLabel`, `objectType` (`seat` | `generalAdmission`), `action`, `quantity`, `previousStatus` / `newStatus` (durable seat status), `previousObjectStatus` / `newObjectStatus` (object status vocabulary), `orderId`, `holdOwnerHash` (tenant-scoped digest of the hold session — the same value on a hold, its release or expiry; the raw holder identity is never returned), `ticketBuyerId`, `reason`, `origin` (`{ kind: api_key | dashboard_user | buyer_session | system_expiry, actorId, actorName, ip }`, null for changes recorded before origins existed; `ip` is truncated to /24 IPv4 or /48 IPv6) and `createdAt`. Durable changes come from inventory_transitions; holds, releases and hold expiries come from the status-history stream drained in batches by the worker (eventually consistent, typically within seconds). Pass `nextCursor` back as `cursor` until it is null. Requires content_write (admin, map editor) or a partner API key.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$object_id = 'object_id_example'; // string | Seat id (UUID) or exact seat label.
$limit = 3.4; // float | Page size (1..100, default 20).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` value from the previous page.
$action = 'action_example'; // string | Exact action: durable `sell`, `cancel`, `booked`, `free`, `resale`, `retired`, a custom status, or Redis-only `hold`, `release`, `hold_expired`.
$order_id = 'order_id_example'; // string | Only transitions of this order.
$label = 'label_example'; // string | Seat label or GA area name to search (case-insensitive), see `labelMatch`.
$label_match = 'label_match_example'; // string | `exact` (default), `contains`, `prefix` (begins with) or `suffix` (ends with). Exact/prefix/suffix use an index.
$origin = 'origin_example'; // string | Only changes of this origin: `api_key`, `dashboard_user`, `buyer_session`, `system_expiry`, or `unknown` (recorded before origins existed).
$sort = 'sort_example'; // string | `newest` (default) or `oldest` first. Keep the same sort while following `nextCursor`.

try {
    $apiInstance->getApiEventsByEventIdObjectsByObjectIdStatusChanges($event_id, $object_id, $limit, $cursor, $action, $order_id, $label, $label_match, $origin, $sort);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdObjectsByObjectIdStatusChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **object_id** | **string**| Seat id (UUID) or exact seat label. | |
| **limit** | **float**| Page size (1..100, default 20). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; value from the previous page. | [optional] |
| **action** | **string**| Exact action: durable &#x60;sell&#x60;, &#x60;cancel&#x60;, &#x60;booked&#x60;, &#x60;free&#x60;, &#x60;resale&#x60;, &#x60;retired&#x60;, a custom status, or Redis-only &#x60;hold&#x60;, &#x60;release&#x60;, &#x60;hold_expired&#x60;. | [optional] |
| **order_id** | **string**| Only transitions of this order. | [optional] |
| **label** | **string**| Seat label or GA area name to search (case-insensitive), see &#x60;labelMatch&#x60;. | [optional] |
| **label_match** | **string**| &#x60;exact&#x60; (default), &#x60;contains&#x60;, &#x60;prefix&#x60; (begins with) or &#x60;suffix&#x60; (ends with). Exact/prefix/suffix use an index. | [optional] |
| **origin** | **string**| Only changes of this origin: &#x60;api_key&#x60;, &#x60;dashboard_user&#x60;, &#x60;buyer_session&#x60;, &#x60;system_expiry&#x60;, or &#x60;unknown&#x60; (recorded before origins existed). | [optional] |
| **sort** | **string**| &#x60;newest&#x60; (default) or &#x60;oldest&#x60; first. Keep the same sort while following &#x60;nextCursor&#x60;. | [optional] |

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

## `getApiEventsByEventIdPricing()`

```php
getApiEventsByEventIdPricing($event_id)
```

Read the synced price table of an event

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdPricing($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdPricing: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdReportsByAvailabilityCsv()`

```php
getApiEventsByEventIdReportsByAvailabilityCsv($event_id, $availability, $live_holds)
```

Detailed report grouped by availability (available / not_available) (CSV)

Buckets `available` and `not_available`; each row carries `availabilityReason`. Optional `?availability=`. GA areas with at least one free place are `available`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$availability = 'availability_example'; // string | Only this availability bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByAvailabilityCsv($event_id, $availability, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByAvailabilityCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsByAvailabilityJson()`

```php
getApiEventsByEventIdReportsByAvailabilityJson($event_id, $availability, $live_holds)
```

Detailed report grouped by availability (available / not_available)

Buckets `available` and `not_available`; each row carries `availabilityReason`. Optional `?availability=`. GA areas with at least one free place are `available`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$availability = 'availability_example'; // string | Only this availability bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByAvailabilityJson($event_id, $availability, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByAvailabilityJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsByAvailabilityReasonCsv()`

```php
getApiEventsByEventIdReportsByAvailabilityReasonCsv($event_id, $reason, $live_holds)
```

Detailed report grouped by availability reason (CSV)

Buckets available, resale, booked, held, custom_status, not_for_sale. GA areas use their primary reason (available when any place is free). Optional `?reason=`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$reason = 'reason_example'; // string | Only this reason bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByAvailabilityReasonCsv($event_id, $reason, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByAvailabilityReasonCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **reason** | **string**| Only this reason bucket. | [optional] |
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

## `getApiEventsByEventIdReportsByAvailabilityReasonJson()`

```php
getApiEventsByEventIdReportsByAvailabilityReasonJson($event_id, $reason, $live_holds)
```

Detailed report grouped by availability reason

Buckets available, resale, booked, held, custom_status, not_for_sale. GA areas use their primary reason (available when any place is free). Optional `?reason=`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$reason = 'reason_example'; // string | Only this reason bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByAvailabilityReasonJson($event_id, $reason, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByAvailabilityReasonJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **reason** | **string**| Only this reason bucket. | [optional] |
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

## `getApiEventsByEventIdReportsByCategoryJson()`

```php
getApiEventsByEventIdReportsByCategoryJson($event_id)
```

Seat and GA counts by category

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsByCategoryJson($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByCategoryJson: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdReportsByCategoryKeyCsv()`

```php
getApiEventsByEventIdReportsByCategoryKeyCsv($event_id, $category_key, $live_holds)
```

Detailed report grouped by category key (CSV)

Seats.io byCategoryKey: buckets are the category keys (chart category id, or the event category key of an event-only category); a category value no category defines is its own key; objects without a category → NO_CATEGORY. Rows carry `categoryKey` next to `category` (the label). Optional `?categoryKey=`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$category_key = 'category_key_example'; // string | Only this categoryKey bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByCategoryKeyCsv($event_id, $category_key, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByCategoryKeyCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **category_key** | **string**| Only this categoryKey bucket. | [optional] |
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

## `getApiEventsByEventIdReportsByCategoryKeyJson()`

```php
getApiEventsByEventIdReportsByCategoryKeyJson($event_id, $category_key, $live_holds)
```

Detailed report grouped by category key

Seats.io byCategoryKey: buckets are the category keys (chart category id, or the event category key of an event-only category); a category value no category defines is its own key; objects without a category → NO_CATEGORY. Rows carry `categoryKey` next to `category` (the label). Optional `?categoryKey=`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$category_key = 'category_key_example'; // string | Only this categoryKey bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByCategoryKeyJson($event_id, $category_key, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByCategoryKeyJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **category_key** | **string**| Only this categoryKey bucket. | [optional] |
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

## `getApiEventsByEventIdReportsByCategoryLabelCsv()`

```php
getApiEventsByEventIdReportsByCategoryLabelCsv($event_id, $category_label, $live_holds)
```

Detailed report grouped by category label (CSV)

Seats.io byCategoryLabel: buckets are the category labels (the objects' `category` value, as in the legacy by-category report); objects without a category → NO_CATEGORY. Optional `?categoryLabel=`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$category_label = 'category_label_example'; // string | Only this categoryLabel bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByCategoryLabelCsv($event_id, $category_label, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByCategoryLabelCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **category_label** | **string**| Only this categoryLabel bucket. | [optional] |
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

## `getApiEventsByEventIdReportsByCategoryLabelJson()`

```php
getApiEventsByEventIdReportsByCategoryLabelJson($event_id, $category_label, $live_holds)
```

Detailed report grouped by category label

Seats.io byCategoryLabel: buckets are the category labels (the objects' `category` value, as in the legacy by-category report); objects without a category → NO_CATEGORY. Optional `?categoryLabel=`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$category_label = 'category_label_example'; // string | Only this categoryLabel bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByCategoryLabelJson($event_id, $category_label, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByCategoryLabelJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **category_label** | **string**| Only this categoryLabel bucket. | [optional] |
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

## `getApiEventsByEventIdReportsByChannelJson()`

```php
getApiEventsByEventIdReportsByChannelJson($event_id, $channel_key_id)
```

Detailed report grouped by inventory channel

Null channel → NO_CHANNEL. Optional `?channelKeyId=`.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$channel_key_id = 'channel_key_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsByChannelJson($event_id, $channel_key_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByChannelJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **channel_key_id** | **string**|  | [optional] |

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

## `getApiEventsByEventIdReportsByLabelJson()`

```php
getApiEventsByEventIdReportsByLabelJson($event_id, $label)
```

Detailed report grouped by object label (Postgres)

Seats.io-style byLabel. Optional `?label=` filters to one label. Never reads Redis.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$label = 'label_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsByLabelJson($event_id, $label);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByLabelJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **label** | **string**|  | [optional] |

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

## `getApiEventsByEventIdReportsByObjectTypeJson()`

```php
getApiEventsByEventIdReportsByObjectTypeJson($event_id)
```

Detailed report grouped by object type (seat|ga)

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsByObjectTypeJson($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByObjectTypeJson: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdReportsByOrderIdJson()`

```php
getApiEventsByEventIdReportsByOrderIdJson($event_id, $order_id)
```

Detailed report grouped by orderId (Postgres)

Uses object_statuses.order_id. Missing order → bucket NO_ORDER_ID. Optional `?orderId=`.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsByOrderIdJson($event_id, $order_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByOrderIdJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **order_id** | **string**|  | [optional] |

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

## `getApiEventsByEventIdReportsBySectionJson()`

```php
getApiEventsByEventIdReportsBySectionJson($event_id, $section)
```

Detailed report grouped by section

Groups seats by layout sectionGuide name (geometry join via pos_x/pos_y). Seats outside all guides and GA areas → NO_SECTION.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$section = 'section_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsBySectionJson($event_id, $section);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsBySectionJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **section** | **string**|  | [optional] |

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

## `getApiEventsByEventIdReportsByStatusJson()`

```php
getApiEventsByEventIdReportsByStatusJson($event_id)
```

Seat counts by Postgres status

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsByStatusJson($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByStatusJson: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdReportsByZoneCsv()`

```php
getApiEventsByEventIdReportsByZoneCsv($event_id, $zone, $live_holds)
```

Detailed report grouped by zone (CSV)

Zones are `zone` layout shapes. Seats resolve explicit assignment (layoutMeta.seatZones) → their section's zone → the zone outline containing them; GA areas use `zoneId` or their centre. Others → NO_ZONE. Optional `?zone=` (zone name). The response lists the layout `zones`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$zone = 'zone_example'; // string | Only this zone bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByZoneCsv($event_id, $zone, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByZoneCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsByZoneJson()`

```php
getApiEventsByEventIdReportsByZoneJson($event_id, $zone, $live_holds)
```

Detailed report grouped by zone

Zones are `zone` layout shapes. Seats resolve explicit assignment (layoutMeta.seatZones) → their section's zone → the zone outline containing them; GA areas use `zoneId` or their centre. Others → NO_ZONE. Optional `?zone=` (zone name). The response lists the layout `zones`. Rows: `objectId`, `label`, `objectType` (seat|ga), `status` (durable status or object status overlay), `category`, `section`, `zone`, `forSale`, `channelKeyId`, `orderId`, `availability` (available|not_available) and `availabilityReason` (available|resale|booked|held|custom_status|not_for_sale). GA rows add `capacity`, `soldCount`, `heldCount`, `availableCount` and `places` (places per reason). Availability: custom object status → custom_status; sold → booked (resale overlay → resale, still available); durable or live hold → held; not for sale → not_for_sale. `liveHolds` tells whether active buyer holds were merged (false when skipped or Redis is unavailable). The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$zone = 'zone_example'; // string | Only this zone bucket.
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsByZoneJson($event_id, $zone, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsByZoneJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsDeepSummaryJson()`

```php
getApiEventsByEventIdReportsDeepSummaryJson($event_id)
```

Deep summary: status counts nested by category

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsDeepSummaryJson($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsDeepSummaryJson: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdReportsOccupancyCsv()`

```php
getApiEventsByEventIdReportsOccupancyCsv($event_id)
```

Export seat and GA occupancy as CSV

One row per numbered seat or GA area with status and capacity counts. Requires map editor/admin (or partner API key) — not B2C viewer JWTs.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsOccupancyCsv($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsOccupancyCsv: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdReportsSalesCsv()`

```php
getApiEventsByEventIdReportsSalesCsv($event_id)
```

Export confirmed seat and GA sales as CSV

One row per confirmed reservation (numbered seats and GA). Includes buyer user_id — requires map editor/admin (or partner API key).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsSalesCsv($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSalesCsv: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdReportsSummaryByAvailabilityCsv()`

```php
getApiEventsByEventIdReportsSummaryByAvailabilityCsv($event_id, $live_holds)
```

Summary report by availability (CSV)

Counts grouped by availability. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByAvailabilityCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByAvailabilityCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByAvailabilityJson()`

```php
getApiEventsByEventIdReportsSummaryByAvailabilityJson($event_id, $live_holds)
```

Summary report by availability

Counts grouped by availability. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByAvailabilityJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByAvailabilityJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByAvailabilityReasonCsv()`

```php
getApiEventsByEventIdReportsSummaryByAvailabilityReasonCsv($event_id, $live_holds)
```

Summary report by availability reason (CSV)

Counts grouped by availabilityReason. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByAvailabilityReasonCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByAvailabilityReasonCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByAvailabilityReasonJson()`

```php
getApiEventsByEventIdReportsSummaryByAvailabilityReasonJson($event_id, $live_holds)
```

Summary report by availability reason

Counts grouped by availabilityReason. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByAvailabilityReasonJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByAvailabilityReasonJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByCategoryCsv()`

```php
getApiEventsByEventIdReportsSummaryByCategoryCsv($event_id, $live_holds)
```

Summary report by category (CSV)

Counts grouped by category. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByCategoryCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByCategoryCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByCategoryJson()`

```php
getApiEventsByEventIdReportsSummaryByCategoryJson($event_id, $live_holds)
```

Summary report by category

Counts grouped by category. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByCategoryJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByCategoryJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByCategoryKeyCsv()`

```php
getApiEventsByEventIdReportsSummaryByCategoryKeyCsv($event_id, $live_holds)
```

Summary report by category key (CSV)

Counts grouped by categoryKey. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByCategoryKeyCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByCategoryKeyCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByCategoryKeyJson()`

```php
getApiEventsByEventIdReportsSummaryByCategoryKeyJson($event_id, $live_holds)
```

Summary report by category key

Counts grouped by categoryKey. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByCategoryKeyJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByCategoryKeyJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByCategoryLabelCsv()`

```php
getApiEventsByEventIdReportsSummaryByCategoryLabelCsv($event_id, $live_holds)
```

Summary report by category label (CSV)

Counts grouped by categoryLabel. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByCategoryLabelCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByCategoryLabelCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByCategoryLabelJson()`

```php
getApiEventsByEventIdReportsSummaryByCategoryLabelJson($event_id, $live_holds)
```

Summary report by category label

Counts grouped by categoryLabel. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByCategoryLabelJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByCategoryLabelJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByChannelCsv()`

```php
getApiEventsByEventIdReportsSummaryByChannelCsv($event_id, $live_holds)
```

Summary report by channel (CSV)

Counts grouped by channel. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByChannelCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByChannelCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByChannelJson()`

```php
getApiEventsByEventIdReportsSummaryByChannelJson($event_id, $live_holds)
```

Summary report by channel

Counts grouped by channel. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByChannelJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByChannelJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByObjectTypeCsv()`

```php
getApiEventsByEventIdReportsSummaryByObjectTypeCsv($event_id, $live_holds)
```

Summary report by object type (CSV)

Counts grouped by objectType. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByObjectTypeCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByObjectTypeCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByObjectTypeJson()`

```php
getApiEventsByEventIdReportsSummaryByObjectTypeJson($event_id, $live_holds)
```

Summary report by object type

Counts grouped by objectType. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByObjectTypeJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByObjectTypeJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryBySectionCsv()`

```php
getApiEventsByEventIdReportsSummaryBySectionCsv($event_id, $live_holds)
```

Summary report by section (CSV)

Counts grouped by section. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryBySectionCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryBySectionCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryBySectionJson()`

```php
getApiEventsByEventIdReportsSummaryBySectionJson($event_id, $live_holds)
```

Summary report by section

Counts grouped by section. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryBySectionJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryBySectionJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByStatusCsv()`

```php
getApiEventsByEventIdReportsSummaryByStatusCsv($event_id, $live_holds)
```

Summary report by status (CSV)

Counts grouped by status. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByStatusCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByStatusCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByStatusJson()`

```php
getApiEventsByEventIdReportsSummaryByStatusJson($event_id, $live_holds)
```

Summary report by status

Counts grouped by status. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByStatusJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByStatusJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByZoneCsv()`

```php
getApiEventsByEventIdReportsSummaryByZoneCsv($event_id, $live_holds)
```

Summary report by zone (CSV)

Counts grouped by zone. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByZoneCsv($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByZoneCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryByZoneJson()`

```php
getApiEventsByEventIdReportsSummaryByZoneJson($event_id, $live_holds)
```

Summary report by zone

Counts grouped by zone. Each bucket: `count` (places — 1 per seat, capacity per GA area), `objects`, `seats`, `gaPlaces`, and nested `byStatus`, `byAvailability`, `byAvailabilityReason`, `byCategory`, `bySection`, `byZone`, `byChannel`, `byObjectType`. GA areas are split by place, so one area can contribute to several availability buckets. `totals` sums every bucket. Missing keys use NO_CATEGORY / NO_SECTION / NO_ZONE / NO_CHANNEL. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$live_holds = 'live_holds_example'; // string | Merge active buyer holds from the per-event hold index (default `true`). `false` = Postgres only.

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryByZoneJson($event_id, $live_holds);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryByZoneJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
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

## `getApiEventsByEventIdReportsSummaryJson()`

```php
getApiEventsByEventIdReportsSummaryJson($event_id)
```

Occupancy summary JSON (Postgres only)

Aggregated seat + GA counts from Postgres. Does not MGET Redis holds. Requires content_write.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdReportsSummaryJson($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdReportsSummaryJson: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdSalesCounters()`

```php
getApiEventsByEventIdSalesCounters($event_id)
```

Live sales counters (quotas, lots) of an event

Sold and held tickets per quota and lot, read from the atomic Redis counters (expired holds are pruned first). Partner keys need the `reports` scope.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdSalesCounters($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdSalesCounters: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdSalesRules()`

```php
getApiEventsByEventIdSalesRules($event_id)
```

Read the sales rules of an event

Sales rules of an event, enforced atomically in the same Redis call as the seat hold (no overbooking of a quota, lot or buyer limit under any concurrency): `quotas` (meia-entrada: ticket types counted together, `maxShare` of the event capacity and/or `maxCount`), `lotPlans` (lots switch by `quantity` sold+held or at `untilDate`; `prices` per ticket type for catalog modes), `buyerLimit` (`maxTickets` per ticketBuyerId — e.g. a CPF bound in the viewer token — holds included) and `pricingSource` (`partner` | `synced_catalog` | `seatschart_catalog`). Refusals: 409 `quota_exceeded`, `buyer_limit_exceeded`, `lot_sold_out`; 403 `ticket_buyer_required`. Counters are released on hold expiry, release, refused confirmation, failed order and order cancellation. Saving rebuilds the counters from the event orders on next use.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdSalesRules($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdSalesRules: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdSeatViews()`

```php
getApiEventsByEventIdSeatViews($event_id): \SeatsChart\Client\Model\GetApiEventsByEventIdSeatViews200Response
```

List view-from-seat image and optional 360 URLs

Buyer-readable. Returns CDN URLs from layoutMeta.seatViews (imageUrl, optional panoUrl, optional kind photo|equirect) — never data URLs, never joined into GET /seats, never written to the seat-map cache. Hybrid auth.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $result = $apiInstance->getApiEventsByEventIdSeatViews($event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdSeatViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |

### Return type

[**\SeatsChart\Client\Model\GetApiEventsByEventIdSeatViews200Response**](../Model/GetApiEventsByEventIdSeatViews200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiEventsByEventIdSeats()`

```php
getApiEventsByEventIdSeats($event_id)
```

List seats for an event

Returns the seat map (`dbStatus` from Postgres, `visualStatus` merged with live Redis locks) only when the event belongs to the authenticated tenant. Cache-aside key `event:{tenantId}:{eventId}:map` skips the Postgres scan on hits (`X-Seat-Map-Cache: hit|miss`) and merges live TTL locks into each build. Builds are shared per (tenant, event, view, channel cohort) and reused while the inventory version is unchanged, for at most 1 s (`X-Seat-Map-Microcache: hit|shared|miss|bypass`). Responses carry a weak `ETag` (If-None-Match → 304) and are br/gzip-encoded when accepted. Optional header **`x-channel-key`** authorizes an inventory partition (not salesChannel); several comma-separated keys (max 16) authorize every listed channel (renderer `channelKeys`), on reads, holds and best available alike. Buyers receive a masked payload (no channelKeyId); restricted seats without a matching key are non-bookable. channelKey→id resolution uses Redis memo `event:…:channel-keys` (no PG on cache hit when memo is warm). Optional `resalePriceCents` is merged at cache build from the overlay table — the seats SELECT list is unchanged.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdSeats($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdSeats: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdState()`

```php
getApiEventsByEventIdState($event_id)
```

Compact visual state (protocol 5)

Buyer availability for the caller cohort (`x-channel-key`). Coalesced per API process: concurrent readers share one authority read, and a value is reused only while the event inventory version is unchanged and it is younger than `STATE_MICROCACHE_MAX_AGE_MS` (at most 1 s). Weak ETag = stateToken + epoch.sequence; `If-None-Match` returns 304. Gzip-encoded when accepted. `Cache-Control: private, no-cache`. Visual state is bounded-stale; reserve/confirm remain authoritative.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdState($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdState: ', $e->getMessage(), PHP_EOL;
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

## `getApiEventsByEventIdStatusChanges()`

```php
getApiEventsByEventIdStatusChanges($event_id, $limit, $cursor, $action, $order_id, $label, $label_match, $origin, $sort, $object_id)
```

List status changes of an event

Cursor-paginated status history: sales, cancellations, administrative status changes, holds, releases and hold expiries, with their origin. Items: `id`, `objectId`, `objectLabel`, `objectType` (`seat` | `generalAdmission`), `action`, `quantity`, `previousStatus` / `newStatus` (durable seat status), `previousObjectStatus` / `newObjectStatus` (object status vocabulary), `orderId`, `holdOwnerHash` (tenant-scoped digest of the hold session — the same value on a hold, its release or expiry; the raw holder identity is never returned), `ticketBuyerId`, `reason`, `origin` (`{ kind: api_key | dashboard_user | buyer_session | system_expiry, actorId, actorName, ip }`, null for changes recorded before origins existed; `ip` is truncated to /24 IPv4 or /48 IPv6) and `createdAt`. Durable changes come from inventory_transitions; holds, releases and hold expiries come from the status-history stream drained in batches by the worker (eventually consistent, typically within seconds). Pass `nextCursor` back as `cursor` until it is null. Requires content_write (admin, map editor) or a partner API key.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$limit = 3.4; // float | Page size (1..100, default 20).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` value from the previous page.
$action = 'action_example'; // string | Exact action: durable `sell`, `cancel`, `booked`, `free`, `resale`, `retired`, a custom status, or Redis-only `hold`, `release`, `hold_expired`.
$order_id = 'order_id_example'; // string | Only transitions of this order.
$label = 'label_example'; // string | Seat label or GA area name to search (case-insensitive), see `labelMatch`.
$label_match = 'label_match_example'; // string | `exact` (default), `contains`, `prefix` (begins with) or `suffix` (ends with). Exact/prefix/suffix use an index.
$origin = 'origin_example'; // string | Only changes of this origin: `api_key`, `dashboard_user`, `buyer_session`, `system_expiry`, or `unknown` (recorded before origins existed).
$sort = 'sort_example'; // string | `newest` (default) or `oldest` first. Keep the same sort while following `nextCursor`.
$object_id = 'object_id_example'; // string | Seat id (UUID) or exact seat label.

try {
    $apiInstance->getApiEventsByEventIdStatusChanges($event_id, $limit, $cursor, $action, $order_id, $label, $label_match, $origin, $sort, $object_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdStatusChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **limit** | **float**| Page size (1..100, default 20). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; value from the previous page. | [optional] |
| **action** | **string**| Exact action: durable &#x60;sell&#x60;, &#x60;cancel&#x60;, &#x60;booked&#x60;, &#x60;free&#x60;, &#x60;resale&#x60;, &#x60;retired&#x60;, a custom status, or Redis-only &#x60;hold&#x60;, &#x60;release&#x60;, &#x60;hold_expired&#x60;. | [optional] |
| **order_id** | **string**| Only transitions of this order. | [optional] |
| **label** | **string**| Seat label or GA area name to search (case-insensitive), see &#x60;labelMatch&#x60;. | [optional] |
| **label_match** | **string**| &#x60;exact&#x60; (default), &#x60;contains&#x60;, &#x60;prefix&#x60; (begins with) or &#x60;suffix&#x60; (ends with). Exact/prefix/suffix use an index. | [optional] |
| **origin** | **string**| Only changes of this origin: &#x60;api_key&#x60;, &#x60;dashboard_user&#x60;, &#x60;buyer_session&#x60;, &#x60;system_expiry&#x60;, or &#x60;unknown&#x60; (recorded before origins existed). | [optional] |
| **sort** | **string**| &#x60;newest&#x60; (default) or &#x60;oldest&#x60; first. Keep the same sort while following &#x60;nextCursor&#x60;. | [optional] |
| **object_id** | **string**| Seat id (UUID) or exact seat label. | [optional] |

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

## `getApiEventsByEventIdZones()`

```php
getApiEventsByEventIdZones($event_id)
```

List the zones of an event

Zones of the layout the event is drawn from — its own published map when it has one, else the published chart — in drawing order, same item shape as `GET /charts/{chartId}/zones`. Only the zone shapes are read. Per-zone availability: `GET /events/{eventId}/reports/by-zone.json`. Requires read access.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string | Event id (UUID) or event key.

try {
    $apiInstance->getApiEventsByEventIdZones($event_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getApiEventsByEventIdZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| Event id (UUID) or event key. | |

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

## `patchApiEventsByEventId()`

```php
patchApiEventsByEventId($event_id, $patch_api_events_by_event_id_request, $idempotency_key)
```

Patch event: name, date, currency, overrides (isInThePast is irreversible)

All fields optional. `date` is an ISO-8601 timestamp. `tableBookingConfig` overrides the chart table booking mode for this event only (`all_by_seat`, `all_by_table`, or `custom` with `tables: { tableId: by_seat | by_table }`); seat-to-table membership stays from the chart. `null` clears the override. Applied by reserve and in the published commercial layout. `categoryOverrides` **replaces** the per-event override map (keys = seat/GA `category` values; `null` clears all): `priceCents` sets the base price of every seat in the category (clearing it restores the chart price by seat label; ticket-type prices from the chart still take precedence), `tint` (#RRGGBB) recolors the category in this event's published geometry (republished atomically), `forSale: false` takes the category off sale (removing it puts it back on sale; retired seats stay off sale). `forSalePerCategory` (`{ category: boolean }`) toggles category availability without storing an override. Prices already accepted in orders never change. `key` sets, renames or clears (`null`) the event key (409 `event_key_taken`).  **Chart switch** (`chartId`): moves the event to another published, non-archived chart of the workspace in **one transaction** with the event row and every seat/GA row locked in the commercial lock order. Seats are matched by `label`, GA areas by `name`: matched objects keep their ids (so holds, sales, orders and status history stay valid) and take the new geometry and category; sold/held/pending seats keep their price, other seats take the new chart price (or the category override). Unmatched objects without commercial state are removed, new chart objects are added (closed categories start not for sale), the event map draft is discarded and the geometry is republished atomically. Refused with **409 `chart_switch_conflict`** and nothing changed when a sold, held, pending or historical object has no counterpart, or a GA area would have less capacity than sold + held + withheld places: `objects: [{ objectId, label, objectType, reason: sold|held|pending|history|capacity, required?, capacity? }]`. Other refusals: 404 (chart), 409 `chart_not_published`, `chart_archived`, `season_chart_mismatch`. Emits `event.updated` with `changed_fields`.  **Event categories** (seats.io event `categories` / `objectCategories`): `categories` **replaces** the event-only categories (`[{ key, label, color, accessible? }]`, max 128; keys and labels unique, and neither may reuse a chart category id or name: 400 `category_conflict`). They are added to this event's published layout categories (`{ id: key, name: label, tint, accessible }`), so the renderer, legend and filters show them. `objectCategories` **replaces** the object → category map (object label = seat label or GA area name; value = event category key, chart category id or chart category name; max 10000; unknown references: 400 `unknown_category` with `labels`). Assignments are resolved once, in this transaction: the objects' `category` becomes the category label (removing an assignment restores the previous category), reassigned seats take the price override of their new category (else the chart price) and close with a closed category, and the geometry is republished. Best available (`categories` filter), quotes, synced price tables (keyed by the label), sales rules, reports and the section aggregates of the renderer all see the event category. Events that use neither keep their geometry hash. Changes emit `event.categories_updated` (event log and admin webhook) and `event.updated` with `changed_fields` `categories` / `objectCategories`.  Response: `{ id, key, name, date, currency, isInThePast, chartId, categoryOverrides, tableBookingConfig, categories, objectCategories, forSaleUpdated?, chartSwitch?: { previousChartId, chartId, keptSeats, addedSeats, removedSeats, keptGaAreas, addedGaAreas, removedGaAreas } }`.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$patch_api_events_by_event_id_request = new \SeatsChart\Client\Model\PatchApiEventsByEventIdRequest(); // \SeatsChart\Client\Model\PatchApiEventsByEventIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiEventsByEventId($event_id, $patch_api_events_by_event_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->patchApiEventsByEventId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **patch_api_events_by_event_id_request** | [**\SeatsChart\Client\Model\PatchApiEventsByEventIdRequest**](../Model/PatchApiEventsByEventIdRequest.md)|  | |
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

## `patchApiEventsByEventIdInventoryChannelsByChannelKeyId()`

```php
patchApiEventsByEventIdInventoryChannelsByChannelKeyId($event_id, $channel_key_id, $patch_api_events_by_event_id_inventory_channels_by_channel_key_id_request, $idempotency_key)
```

Rename or recolor an inventory channel

Updates `name` and/or `color` (#RRGGBB). The secret key, members and areaPlaces are unchanged. Response `{ channel: { id, name, color, keyPrefix, createdAt } }`.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$channel_key_id = 'channel_key_id_example'; // string
$patch_api_events_by_event_id_inventory_channels_by_channel_key_id_request = new \SeatsChart\Client\Model\PatchApiEventsByEventIdInventoryChannelsByChannelKeyIdRequest(); // \SeatsChart\Client\Model\PatchApiEventsByEventIdInventoryChannelsByChannelKeyIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiEventsByEventIdInventoryChannelsByChannelKeyId($event_id, $channel_key_id, $patch_api_events_by_event_id_inventory_channels_by_channel_key_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->patchApiEventsByEventIdInventoryChannelsByChannelKeyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **channel_key_id** | **string**|  | |
| **patch_api_events_by_event_id_inventory_channels_by_channel_key_id_request** | [**\SeatsChart\Client\Model\PatchApiEventsByEventIdInventoryChannelsByChannelKeyIdRequest**](../Model/PatchApiEventsByEventIdInventoryChannelsByChannelKeyIdRequest.md)|  | |
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

## `postApiEvents()`

```php
postApiEvents($post_api_events_request, $idempotency_key)
```

Create event

Creates a new event scoped to the workspace. Optional `chartId` clones the published chart seat/GA templates into event inventory. A chart whose published map has error-level validation issues (workspace severity, see `GET /api/workspace/chart-validation`) is refused with 409 `chart_invalid` `{ chartId, issues: [{ code, severity, count, message }] }`; fix the chart in the designer and publish again. Optional `key` (unique per workspace, URL-safe, not UUID-shaped) can be used instead of the id in every event route; 409 `event_key_taken`. Creation-time configuration is applied **in the creation transaction** (all or nothing): `tableBookingConfig` and `categoryOverrides` (same semantics as PATCH), `channels` (inventory channels with their objects and GA `areaPlaces`; each `channelKey` secret is returned once) and `forSaleConfig` (`forSale: false` = listed objects/categories not for sale and `areaPlaces` withheld; `forSale: true` = only the listed ones for sale). Objects are seat labels/UUIDs or GA area names/UUIDs; unknown ones return 400 `objects_not_found`. Optional `seasonId` attaches the event afterwards and syncs NFS + channelKey from the season source. Optional `currency` (ISO 4217, two-decimal) sets the catalog currency used by quotes and the viewer. Emits the `event.created` webhook.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_events_request = new \SeatsChart\Client\Model\PostApiEventsRequest(); // \SeatsChart\Client\Model\PostApiEventsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEvents($post_api_events_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_events_request** | [**\SeatsChart\Client\Model\PostApiEventsRequest**](../Model/PostApiEventsRequest.md)|  | |
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

## `postApiEventsBulk()`

```php
postApiEventsBulk($post_api_events_bulk_request, $idempotency_key)
```

Create up to 50 events for one chart

Creates every event (with its cloned seat/GA inventory and published geometry) in **one transaction**: either all events exist afterwards or none. The plan event limit is checked for the whole batch (402). Optional `seasonId` attaches each created event afterwards (like POST /events); `seasonId: null` in an item means that attachment failed. A chart with error-level validation issues is refused with 409 `chart_invalid` (`issues`, `index`) and nothing is created. Every item accepts the creation-time configuration of POST /events (`key`, `tableBookingConfig`, `categoryOverrides`, `channels`, `forSaleConfig`), applied in the same transaction; a rejected item returns its error with `index` and nothing is created. Keys must be unique in the batch and the workspace (409 `event_key_taken`). Emits one `event.created` webhook for the batch. Response `{ events: [{ id, key, name, date, chartId, clonedSeats, clonedGaAreas, seasonId, categoryOverrides, tableBookingConfig, channels, forSale }] }`.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_events_bulk_request = new \SeatsChart\Client\Model\PostApiEventsBulkRequest(); // \SeatsChart\Client\Model\PostApiEventsBulkRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsBulk($post_api_events_bulk_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_events_bulk_request** | [**\SeatsChart\Client\Model\PostApiEventsBulkRequest**](../Model/PostApiEventsBulkRequest.md)|  | |
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

## `postApiEventsByEventIdActionsMoveToNewChartCopy()`

```php
postApiEventsByEventIdActionsMoveToNewChartCopy($event_id, $post_api_charts_by_chart_id_versions_by_version_actions_copy_request, $idempotency_key)
```

Move the event to a new copy of its chart

Copies the event's current chart (published seat/GA templates, layout and draft) into a new published chart and repoints the event to it in one transaction, so the event's map can be edited without affecting other events. Seats, holds, sales and orders are never touched (seat ids are unchanged). Refuses with 409 `structural_mismatch` (`orphanedObjects`: labels) when a sold, held or pending seat — or a GA area with sales — has no counterpart in the chart, and with 409 `chart_not_published` when there is nothing to copy. Counts against the plan chart limit. Response `{ eventId, previousChartId, chartId, chartName }`.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_charts_by_chart_id_versions_by_version_actions_copy_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdVersionsByVersionActionsCopyRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdVersionsByVersionActionsCopyRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsMoveToNewChartCopy($event_id, $post_api_charts_by_chart_id_versions_by_version_actions_copy_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdActionsMoveToNewChartCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_charts_by_chart_id_versions_by_version_actions_copy_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdVersionsByVersionActionsCopyRequest**](../Model/PostApiChartsByChartIdVersionsByVersionActionsCopyRequest.md)|  | |
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

## `postApiEventsByEventIdDuplicate()`

```php
postApiEventsByEventIdDuplicate($event_id, $post_api_events_by_event_id_duplicate_request, $idempotency_key)
```

Duplicate event

Creates a new event with copied seat and GA inventory (all available), including inventory_channels (same secrets) and remapped channel_key_id + for_sale. Reservations are not copied.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_duplicate_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdDuplicateRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdDuplicateRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdDuplicate($event_id, $post_api_events_by_event_id_duplicate_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_duplicate_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdDuplicateRequest**](../Model/PostApiEventsByEventIdDuplicateRequest.md)|  | |
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

## `postApiEventsByEventIdInventoryChannels()`

```php
postApiEventsByEventIdInventoryChannels($event_id, $post_api_events_by_event_id_inventory_channels_request, $idempotency_key)
```

Create inventory channel

Creates a channelKey partition. Full `channelKey` secret is returned **once** here; subsequent GET list only returns keyPrefix. Rebuilds Redis channel-keys memo.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_inventory_channels_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdInventoryChannelsRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdInventoryChannelsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdInventoryChannels($event_id, $post_api_events_by_event_id_inventory_channels_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdInventoryChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_inventory_channels_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdInventoryChannelsRequest**](../Model/PostApiEventsByEventIdInventoryChannelsRequest.md)|  | |
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

## `postApiEventsByEventIdInventoryChannelsAssign()`

```php
postApiEventsByEventIdInventoryChannelsAssign($event_id, $post_api_events_by_event_id_inventory_channels_assign_request, $idempotency_key)
```

Assign seats/GA to inventory channel

Batch-set `channel_key_id` (null = public). Releases holds when becoming more restricted. Optional `areaPlaces` merges GA place quotas onto the channel (requires channelKeyId). Invalidates map cache once and publishes inventory SSE (`kind: inventory`, `type: channel`). Viewers with a channel mask should refetch GET /seats. Optional `cascadeSeason` syncs live season siblings when this event is the source (skip past). Does not change salesChannel order limits.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_inventory_channels_assign_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdInventoryChannelsAssignRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdInventoryChannelsAssignRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdInventoryChannelsAssign($event_id, $post_api_events_by_event_id_inventory_channels_assign_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdInventoryChannelsAssign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_inventory_channels_assign_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdInventoryChannelsAssignRequest**](../Model/PostApiEventsByEventIdInventoryChannelsAssignRequest.md)|  | |
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

## `postApiEventsByEventIdInventoryForSaleApply()`

```php
postApiEventsByEventIdInventoryForSaleApply($event_id, $post_api_events_by_event_id_inventory_for_sale_apply_request, $idempotency_key)
```

Apply for-sale / not-for-sale to a selection (incremental)

Batch-set `for_sale` on seats and/or GA areas (`seatIds`, `gaAreaIds`, and/or whole `categories`). When marking not-for-sale, releases active Redis seat holds and clears GA hold hashes for those objects. `areaPlaces` (`{ gaAreaId: places }`) withholds (`forSale: false`) or returns (`forSale: true`) a number of places of a GA area without closing it: withholding is checked under the GA row lock against sold and held places (409 `insufficient_free_places`), and new holds then use capacity minus withheld places. `everything: true` (alone) puts every seat (except retired ones) and GA area back on sale and clears withheld places. Category toggles never put retired seats back on sale. Invalidates the seat-map cache and publishes inventory SSE (`kind: inventory`, `type: for_sale`) so connected viewers can apply NFS locally. Optional `cascadeSeason` (default false) syncs live season siblings when this event is the source (NFS + channels + object_statuses; past members skipped; members with `forSalePropagated: false` keep their own for-sale flags). Inheritance is cascade-on-write, not a second table. On a season member that is not the source, this call sets the membership's `forSalePropagated` to false (response `forSalePropagated: false` when it changed): restore it with PATCH /seasons/{seasonId}/events/{eventId}. Response includes `notForSalePlaces` (resulting withheld places per GA area touched). Requires partner API key or dashboard JWT with map authoring permission.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_inventory_for_sale_apply_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdInventoryForSaleApplyRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdInventoryForSaleApplyRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdInventoryForSaleApply($event_id, $post_api_events_by_event_id_inventory_for_sale_apply_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdInventoryForSaleApply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_inventory_for_sale_apply_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdInventoryForSaleApplyRequest**](../Model/PostApiEventsByEventIdInventoryForSaleApplyRequest.md)|  | |
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

## `postApiEventsByEventIdMapDraftActionsDiscard()`

```php
postApiEventsByEventIdMapDraftActionsDiscard($event_id, $idempotency_key)
```

Discard event map draft

Throws away unpublished designer changes so `GET .../map/draft` returns the live map (the seats buyers see). Seats, inventory, holds and the B2C viewer are untouched. `409 ERR_DRAFT_NOTHING_TO_DISCARD` when there is no draft with unpublished changes.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdMapDraftActionsDiscard($event_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdMapDraftActionsDiscard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `postApiEventsByEventIdMapPublish()`

```php
postApiEventsByEventIdMapPublish($event_id, $idempotency_key)
```

Publish draft map to live seats

Promotes draft → `seats` + `event_layouts`, invalidates map cache. Blocks publish if draft removes sold seats.  The draft is validated with the same rules the designer runs: duplicate seat labels within a section, seats without a category (when categories exist), empty labels, overlapping seats and tables with fewer than 2 seats are **errors** and return `422 { error: \"validation_failed\", issues: [{ code, severity, objectIds, message }] }`. Warnings (one-seat row gaps) do not block and are returned in `warnings`.  Every successful publish appends an immutable version (`version`; `sameAsVersion` names an earlier version with identical content). The map that was live before the first recorded publish becomes the `baseline` version 1. See `GET /api/events/:eventId/map/versions`.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdMapPublish($event_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdMapPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiEventsByEventIdMapVersionsByVersionActionsRestoreToDraft()`

```php
postApiEventsByEventIdMapVersionsByVersionActionsRestoreToDraft($event_id, $version, $idempotency_key)
```

Restore an event map version into the draft

Overwrites the event map draft with the content of a published version (seats, shapes, categories, images). It never publishes: buyers keep the live map until `POST /api/events/:eventId/map/publish`, which runs the normal validation and sold-seat checks and records a new version. Unpublished draft changes are replaced. Requires map authoring rights (admin / map editor dashboard role or `x-api-key` with `charts_write`).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$version = 3.4; // float | Version number (1-based).
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdMapVersionsByVersionActionsRestoreToDraft($event_id, $version, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdMapVersionsByVersionActionsRestoreToDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **version** | **float**| Version number (1-based). | |
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

## `postApiEventsByEventIdObjectsActionsRetrieve()`

```php
postApiEventsByEventIdObjectsActionsRetrieve($event_id, $post_api_events_by_event_id_objects_actions_retrieve_request, $idempotency_key)
```

Retrieve several objects at once (seats.io retrieveObjectInfos)

Same object info as GET /events/{eventId}/objects/{objectId} for up to 100 objects in one call: `{ objects: { [ref]: info }, notFound: [ref], ambiguous: [ref] }` (ambiguous = a label shared by several objects; use the id). Read-only (API keys need the `read` scope). Requires content_write for dashboard sessions.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_objects_actions_retrieve_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdObjectsActionsRetrieveRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdObjectsActionsRetrieveRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdObjectsActionsRetrieve($event_id, $post_api_events_by_event_id_objects_actions_retrieve_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdObjectsActionsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_objects_actions_retrieve_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdObjectsActionsRetrieveRequest**](../Model/PostApiEventsByEventIdObjectsActionsRetrieveRequest.md)|  | |
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

## `postApiEventsByEventIdSalesCountersActionsRebuild()`

```php
postApiEventsByEventIdSalesCountersActionsRebuild($event_id, $idempotency_key)
```

Rebuild the sold counters of an event from its orders

Recounts sold tickets per ticket type, lot and buyer from the event order items (PostgreSQL); live holds are kept. Use after manual data repairs.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdSalesCountersActionsRebuild($event_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->postApiEventsByEventIdSalesCountersActionsRebuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `putApiEventsByEventIdInventoryChannels()`

```php
putApiEventsByEventIdInventoryChannels($event_id, $put_api_events_by_event_id_inventory_channels_request, $idempotency_key)
```

Replace all inventory channel assignments atomically

Declarative replacement in one transaction: each listed channel gets exactly the listed seats, GA areas and `areaPlaces`; every other seat/GA area of the event becomes public and unlisted channels keep no areaPlaces. An object listed under two channels is rejected (400). Holds on objects that became more restricted are released after COMMIT; one map-cache invalidate and one `channel` inventory SSE. `assignments: []` makes the whole event public. Response `{ updatedSeats, updatedGaAreas, releasedSeatHolds, clearedGaHoldAreas }`.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$put_api_events_by_event_id_inventory_channels_request = new \SeatsChart\Client\Model\PutApiEventsByEventIdInventoryChannelsRequest(); // \SeatsChart\Client\Model\PutApiEventsByEventIdInventoryChannelsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiEventsByEventIdInventoryChannels($event_id, $put_api_events_by_event_id_inventory_channels_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->putApiEventsByEventIdInventoryChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **put_api_events_by_event_id_inventory_channels_request** | [**\SeatsChart\Client\Model\PutApiEventsByEventIdInventoryChannelsRequest**](../Model/PutApiEventsByEventIdInventoryChannelsRequest.md)|  | |
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

## `putApiEventsByEventIdInventoryChannelsDefinitions()`

```php
putApiEventsByEventIdInventoryChannelsDefinitions($event_id, $put_api_events_by_event_id_inventory_channels_definitions_request, $idempotency_key)
```

Replace all inventory channels (definitions and assignments) atomically

Seats.io `channels.replace` in **one SQL transaction**: the event's channels become exactly the listed ones. A channel with `id` (or an existing `channelKey`) is kept and renamed / recoloured / re-keyed; any other entry creates a channel; channels not listed are deleted. Every seat and GA area gets the channel it is listed under or becomes public, and each channel's `areaPlaces` is replaced. An object under two channels is rejected (400); an unknown `id` is 404; a `channelKey` used by another channel is 409. Holds on objects that became more restricted are released after COMMIT; the channel-key memo is rebuilt, one map-cache invalidate and one `channel` inventory SSE follow. `channels: []` deletes every channel. Response `{ channels: [{ id, name, color, keyPrefix, created, channelKey? }], deletedChannels, updatedSeats, updatedGaAreas, releasedSeatHolds, clearedGaHoldAreas }` — `channelKey` only for created channels whose secret was generated.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$put_api_events_by_event_id_inventory_channels_definitions_request = new \SeatsChart\Client\Model\PutApiEventsByEventIdInventoryChannelsDefinitionsRequest(); // \SeatsChart\Client\Model\PutApiEventsByEventIdInventoryChannelsDefinitionsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiEventsByEventIdInventoryChannelsDefinitions($event_id, $put_api_events_by_event_id_inventory_channels_definitions_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->putApiEventsByEventIdInventoryChannelsDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **put_api_events_by_event_id_inventory_channels_definitions_request** | [**\SeatsChart\Client\Model\PutApiEventsByEventIdInventoryChannelsDefinitionsRequest**](../Model/PutApiEventsByEventIdInventoryChannelsDefinitionsRequest.md)|  | |
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

## `putApiEventsByEventIdInventoryForSale()`

```php
putApiEventsByEventIdInventoryForSale($event_id, $put_api_events_by_event_id_inventory_for_sale_request, $idempotency_key)
```

Replace the whole for-sale configuration atomically

Seats.io `replaceForSaleConfig` in **one SQL transaction** (all or nothing): the listed seats (`seatIds`), GA areas (`gaAreaIds`, or keys of `areaPlaces`) and every object of the listed `categories` take `forSale`, every other seat and GA area of the event takes the opposite. `areaPlaces` sets the withheld places of a listed area (`forSale: false`: that many places off sale; `forSale: true`: only that many on sale); unlisted areas keep no withheld places. Retired seats always stay off sale. GA rows are locked and withheld places are checked against sold and held places (409 `insufficient_free_places`, nothing written). Holds on objects that went off sale are released after COMMIT; one cache invalidate and one `for_sale` realtime message per direction. Empty lists with `forSale: false` put everything on sale. Response: `changedSeats`, `changedGaAreas`, `seatsNotForSale`, `gaAreasNotForSale`, `notForSalePlaces`, `releasedSeatHolds`, `clearedGaHoldAreas`. Season behaviour as POST …/for-sale/apply (`cascadeSeason`, `forSalePropagated`).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$put_api_events_by_event_id_inventory_for_sale_request = new \SeatsChart\Client\Model\PutApiEventsByEventIdInventoryForSaleRequest(); // \SeatsChart\Client\Model\PutApiEventsByEventIdInventoryForSaleRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiEventsByEventIdInventoryForSale($event_id, $put_api_events_by_event_id_inventory_for_sale_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->putApiEventsByEventIdInventoryForSale: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **put_api_events_by_event_id_inventory_for_sale_request** | [**\SeatsChart\Client\Model\PutApiEventsByEventIdInventoryForSaleRequest**](../Model/PutApiEventsByEventIdInventoryForSaleRequest.md)|  | |
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

## `putApiEventsByEventIdMap()`

```php
putApiEventsByEventIdMap($event_id, $post_api_charts_by_chart_id_actions_validate_request, $idempotency_key)
```

Save map draft (legacy path)

Alias for **`PUT /map/draft`**. Does **not** publish to buyers — use **`POST /map/publish`**.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_charts_by_chart_id_actions_validate_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiEventsByEventIdMap($event_id, $post_api_charts_by_chart_id_actions_validate_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->putApiEventsByEventIdMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_charts_by_chart_id_actions_validate_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequest**](../Model/PostApiChartsByChartIdActionsValidateRequest.md)|  | |
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

## `putApiEventsByEventIdMapDraft()`

```php
putApiEventsByEventIdMapDraft($event_id, $post_api_charts_by_chart_id_actions_validate_request, $idempotency_key)
```

Save map draft (does not go live)

Persists designer changes to `event_map_drafts` only. B2C viewers keep reading the last published map until `POST .../map/publish`. With `baseDraftUpdatedAt` the save is conflict-safe: 409 `draft_conflict` (with the current `draftUpdatedAt`) when the draft changed since that version (designer autosave).

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_charts_by_chart_id_actions_validate_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiEventsByEventIdMapDraft($event_id, $post_api_charts_by_chart_id_actions_validate_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->putApiEventsByEventIdMapDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_charts_by_chart_id_actions_validate_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequest**](../Model/PostApiChartsByChartIdActionsValidateRequest.md)|  | |
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

## `putApiEventsByEventIdPricing()`

```php
putApiEventsByEventIdPricing($event_id, $put_api_events_by_event_id_pricing_request, $idempotency_key)
```

Push the synced price table of an event (synced catalog mode)

Categories × ticket types with prices in cents, optional fees and per-lot prices. Displayed by the renderer for events whose pricing source is `synced_catalog` and used to validate confirmations (409 `price_mismatch`) and quotes. Cached per event by content hash: no database read on reserve/confirm. Sets the event currency when it has none (409 `currency_mismatch` when it differs). Partner keys need the `events_write` scope.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$put_api_events_by_event_id_pricing_request = new \SeatsChart\Client\Model\PutApiEventsByEventIdPricingRequest(); // \SeatsChart\Client\Model\PutApiEventsByEventIdPricingRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiEventsByEventIdPricing($event_id, $put_api_events_by_event_id_pricing_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->putApiEventsByEventIdPricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **put_api_events_by_event_id_pricing_request** | [**\SeatsChart\Client\Model\PutApiEventsByEventIdPricingRequest**](../Model/PutApiEventsByEventIdPricingRequest.md)|  | |
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

## `putApiEventsByEventIdSalesRules()`

```php
putApiEventsByEventIdSalesRules($event_id, $put_api_events_by_event_id_sales_rules_request, $idempotency_key)
```

Replace the sales rules of an event (quotas, lots, buyer limit, pricing source)

Sales rules of an event, enforced atomically in the same Redis call as the seat hold (no overbooking of a quota, lot or buyer limit under any concurrency): `quotas` (meia-entrada: ticket types counted together, `maxShare` of the event capacity and/or `maxCount`), `lotPlans` (lots switch by `quantity` sold+held or at `untilDate`; `prices` per ticket type for catalog modes), `buyerLimit` (`maxTickets` per ticketBuyerId — e.g. a CPF bound in the viewer token — holds included) and `pricingSource` (`partner` | `synced_catalog` | `seatschart_catalog`). Refusals: 409 `quota_exceeded`, `buyer_limit_exceeded`, `lot_sold_out`; 403 `ticket_buyer_required`. Counters are released on hold expiry, release, refused confirmation, failed order and order cancellation. Saving rebuilds the counters from the event orders on next use. Partner keys need the `events_write` scope.

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


$apiInstance = new SeatsChart\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$put_api_events_by_event_id_sales_rules_request = new \SeatsChart\Client\Model\PutApiEventsByEventIdSalesRulesRequest(); // \SeatsChart\Client\Model\PutApiEventsByEventIdSalesRulesRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiEventsByEventIdSalesRules($event_id, $put_api_events_by_event_id_sales_rules_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->putApiEventsByEventIdSalesRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **put_api_events_by_event_id_sales_rules_request** | [**\SeatsChart\Client\Model\PutApiEventsByEventIdSalesRulesRequest**](../Model/PutApiEventsByEventIdSalesRulesRequest.md)|  | |
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

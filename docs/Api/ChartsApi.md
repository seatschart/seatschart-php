# SeatsChart\Client\ChartsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiChartsByChartId()**](ChartsApi.md#deleteApiChartsByChartId) | **DELETE** /api/charts/{chartId} | Delete chart permanently |
| [**deleteApiChartsByChartIdPreviewLink()**](ChartsApi.md#deleteApiChartsByChartIdPreviewLink) | **DELETE** /api/charts/{chartId}/preview-link | Revoke every public preview link of a chart |
| [**getApiCharts()**](ChartsApi.md#getApiCharts) | **GET** /api/charts | List charts |
| [**getApiChartsByChartId()**](ChartsApi.md#getApiChartsByChartId) | **GET** /api/charts/{chartId} | Retrieve one chart |
| [**getApiChartsByChartIdCategories()**](ChartsApi.md#getApiChartsByChartIdCategories) | **GET** /api/charts/{chartId}/categories | List the categories of a chart |
| [**getApiChartsByChartIdMap()**](ChartsApi.md#getApiChartsByChartIdMap) | **GET** /api/charts/{chartId}/map | Read one version of a chart map |
| [**getApiChartsByChartIdMapDraft()**](ChartsApi.md#getApiChartsByChartIdMapDraft) | **GET** /api/charts/{chartId}/map/draft | Load chart map draft for designer |
| [**getApiChartsByChartIdReportsByCategoryCsv()**](ChartsApi.md#getApiChartsByChartIdReportsByCategoryCsv) | **GET** /api/charts/{chartId}/reports/by-category.csv | Chart report by category (CSV) |
| [**getApiChartsByChartIdReportsByCategoryJson()**](ChartsApi.md#getApiChartsByChartIdReportsByCategoryJson) | **GET** /api/charts/{chartId}/reports/by-category.json | Chart report by category |
| [**getApiChartsByChartIdReportsByCategoryKeyCsv()**](ChartsApi.md#getApiChartsByChartIdReportsByCategoryKeyCsv) | **GET** /api/charts/{chartId}/reports/by-category-key.csv | Chart report by category key (CSV) |
| [**getApiChartsByChartIdReportsByCategoryKeyJson()**](ChartsApi.md#getApiChartsByChartIdReportsByCategoryKeyJson) | **GET** /api/charts/{chartId}/reports/by-category-key.json | Chart report by category key |
| [**getApiChartsByChartIdReportsByCategoryLabelCsv()**](ChartsApi.md#getApiChartsByChartIdReportsByCategoryLabelCsv) | **GET** /api/charts/{chartId}/reports/by-category-label.csv | Chart report by category label (CSV) |
| [**getApiChartsByChartIdReportsByCategoryLabelJson()**](ChartsApi.md#getApiChartsByChartIdReportsByCategoryLabelJson) | **GET** /api/charts/{chartId}/reports/by-category-label.json | Chart report by category label |
| [**getApiChartsByChartIdReportsByLabelCsv()**](ChartsApi.md#getApiChartsByChartIdReportsByLabelCsv) | **GET** /api/charts/{chartId}/reports/by-label.csv | Chart report by label (CSV) |
| [**getApiChartsByChartIdReportsByLabelJson()**](ChartsApi.md#getApiChartsByChartIdReportsByLabelJson) | **GET** /api/charts/{chartId}/reports/by-label.json | Chart report by label |
| [**getApiChartsByChartIdReportsByObjectTypeCsv()**](ChartsApi.md#getApiChartsByChartIdReportsByObjectTypeCsv) | **GET** /api/charts/{chartId}/reports/by-object-type.csv | Chart report by object type (CSV) |
| [**getApiChartsByChartIdReportsByObjectTypeJson()**](ChartsApi.md#getApiChartsByChartIdReportsByObjectTypeJson) | **GET** /api/charts/{chartId}/reports/by-object-type.json | Chart report by object type |
| [**getApiChartsByChartIdReportsBySectionCsv()**](ChartsApi.md#getApiChartsByChartIdReportsBySectionCsv) | **GET** /api/charts/{chartId}/reports/by-section.csv | Chart report by section (CSV) |
| [**getApiChartsByChartIdReportsBySectionJson()**](ChartsApi.md#getApiChartsByChartIdReportsBySectionJson) | **GET** /api/charts/{chartId}/reports/by-section.json | Chart report by section |
| [**getApiChartsByChartIdReportsByZoneCsv()**](ChartsApi.md#getApiChartsByChartIdReportsByZoneCsv) | **GET** /api/charts/{chartId}/reports/by-zone.csv | Chart report by zone (CSV) |
| [**getApiChartsByChartIdReportsByZoneJson()**](ChartsApi.md#getApiChartsByChartIdReportsByZoneJson) | **GET** /api/charts/{chartId}/reports/by-zone.json | Chart report by zone |
| [**getApiChartsByChartIdReportsSummaryByCategoryCsv()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByCategoryCsv) | **GET** /api/charts/{chartId}/reports/summary/by-category.csv | Chart summary by category (CSV) |
| [**getApiChartsByChartIdReportsSummaryByCategoryJson()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByCategoryJson) | **GET** /api/charts/{chartId}/reports/summary/by-category.json | Chart summary by category |
| [**getApiChartsByChartIdReportsSummaryByCategoryKeyCsv()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByCategoryKeyCsv) | **GET** /api/charts/{chartId}/reports/summary/by-category-key.csv | Chart summary by category key (CSV) |
| [**getApiChartsByChartIdReportsSummaryByCategoryKeyJson()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByCategoryKeyJson) | **GET** /api/charts/{chartId}/reports/summary/by-category-key.json | Chart summary by category key |
| [**getApiChartsByChartIdReportsSummaryByCategoryLabelCsv()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByCategoryLabelCsv) | **GET** /api/charts/{chartId}/reports/summary/by-category-label.csv | Chart summary by category label (CSV) |
| [**getApiChartsByChartIdReportsSummaryByCategoryLabelJson()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByCategoryLabelJson) | **GET** /api/charts/{chartId}/reports/summary/by-category-label.json | Chart summary by category label |
| [**getApiChartsByChartIdReportsSummaryByObjectTypeCsv()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByObjectTypeCsv) | **GET** /api/charts/{chartId}/reports/summary/by-object-type.csv | Chart summary by object type (CSV) |
| [**getApiChartsByChartIdReportsSummaryByObjectTypeJson()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByObjectTypeJson) | **GET** /api/charts/{chartId}/reports/summary/by-object-type.json | Chart summary by object type |
| [**getApiChartsByChartIdReportsSummaryBySectionCsv()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryBySectionCsv) | **GET** /api/charts/{chartId}/reports/summary/by-section.csv | Chart summary by section (CSV) |
| [**getApiChartsByChartIdReportsSummaryBySectionJson()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryBySectionJson) | **GET** /api/charts/{chartId}/reports/summary/by-section.json | Chart summary by section |
| [**getApiChartsByChartIdReportsSummaryByZoneCsv()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByZoneCsv) | **GET** /api/charts/{chartId}/reports/summary/by-zone.csv | Chart summary by zone (CSV) |
| [**getApiChartsByChartIdReportsSummaryByZoneJson()**](ChartsApi.md#getApiChartsByChartIdReportsSummaryByZoneJson) | **GET** /api/charts/{chartId}/reports/summary/by-zone.json | Chart summary by zone |
| [**getApiChartsByChartIdThumbnail()**](ChartsApi.md#getApiChartsByChartIdThumbnail) | **GET** /api/charts/{chartId}/thumbnail | Chart thumbnail |
| [**getApiChartsByChartIdVersions()**](ChartsApi.md#getApiChartsByChartIdVersions) | **GET** /api/charts/{chartId}/versions | List published versions |
| [**getApiChartsByChartIdZones()**](ChartsApi.md#getApiChartsByChartIdZones) | **GET** /api/charts/{chartId}/zones | List the zones of a chart |
| [**getApiChartsTags()**](ChartsApi.md#getApiChartsTags) | **GET** /api/charts/tags | List chart tags |
| [**patchApiChartsByChartId()**](ChartsApi.md#patchApiChartsByChartId) | **PATCH** /api/charts/{chartId} | Update chart name or key |
| [**postApiCharts()**](ChartsApi.md#postApiCharts) | **POST** /api/charts | Create chart |
| [**postApiChartsByChartIdActionsArchive()**](ChartsApi.md#postApiChartsByChartIdActionsArchive) | **POST** /api/charts/{chartId}/actions/archive | Archive chart |
| [**postApiChartsByChartIdActionsCopyToWorkspace()**](ChartsApi.md#postApiChartsByChartIdActionsCopyToWorkspace) | **POST** /api/charts/{chartId}/actions/copy-to-workspace | Copy a chart to another workspace |
| [**postApiChartsByChartIdActionsUnarchive()**](ChartsApi.md#postApiChartsByChartIdActionsUnarchive) | **POST** /api/charts/{chartId}/actions/unarchive | Unarchive chart |
| [**postApiChartsByChartIdActionsValidate()**](ChartsApi.md#postApiChartsByChartIdActionsValidate) | **POST** /api/charts/{chartId}/actions/validate | Validate a chart map (dry run) |
| [**postApiChartsByChartIdDuplicate()**](ChartsApi.md#postApiChartsByChartIdDuplicate) | **POST** /api/charts/{chartId}/duplicate | Duplicate chart |
| [**postApiChartsByChartIdMapDraftActionsDiscard()**](ChartsApi.md#postApiChartsByChartIdMapDraftActionsDiscard) | **POST** /api/charts/{chartId}/map/draft/actions/discard | Discard chart draft |
| [**postApiChartsByChartIdMapPublish()**](ChartsApi.md#postApiChartsByChartIdMapPublish) | **POST** /api/charts/{chartId}/map/publish | Publish chart map template |
| [**postApiChartsByChartIdPreviewLink()**](ChartsApi.md#postApiChartsByChartIdPreviewLink) | **POST** /api/charts/{chartId}/preview-link | Create a public preview link |
| [**postApiChartsByChartIdVersionsByVersionActionsRestoreToDraft()**](ChartsApi.md#postApiChartsByChartIdVersionsByVersionActionsRestoreToDraft) | **POST** /api/charts/{chartId}/versions/{version}/actions/restore-to-draft | Restore a version into the draft |
| [**putApiChartsByChartIdMapDraft()**](ChartsApi.md#putApiChartsByChartIdMapDraft) | **PUT** /api/charts/{chartId}/map/draft | Save chart map draft |
| [**putApiChartsByChartIdTags()**](ChartsApi.md#putApiChartsByChartIdTags) | **PUT** /api/charts/{chartId}/tags | Replace chart tags |
| [**putApiChartsByChartIdVersionsByVersionThumbnail()**](ChartsApi.md#putApiChartsByChartIdVersionsByVersionThumbnail) | **PUT** /api/charts/{chartId}/versions/{version}/thumbnail | Attach a rendered thumbnail to a version |


## `deleteApiChartsByChartId()`

```php
deleteApiChartsByChartId($chart_id, $idempotency_key)
```

Delete chart permanently

Permanently deletes a chart with its layout, draft, templates, tags and version history. Only archived charts that no event references can be deleted: `409 ERR_CHART_NOT_ARCHIVED` — archive it first (`POST /api/charts/:chartId/actions/archive`); `409 ERR_CHART_HAS_EVENTS` (`params.eventCount`) — keep it archived (events keep working) or delete the events. Requires the `content_delete` permission (dashboard admin / map editor; not available to partner API keys).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiChartsByChartId($chart_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->deleteApiChartsByChartId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
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

## `deleteApiChartsByChartIdPreviewLink()`

```php
deleteApiChartsByChartIdPreviewLink($chart_id, $idempotency_key)
```

Revoke every public preview link of a chart

Rotates the chart's preview secret: all links issued before stop working (within ~15 s on every API instance).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiChartsByChartIdPreviewLink($chart_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->deleteApiChartsByChartIdPreviewLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
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

## `getApiCharts()`

```php
getApiCharts($limit, $cursor, $q, $archived, $tag, $sort, $expand)
```

List charts

Without query parameters, returns the legacy `{ charts }` shape (newest draft first, at most 200 rows, archived charts hidden); its items carry `publishedValidation` (stored counts of the published map, what event creation checks). When `limit`, `cursor`, `q`, `archived`, `tag`, `sort` or `expand` is sent, returns a cursor page `{ items, nextCursor }` (stable across pages, no row cap). Pass `nextCursor` back as `cursor` with the same filters until it is null. Paginated items add `eventCount`, `recentEvents` (up to 3 `{ id, name, date, status: upcoming | past | ended }`: upcoming soonest first, then past most recent first, then ended), `archivedAt`, `createdAt`, `tags`, `latestVersion`, `hasThumbnail` and `thumbnailUrl` (authenticated relative path, null until first publish) and omit `mapTemplate` (no layout geometry is read). `validation` `{ errors, warnings, issues: [{ code, severity, count, message }] }` holds the per-rule counts stored at the last draft save / publish under the current workspace severity (null when never computed); the rules are not re-run. Archived charts are hidden unless `archived=true|all`.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | Page size (1..100, default 20).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` value from the previous page.
$q = 'q_example'; // string | Case-insensitive substring match on the chart name, or the exact chart key.
$archived = 'archived_example'; // string | `false` (default) hides archived charts, `true` returns only archived charts, `all` returns both.
$tag = 'tag_example'; // string | Comma-separated tags (case-insensitive, at most 5); a chart must carry all of them.
$sort = 'sort_example'; // string | `name` (default): name A→Z. `recent`: last draft save / publish first, then creation time.
$expand = 'expand_example'; // string | Comma-separated. `events` adds `events[]` (`{ id, key, name, date, isInThePast }`, soonest first, at most 100 per chart; `eventCount` has the total). `validation` is accepted for seats.io compatibility (`validation` is always part of paginated items).

try {
    $apiInstance->getApiCharts($limit, $cursor, $q, $archived, $tag, $sort, $expand);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiCharts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| Page size (1..100, default 20). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; value from the previous page. | [optional] |
| **q** | **string**| Case-insensitive substring match on the chart name, or the exact chart key. | [optional] |
| **archived** | **string**| &#x60;false&#x60; (default) hides archived charts, &#x60;true&#x60; returns only archived charts, &#x60;all&#x60; returns both. | [optional] |
| **tag** | **string**| Comma-separated tags (case-insensitive, at most 5); a chart must carry all of them. | [optional] |
| **sort** | **string**| &#x60;name&#x60; (default): name A→Z. &#x60;recent&#x60;: last draft save / publish first, then creation time. | [optional] |
| **expand** | **string**| Comma-separated. &#x60;events&#x60; adds &#x60;events[]&#x60; (&#x60;{ id, key, name, date, isInThePast }&#x60;, soonest first, at most 100 per chart; &#x60;eventCount&#x60; has the total). &#x60;validation&#x60; is accepted for seats.io compatibility (&#x60;validation&#x60; is always part of paginated items). | [optional] |

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

## `getApiChartsByChartId()`

```php
getApiChartsByChartId($chart_id, $expand, $version)
```

Retrieve one chart

Returns chart `key`, name and publication metadata: `publishedAt`, `draftUpdatedAt`, `isPublished`, `hasUnpublishedDraft`, `hasDraft`, published seat / GA template counts and the number of events using it, plus `archivedAt`, `createdAt`, `tags`, `latestVersion`, `hasThumbnail` and `thumbnailUrl`. Archived charts are still returned. Geometry blobs are never returned — use the map / draft endpoints. `?expand=zones` adds the zones of the published chart (`&version=draft`: of the draft; empty when that version does not exist). The path accepts the chart key. 404 when the chart belongs to another tenant.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string | Chart id (UUID) or chart key.
$expand = 'expand_example'; // string | `zones` adds `zones[]` (same items as GET /charts/{chartId}/zones) of the version selected by `version`.
$version = 'version_example'; // string | `published` or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartId($chart_id, $expand, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**| Chart id (UUID) or chart key. | |
| **expand** | **string**| &#x60;zones&#x60; adds &#x60;zones[]&#x60; (same items as GET /charts/{chartId}/zones) of the version selected by &#x60;version&#x60;. | [optional] |
| **version** | **string**| &#x60;published&#x60; or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdCategories()`

```php
getApiChartsByChartIdCategories($chart_id, $version)
```

List the categories of a chart

Categories (`{ id, name, color, ticketTypes, seatCount, gaAreaCount }`) of the draft, else the published map (`source` tells which). `?version=published` reads the published chart even while a draft exists; `?version=draft` reads only the draft (404 `draft_not_found` / `not_published` when that version does not exist). Requires read access.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` or `draft`. Omitted: the draft when there is one, else the published map.

try {
    $apiInstance->getApiChartsByChartIdCategories($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; or &#x60;draft&#x60;. Omitted: the draft when there is one, else the published map. | [optional] |

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

## `getApiChartsByChartIdMap()`

```php
getApiChartsByChartIdMap($chart_id, $version)
```

Read one version of a chart map

Returns the **published** chart map by default (`seats`, `shapes`, `referenceImage`, `backgroundImage`, `meta`), even while an unpublished draft exists (`meta.hasUnpublishedDraft` tells). `?version=draft` returns the draft only (404 `draft_not_found` without one; requires map authoring access, like `GET /charts/{chartId}/map/draft`, which falls back to the published map). 404 `not_published` for a chart that was never published. Validate a version with `POST /charts/{chartId}/actions/validate?version=published|draft`. Requires read access.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string | Chart id (UUID) or chart key.
$version = 'version_example'; // string | `published` or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdMap($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**| Chart id (UUID) or chart key. | |
| **version** | **string**| &#x60;published&#x60; or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdMapDraft()`

```php
getApiChartsByChartIdMapDraft($chart_id)
```

Load chart map draft for designer

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string

try {
    $apiInstance->getApiChartsByChartIdMapDraft($chart_id);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdMapDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |

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

## `getApiChartsByChartIdReportsByCategoryCsv()`

```php
getApiChartsByChartIdReportsByCategoryCsv($chart_id, $category, $version)
```

Chart report by category (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$category = 'category_example'; // string | Only this category bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByCategoryCsv($chart_id, $category, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByCategoryCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **category** | **string**| Only this category bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByCategoryJson()`

```php
getApiChartsByChartIdReportsByCategoryJson($chart_id, $category, $version)
```

Chart report by category

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$category = 'category_example'; // string | Only this category bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByCategoryJson($chart_id, $category, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByCategoryJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **category** | **string**| Only this category bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByCategoryKeyCsv()`

```php
getApiChartsByChartIdReportsByCategoryKeyCsv($chart_id, $category_key, $version)
```

Chart report by category key (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$category_key = 'category_key_example'; // string | Only this categoryKey bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByCategoryKeyCsv($chart_id, $category_key, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByCategoryKeyCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **category_key** | **string**| Only this categoryKey bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByCategoryKeyJson()`

```php
getApiChartsByChartIdReportsByCategoryKeyJson($chart_id, $category_key, $version)
```

Chart report by category key

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$category_key = 'category_key_example'; // string | Only this categoryKey bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByCategoryKeyJson($chart_id, $category_key, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByCategoryKeyJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **category_key** | **string**| Only this categoryKey bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByCategoryLabelCsv()`

```php
getApiChartsByChartIdReportsByCategoryLabelCsv($chart_id, $category_label, $version)
```

Chart report by category label (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$category_label = 'category_label_example'; // string | Only this categoryLabel bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByCategoryLabelCsv($chart_id, $category_label, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByCategoryLabelCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **category_label** | **string**| Only this categoryLabel bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByCategoryLabelJson()`

```php
getApiChartsByChartIdReportsByCategoryLabelJson($chart_id, $category_label, $version)
```

Chart report by category label

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$category_label = 'category_label_example'; // string | Only this categoryLabel bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByCategoryLabelJson($chart_id, $category_label, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByCategoryLabelJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **category_label** | **string**| Only this categoryLabel bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByLabelCsv()`

```php
getApiChartsByChartIdReportsByLabelCsv($chart_id, $label, $version)
```

Chart report by label (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$label = 'label_example'; // string | Only this label bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByLabelCsv($chart_id, $label, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByLabelCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **label** | **string**| Only this label bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByLabelJson()`

```php
getApiChartsByChartIdReportsByLabelJson($chart_id, $label, $version)
```

Chart report by label

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$label = 'label_example'; // string | Only this label bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByLabelJson($chart_id, $label, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByLabelJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **label** | **string**| Only this label bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByObjectTypeCsv()`

```php
getApiChartsByChartIdReportsByObjectTypeCsv($chart_id, $object_type, $version)
```

Chart report by object type (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$object_type = 'object_type_example'; // string | Only this objectType bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByObjectTypeCsv($chart_id, $object_type, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByObjectTypeCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **object_type** | **string**| Only this objectType bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByObjectTypeJson()`

```php
getApiChartsByChartIdReportsByObjectTypeJson($chart_id, $object_type, $version)
```

Chart report by object type

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$object_type = 'object_type_example'; // string | Only this objectType bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByObjectTypeJson($chart_id, $object_type, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByObjectTypeJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **object_type** | **string**| Only this objectType bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsBySectionCsv()`

```php
getApiChartsByChartIdReportsBySectionCsv($chart_id, $section, $version)
```

Chart report by section (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$section = 'section_example'; // string | Only this section bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsBySectionCsv($chart_id, $section, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsBySectionCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **section** | **string**| Only this section bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsBySectionJson()`

```php
getApiChartsByChartIdReportsBySectionJson($chart_id, $section, $version)
```

Chart report by section

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$section = 'section_example'; // string | Only this section bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsBySectionJson($chart_id, $section, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsBySectionJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **section** | **string**| Only this section bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByZoneCsv()`

```php
getApiChartsByChartIdReportsByZoneCsv($chart_id, $zone, $version)
```

Chart report by zone (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$zone = 'zone_example'; // string | Only this zone bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByZoneCsv($chart_id, $zone, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByZoneCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **zone** | **string**| Only this zone bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsByZoneJson()`

```php
getApiChartsByChartIdReportsByZoneJson($chart_id, $zone, $version)
```

Chart report by zone

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$zone = 'zone_example'; // string | Only this zone bucket.
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsByZoneJson($chart_id, $zone, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsByZoneJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **zone** | **string**| Only this zone bucket. | [optional] |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByCategoryCsv()`

```php
getApiChartsByChartIdReportsSummaryByCategoryCsv($chart_id, $version)
```

Chart summary by category (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByCategoryCsv($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByCategoryCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByCategoryJson()`

```php
getApiChartsByChartIdReportsSummaryByCategoryJson($chart_id, $version)
```

Chart summary by category

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByCategoryJson($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByCategoryJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByCategoryKeyCsv()`

```php
getApiChartsByChartIdReportsSummaryByCategoryKeyCsv($chart_id, $version)
```

Chart summary by category key (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByCategoryKeyCsv($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByCategoryKeyCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByCategoryKeyJson()`

```php
getApiChartsByChartIdReportsSummaryByCategoryKeyJson($chart_id, $version)
```

Chart summary by category key

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByCategoryKeyJson($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByCategoryKeyJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByCategoryLabelCsv()`

```php
getApiChartsByChartIdReportsSummaryByCategoryLabelCsv($chart_id, $version)
```

Chart summary by category label (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByCategoryLabelCsv($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByCategoryLabelCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByCategoryLabelJson()`

```php
getApiChartsByChartIdReportsSummaryByCategoryLabelJson($chart_id, $version)
```

Chart summary by category label

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByCategoryLabelJson($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByCategoryLabelJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByObjectTypeCsv()`

```php
getApiChartsByChartIdReportsSummaryByObjectTypeCsv($chart_id, $version)
```

Chart summary by object type (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByObjectTypeCsv($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByObjectTypeCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByObjectTypeJson()`

```php
getApiChartsByChartIdReportsSummaryByObjectTypeJson($chart_id, $version)
```

Chart summary by object type

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByObjectTypeJson($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByObjectTypeJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryBySectionCsv()`

```php
getApiChartsByChartIdReportsSummaryBySectionCsv($chart_id, $version)
```

Chart summary by section (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryBySectionCsv($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryBySectionCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryBySectionJson()`

```php
getApiChartsByChartIdReportsSummaryBySectionJson($chart_id, $version)
```

Chart summary by section

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryBySectionJson($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryBySectionJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByZoneCsv()`

```php
getApiChartsByChartIdReportsSummaryByZoneCsv($chart_id, $version)
```

Chart summary by zone (CSV)

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByZoneCsv($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByZoneCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdReportsSummaryByZoneJson()`

```php
getApiChartsByChartIdReportsSummaryByZoneJson($chart_id, $version)
```

Chart summary by zone

Reads the published chart (seat and GA templates plus the published chart layout) — no event, no live state. Rows: `objectId`, `label`, `objectType`, `category`, `section`, `zone`, `capacity` (1 per seat, places per GA area), `price` (catalog cents; null for GA), `categoryKey` (chart category id of `category`; the value itself when no category defines it). `published` is false when the chart has never been published (no rows). `?version=draft` reports the unpublished designer draft instead (404 `draft_not_found` when the chart has none): it reads only the draft row, never the published geometry or its caches; `version` echoes the reported version. Buckets: `count` (places), `objects`, `seats`, `gaPlaces`, `byCategory`, `bySection`, `byZone`, `byObjectType`; `totals` sums every bucket. The `.csv` variant returns the same data as RFC 4180 CSV (one line per object, or per group for summaries). Requires content_write (or a partner API key with the reports scope).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 'version_example'; // string | `published` (default) or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdReportsSummaryByZoneJson($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdReportsSummaryByZoneJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **string**| &#x60;published&#x60; (default) or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsByChartIdThumbnail()`

```php
getApiChartsByChartIdThumbnail($chart_id, $version)
```

Chart thumbnail

Preview image of a published version: the WebP/PNG the designer rendered at publish time, or a server-side placeholder (PNG: zone / section / GA outlines, decorative shapes and category-coloured seat dots; first floor of multi-floor maps) until a render is attached. `X-Thumbnail-Source` says which. With `?version=N` a designer thumbnail is served `Cache-Control: private, max-age=31536000, immutable`; placeholders are cached for 5 minutes. Without `version` the latest published state is returned with `no-cache` and an `ETag` (send `If-None-Match` for `304`). 404 when the chart was never published.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 3.4; // float | Version number (1-based).

try {
    $apiInstance->getApiChartsByChartIdThumbnail($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdThumbnail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **float**| Version number (1-based). | [optional] |

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

## `getApiChartsByChartIdVersions()`

```php
getApiChartsByChartIdVersions($chart_id, $limit, $cursor): \SeatsChart\Client\Model\GetApiChartsByChartIdVersions200Response
```

List published versions

Immutable publish history, newest first, cursor-paginated (`limit` 1..100, default 20; pass `nextCursor` back as `cursor`). Every successful `POST /api/charts/:chartId/map/publish` appends one version. Snapshots are content-addressed: republishing or restoring identical content reuses the stored geometry (same `geometryHash`) instead of duplicating it. Charts published before history existed get a `baseline` version 1 on their next publish.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$limit = 3.4; // float | Page size (1..100, default 20).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` value from the previous page.

try {
    $result = $apiInstance->getApiChartsByChartIdVersions($chart_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **limit** | **float**| Page size (1..100, default 20). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; value from the previous page. | [optional] |

### Return type

[**\SeatsChart\Client\Model\GetApiChartsByChartIdVersions200Response**](../Model/GetApiChartsByChartIdVersions200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiChartsByChartIdZones()`

```php
getApiChartsByChartIdZones($chart_id, $version)
```

List the zones of a chart

Zones (named areas above sections) of the **published** chart by default, in drawing order: `{ id, name, color, floorId, focalPoint, bounds, points }`. `focalPoint` is the zone's Best Available ranking origin (null: the chart focal point applies). `?version=draft` reads the unpublished designer draft instead (404 `draft_not_found` when there is none), so the published chart stays readable while a draft exists. Only the zone shapes are read (projected in PostgreSQL). Object counts per zone: `GET /charts/{chartId}/reports/by-zone.json`. Requires read access.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string | Chart id (UUID) or chart key.
$version = 'version_example'; // string | `published` or `draft` (the unpublished designer draft).

try {
    $apiInstance->getApiChartsByChartIdZones($chart_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsByChartIdZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**| Chart id (UUID) or chart key. | |
| **version** | **string**| &#x60;published&#x60; or &#x60;draft&#x60; (the unpublished designer draft). | [optional] |

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

## `getApiChartsTags()`

```php
getApiChartsTags($archived)
```

List chart tags

Every tag used by the tenant's charts with the number of charts carrying it, sorted case-insensitively (at most 500). Tags are case-insensitive: `VIP` and `vip` are the same tag; the returned spelling is the lexicographically smallest stored variant. Counts respect the `archived` filter (archived charts are excluded by default).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$archived = 'archived_example'; // string | `false` (default) hides archived charts, `true` returns only archived charts, `all` returns both.

try {
    $apiInstance->getApiChartsTags($archived);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->getApiChartsTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **archived** | **string**| &#x60;false&#x60; (default) hides archived charts, &#x60;true&#x60; returns only archived charts, &#x60;all&#x60; returns both. | [optional] |

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

## `patchApiChartsByChartId()`

```php
patchApiChartsByChartId($chart_id, $patch_api_charts_by_chart_id_request, $idempotency_key)
```

Update chart name or key

Updates the display name and/or the partner `key` of a reusable seating chart (at least one of them). Keys are unique per workspace, URL-safe and never UUID-shaped; after a rename the old key stops resolving (every API instance within 5 s).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string | Chart id (UUID) or chart key.
$patch_api_charts_by_chart_id_request = new \SeatsChart\Client\Model\PatchApiChartsByChartIdRequest(); // \SeatsChart\Client\Model\PatchApiChartsByChartIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiChartsByChartId($chart_id, $patch_api_charts_by_chart_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->patchApiChartsByChartId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**| Chart id (UUID) or chart key. | |
| **patch_api_charts_by_chart_id_request** | [**\SeatsChart\Client\Model\PatchApiChartsByChartIdRequest**](../Model/PatchApiChartsByChartIdRequest.md)|  | |
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

## `postApiCharts()`

```php
postApiCharts($post_api_charts_request, $idempotency_key)
```

Create chart

Creates a reusable seating chart. Optional in the same call: `key` (partner key, unique per workspace, usable wherever a chart id is accepted; 409 `chart_key_taken`), `venueType` (`simple` | `sections` | `zones`, the designer template) and `categories` (up to 128 `{ key?, label, color, accessible? }`; keys and labels unique, case-insensitive). With `venueType` or `categories` an initial draft holding them is written in the same transaction (`hasDraft: true`). Author geometry via `PUT /api/charts/:chartId/map/draft` and publish before attaching to events.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_charts_request = new \SeatsChart\Client\Model\PostApiChartsRequest(); // \SeatsChart\Client\Model\PostApiChartsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiCharts($post_api_charts_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiCharts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_charts_request** | [**\SeatsChart\Client\Model\PostApiChartsRequest**](../Model/PostApiChartsRequest.md)|  | |
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

## `postApiChartsByChartIdActionsArchive()`

```php
postApiChartsByChartIdActionsArchive($chart_id, $idempotency_key): \SeatsChart\Client\Model\PostApiChartsByChartIdActionsArchive200Response
```

Archive chart

Soft-deletes a chart: it is hidden from `GET /api/charts` and `GET /api/charts/tags` unless `archived=true|all` is sent. Events created from the chart keep serving their maps and inventory unchanged, and the chart can still be opened, edited and published by id. Idempotent — archiving an archived chart keeps its original `archivedAt`. Permanent deletion (`DELETE /api/charts/:chartId`) is only allowed for archived charts without events.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiChartsByChartIdActionsArchive($chart_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiChartsByChartIdActionsArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiChartsByChartIdActionsArchive200Response**](../Model/PostApiChartsByChartIdActionsArchive200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiChartsByChartIdActionsCopyToWorkspace()`

```php
postApiChartsByChartIdActionsCopyToWorkspace($chart_id, $post_api_charts_by_chart_id_actions_copy_to_workspace_request, $idempotency_key)
```

Copy a chart to another workspace

Copies the chart (its draft, else the published map) into another workspace as a new **unpublished** chart with fresh object ids. Callers: a dashboard session, or a **workspace admin API key** (`POST /api/keys` with `workspaceAdmin: true`; a scoped key also needs `charts_write`) — other API keys get 403 `ERR_PARTNER_SCOPE`. The user (for a key: the admin it is bound to, re-checked on every call) must be an **admin of both workspaces** (403 `ERR_FORBIDDEN_ROLE`). The target must be active (409 `workspace_deactivated`) and within its plan's chart limit. Both workspaces get a `chart.copy_to_workspace` audit entry; the target also gets `chart.created`. Same workspace: use `POST /charts/{chartId}/duplicate` (400).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$post_api_charts_by_chart_id_actions_copy_to_workspace_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdActionsCopyToWorkspaceRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdActionsCopyToWorkspaceRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdActionsCopyToWorkspace($chart_id, $post_api_charts_by_chart_id_actions_copy_to_workspace_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiChartsByChartIdActionsCopyToWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **post_api_charts_by_chart_id_actions_copy_to_workspace_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdActionsCopyToWorkspaceRequest**](../Model/PostApiChartsByChartIdActionsCopyToWorkspaceRequest.md)|  | |
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

## `postApiChartsByChartIdActionsUnarchive()`

```php
postApiChartsByChartIdActionsUnarchive($chart_id, $idempotency_key): \SeatsChart\Client\Model\PostApiChartsByChartIdActionsArchive200Response
```

Unarchive chart

Returns an archived chart to the default chart lists. Idempotent for charts that are not archived.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiChartsByChartIdActionsUnarchive($chart_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiChartsByChartIdActionsUnarchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiChartsByChartIdActionsArchive200Response**](../Model/PostApiChartsByChartIdActionsArchive200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiChartsByChartIdActionsValidate()`

```php
postApiChartsByChartIdActionsValidate($chart_id, $post_api_charts_by_chart_id_actions_validate_request, $version, $idempotency_key)
```

Validate a chart map (dry run)

Runs the exact validation that `POST /charts/{chartId}/map/publish` applies (payload limits, the designer rules at the workspace severity — see `GET /api/workspace/chart-validation` — and seat-id ownership) **without writing anything**. Without a body the current draft (or, when there is none, the published map) is validated; `?version=published` validates the published chart even while a draft exists and `?version=draft` only the draft (404 `not_published` / `draft_not_found` when that version does not exist). With a body `{ seats, shapes?, background?, reference? }` (same shape as PUT …/map/draft) that content is validated instead (`version` is ignored). Always 200 with `publishable`, counts and `issues[]` (`{ code, severity, objectIds, message, count }`). Requires read access.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$post_api_charts_by_chart_id_actions_validate_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequest
$version = 'version_example'; // string | `published` or `draft`. Omitted: the draft when there is one, else the published map.
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdActionsValidate($chart_id, $post_api_charts_by_chart_id_actions_validate_request, $version, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiChartsByChartIdActionsValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **post_api_charts_by_chart_id_actions_validate_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequest**](../Model/PostApiChartsByChartIdActionsValidateRequest.md)|  | |
| **version** | **string**| &#x60;published&#x60; or &#x60;draft&#x60;. Omitted: the draft when there is one, else the published map. | [optional] |
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

## `postApiChartsByChartIdDuplicate()`

```php
postApiChartsByChartIdDuplicate($chart_id, $post_api_charts_by_chart_id_duplicate_request, $idempotency_key)
```

Duplicate chart

Creates a new unpublished chart draft copied from the source chart (seats, GA areas, shapes, images).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$post_api_charts_by_chart_id_duplicate_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdDuplicateRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdDuplicateRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdDuplicate($chart_id, $post_api_charts_by_chart_id_duplicate_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiChartsByChartIdDuplicate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **post_api_charts_by_chart_id_duplicate_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdDuplicateRequest**](../Model/PostApiChartsByChartIdDuplicateRequest.md)|  | |
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

## `postApiChartsByChartIdMapDraftActionsDiscard()`

```php
postApiChartsByChartIdMapDraftActionsDiscard($chart_id, $idempotency_key)
```

Discard chart draft

Throws away unpublished draft changes; `GET .../map/draft` then returns the published map again. The published map, versions and linked events are untouched. `409 ERR_DRAFT_NOTHING_TO_DISCARD` when the draft has no unpublished changes, `409 ERR_MAP_NEVER_PUBLISHED` when the chart was never published (there is no version to reset to).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdMapDraftActionsDiscard($chart_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiChartsByChartIdMapDraftActionsDiscard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
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

## `postApiChartsByChartIdMapPublish()`

```php
postApiChartsByChartIdMapPublish($chart_id, $post_api_charts_by_chart_id_map_publish_request, $idempotency_key)
```

Publish chart map template

Promotes draft → `chart_seat_templates` + `chart_layouts`. Events clone templates on create.  The draft is validated with the same rules the designer runs, at the **workspace severity** (`GET /api/workspace/chart-validation`; rules set to `off` are skipped). Error-level issues return `422 { error: \"validation_failed\", issues: [{ code, severity, objectIds, message, count, scope? }] }` (warnings included); warning-level issues do not block and are returned in `warnings`. Per-rule counts are stored with the version, so `GET /api/charts` (`validation`) and event creation (409 `chart_invalid`) never re-run the rules.  Every successful publish appends an immutable version (`version`, `geometryHash`; `sameAsVersion` names an earlier version with identical content, e.g. after a restore). An optional JSON body `{ \"note\": \"...\" }` (≤ 280 chars) is stored on the version. See `GET /api/charts/:chartId/versions`. Emits the `chart.published` webhook. Use `POST /api/charts/:chartId/actions/validate` for a dry run.  With `{ \"autoPublish\": true }` (designer auto-publish, off by default) the publish only runs while no event uses the chart; otherwise 409 `{ code: \"ERR_AUTO_PUBLISH_CHART_HAS_EVENTS\", params: { eventCount } }`.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$post_api_charts_by_chart_id_map_publish_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdMapPublishRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdMapPublishRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdMapPublish($chart_id, $post_api_charts_by_chart_id_map_publish_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiChartsByChartIdMapPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **post_api_charts_by_chart_id_map_publish_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdMapPublishRequest**](../Model/PostApiChartsByChartIdMapPublishRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiChartsByChartIdPreviewLink()`

```php
postApiChartsByChartIdPreviewLink($chart_id, $post_api_charts_by_chart_id_preview_link_request, $idempotency_key)
```

Create a public preview link

Signed, expiring link to a read-only rendering of the chart's **published** geometry (no login, no event data, no prices — category names and colors only). Response `{ chartId, exp, signature, expiresAt, path }`; `path` is relative to the dashboard origin (`/preview/charts/{chartId}?exp=…&sig=…`). The signature is an HMAC with a per-chart secret; every link of a chart stays valid until it expires or DELETE revokes them all. 409 `chart_not_published` when the chart was never published.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$post_api_charts_by_chart_id_preview_link_request = new \SeatsChart\Client\Model\PostApiChartsByChartIdPreviewLinkRequest(); // \SeatsChart\Client\Model\PostApiChartsByChartIdPreviewLinkRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdPreviewLink($chart_id, $post_api_charts_by_chart_id_preview_link_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiChartsByChartIdPreviewLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **post_api_charts_by_chart_id_preview_link_request** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdPreviewLinkRequest**](../Model/PostApiChartsByChartIdPreviewLinkRequest.md)|  | |
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

## `postApiChartsByChartIdVersionsByVersionActionsRestoreToDraft()`

```php
postApiChartsByChartIdVersionsByVersionActionsRestoreToDraft($chart_id, $version, $idempotency_key)
```

Restore a version into the draft

Overwrites the chart draft with the content of a published version (seats, shapes, categories, images). It never publishes: the live map and linked events are untouched until `POST /api/charts/:chartId/map/publish`, which runs the normal validation and records a new version. Any unpublished draft changes are replaced. Requires map authoring rights (admin / map editor dashboard role or `x-api-key`).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 3.4; // float | Version number (1-based).
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiChartsByChartIdVersionsByVersionActionsRestoreToDraft($chart_id, $version, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->postApiChartsByChartIdVersionsByVersionActionsRestoreToDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
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

## `putApiChartsByChartIdMapDraft()`

```php
putApiChartsByChartIdMapDraft($chart_id, $put_api_charts_by_chart_id_map_draft_request, $idempotency_key)
```

Save chart map draft

Saves the designer draft (`draftUpdatedAt` in the response). With `baseDraftUpdatedAt` the save is conflict-safe: 409 `draft_conflict` (with the current `draftUpdatedAt`) when the draft changed since that version — used by the designer autosave.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$put_api_charts_by_chart_id_map_draft_request = new \SeatsChart\Client\Model\PutApiChartsByChartIdMapDraftRequest(); // \SeatsChart\Client\Model\PutApiChartsByChartIdMapDraftRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiChartsByChartIdMapDraft($chart_id, $put_api_charts_by_chart_id_map_draft_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->putApiChartsByChartIdMapDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **put_api_charts_by_chart_id_map_draft_request** | [**\SeatsChart\Client\Model\PutApiChartsByChartIdMapDraftRequest**](../Model/PutApiChartsByChartIdMapDraftRequest.md)|  | |
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

## `putApiChartsByChartIdTags()`

```php
putApiChartsByChartIdTags($chart_id, $put_api_charts_by_chart_id_tags_request, $idempotency_key)
```

Replace chart tags

Replaces every tag on the chart. Returns the stored tags sorted case-insensitively. `422 ERR_CHART_TAG_INVALID` for an empty / too long / comma-containing tag, `422 ERR_CHART_TAG_LIMIT` above 20 distinct tags. Filter lists with `GET /api/charts?tag=vip,arena`.

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$put_api_charts_by_chart_id_tags_request = new \SeatsChart\Client\Model\PutApiChartsByChartIdTagsRequest(); // \SeatsChart\Client\Model\PutApiChartsByChartIdTagsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiChartsByChartIdTags($chart_id, $put_api_charts_by_chart_id_tags_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->putApiChartsByChartIdTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **put_api_charts_by_chart_id_tags_request** | [**\SeatsChart\Client\Model\PutApiChartsByChartIdTagsRequest**](../Model/PutApiChartsByChartIdTagsRequest.md)|  | |
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

## `putApiChartsByChartIdVersionsByVersionThumbnail()`

```php
putApiChartsByChartIdVersionsByVersionThumbnail($chart_id, $version, $put_api_charts_by_chart_id_versions_by_version_thumbnail_request, $idempotency_key)
```

Attach a rendered thumbnail to a version

Stores the preview the designer renders at publish time (offscreen render of the stage, ~640px, WebP). Written through the map-asset storage (`MAP_ASSET_STORAGE_DIR` / R2) when configured, otherwise kept inline. Set once: `409 ERR_THUMBNAIL_EXISTS` when the version already has one (version thumbnails are immutable). A version still showing the server placeholder (published through the API, or a baseline) accepts a render at any time — the designer attaches one when it shows that published map. For a chart published before version history, attaching to version 1 first records its published state as the baseline version. Magic bytes must match the declared type (`400 ERR_THUMBNAIL_INVALID`).

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


$apiInstance = new SeatsChart\Client\Api\ChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_id = 'chart_id_example'; // string
$version = 3.4; // float | Version number (1-based).
$put_api_charts_by_chart_id_versions_by_version_thumbnail_request = new \SeatsChart\Client\Model\PutApiChartsByChartIdVersionsByVersionThumbnailRequest(); // \SeatsChart\Client\Model\PutApiChartsByChartIdVersionsByVersionThumbnailRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiChartsByChartIdVersionsByVersionThumbnail($chart_id, $version, $put_api_charts_by_chart_id_versions_by_version_thumbnail_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ChartsApi->putApiChartsByChartIdVersionsByVersionThumbnail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chart_id** | **string**|  | |
| **version** | **float**| Version number (1-based). | |
| **put_api_charts_by_chart_id_versions_by_version_thumbnail_request** | [**\SeatsChart\Client\Model\PutApiChartsByChartIdVersionsByVersionThumbnailRequest**](../Model/PutApiChartsByChartIdVersionsByVersionThumbnailRequest.md)|  | |
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

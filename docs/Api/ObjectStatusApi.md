# SeatsChart\Client\ObjectStatusApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiEventsByEventIdObjectStatuses()**](ObjectStatusApi.md#getApiEventsByEventIdObjectStatuses) | **GET** /api/events/{eventId}/object-statuses | List object status overlays for an event |
| [**postApiEventsActionsChangeObjectStatus()**](ObjectStatusApi.md#postApiEventsActionsChangeObjectStatus) | **POST** /api/events/actions/change-object-status | Atomically change object statuses across events (all-or-nothing batch) |
| [**postApiEventsByEventIdActionsBook()**](ObjectStatusApi.md#postApiEventsByEventIdActionsBook) | **POST** /api/events/{eventId}/actions/book | Create a durable administrative booking on unheld inventory (or on a hold token) |
| [**postApiEventsByEventIdActionsChangeObjectStatus()**](ObjectStatusApi.md#postApiEventsByEventIdActionsChangeObjectStatus) | **POST** /api/events/{eventId}/actions/change-object-status | Change object status (booked / free / resale / retired / custom) |
| [**postApiEventsByEventIdActionsHold()**](ObjectStatusApi.md#postApiEventsByEventIdActionsHold) | **POST** /api/events/{eventId}/actions/hold | Hold general admission places administratively (issues a GA hold token) |
| [**postApiEventsByEventIdActionsPutUpForResale()**](ObjectStatusApi.md#postApiEventsByEventIdActionsPutUpForResale) | **POST** /api/events/{eventId}/actions/put-up-for-resale | Put booked objects up for resale |
| [**postApiEventsByEventIdActionsRelease()**](ObjectStatusApi.md#postApiEventsByEventIdActionsRelease) | **POST** /api/events/{eventId}/actions/release | Release unsold objects; sales require explicit order cancellation |
| [**postApiEventsByEventIdActionsRetire()**](ObjectStatusApi.md#postApiEventsByEventIdActionsRetire) | **POST** /api/events/{eventId}/actions/retire | Retire objects (not for sale, history kept) |
| [**postApiEventsByEventIdActionsUpdateExtraData()**](ObjectStatusApi.md#postApiEventsByEventIdActionsUpdateExtraData) | **POST** /api/events/{eventId}/actions/update-extra-data | Update extraData of objects without changing their status |


## `getApiEventsByEventIdObjectStatuses()`

```php
getApiEventsByEventIdObjectStatuses($event_id)
```

List object status overlays for an event

Ops overlay (custom / resale / extraData). Distinct from Redis holds. See docs/SEATSIO_PARITY.md.

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


$apiInstance = new SeatsChart\Client\Api\ObjectStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string

try {
    $apiInstance->getApiEventsByEventIdObjectStatuses($event_id);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStatusApi->getApiEventsByEventIdObjectStatuses: ', $e->getMessage(), PHP_EOL;
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

## `postApiEventsActionsChangeObjectStatus()`

```php
postApiEventsActionsChangeObjectStatus($post_api_events_actions_change_object_status_request, $idempotency_key)
```

Atomically change object statuses across events (all-or-nothing batch)

Applies several status changes — different events, statuses, hold tokens and orders — **all-or-nothing in one SQL transaction**. Either every change is applied or none is; there is never a partial result to reconcile.  **Body**: `statusChanges[]` (1–100; at most 512 objects overall), each with exactly one of `eventId` / `eventKey`, `objects` (seat UUID or label; GA area id or name with `quantity`; optional per-object `ticketType` for bookings), `status` (or `type: RELEASE`) and the same optional fields as POST /events/{eventId}/actions/change-object-status: `orderId`, `holdToken` (book seats held by a buyer hold token), `keepExtraData`, `resalePriceCents`, `resaleListingId`, `allowedPreviousStatuses` / `rejectedPreviousStatuses`, `channelKeys` / `ignoreChannels`, `ticketBuyerId`. One **Idempotency-Key** covers the whole batch: a replay returns the stored response, a retry after a crash reuses the same booking orders.  **Consistency**: row locks are taken in a deterministic order — booking orders by id, then every seat of every change by (eventId, seatId), then GA areas by (eventId, areaId) — so concurrent batches on overlapping seats serialize instead of deadlocking (a database-detected deadlock is retried transparently). Buyer holds are honoured exactly as for a single-event change: a seat held by a buyer (Redis hold lock, read under the seat row lock) is never booked unless its `holdToken` is supplied, hold sessions are frozen before the transaction, and GA places are first reserved in the same structure buyers hold from, so capacity can never be exceeded.  **Not atomic, refused with 400 `not_atomic`**: administrative GA holds (`reservedByToken`) and GA releases by hold token (they live in Redis only). An object or hold token may appear in only one change (400 `duplicate_object` / `duplicate_hold_token`).  **Responses**: 200 `{ results: [{ index, eventId, outcome: \"applied\", objects, gaAreas }] }` in request order. On any failure nothing is written and the status is that of the first failing change (400, 404, 409), with `{ error, message, failed, results: [{ index, eventId, outcome: \"failed\" | \"rolled_back\", status?, error?, message?, objects?, labels? }] }` — every invalid change is reported at once when the request itself is invalid; a conflict found under the row locks reports the change that hit it.

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


$apiInstance = new SeatsChart\Client\Api\ObjectStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_events_actions_change_object_status_request = new \SeatsChart\Client\Model\PostApiEventsActionsChangeObjectStatusRequest(); // \SeatsChart\Client\Model\PostApiEventsActionsChangeObjectStatusRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsActionsChangeObjectStatus($post_api_events_actions_change_object_status_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStatusApi->postApiEventsActionsChangeObjectStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_events_actions_change_object_status_request** | [**\SeatsChart\Client\Model\PostApiEventsActionsChangeObjectStatusRequest**](../Model/PostApiEventsActionsChangeObjectStatusRequest.md)|  | |
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

## `postApiEventsByEventIdActionsBook()`

```php
postApiEventsByEventIdActionsBook($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key)
```

Create a durable administrative booking on unheld inventory (or on a hold token)

Administrative status change on the path event. One SQL transaction per event; seats are locked in id order and every precondition is evaluated under those row locks, so a concurrent hold, purchase or other change cannot slip in between the check and the write. Requires **Idempotency-Key**; a replay returns the stored response and a retry after a crash reuses the same durable booking order.  **Objects** (max 64 per call, per event): seat UUID or seat label (labels are resolved per event; a label that matches several seats returns 409 `ambiguous_label`; unknown references return 404 `objects_not_found`). General admission areas are addressed by UUID or name **with `quantity`** (1–10000): - `booked`: the places are first reserved in the same Redis structure buyers hold from (capacity minus not-for-sale places), then `sold_count` is incremented in the transaction with a `sold_count + quantity <= capacity` guard; the durable receipt belongs to the administrative booking order (cancel it with POST /orders/{orderId}/cancel). - `reservedByToken` (or POST …/actions/hold, GA only): holds the places atomically against capacity minus withheld, sold and held places and issues a **GA hold token** (`hold: { holdToken, holdUserId, holdExpiresAt }`), confirmable with POST /ga/confirm (`holdToken`, `userId` = `holdUserId`). Optional `userId` (customer identity of the hold; one hold per user and area, 409 `hold_exists`) and `holdExpiresInMinutes` (1–120). 409 `insufficient_capacity`. - `RELEASE` / `free` without `holdToken`: releases places of **administrative** bookings (newest receipts first, optionally only those of `orderId`), recording a release receipt per consumed booking and decrementing `sold_count` under the GA row lock (409 `insufficient_booked_places` with `available`). Buyer purchases are never released here. - `RELEASE` with `holdToken` (GA hold token): releases that many places held by the token (409 `insufficient_held_places`, `hold_token_conflict`). Every GA operation is idempotent per Idempotency-Key (deterministic receipts/holds/markers), and capacity can never be exceeded nor `sold_count` go below zero. Response `gaAreas: { <areaId>: { areaId, label, quantity, soldCount, status, heldCount?, releasedFrom? } }`.  **`allowedPreviousStatuses` / `rejectedPreviousStatuses`**: `free`, `booked`, `resale`, `reservedByToken`, `retired` or a custom status. On violation nothing is written and 409 `illegal_previous_status` lists every offending object with its current status. For GA quantities the previous status follows from the operation: `free` for book/hold, `booked` for a release, `reservedByToken` for a release by `holdToken`.  **`holdToken`**: with status `booked`, books seats held by that hold token. The hold session is frozen first, so the buyer cannot confirm the same seats concurrently; seats held by another token or not held by this one return 409 `hold_token_conflict`. Remaining seats of the session stay held. With `RELEASE` it releases GA places (see above).  **`ticketType`** (per object, `{ objectId, ticketType }`, status `booked` only): ticket type id recorded on the new booking (order item and reservation, like a confirmed sale) and returned per object; it shows up in reports by ticket type. Other statuses return 400. **`keepExtraData`**: keeps the stored extraData; per-object `extraData` sent with it is merged on top (without it, the object's extraData is replaced by the one sent, or cleared).  **`ticketBuyerId`** (opaque, ≤ 256 chars, never an internal user id) is recorded on new bookings, object statuses, status history and GA hold tokens; query it with GET /events/{eventId}/objects?ticketBuyerId=….  **`channelKeys`** (channel secret keys or channel ids) restricts the change to public objects and objects of the named channels (409 `channel_forbidden` otherwise). Without `channelKeys`, or with `ignoreChannels: true`, channel partitions are ignored (backward-compatible default).  **`events`** (max 50, must include the path event): applies the same change to each event of the tenant, labels resolved per event. By default each event is atomic on its own (no cross-event atomicity): response 200 when every event succeeded, otherwise 207 with `results[]` (`{ eventId, ok, objects | status, error, message }`), `succeeded` and `failed`. Replaying the same Idempotency-Key returns the stored per-event outcome; retry failed events (listed with their error) with a new key. **`atomic: true`** makes the whole call all-or-nothing in one SQL transaction (same engine as POST /events/actions/change-object-status; at most 512 objects across the events): 200 with `atomic: true` when everything was applied, otherwise the status of the first failing event and `results[]` with `outcome: failed` (with `error`, `message`) or `rolled_back` per event — nothing was written. GA administrative holds cannot be atomic (400 `not_atomic`).  **`seasonId`** (season or partial season id; XOR with `events`): fans out by unique label to every live member in one transaction (cap 50 members, 64 seats overall). Preconditions and channelKeys apply to every member seat.

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


$apiInstance = new SeatsChart\Client\Api\ObjectStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_actions_change_object_status_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsBook($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStatusApi->postApiEventsByEventIdActionsBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_actions_change_object_status_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest**](../Model/PostApiEventsByEventIdActionsChangeObjectStatusRequest.md)|  | |
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

## `postApiEventsByEventIdActionsChangeObjectStatus()`

```php
postApiEventsByEventIdActionsChangeObjectStatus($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key)
```

Change object status (booked / free / resale / retired / custom)

`type: RELEASE` frees objects; otherwise `status` is required. Optional `resalePriceCents` is stored on extraData. Administrative status change on the path event. One SQL transaction per event; seats are locked in id order and every precondition is evaluated under those row locks, so a concurrent hold, purchase or other change cannot slip in between the check and the write. Requires **Idempotency-Key**; a replay returns the stored response and a retry after a crash reuses the same durable booking order.  **Objects** (max 64 per call, per event): seat UUID or seat label (labels are resolved per event; a label that matches several seats returns 409 `ambiguous_label`; unknown references return 404 `objects_not_found`). General admission areas are addressed by UUID or name **with `quantity`** (1–10000): - `booked`: the places are first reserved in the same Redis structure buyers hold from (capacity minus not-for-sale places), then `sold_count` is incremented in the transaction with a `sold_count + quantity <= capacity` guard; the durable receipt belongs to the administrative booking order (cancel it with POST /orders/{orderId}/cancel). - `reservedByToken` (or POST …/actions/hold, GA only): holds the places atomically against capacity minus withheld, sold and held places and issues a **GA hold token** (`hold: { holdToken, holdUserId, holdExpiresAt }`), confirmable with POST /ga/confirm (`holdToken`, `userId` = `holdUserId`). Optional `userId` (customer identity of the hold; one hold per user and area, 409 `hold_exists`) and `holdExpiresInMinutes` (1–120). 409 `insufficient_capacity`. - `RELEASE` / `free` without `holdToken`: releases places of **administrative** bookings (newest receipts first, optionally only those of `orderId`), recording a release receipt per consumed booking and decrementing `sold_count` under the GA row lock (409 `insufficient_booked_places` with `available`). Buyer purchases are never released here. - `RELEASE` with `holdToken` (GA hold token): releases that many places held by the token (409 `insufficient_held_places`, `hold_token_conflict`). Every GA operation is idempotent per Idempotency-Key (deterministic receipts/holds/markers), and capacity can never be exceeded nor `sold_count` go below zero. Response `gaAreas: { <areaId>: { areaId, label, quantity, soldCount, status, heldCount?, releasedFrom? } }`.  **`allowedPreviousStatuses` / `rejectedPreviousStatuses`**: `free`, `booked`, `resale`, `reservedByToken`, `retired` or a custom status. On violation nothing is written and 409 `illegal_previous_status` lists every offending object with its current status. For GA quantities the previous status follows from the operation: `free` for book/hold, `booked` for a release, `reservedByToken` for a release by `holdToken`.  **`holdToken`**: with status `booked`, books seats held by that hold token. The hold session is frozen first, so the buyer cannot confirm the same seats concurrently; seats held by another token or not held by this one return 409 `hold_token_conflict`. Remaining seats of the session stay held. With `RELEASE` it releases GA places (see above).  **`ticketType`** (per object, `{ objectId, ticketType }`, status `booked` only): ticket type id recorded on the new booking (order item and reservation, like a confirmed sale) and returned per object; it shows up in reports by ticket type. Other statuses return 400. **`keepExtraData`**: keeps the stored extraData; per-object `extraData` sent with it is merged on top (without it, the object's extraData is replaced by the one sent, or cleared).  **`ticketBuyerId`** (opaque, ≤ 256 chars, never an internal user id) is recorded on new bookings, object statuses, status history and GA hold tokens; query it with GET /events/{eventId}/objects?ticketBuyerId=….  **`channelKeys`** (channel secret keys or channel ids) restricts the change to public objects and objects of the named channels (409 `channel_forbidden` otherwise). Without `channelKeys`, or with `ignoreChannels: true`, channel partitions are ignored (backward-compatible default).  **`events`** (max 50, must include the path event): applies the same change to each event of the tenant, labels resolved per event. By default each event is atomic on its own (no cross-event atomicity): response 200 when every event succeeded, otherwise 207 with `results[]` (`{ eventId, ok, objects | status, error, message }`), `succeeded` and `failed`. Replaying the same Idempotency-Key returns the stored per-event outcome; retry failed events (listed with their error) with a new key. **`atomic: true`** makes the whole call all-or-nothing in one SQL transaction (same engine as POST /events/actions/change-object-status; at most 512 objects across the events): 200 with `atomic: true` when everything was applied, otherwise the status of the first failing event and `results[]` with `outcome: failed` (with `error`, `message`) or `rolled_back` per event — nothing was written. GA administrative holds cannot be atomic (400 `not_atomic`).  **`seasonId`** (season or partial season id; XOR with `events`): fans out by unique label to every live member in one transaction (cap 50 members, 64 seats overall). Preconditions and channelKeys apply to every member seat.

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


$apiInstance = new SeatsChart\Client\Api\ObjectStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_actions_change_object_status_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsChangeObjectStatus($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStatusApi->postApiEventsByEventIdActionsChangeObjectStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_actions_change_object_status_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest**](../Model/PostApiEventsByEventIdActionsChangeObjectStatusRequest.md)|  | |
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

## `postApiEventsByEventIdActionsHold()`

```php
postApiEventsByEventIdActionsHold($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key)
```

Hold general admission places administratively (issues a GA hold token)

Shortcut for `status: \"reservedByToken\"`; only GA quantities are accepted. Administrative status change on the path event. One SQL transaction per event; seats are locked in id order and every precondition is evaluated under those row locks, so a concurrent hold, purchase or other change cannot slip in between the check and the write. Requires **Idempotency-Key**; a replay returns the stored response and a retry after a crash reuses the same durable booking order.  **Objects** (max 64 per call, per event): seat UUID or seat label (labels are resolved per event; a label that matches several seats returns 409 `ambiguous_label`; unknown references return 404 `objects_not_found`). General admission areas are addressed by UUID or name **with `quantity`** (1–10000): - `booked`: the places are first reserved in the same Redis structure buyers hold from (capacity minus not-for-sale places), then `sold_count` is incremented in the transaction with a `sold_count + quantity <= capacity` guard; the durable receipt belongs to the administrative booking order (cancel it with POST /orders/{orderId}/cancel). - `reservedByToken` (or POST …/actions/hold, GA only): holds the places atomically against capacity minus withheld, sold and held places and issues a **GA hold token** (`hold: { holdToken, holdUserId, holdExpiresAt }`), confirmable with POST /ga/confirm (`holdToken`, `userId` = `holdUserId`). Optional `userId` (customer identity of the hold; one hold per user and area, 409 `hold_exists`) and `holdExpiresInMinutes` (1–120). 409 `insufficient_capacity`. - `RELEASE` / `free` without `holdToken`: releases places of **administrative** bookings (newest receipts first, optionally only those of `orderId`), recording a release receipt per consumed booking and decrementing `sold_count` under the GA row lock (409 `insufficient_booked_places` with `available`). Buyer purchases are never released here. - `RELEASE` with `holdToken` (GA hold token): releases that many places held by the token (409 `insufficient_held_places`, `hold_token_conflict`). Every GA operation is idempotent per Idempotency-Key (deterministic receipts/holds/markers), and capacity can never be exceeded nor `sold_count` go below zero. Response `gaAreas: { <areaId>: { areaId, label, quantity, soldCount, status, heldCount?, releasedFrom? } }`.  **`allowedPreviousStatuses` / `rejectedPreviousStatuses`**: `free`, `booked`, `resale`, `reservedByToken`, `retired` or a custom status. On violation nothing is written and 409 `illegal_previous_status` lists every offending object with its current status. For GA quantities the previous status follows from the operation: `free` for book/hold, `booked` for a release, `reservedByToken` for a release by `holdToken`.  **`holdToken`**: with status `booked`, books seats held by that hold token. The hold session is frozen first, so the buyer cannot confirm the same seats concurrently; seats held by another token or not held by this one return 409 `hold_token_conflict`. Remaining seats of the session stay held. With `RELEASE` it releases GA places (see above).  **`ticketType`** (per object, `{ objectId, ticketType }`, status `booked` only): ticket type id recorded on the new booking (order item and reservation, like a confirmed sale) and returned per object; it shows up in reports by ticket type. Other statuses return 400. **`keepExtraData`**: keeps the stored extraData; per-object `extraData` sent with it is merged on top (without it, the object's extraData is replaced by the one sent, or cleared).  **`ticketBuyerId`** (opaque, ≤ 256 chars, never an internal user id) is recorded on new bookings, object statuses, status history and GA hold tokens; query it with GET /events/{eventId}/objects?ticketBuyerId=….  **`channelKeys`** (channel secret keys or channel ids) restricts the change to public objects and objects of the named channels (409 `channel_forbidden` otherwise). Without `channelKeys`, or with `ignoreChannels: true`, channel partitions are ignored (backward-compatible default).  **`events`** (max 50, must include the path event): applies the same change to each event of the tenant, labels resolved per event. By default each event is atomic on its own (no cross-event atomicity): response 200 when every event succeeded, otherwise 207 with `results[]` (`{ eventId, ok, objects | status, error, message }`), `succeeded` and `failed`. Replaying the same Idempotency-Key returns the stored per-event outcome; retry failed events (listed with their error) with a new key. **`atomic: true`** makes the whole call all-or-nothing in one SQL transaction (same engine as POST /events/actions/change-object-status; at most 512 objects across the events): 200 with `atomic: true` when everything was applied, otherwise the status of the first failing event and `results[]` with `outcome: failed` (with `error`, `message`) or `rolled_back` per event — nothing was written. GA administrative holds cannot be atomic (400 `not_atomic`).  **`seasonId`** (season or partial season id; XOR with `events`): fans out by unique label to every live member in one transaction (cap 50 members, 64 seats overall). Preconditions and channelKeys apply to every member seat.

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


$apiInstance = new SeatsChart\Client\Api\ObjectStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_actions_change_object_status_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsHold($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStatusApi->postApiEventsByEventIdActionsHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_actions_change_object_status_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest**](../Model/PostApiEventsByEventIdActionsChangeObjectStatusRequest.md)|  | |
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

## `postApiEventsByEventIdActionsPutUpForResale()`

```php
postApiEventsByEventIdActionsPutUpForResale($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key)
```

Put booked objects up for resale

Resale retains the durable owner and sold status. Optional `resaleListingId` groups the objects into one listing (extraData.resaleListingId). Optional `resalePriceCents` is stored on extraData and merged into GET /seats on the next cache rebuild. Optional `listing` also creates a server-side listing of the objects (type, sellAsWhole, price; see the listings tag): viewers then show and sell it as one listing. Administrative status change on the path event. One SQL transaction per event; seats are locked in id order and every precondition is evaluated under those row locks, so a concurrent hold, purchase or other change cannot slip in between the check and the write. Requires **Idempotency-Key**; a replay returns the stored response and a retry after a crash reuses the same durable booking order.  **Objects** (max 64 per call, per event): seat UUID or seat label (labels are resolved per event; a label that matches several seats returns 409 `ambiguous_label`; unknown references return 404 `objects_not_found`). General admission areas are addressed by UUID or name **with `quantity`** (1–10000): - `booked`: the places are first reserved in the same Redis structure buyers hold from (capacity minus not-for-sale places), then `sold_count` is incremented in the transaction with a `sold_count + quantity <= capacity` guard; the durable receipt belongs to the administrative booking order (cancel it with POST /orders/{orderId}/cancel). - `reservedByToken` (or POST …/actions/hold, GA only): holds the places atomically against capacity minus withheld, sold and held places and issues a **GA hold token** (`hold: { holdToken, holdUserId, holdExpiresAt }`), confirmable with POST /ga/confirm (`holdToken`, `userId` = `holdUserId`). Optional `userId` (customer identity of the hold; one hold per user and area, 409 `hold_exists`) and `holdExpiresInMinutes` (1–120). 409 `insufficient_capacity`. - `RELEASE` / `free` without `holdToken`: releases places of **administrative** bookings (newest receipts first, optionally only those of `orderId`), recording a release receipt per consumed booking and decrementing `sold_count` under the GA row lock (409 `insufficient_booked_places` with `available`). Buyer purchases are never released here. - `RELEASE` with `holdToken` (GA hold token): releases that many places held by the token (409 `insufficient_held_places`, `hold_token_conflict`). Every GA operation is idempotent per Idempotency-Key (deterministic receipts/holds/markers), and capacity can never be exceeded nor `sold_count` go below zero. Response `gaAreas: { <areaId>: { areaId, label, quantity, soldCount, status, heldCount?, releasedFrom? } }`.  **`allowedPreviousStatuses` / `rejectedPreviousStatuses`**: `free`, `booked`, `resale`, `reservedByToken`, `retired` or a custom status. On violation nothing is written and 409 `illegal_previous_status` lists every offending object with its current status. For GA quantities the previous status follows from the operation: `free` for book/hold, `booked` for a release, `reservedByToken` for a release by `holdToken`.  **`holdToken`**: with status `booked`, books seats held by that hold token. The hold session is frozen first, so the buyer cannot confirm the same seats concurrently; seats held by another token or not held by this one return 409 `hold_token_conflict`. Remaining seats of the session stay held. With `RELEASE` it releases GA places (see above).  **`ticketType`** (per object, `{ objectId, ticketType }`, status `booked` only): ticket type id recorded on the new booking (order item and reservation, like a confirmed sale) and returned per object; it shows up in reports by ticket type. Other statuses return 400. **`keepExtraData`**: keeps the stored extraData; per-object `extraData` sent with it is merged on top (without it, the object's extraData is replaced by the one sent, or cleared).  **`ticketBuyerId`** (opaque, ≤ 256 chars, never an internal user id) is recorded on new bookings, object statuses, status history and GA hold tokens; query it with GET /events/{eventId}/objects?ticketBuyerId=….  **`channelKeys`** (channel secret keys or channel ids) restricts the change to public objects and objects of the named channels (409 `channel_forbidden` otherwise). Without `channelKeys`, or with `ignoreChannels: true`, channel partitions are ignored (backward-compatible default).  **`events`** (max 50, must include the path event): applies the same change to each event of the tenant, labels resolved per event. By default each event is atomic on its own (no cross-event atomicity): response 200 when every event succeeded, otherwise 207 with `results[]` (`{ eventId, ok, objects | status, error, message }`), `succeeded` and `failed`. Replaying the same Idempotency-Key returns the stored per-event outcome; retry failed events (listed with their error) with a new key. **`atomic: true`** makes the whole call all-or-nothing in one SQL transaction (same engine as POST /events/actions/change-object-status; at most 512 objects across the events): 200 with `atomic: true` when everything was applied, otherwise the status of the first failing event and `results[]` with `outcome: failed` (with `error`, `message`) or `rolled_back` per event — nothing was written. GA administrative holds cannot be atomic (400 `not_atomic`).  **`seasonId`** (season or partial season id; XOR with `events`): fans out by unique label to every live member in one transaction (cap 50 members, 64 seats overall). Preconditions and channelKeys apply to every member seat.

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


$apiInstance = new SeatsChart\Client\Api\ObjectStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_actions_change_object_status_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsPutUpForResale($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStatusApi->postApiEventsByEventIdActionsPutUpForResale: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_actions_change_object_status_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest**](../Model/PostApiEventsByEventIdActionsChangeObjectStatusRequest.md)|  | |
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

## `postApiEventsByEventIdActionsRelease()`

```php
postApiEventsByEventIdActionsRelease($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key)
```

Release unsold objects; sales require explicit order cancellation

Administrative status change on the path event. One SQL transaction per event; seats are locked in id order and every precondition is evaluated under those row locks, so a concurrent hold, purchase or other change cannot slip in between the check and the write. Requires **Idempotency-Key**; a replay returns the stored response and a retry after a crash reuses the same durable booking order.  **Objects** (max 64 per call, per event): seat UUID or seat label (labels are resolved per event; a label that matches several seats returns 409 `ambiguous_label`; unknown references return 404 `objects_not_found`). General admission areas are addressed by UUID or name **with `quantity`** (1–10000): - `booked`: the places are first reserved in the same Redis structure buyers hold from (capacity minus not-for-sale places), then `sold_count` is incremented in the transaction with a `sold_count + quantity <= capacity` guard; the durable receipt belongs to the administrative booking order (cancel it with POST /orders/{orderId}/cancel). - `reservedByToken` (or POST …/actions/hold, GA only): holds the places atomically against capacity minus withheld, sold and held places and issues a **GA hold token** (`hold: { holdToken, holdUserId, holdExpiresAt }`), confirmable with POST /ga/confirm (`holdToken`, `userId` = `holdUserId`). Optional `userId` (customer identity of the hold; one hold per user and area, 409 `hold_exists`) and `holdExpiresInMinutes` (1–120). 409 `insufficient_capacity`. - `RELEASE` / `free` without `holdToken`: releases places of **administrative** bookings (newest receipts first, optionally only those of `orderId`), recording a release receipt per consumed booking and decrementing `sold_count` under the GA row lock (409 `insufficient_booked_places` with `available`). Buyer purchases are never released here. - `RELEASE` with `holdToken` (GA hold token): releases that many places held by the token (409 `insufficient_held_places`, `hold_token_conflict`). Every GA operation is idempotent per Idempotency-Key (deterministic receipts/holds/markers), and capacity can never be exceeded nor `sold_count` go below zero. Response `gaAreas: { <areaId>: { areaId, label, quantity, soldCount, status, heldCount?, releasedFrom? } }`.  **`allowedPreviousStatuses` / `rejectedPreviousStatuses`**: `free`, `booked`, `resale`, `reservedByToken`, `retired` or a custom status. On violation nothing is written and 409 `illegal_previous_status` lists every offending object with its current status. For GA quantities the previous status follows from the operation: `free` for book/hold, `booked` for a release, `reservedByToken` for a release by `holdToken`.  **`holdToken`**: with status `booked`, books seats held by that hold token. The hold session is frozen first, so the buyer cannot confirm the same seats concurrently; seats held by another token or not held by this one return 409 `hold_token_conflict`. Remaining seats of the session stay held. With `RELEASE` it releases GA places (see above).  **`ticketType`** (per object, `{ objectId, ticketType }`, status `booked` only): ticket type id recorded on the new booking (order item and reservation, like a confirmed sale) and returned per object; it shows up in reports by ticket type. Other statuses return 400. **`keepExtraData`**: keeps the stored extraData; per-object `extraData` sent with it is merged on top (without it, the object's extraData is replaced by the one sent, or cleared).  **`ticketBuyerId`** (opaque, ≤ 256 chars, never an internal user id) is recorded on new bookings, object statuses, status history and GA hold tokens; query it with GET /events/{eventId}/objects?ticketBuyerId=….  **`channelKeys`** (channel secret keys or channel ids) restricts the change to public objects and objects of the named channels (409 `channel_forbidden` otherwise). Without `channelKeys`, or with `ignoreChannels: true`, channel partitions are ignored (backward-compatible default).  **`events`** (max 50, must include the path event): applies the same change to each event of the tenant, labels resolved per event. By default each event is atomic on its own (no cross-event atomicity): response 200 when every event succeeded, otherwise 207 with `results[]` (`{ eventId, ok, objects | status, error, message }`), `succeeded` and `failed`. Replaying the same Idempotency-Key returns the stored per-event outcome; retry failed events (listed with their error) with a new key. **`atomic: true`** makes the whole call all-or-nothing in one SQL transaction (same engine as POST /events/actions/change-object-status; at most 512 objects across the events): 200 with `atomic: true` when everything was applied, otherwise the status of the first failing event and `results[]` with `outcome: failed` (with `error`, `message`) or `rolled_back` per event — nothing was written. GA administrative holds cannot be atomic (400 `not_atomic`).  **`seasonId`** (season or partial season id; XOR with `events`): fans out by unique label to every live member in one transaction (cap 50 members, 64 seats overall). Preconditions and channelKeys apply to every member seat.

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


$apiInstance = new SeatsChart\Client\Api\ObjectStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_actions_change_object_status_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsRelease($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStatusApi->postApiEventsByEventIdActionsRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_actions_change_object_status_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest**](../Model/PostApiEventsByEventIdActionsChangeObjectStatusRequest.md)|  | |
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

## `postApiEventsByEventIdActionsRetire()`

```php
postApiEventsByEventIdActionsRetire($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key)
```

Retire objects (not for sale, history kept)

Administrative status change on the path event. One SQL transaction per event; seats are locked in id order and every precondition is evaluated under those row locks, so a concurrent hold, purchase or other change cannot slip in between the check and the write. Requires **Idempotency-Key**; a replay returns the stored response and a retry after a crash reuses the same durable booking order.  **Objects** (max 64 per call, per event): seat UUID or seat label (labels are resolved per event; a label that matches several seats returns 409 `ambiguous_label`; unknown references return 404 `objects_not_found`). General admission areas are addressed by UUID or name **with `quantity`** (1–10000): - `booked`: the places are first reserved in the same Redis structure buyers hold from (capacity minus not-for-sale places), then `sold_count` is incremented in the transaction with a `sold_count + quantity <= capacity` guard; the durable receipt belongs to the administrative booking order (cancel it with POST /orders/{orderId}/cancel). - `reservedByToken` (or POST …/actions/hold, GA only): holds the places atomically against capacity minus withheld, sold and held places and issues a **GA hold token** (`hold: { holdToken, holdUserId, holdExpiresAt }`), confirmable with POST /ga/confirm (`holdToken`, `userId` = `holdUserId`). Optional `userId` (customer identity of the hold; one hold per user and area, 409 `hold_exists`) and `holdExpiresInMinutes` (1–120). 409 `insufficient_capacity`. - `RELEASE` / `free` without `holdToken`: releases places of **administrative** bookings (newest receipts first, optionally only those of `orderId`), recording a release receipt per consumed booking and decrementing `sold_count` under the GA row lock (409 `insufficient_booked_places` with `available`). Buyer purchases are never released here. - `RELEASE` with `holdToken` (GA hold token): releases that many places held by the token (409 `insufficient_held_places`, `hold_token_conflict`). Every GA operation is idempotent per Idempotency-Key (deterministic receipts/holds/markers), and capacity can never be exceeded nor `sold_count` go below zero. Response `gaAreas: { <areaId>: { areaId, label, quantity, soldCount, status, heldCount?, releasedFrom? } }`.  **`allowedPreviousStatuses` / `rejectedPreviousStatuses`**: `free`, `booked`, `resale`, `reservedByToken`, `retired` or a custom status. On violation nothing is written and 409 `illegal_previous_status` lists every offending object with its current status. For GA quantities the previous status follows from the operation: `free` for book/hold, `booked` for a release, `reservedByToken` for a release by `holdToken`.  **`holdToken`**: with status `booked`, books seats held by that hold token. The hold session is frozen first, so the buyer cannot confirm the same seats concurrently; seats held by another token or not held by this one return 409 `hold_token_conflict`. Remaining seats of the session stay held. With `RELEASE` it releases GA places (see above).  **`ticketType`** (per object, `{ objectId, ticketType }`, status `booked` only): ticket type id recorded on the new booking (order item and reservation, like a confirmed sale) and returned per object; it shows up in reports by ticket type. Other statuses return 400. **`keepExtraData`**: keeps the stored extraData; per-object `extraData` sent with it is merged on top (without it, the object's extraData is replaced by the one sent, or cleared).  **`ticketBuyerId`** (opaque, ≤ 256 chars, never an internal user id) is recorded on new bookings, object statuses, status history and GA hold tokens; query it with GET /events/{eventId}/objects?ticketBuyerId=….  **`channelKeys`** (channel secret keys or channel ids) restricts the change to public objects and objects of the named channels (409 `channel_forbidden` otherwise). Without `channelKeys`, or with `ignoreChannels: true`, channel partitions are ignored (backward-compatible default).  **`events`** (max 50, must include the path event): applies the same change to each event of the tenant, labels resolved per event. By default each event is atomic on its own (no cross-event atomicity): response 200 when every event succeeded, otherwise 207 with `results[]` (`{ eventId, ok, objects | status, error, message }`), `succeeded` and `failed`. Replaying the same Idempotency-Key returns the stored per-event outcome; retry failed events (listed with their error) with a new key. **`atomic: true`** makes the whole call all-or-nothing in one SQL transaction (same engine as POST /events/actions/change-object-status; at most 512 objects across the events): 200 with `atomic: true` when everything was applied, otherwise the status of the first failing event and `results[]` with `outcome: failed` (with `error`, `message`) or `rolled_back` per event — nothing was written. GA administrative holds cannot be atomic (400 `not_atomic`).  **`seasonId`** (season or partial season id; XOR with `events`): fans out by unique label to every live member in one transaction (cap 50 members, 64 seats overall). Preconditions and channelKeys apply to every member seat.

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


$apiInstance = new SeatsChart\Client\Api\ObjectStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_actions_change_object_status_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsRetire($event_id, $post_api_events_by_event_id_actions_change_object_status_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStatusApi->postApiEventsByEventIdActionsRetire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_actions_change_object_status_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdActionsChangeObjectStatusRequest**](../Model/PostApiEventsByEventIdActionsChangeObjectStatusRequest.md)|  | |
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

## `postApiEventsByEventIdActionsUpdateExtraData()`

```php
postApiEventsByEventIdActionsUpdateExtraData($event_id, $post_api_events_by_event_id_actions_update_extra_data_request, $idempotency_key)
```

Update extraData of objects without changing their status

Sets (default) or merges (`merge: true`) `extraData` on up to 64 seats addressed by UUID or label; `extraData: null` clears it. Status, ownership, holds and for-sale flags are never touched. Runs under the same seat row locks as status changes, so it cannot interleave with a concurrent transition. Max 16 KiB of JSON per object. Requires **Idempotency-Key** (replays return the stored response). Every update is written to the audit log (`object.extra_data.update`).

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


$apiInstance = new SeatsChart\Client\Api\ObjectStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$post_api_events_by_event_id_actions_update_extra_data_request = new \SeatsChart\Client\Model\PostApiEventsByEventIdActionsUpdateExtraDataRequest(); // \SeatsChart\Client\Model\PostApiEventsByEventIdActionsUpdateExtraDataRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiEventsByEventIdActionsUpdateExtraData($event_id, $post_api_events_by_event_id_actions_update_extra_data_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStatusApi->postApiEventsByEventIdActionsUpdateExtraData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **post_api_events_by_event_id_actions_update_extra_data_request** | [**\SeatsChart\Client\Model\PostApiEventsByEventIdActionsUpdateExtraDataRequest**](../Model/PostApiEventsByEventIdActionsUpdateExtraDataRequest.md)|  | |
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

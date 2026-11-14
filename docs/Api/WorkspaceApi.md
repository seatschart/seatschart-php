# SeatsChart\Client\WorkspaceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiWorkspacesByWorkspaceId()**](WorkspaceApi.md#deleteApiWorkspacesByWorkspaceId) | **DELETE** /api/workspaces/{workspaceId} | Deactivate a workspace (legacy DELETE) |
| [**deleteApiWorkspacesByWorkspaceIdInvitationsByInvitationId()**](WorkspaceApi.md#deleteApiWorkspacesByWorkspaceIdInvitationsByInvitationId) | **DELETE** /api/workspaces/{workspaceId}/invitations/{invitationId} | Revoke a pending invitation of a workspace you administer |
| [**deleteApiWorkspacesByWorkspaceIdKeysByKeyId()**](WorkspaceApi.md#deleteApiWorkspacesByWorkspaceIdKeysByKeyId) | **DELETE** /api/workspaces/{workspaceId}/keys/{keyId} | Revoke a key of a workspace you administer |
| [**deleteApiWorkspacesByWorkspaceIdMembersByUserId()**](WorkspaceApi.md#deleteApiWorkspacesByWorkspaceIdMembersByUserId) | **DELETE** /api/workspaces/{workspaceId}/members/{userId} | Remove a member from a workspace you administer |
| [**getApiWorkspace()**](WorkspaceApi.md#getApiWorkspace) | **GET** /api/workspace | Get workspace profile for the authenticated tenant |
| [**getApiWorkspaceBuyerExtraData()**](WorkspaceApi.md#getApiWorkspaceBuyerExtraData) | **GET** /api/workspace/buyer-extra-data | Get the buyer extraData publication (opt-in, allow-listed keys) |
| [**getApiWorkspaceChartValidation()**](WorkspaceApi.md#getApiWorkspaceChartValidation) | **GET** /api/workspace/chart-validation | Get chart validation severities |
| [**getApiWorkspaceDefaults()**](WorkspaceApi.md#getApiWorkspaceDefaults) | **GET** /api/workspace/defaults | Get the workspace defaults (renderer settings, draft chart drawings) |
| [**getApiWorkspaceIntegration()**](WorkspaceApi.md#getApiWorkspaceIntegration) | **GET** /api/workspace/integration | Get the workspace integration mode (pricing source) |
| [**getApiWorkspaceSettings()**](WorkspaceApi.md#getApiWorkspaceSettings) | **GET** /api/workspace/settings | Get workspace settings (effective value and source) |
| [**getApiWorkspaces()**](WorkspaceApi.md#getApiWorkspaces) | **GET** /api/workspaces | List my workspaces |
| [**getApiWorkspacesByExternalIdByExternalId()**](WorkspaceApi.md#getApiWorkspacesByExternalIdByExternalId) | **GET** /api/workspaces/by-external-id/{externalId} | Get one of my workspaces by its external id |
| [**getApiWorkspacesByWorkspaceId()**](WorkspaceApi.md#getApiWorkspacesByWorkspaceId) | **GET** /api/workspaces/{workspaceId} | Get one of my workspaces |
| [**getApiWorkspacesByWorkspaceIdInvitations()**](WorkspaceApi.md#getApiWorkspacesByWorkspaceIdInvitations) | **GET** /api/workspaces/{workspaceId}/invitations | List the pending invitations of a workspace you administer |
| [**getApiWorkspacesByWorkspaceIdKeys()**](WorkspaceApi.md#getApiWorkspacesByWorkspaceIdKeys) | **GET** /api/workspaces/{workspaceId}/keys | List the API keys of a workspace you administer |
| [**getApiWorkspacesByWorkspaceIdMembers()**](WorkspaceApi.md#getApiWorkspacesByWorkspaceIdMembers) | **GET** /api/workspaces/{workspaceId}/members | List the members of a workspace you administer |
| [**getApiWorkspacesOverview()**](WorkspaceApi.md#getApiWorkspacesOverview) | **GET** /api/workspaces/overview | Consolidated overview of the organizer workspaces you administer |
| [**patchApiWorkspace()**](WorkspaceApi.md#patchApiWorkspace) | **PATCH** /api/workspace | Update workspace display name |
| [**patchApiWorkspaceChartValidation()**](WorkspaceApi.md#patchApiWorkspaceChartValidation) | **PATCH** /api/workspace/chart-validation | Update chart validation severities |
| [**patchApiWorkspaceDefaults()**](WorkspaceApi.md#patchApiWorkspaceDefaults) | **PATCH** /api/workspace/defaults | Change the workspace defaults (renderer settings, draft chart drawings) |
| [**patchApiWorkspaceIntegration()**](WorkspaceApi.md#patchApiWorkspaceIntegration) | **PATCH** /api/workspace/integration | Change the workspace integration mode |
| [**patchApiWorkspaceSettings()**](WorkspaceApi.md#patchApiWorkspaceSettings) | **PATCH** /api/workspace/settings | Override workspace settings or return them to the default |
| [**patchApiWorkspacesByWorkspaceId()**](WorkspaceApi.md#patchApiWorkspacesByWorkspaceId) | **PATCH** /api/workspaces/{workspaceId} | Rename one of my workspaces or change its external id |
| [**patchApiWorkspacesByWorkspaceIdKeysByKeyId()**](WorkspaceApi.md#patchApiWorkspacesByWorkspaceIdKeysByKeyId) | **PATCH** /api/workspaces/{workspaceId}/keys/{keyId} | Rename a key of a workspace you administer or change its scopes |
| [**postApiWorkspacePublicKeyRotate()**](WorkspaceApi.md#postApiWorkspacePublicKeyRotate) | **POST** /api/workspace/public-key/rotate | Rotate the public workspace key |
| [**postApiWorkspaces()**](WorkspaceApi.md#postApiWorkspaces) | **POST** /api/workspaces | Create a workspace (provision an organizer) |
| [**postApiWorkspacesByWorkspaceIdActionsActivate()**](WorkspaceApi.md#postApiWorkspacesByWorkspaceIdActionsActivate) | **POST** /api/workspaces/{workspaceId}/actions/activate | Reactivate a workspace |
| [**postApiWorkspacesByWorkspaceIdActionsDeactivate()**](WorkspaceApi.md#postApiWorkspacesByWorkspaceIdActionsDeactivate) | **POST** /api/workspaces/{workspaceId}/actions/deactivate | Deactivate a workspace |
| [**postApiWorkspacesByWorkspaceIdActionsDelete()**](WorkspaceApi.md#postApiWorkspacesByWorkspaceIdActionsDelete) | **POST** /api/workspaces/{workspaceId}/actions/delete | Delete a workspace |
| [**postApiWorkspacesByWorkspaceIdActionsSetDefault()**](WorkspaceApi.md#postApiWorkspacesByWorkspaceIdActionsSetDefault) | **POST** /api/workspaces/{workspaceId}/actions/set-default | Set my default workspace |
| [**postApiWorkspacesByWorkspaceIdInvitations()**](WorkspaceApi.md#postApiWorkspacesByWorkspaceIdInvitations) | **POST** /api/workspaces/{workspaceId}/invitations | Invite a person to a workspace you administer |
| [**postApiWorkspacesByWorkspaceIdKeys()**](WorkspaceApi.md#postApiWorkspacesByWorkspaceIdKeys) | **POST** /api/workspaces/{workspaceId}/keys | Mint an API key in a workspace you administer |
| [**postApiWorkspacesByWorkspaceIdKeysByKeyIdActionsRotate()**](WorkspaceApi.md#postApiWorkspacesByWorkspaceIdKeysByKeyIdActionsRotate) | **POST** /api/workspaces/{workspaceId}/keys/{keyId}/actions/rotate | Rotate the secret of a key of a workspace you administer |
| [**putApiWorkspaceBuyerExtraData()**](WorkspaceApi.md#putApiWorkspaceBuyerExtraData) | **PUT** /api/workspace/buyer-extra-data | Publish selected extraData keys to buyers (or stop) |


## `deleteApiWorkspacesByWorkspaceId()`

```php
deleteApiWorkspacesByWorkspaceId($workspace_id, $idempotency_key): \SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceId200Response
```

Deactivate a workspace (legacy DELETE)

Kept for compatibility: DELETE is exactly POST /workspaces/{workspaceId}/actions/deactivate (reversible with …/actions/activate). To delete a workspace for good from the product, use POST /workspaces/{workspaceId}/actions/delete. Dashboard session or a **workspace admin API key** (other API keys: 403 `ERR_PARTNER_SCOPE`); the caller (for a key: the admin it is bound to) must be an **admin** of the target workspace (403 otherwise, 404 when not a member). Idempotent. A deactivated workspace keeps all its data; its API keys, viewer/embed JWTs and public CDN reads are refused with 403 `workspace_deactivated` (effective at once on every API instance through a Redis invalidation message, 5 seconds at most if it is lost), while dashboard members can still sign in so an admin can reactivate it. An admin key cannot deactivate its own workspace (409 `own_workspace`). `{workspaceId}` may also be the external id of a workspace you administer (one workspace per organizer).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->deleteApiWorkspacesByWorkspaceId($workspace_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->deleteApiWorkspacesByWorkspaceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceId200Response**](../Model/DeleteApiWorkspacesByWorkspaceId200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiWorkspacesByWorkspaceIdInvitationsByInvitationId()`

```php
deleteApiWorkspacesByWorkspaceIdInvitationsByInvitationId($workspace_id, $invitation_id, $idempotency_key): \SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceIdMembersByUserId200Response
```

Revoke a pending invitation of a workspace you administer

Audited (`team.invitation_revoked`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.
$invitation_id = 'invitation_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->deleteApiWorkspacesByWorkspaceIdInvitationsByInvitationId($workspace_id, $invitation_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->deleteApiWorkspacesByWorkspaceIdInvitationsByInvitationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |
| **invitation_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceIdMembersByUserId200Response**](../Model/DeleteApiWorkspacesByWorkspaceIdMembersByUserId200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiWorkspacesByWorkspaceIdKeysByKeyId()`

```php
deleteApiWorkspacesByWorkspaceIdKeysByKeyId($workspace_id, $key_id, $idempotency_key): \SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceIdKeysByKeyId200Response
```

Revoke a key of a workspace you administer

The key stops working at once on every API instance (idempotent: `alreadyRevoked`). Workspace admin keys answer 403 `ERR_ADMIN_KEY_DASHBOARD_ONLY`. Audited (`api_key.revoked`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.
$key_id = 'key_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->deleteApiWorkspacesByWorkspaceIdKeysByKeyId($workspace_id, $key_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->deleteApiWorkspacesByWorkspaceIdKeysByKeyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |
| **key_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceIdKeysByKeyId200Response**](../Model/DeleteApiWorkspacesByWorkspaceIdKeysByKeyId200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiWorkspacesByWorkspaceIdMembersByUserId()`

```php
deleteApiWorkspacesByWorkspaceIdMembersByUserId($workspace_id, $user_id, $idempotency_key): \SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceIdMembersByUserId200Response
```

Remove a member from a workspace you administer

Revokes the member's dashboard sessions there at once (and in the workspace's sandboxes). The last admin and the caller itself cannot be removed (409). Audited (`team.member_removed`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.
$user_id = 'user_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->deleteApiWorkspacesByWorkspaceIdMembersByUserId($workspace_id, $user_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->deleteApiWorkspacesByWorkspaceIdMembersByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |
| **user_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceIdMembersByUserId200Response**](../Model/DeleteApiWorkspacesByWorkspaceIdMembersByUserId200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspace()`

```php
getApiWorkspace()
```

Get workspace profile for the authenticated tenant

Includes `publicKey` (`pub_…`) for `?workspaceKey=` on the viewer. The public key is not authentication — Bearer JWT or embed token is still required. `kind` is `sandbox` for a sandbox (`isTest: true`, see `/sandboxes`), with its production workspace in `parentWorkspaceId` and its last reset in `lastResetAt`.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiWorkspace();
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspace: ', $e->getMessage(), PHP_EOL;
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

## `getApiWorkspaceBuyerExtraData()`

```php
getApiWorkspaceBuyerExtraData(): \SeatsChart\Client\Model\GetApiWorkspaceBuyerExtraData200Response
```

Get the buyer extraData publication (opt-in, allow-listed keys)

Object `extraData` is private by default (server, Event Manager, reports). With `enabled` and a non-empty `keys` allow-list (at most 16 keys of letters, digits, `_`, `-`, `.` and `:`), only those keys, with scalar values (strings up to 256 characters, numbers, booleans, null), are published for this workspace's events by `GET /api/public/{publicKey}/events/{eventId}/extra-data` and read by the renderer (rules `match.extraData`, templates `{extraData.key}`, host objects). Never part of the compact state. `resalePriceCents` is never published. The key list is kept while disabled.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiWorkspaceBuyerExtraData();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspaceBuyerExtraData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspaceBuyerExtraData200Response**](../Model/GetApiWorkspaceBuyerExtraData200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspaceChartValidation()`

```php
getApiWorkspaceChartValidation()
```

Get chart validation severities

Level of every chart validation rule for this workspace (`off`, `warning` or `error`) plus the product defaults. The designer, `POST /charts/{chartId}/map/publish`, `POST /charts/{chartId}/actions/validate` and event creation all apply these levels. Rules: `no_objects` (no seats or GA areas), `empty_label` (unlabeled seats / GA areas), `duplicate_label` (same label in a section), `uncategorized` (objects without a category once categories exist), `overlap`, `table_too_small` (< 2 seats), `ga_invalid_capacity` (GA capacity missing or outside 1–100000), `empty_floor` (multi-floor maps), `empty_section`, `outside_section` (seat outside its section outline), `multiple_object_types` (one category used by seats, table seats and GA areas), `missing_focal_point`, `zone_missing_focal_point`, `orphan_gap` (one-seat gap in a row), `ga_table_capacity` (GA tables in an area hold more places than its capacity), `images_size` (the chart's images download more than 2,048 KB in total).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiWorkspaceChartValidation();
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspaceChartValidation: ', $e->getMessage(), PHP_EOL;
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

## `getApiWorkspaceDefaults()`

```php
getApiWorkspaceDefaults(): \SeatsChart\Client\Model\GetApiWorkspaceDefaults200Response
```

Get the workspace defaults (renderer settings, draft chart drawings)

seats.io account `defaultRendererSettings`, `holdOnSelectForGAs` and draft chart drawings. `renderer` lists the defaults this workspace sets for its buyer seat maps (an absent option uses `rendererBuiltIn`): `multiSelectEnabled`, `showFullScreenButton`, `companionSeatValidationEnabled` (the companion-seat selection validator) and `holdOnSelectForGAs`. Resolution per option: explicit embed / host config > workspace default > built-in default. The defaults are served with the cached embed policy (`GET /api/events/{eventId}/embed-policy` → `rendererDefaults`; no per-request query). `draftChartDrawingsEnabled` (default true): with `false` the designer publishes every save directly, also for charts that already have events (auto-publish is no longer refused with 409 `ERR_AUTO_PUBLISH_CHART_HAS_EVENTS`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiWorkspaceDefaults();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspaceDefaults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspaceDefaults200Response**](../Model/GetApiWorkspaceDefaults200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspaceIntegration()`

```php
getApiWorkspaceIntegration(): \SeatsChart\Client\Model\GetApiWorkspaceIntegration200Response
```

Get the workspace integration mode (pricing source)

`pricingSource`: where prices come from for events without their own override — `partner` (the ticketing platform passes prices to the renderer and declares amounts at confirm; no quote required), `synced_catalog` (the platform pushes a price table with PUT /events/{eventId}/pricing; confirmations are validated against it) or `seatschart_catalog` (prices from the designer catalog; a quote is required before every confirm). New workspaces start with `partner`; workspaces created before pricing modes keep `seatschart_catalog`. `ownCatalog`: show the direct-selling tools (event prices, box office) in the dashboard although prices come from the platform.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiWorkspaceIntegration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspaceIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspaceIntegration200Response**](../Model/GetApiWorkspaceIntegration200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspaceSettings()`

```php
getApiWorkspaceSettings(): \SeatsChart\Client\Model\GetApiWorkspaceSettings200Response
```

Get workspace settings (effective value and source)

Effective value of every workspace setting, the default it inherits and whether it is overridden. Settings: `holdPeriodMinutes` (1–120; default `SEAT_HOLD_TTL_SEC`, 10 min) — TTL of new and renewed seat/GA holds; `maxSeatsPerHoldToken` (1–1000; default 64) — seats one hold token may hold across appends; above 64 the workspace opts into large group holds: one atomic reserve request holds up to this many seats of one event and the sales-channel defaults (web 8, box office 20, partner 64) step aside, while the organizer booking limits still apply; `ticketBuyerValidation` (default off) — buyer tokens are minted only for a registered ticket buyer id (`POST /ticket-buyers`) and bind it, buyer holds must carry it; `gaPlacesToChannels` (default on) — inventory channels may receive GA place quotas (`areaPlaces`); `newEventsNotForSale` (default off) — new events start with every seat and GA area not for sale (seats.io workspace for-sale mode; an explicit `forSaleConfig` at creation wins, season members still follow the season source). Each setting either uses the platform default or is overridden for this workspace; `sources` says which.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiWorkspaceSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspaceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspaceSettings200Response**](../Model/GetApiWorkspaceSettings200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspaces()`

```php
getApiWorkspaces($filter, $status, $external_id, $created_by_api): \SeatsChart\Client\Model\GetApiWorkspaces200Response
```

List my workspaces

Every workspace the signed-in dashboard user belongs to, with role, effective plan, subscription status, activation status and `isCurrent`. `?filter=` keeps the workspaces whose name or id contains the text; `?status=active|inactive` keeps the active or the deactivated ones. Dashboard session, or a **workspace admin API key** (`POST /api/keys` with `workspaceAdmin: true`): it lists the workspaces of the admin it is bound to. Other API keys: 403 `ERR_PARTNER_SCOPE`.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Case-insensitive substring of the workspace name or id (seats.io `filter`).
$status = 'status_example'; // string | `active` (seats.io listActive), `inactive` (deactivated; seats.io listInactive) or `all` (default).
$external_id = 'external_id_example'; // string | Only the workspace with this external id (your organizer id; exact match).
$created_by_api = True; // bool | `true`: only workspaces provisioned by a workspace admin key; `false`: only the others.

try {
    $result = $apiInstance->getApiWorkspaces($filter, $status, $external_id, $created_by_api);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Case-insensitive substring of the workspace name or id (seats.io &#x60;filter&#x60;). | [optional] |
| **status** | **string**| &#x60;active&#x60; (seats.io listActive), &#x60;inactive&#x60; (deactivated; seats.io listInactive) or &#x60;all&#x60; (default). | [optional] |
| **external_id** | **string**| Only the workspace with this external id (your organizer id; exact match). | [optional] |
| **created_by_api** | **bool**| &#x60;true&#x60;: only workspaces provisioned by a workspace admin key; &#x60;false&#x60;: only the others. | [optional] |

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspaces200Response**](../Model/GetApiWorkspaces200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspacesByExternalIdByExternalId()`

```php
getApiWorkspacesByExternalIdByExternalId($external_id): \SeatsChart\Client\Model\GetApiWorkspaces200ResponseItemsInner
```

Get one of my workspaces by its external id

The workspace whose `externalId` (your organizer id, set at `POST /workspaces` or with `PATCH /workspaces/{workspaceId}`) is this value, among the workspaces the caller is a member of (404 otherwise: the call never reveals other accounts' workspaces). Same item as `GET /workspaces`. Dashboard session or a **workspace admin API key** (other API keys: 403 `ERR_PARTNER_SCOPE`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 'external_id_example'; // string

try {
    $result = $apiInstance->getApiWorkspacesByExternalIdByExternalId($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspacesByExternalIdByExternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**|  | |

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspaces200ResponseItemsInner**](../Model/GetApiWorkspaces200ResponseItemsInner.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspacesByWorkspaceId()`

```php
getApiWorkspacesByWorkspaceId($workspace_id): \SeatsChart\Client\Model\GetApiWorkspaces200ResponseItemsInner
```

Get one of my workspaces

Same item as GET /workspaces for one workspace the caller is a member of (404 otherwise). Dashboard session or a **workspace admin API key** (other API keys: 403 `ERR_PARTNER_SCOPE`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getApiWorkspacesByWorkspaceId($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspacesByWorkspaceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspaces200ResponseItemsInner**](../Model/GetApiWorkspaces200ResponseItemsInner.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspacesByWorkspaceIdInvitations()`

```php
getApiWorkspacesByWorkspaceIdInvitations($workspace_id): \SeatsChart\Client\Model\GetApiWorkspacesByWorkspaceIdInvitations200Response
```

List the pending invitations of a workspace you administer

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.

try {
    $result = $apiInstance->getApiWorkspacesByWorkspaceIdInvitations($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspacesByWorkspaceIdInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspacesByWorkspaceIdInvitations200Response**](../Model/GetApiWorkspacesByWorkspaceIdInvitations200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspacesByWorkspaceIdKeys()`

```php
getApiWorkspacesByWorkspaceIdKeys($workspace_id): \SeatsChart\Client\Model\GetApiWorkspacesByWorkspaceIdKeys200Response
```

List the API keys of a workspace you administer

Live keys of the workspace (prefix fingerprint only, never a secret), newest first. Dashboard session or a **workspace admin API key**; the caller (for a key: the admin it is bound to, re-checked on every call) must administer the workspace: 404 otherwise, also for another account's workspace.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.

try {
    $result = $apiInstance->getApiWorkspacesByWorkspaceIdKeys($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspacesByWorkspaceIdKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspacesByWorkspaceIdKeys200Response**](../Model/GetApiWorkspacesByWorkspaceIdKeys200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspacesByWorkspaceIdMembers()`

```php
getApiWorkspacesByWorkspaceIdMembers($workspace_id): \SeatsChart\Client\Model\GetApiWorkspacesByWorkspaceIdMembers200Response
```

List the members of a workspace you administer

Dashboard members with role, join date and `twoFactorEnabled`. Dashboard session or a workspace admin API key.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.

try {
    $result = $apiInstance->getApiWorkspacesByWorkspaceIdMembers($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspacesByWorkspaceIdMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspacesByWorkspaceIdMembers200Response**](../Model/GetApiWorkspacesByWorkspaceIdMembers200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiWorkspacesOverview()`

```php
getApiWorkspacesOverview($external_id, $status, $created_by_api, $created_from, $created_to, $month, $limit, $cursor): \SeatsChart\Client\Model\GetApiWorkspacesOverview200Response
```

Consolidated overview of the organizer workspaces you administer

One call for the platform view: every production workspace the caller administers (for a workspace admin key: its admin), newest first, with charts (not archived), events, seats `sold` / `held` / `available` (numbered seats for sale plus general admission places; held = numbered seats under a hold now, read from Redis for current and upcoming events), `revenue` and the used objects of `month`, plus `totals` over every workspace matching the filters (not only this page). `revenue.cents` is the catalog price of the sold seats and is known only when the workspace takes prices from SeatsChart (`pricingSource: seatschart_catalog`); with partner or synced pricing the platform owns the amounts (`known: false`, `cents: null`; `totals.revenue.complete` says whether every workspace was known). Sold and available come from PostgreSQL, holds from Redis. `usage.usedSeats` is each workspace's used seats of the month (the billing unit) and `usage.projectedSeats` its projection at the current pace. `seats` is the seat billing of the caller's billing account for the month: the seats of every production workspace of the account (its own and the organizer workspaces it provisioned) together, against the account's plan (`includedSeats`, `overage` and `projected` with their cost); `account` holds the account's totals (`workspaceCount`, `plan`, `charts` and `events` against the plan caps, which count them together); both `null` when the caller has no billing account. Filters: `externalId`, `status`, `createdByApi`, creation date range `createdFrom` / `createdTo`. Paginated with `limit` / `nextCursor`. Dashboard session or a workspace admin API key.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 'external_id_example'; // string | Only this organizer.
$status = 'status_example'; // string | Default `all`.
$created_by_api = True; // bool | `true`: only workspaces provisioned by a workspace admin key.
$created_from = 'created_from_example'; // string | Workspaces created at or after this date / date-time (ISO 8601).
$created_to = 'created_to_example'; // string | Workspaces created at or before this date (whole UTC day) / date-time.
$month = 'month_example'; // string | Usage month `YYYY-MM` (default: the current UTC month).
$limit = 3.4; // float | Page size (1..200, default 50).
$cursor = 'cursor_example'; // string | Opaque `nextCursor` of the previous page.

try {
    $result = $apiInstance->getApiWorkspacesOverview($external_id, $status, $created_by_api, $created_from, $created_to, $month, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getApiWorkspacesOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| Only this organizer. | [optional] |
| **status** | **string**| Default &#x60;all&#x60;. | [optional] |
| **created_by_api** | **bool**| &#x60;true&#x60;: only workspaces provisioned by a workspace admin key. | [optional] |
| **created_from** | **string**| Workspaces created at or after this date / date-time (ISO 8601). | [optional] |
| **created_to** | **string**| Workspaces created at or before this date (whole UTC day) / date-time. | [optional] |
| **month** | **string**| Usage month &#x60;YYYY-MM&#x60; (default: the current UTC month). | [optional] |
| **limit** | **float**| Page size (1..200, default 50). | [optional] |
| **cursor** | **string**| Opaque &#x60;nextCursor&#x60; of the previous page. | [optional] |

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspacesOverview200Response**](../Model/GetApiWorkspacesOverview200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchApiWorkspace()`

```php
patchApiWorkspace($patch_api_workspace_request, $idempotency_key)
```

Update workspace display name

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_api_workspace_request = new \SeatsChart\Client\Model\PatchApiWorkspaceRequest(); // \SeatsChart\Client\Model\PatchApiWorkspaceRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiWorkspace($patch_api_workspace_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->patchApiWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patch_api_workspace_request** | [**\SeatsChart\Client\Model\PatchApiWorkspaceRequest**](../Model/PatchApiWorkspaceRequest.md)|  | |
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

## `patchApiWorkspaceChartValidation()`

```php
patchApiWorkspaceChartValidation($patch_api_workspace_chart_validation_request, $idempotency_key)
```

Update chart validation severities

Workspace admins only. Merges `severities` into the stored levels (only differences from the defaults are kept); `reset: true` restores the defaults first. Takes effect immediately in the designer and the API (other API replicas within milliseconds through a Redis invalidation message, 5 seconds at most if it is lost). Charts are not re-validated: stored per-rule counts are re-read under the new levels. Every change is written to the audit log (`workspace.chart_validation.update`). Rules: `no_objects` (no seats or GA areas), `empty_label` (unlabeled seats / GA areas), `duplicate_label` (same label in a section), `uncategorized` (objects without a category once categories exist), `overlap`, `table_too_small` (< 2 seats), `ga_invalid_capacity` (GA capacity missing or outside 1–100000), `empty_floor` (multi-floor maps), `empty_section`, `outside_section` (seat outside its section outline), `multiple_object_types` (one category used by seats, table seats and GA areas), `missing_focal_point`, `zone_missing_focal_point`, `orphan_gap` (one-seat gap in a row), `ga_table_capacity` (GA tables in an area hold more places than its capacity), `images_size` (the chart's images download more than 2,048 KB in total).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_api_workspace_chart_validation_request = new \SeatsChart\Client\Model\PatchApiWorkspaceChartValidationRequest(); // \SeatsChart\Client\Model\PatchApiWorkspaceChartValidationRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiWorkspaceChartValidation($patch_api_workspace_chart_validation_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->patchApiWorkspaceChartValidation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patch_api_workspace_chart_validation_request** | [**\SeatsChart\Client\Model\PatchApiWorkspaceChartValidationRequest**](../Model/PatchApiWorkspaceChartValidationRequest.md)|  | |
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

## `patchApiWorkspaceDefaults()`

```php
patchApiWorkspaceDefaults($patch_api_workspace_defaults_request, $idempotency_key)
```

Change the workspace defaults (renderer settings, draft chart drawings)

Workspace admins only (dashboard session; API keys can read, not change: 403). A boolean sets a renderer default, `null` returns it to the built-in default, omitted options are unchanged. Takes effect within seconds on every API instance (tenant config cache invalidation) and within a minute on buyer pages (the viewer caches the embed policy). Audited (`workspace.defaults.update`). seats.io account `defaultRendererSettings`, `holdOnSelectForGAs` and draft chart drawings. `renderer` lists the defaults this workspace sets for its buyer seat maps (an absent option uses `rendererBuiltIn`): `multiSelectEnabled`, `showFullScreenButton`, `companionSeatValidationEnabled` (the companion-seat selection validator) and `holdOnSelectForGAs`. Resolution per option: explicit embed / host config > workspace default > built-in default. The defaults are served with the cached embed policy (`GET /api/events/{eventId}/embed-policy` → `rendererDefaults`; no per-request query). `draftChartDrawingsEnabled` (default true): with `false` the designer publishes every save directly, also for charts that already have events (auto-publish is no longer refused with 409 `ERR_AUTO_PUBLISH_CHART_HAS_EVENTS`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_api_workspace_defaults_request = new \SeatsChart\Client\Model\PatchApiWorkspaceDefaultsRequest(); // \SeatsChart\Client\Model\PatchApiWorkspaceDefaultsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiWorkspaceDefaults($patch_api_workspace_defaults_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->patchApiWorkspaceDefaults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patch_api_workspace_defaults_request** | [**\SeatsChart\Client\Model\PatchApiWorkspaceDefaultsRequest**](../Model/PatchApiWorkspaceDefaultsRequest.md)|  | |
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

## `patchApiWorkspaceIntegration()`

```php
patchApiWorkspaceIntegration($patch_api_workspace_integration_request, $idempotency_key)
```

Change the workspace integration mode

Workspace admins only (dashboard session). Takes effect at once on every API instance (Redis invalidation message; 5 seconds at most if it is lost). Audited (`workspace.integration.update`). `pricingSource`: where prices come from for events without their own override — `partner` (the ticketing platform passes prices to the renderer and declares amounts at confirm; no quote required), `synced_catalog` (the platform pushes a price table with PUT /events/{eventId}/pricing; confirmations are validated against it) or `seatschart_catalog` (prices from the designer catalog; a quote is required before every confirm). New workspaces start with `partner`; workspaces created before pricing modes keep `seatschart_catalog`. `ownCatalog`: show the direct-selling tools (event prices, box office) in the dashboard although prices come from the platform.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_api_workspace_integration_request = new \SeatsChart\Client\Model\PatchApiWorkspaceIntegrationRequest(); // \SeatsChart\Client\Model\PatchApiWorkspaceIntegrationRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiWorkspaceIntegration($patch_api_workspace_integration_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->patchApiWorkspaceIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patch_api_workspace_integration_request** | [**\SeatsChart\Client\Model\PatchApiWorkspaceIntegrationRequest**](../Model/PatchApiWorkspaceIntegrationRequest.md)|  | |
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

## `patchApiWorkspaceSettings()`

```php
patchApiWorkspaceSettings($patch_api_workspace_settings_request, $idempotency_key)
```

Override workspace settings or return them to the default

Workspace admins only (dashboard session). A value overrides the default for this workspace; `null` returns the setting to the default; omitted settings are unchanged. Takes effect immediately on this API instance and within milliseconds on the others through a Redis invalidation message, 5 seconds at most if it is lost (read from the tenant config cache; no per-request query). Every change is audited (`workspace.settings.update`). Settings: `holdPeriodMinutes` (1–120; default `SEAT_HOLD_TTL_SEC`, 10 min) — TTL of new and renewed seat/GA holds; `maxSeatsPerHoldToken` (1–1000; default 64) — seats one hold token may hold across appends; above 64 the workspace opts into large group holds: one atomic reserve request holds up to this many seats of one event and the sales-channel defaults (web 8, box office 20, partner 64) step aside, while the organizer booking limits still apply; `ticketBuyerValidation` (default off) — buyer tokens are minted only for a registered ticket buyer id (`POST /ticket-buyers`) and bind it, buyer holds must carry it; `gaPlacesToChannels` (default on) — inventory channels may receive GA place quotas (`areaPlaces`); `newEventsNotForSale` (default off) — new events start with every seat and GA area not for sale (seats.io workspace for-sale mode; an explicit `forSaleConfig` at creation wins, season members still follow the season source). Each setting either uses the platform default or is overridden for this workspace; `sources` says which.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_api_workspace_settings_request = new \SeatsChart\Client\Model\PatchApiWorkspaceSettingsRequest(); // \SeatsChart\Client\Model\PatchApiWorkspaceSettingsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiWorkspaceSettings($patch_api_workspace_settings_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->patchApiWorkspaceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patch_api_workspace_settings_request** | [**\SeatsChart\Client\Model\PatchApiWorkspaceSettingsRequest**](../Model/PatchApiWorkspaceSettingsRequest.md)|  | |
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

## `patchApiWorkspacesByWorkspaceId()`

```php
patchApiWorkspacesByWorkspaceId($workspace_id, $patch_api_workspaces_by_workspace_id_request, $idempotency_key): \SeatsChart\Client\Model\GetApiWorkspaces200ResponseItemsInner
```

Rename one of my workspaces or change its external id

Sets `displayName` (1–512 characters) and/or `externalId`. The caller (for a workspace admin key: the admin it is bound to) must be an **admin** of the target workspace (403 otherwise, 404 when not a member). Idempotent; written to the audit log (`workspace.rename`, `workspace.external_id.update`). A changed external id takes effect at once for `X-Workspace-Key` on every API instance (the old value stops resolving).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$patch_api_workspaces_by_workspace_id_request = new \SeatsChart\Client\Model\PatchApiWorkspacesByWorkspaceIdRequest(); // \SeatsChart\Client\Model\PatchApiWorkspacesByWorkspaceIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->patchApiWorkspacesByWorkspaceId($workspace_id, $patch_api_workspaces_by_workspace_id_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->patchApiWorkspacesByWorkspaceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **patch_api_workspaces_by_workspace_id_request** | [**\SeatsChart\Client\Model\PatchApiWorkspacesByWorkspaceIdRequest**](../Model/PatchApiWorkspacesByWorkspaceIdRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspaces200ResponseItemsInner**](../Model/GetApiWorkspaces200ResponseItemsInner.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchApiWorkspacesByWorkspaceIdKeysByKeyId()`

```php
patchApiWorkspacesByWorkspaceIdKeysByKeyId($workspace_id, $key_id, $patch_api_workspaces_by_workspace_id_keys_by_key_id_request, $idempotency_key): \SeatsChart\Client\Model\PatchApiWorkspacesByWorkspaceIdKeysByKeyId200Response
```

Rename a key of a workspace you administer or change its scopes

Takes effect on the next request (the auth cache entry is dropped); the secret is unchanged. Workspace admin keys answer 403 `ERR_ADMIN_KEY_DASHBOARD_ONLY`. Audited (`api_key.updated`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.
$key_id = 'key_id_example'; // string
$patch_api_workspaces_by_workspace_id_keys_by_key_id_request = new \SeatsChart\Client\Model\PatchApiWorkspacesByWorkspaceIdKeysByKeyIdRequest(); // \SeatsChart\Client\Model\PatchApiWorkspacesByWorkspaceIdKeysByKeyIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->patchApiWorkspacesByWorkspaceIdKeysByKeyId($workspace_id, $key_id, $patch_api_workspaces_by_workspace_id_keys_by_key_id_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->patchApiWorkspacesByWorkspaceIdKeysByKeyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |
| **key_id** | **string**|  | |
| **patch_api_workspaces_by_workspace_id_keys_by_key_id_request** | [**\SeatsChart\Client\Model\PatchApiWorkspacesByWorkspaceIdKeysByKeyIdRequest**](../Model/PatchApiWorkspacesByWorkspaceIdKeysByKeyIdRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PatchApiWorkspacesByWorkspaceIdKeysByKeyId200Response**](../Model/PatchApiWorkspacesByWorkspaceIdKeysByKeyId200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiWorkspacePublicKeyRotate()`

```php
postApiWorkspacePublicKeyRotate($idempotency_key)
```

Rotate the public workspace key

Issues a new `pub_…` key. Requires workspace_admin. The public key is not authentication — rotating it does not invalidate JWTs or API keys.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiWorkspacePublicKeyRotate($idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postApiWorkspacePublicKeyRotate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `postApiWorkspaces()`

```php
postApiWorkspaces($post_api_workspaces_request, $idempotency_key): \SeatsChart\Client\Model\PostApiWorkspaces200Response
```

Create a workspace (provision an organizer)

Provisions a workspace and admin membership for the caller: a dashboard admin session, or a **full-access workspace admin API key** (`POST /api/keys` with `workspaceAdmin: true`), whose bound admin becomes the admin of the new workspace. Other API keys: 403 `ERR_PARTNER_SCOPE`.  **Ticketing platforms (one workspace per organizer):** send `externalId` (your organizer id), `templateWorkspaceId` (a workspace whose integration settings, embed domains and webhooks to copy) and `issueKey` (mint the organizer's API key in the same call). A workspace created by a workspace admin key is marked `createdByApi`, joins the platform admin's billing account (one plan for every workspace of the account, e.g. Ultra On-Demand: its charts, events and seats count with the others) and is billed to the platform: its members never see checkout or upgrade prompts. A workspace created in the dashboard joins the creator's billing account the same way, and a sandbox its parent's. Without a template it starts with partner pricing and the platform defaults. Then call any partner route in it with the same admin key and `X-Workspace-Key: <workspaceId or externalId>`.  **Idempotency:** send `Idempotency-Key` (1–255 characters): the same key and body within 24 hours returns the first result with `idempotentReplay: true` and every secret `null` (secrets are never stored; rotate the key if the first response was lost). The same key with another body: 422 `idempotency_key_reused`; while the first call still runs: 409.  `isTest: true` creates a test workspace linked to the current production workspace (`parentWorkspaceId`), optionally copying its charts (`copyCharts`). Written to the audit log of the current workspace (`workspace.create` / `workspace.create_test`) and, for a production workspace, of the new one. Returns a new `publicKey`: not a secret and not a Bearer substitute.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_workspaces_request = new \SeatsChart\Client\Model\PostApiWorkspacesRequest(); // \SeatsChart\Client\Model\PostApiWorkspacesRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiWorkspaces($post_api_workspaces_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postApiWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_workspaces_request** | [**\SeatsChart\Client\Model\PostApiWorkspacesRequest**](../Model/PostApiWorkspacesRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiWorkspaces200Response**](../Model/PostApiWorkspaces200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiWorkspacesByWorkspaceIdActionsActivate()`

```php
postApiWorkspacesByWorkspaceIdActionsActivate($workspace_id, $idempotency_key): \SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceId200Response
```

Reactivate a workspace

Dashboard session or a **workspace admin API key** (other API keys: 403 `ERR_PARTNER_SCOPE`); the caller (for a key: the admin it is bound to) must be an **admin** of the target workspace (403 otherwise, 404 when not a member). Idempotent. A deactivated workspace keeps all its data; its API keys, viewer/embed JWTs and public CDN reads are refused with 403 `workspace_deactivated` (effective at once on every API instance through a Redis invalidation message, 5 seconds at most if it is lost), while dashboard members can still sign in so an admin can reactivate it. An admin key cannot deactivate its own workspace (409 `own_workspace`). `{workspaceId}` may also be the external id of a workspace you administer (one workspace per organizer).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiWorkspacesByWorkspaceIdActionsActivate($workspace_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postApiWorkspacesByWorkspaceIdActionsActivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceId200Response**](../Model/DeleteApiWorkspacesByWorkspaceId200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiWorkspacesByWorkspaceIdActionsDeactivate()`

```php
postApiWorkspacesByWorkspaceIdActionsDeactivate($workspace_id, $idempotency_key): \SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceId200Response
```

Deactivate a workspace

Dashboard session or a **workspace admin API key** (other API keys: 403 `ERR_PARTNER_SCOPE`); the caller (for a key: the admin it is bound to) must be an **admin** of the target workspace (403 otherwise, 404 when not a member). Idempotent. A deactivated workspace keeps all its data; its API keys, viewer/embed JWTs and public CDN reads are refused with 403 `workspace_deactivated` (effective at once on every API instance through a Redis invalidation message, 5 seconds at most if it is lost), while dashboard members can still sign in so an admin can reactivate it. An admin key cannot deactivate its own workspace (409 `own_workspace`). `{workspaceId}` may also be the external id of a workspace you administer (one workspace per organizer). You cannot deactivate your last active workspace (409 `last_active_workspace`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiWorkspacesByWorkspaceIdActionsDeactivate($workspace_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postApiWorkspacesByWorkspaceIdActionsDeactivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\DeleteApiWorkspacesByWorkspaceId200Response**](../Model/DeleteApiWorkspacesByWorkspaceId200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiWorkspacesByWorkspaceIdActionsDelete()`

```php
postApiWorkspacesByWorkspaceIdActionsDelete($workspace_id, $post_api_workspaces_by_workspace_id_actions_delete_request, $idempotency_key): \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdActionsDelete200Response
```

Delete a workspace

Soft delete: the workspace and every chart, event, order and audit entry stay in the database, but it leaves every list and switcher (including GET /workspaces), its members lose access, and its API keys, embed and viewer tokens and public reads are refused like a deactivated workspace (403 `workspace_deactivated`, at once on every API instance); `X-Workspace-Key` calls to it answer 404. Its sandboxes are deleted with it. It cannot be reactivated from the product (restoring is a support request). Dashboard session, or a **workspace admin API key** (offboarding an organizer; it cannot delete its own workspace: 409 `own_workspace`); other API keys: 403 `ERR_PARTNER_SCOPE`. The caller must be an **admin** of the workspace (403 `ERR_FORBIDDEN_ROLE`; 404 when not a member or already deleted). Send `confirmName` (the workspace name) or `confirmWorkspaceId` (its id); a mismatch answers 400 `confirmation_mismatch`. Refused for the last workspace of a billing account whose paid subscription is active (409 `subscription_active`: cancel it in Billing first), for your only remaining workspace (409 `last_workspace`) and for a sandbox (409 `sandbox_workspace`). When it is the workspace of the calling session, `switchTo` names the workspace to switch to. Written to the audit log (`workspace.delete`) of the deleted workspace and of the one the session switches to.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$post_api_workspaces_by_workspace_id_actions_delete_request = new \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdActionsDeleteRequest(); // \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdActionsDeleteRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiWorkspacesByWorkspaceIdActionsDelete($workspace_id, $post_api_workspaces_by_workspace_id_actions_delete_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postApiWorkspacesByWorkspaceIdActionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **post_api_workspaces_by_workspace_id_actions_delete_request** | [**\SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdActionsDeleteRequest**](../Model/PostApiWorkspacesByWorkspaceIdActionsDeleteRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdActionsDelete200Response**](../Model/PostApiWorkspacesByWorkspaceIdActionsDelete200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiWorkspacesByWorkspaceIdActionsSetDefault()`

```php
postApiWorkspacesByWorkspaceIdActionsSetDefault($workspace_id, $idempotency_key): \SeatsChart\Client\Model\GetApiWorkspaces200ResponseItemsInner
```

Set my default workspace

Makes this workspace the default of the calling user (for a **workspace admin API key**: of the admin it is bound to): dashboard sign-in opens it, and `GET /workspaces` marks it `isDefault`. Any role may set a workspace it is a member of (404 otherwise); a deactivated workspace cannot be the default (409 `workspace_deactivated`). Idempotent; written to the audit log of that workspace (`workspace.set_default`). Other API keys: 403 `ERR_PARTNER_SCOPE`.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiWorkspacesByWorkspaceIdActionsSetDefault($workspace_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postApiWorkspacesByWorkspaceIdActionsSetDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\GetApiWorkspaces200ResponseItemsInner**](../Model/GetApiWorkspaces200ResponseItemsInner.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiWorkspacesByWorkspaceIdInvitations()`

```php
postApiWorkspacesByWorkspaceIdInvitations($workspace_id, $post_api_workspaces_by_workspace_id_invitations_request, $idempotency_key): \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdInvitations201Response
```

Invite a person to a workspace you administer

Gives an organizer's team access to the SeatsChart dashboard of this workspace only (optional per organizer). Same invitation flow and e-mail as the dashboard: a pending invitation (7 days) and a one-time `inviteToken` for the accept link (`/accept-invite?token=…`), returned once so you may send your own e-mail. Accepting creates or joins the account and opens this workspace; the person sees only the workspaces they are a member of. 409 when already a member or invited. Audited (`team.invitation_created`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.
$post_api_workspaces_by_workspace_id_invitations_request = new \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdInvitationsRequest(); // \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdInvitationsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiWorkspacesByWorkspaceIdInvitations($workspace_id, $post_api_workspaces_by_workspace_id_invitations_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postApiWorkspacesByWorkspaceIdInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |
| **post_api_workspaces_by_workspace_id_invitations_request** | [**\SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdInvitationsRequest**](../Model/PostApiWorkspacesByWorkspaceIdInvitationsRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdInvitations201Response**](../Model/PostApiWorkspacesByWorkspaceIdInvitations201Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiWorkspacesByWorkspaceIdKeys()`

```php
postApiWorkspacesByWorkspaceIdKeys($workspace_id, $post_api_workspaces_by_workspace_id_keys_request, $idempotency_key): \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdKeys201Response
```

Mint an API key in a workspace you administer

An ordinary `sk_live_` key of the workspace (full access by default, or the `scopes` given); the `secret` is returned once and stored as a SHA-256 hash only. Never a workspace admin key (those are minted in the dashboard). Audited in the workspace (`api_key.created`, `via: admin_key` for a workspace admin key). A sandbox answers 409 `sandbox_workspace`.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.
$post_api_workspaces_by_workspace_id_keys_request = new \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdKeysRequest(); // \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdKeysRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiWorkspacesByWorkspaceIdKeys($workspace_id, $post_api_workspaces_by_workspace_id_keys_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postApiWorkspacesByWorkspaceIdKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |
| **post_api_workspaces_by_workspace_id_keys_request** | [**\SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdKeysRequest**](../Model/PostApiWorkspacesByWorkspaceIdKeysRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdKeys201Response**](../Model/PostApiWorkspacesByWorkspaceIdKeys201Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiWorkspacesByWorkspaceIdKeysByKeyIdActionsRotate()`

```php
postApiWorkspacesByWorkspaceIdKeysByKeyIdActionsRotate($workspace_id, $key_id, $idempotency_key): \SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdKeys201Response
```

Rotate the secret of a key of a workspace you administer

Issues a new secret for the same key (same id, name and scopes) and returns it once; the old secret stops working at once on every API instance. Workspace admin keys answer 403 `ERR_ADMIN_KEY_DASHBOARD_ONLY`. Audited (`api_key.rotated`).

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace id or its external id.
$key_id = 'key_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $result = $apiInstance->postApiWorkspacesByWorkspaceIdKeysByKeyIdActionsRotate($workspace_id, $key_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postApiWorkspacesByWorkspaceIdKeysByKeyIdActionsRotate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace id or its external id. | |
| **key_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

[**\SeatsChart\Client\Model\PostApiWorkspacesByWorkspaceIdKeys201Response**](../Model/PostApiWorkspacesByWorkspaceIdKeys201Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `multipart/form-data`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiWorkspaceBuyerExtraData()`

```php
putApiWorkspaceBuyerExtraData($put_api_workspace_buyer_extra_data_request, $idempotency_key)
```

Publish selected extraData keys to buyers (or stop)

Workspace admins only (dashboard session). Replaces the setting; takes effect within seconds on every API instance (tenant config cache invalidation) and on CDN copies of the public read (max-age 5 s). Audited (`workspace.buyer_extra_data.update`). Object `extraData` is private by default (server, Event Manager, reports). With `enabled` and a non-empty `keys` allow-list (at most 16 keys of letters, digits, `_`, `-`, `.` and `:`), only those keys, with scalar values (strings up to 256 characters, numbers, booleans, null), are published for this workspace's events by `GET /api/public/{publicKey}/events/{eventId}/extra-data` and read by the renderer (rules `match.extraData`, templates `{extraData.key}`, host objects). Never part of the compact state. `resalePriceCents` is never published. The key list is kept while disabled.

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


$apiInstance = new SeatsChart\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$put_api_workspace_buyer_extra_data_request = new \SeatsChart\Client\Model\PutApiWorkspaceBuyerExtraDataRequest(); // \SeatsChart\Client\Model\PutApiWorkspaceBuyerExtraDataRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->putApiWorkspaceBuyerExtraData($put_api_workspace_buyer_extra_data_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->putApiWorkspaceBuyerExtraData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **put_api_workspace_buyer_extra_data_request** | [**\SeatsChart\Client\Model\PutApiWorkspaceBuyerExtraDataRequest**](../Model/PutApiWorkspaceBuyerExtraDataRequest.md)|  | |
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

# SeatsChart\Client\TeamApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApiTeamInvitationsByInvitationId()**](TeamApi.md#deleteApiTeamInvitationsByInvitationId) | **DELETE** /api/team/invitations/{invitationId} | Revoke a pending invitation |
| [**deleteApiTeamMembersByUserId()**](TeamApi.md#deleteApiTeamMembersByUserId) | **DELETE** /api/team/members/{userId} | Remove member from workspace |
| [**getApiTeamInvitations()**](TeamApi.md#getApiTeamInvitations) | **GET** /api/team/invitations | List pending invitations |
| [**getApiTeamMembers()**](TeamApi.md#getApiTeamMembers) | **GET** /api/team/members | List workspace members |
| [**patchApiTeamMembersByUserId()**](TeamApi.md#patchApiTeamMembersByUserId) | **PATCH** /api/team/members/{userId} | Change member role |
| [**postApiTeamInvitations()**](TeamApi.md#postApiTeamInvitations) | **POST** /api/team/invitations | Invite a teammate by email |


## `deleteApiTeamInvitationsByInvitationId()`

```php
deleteApiTeamInvitationsByInvitationId($invitation_id, $idempotency_key)
```

Revoke a pending invitation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_id = 'invitation_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiTeamInvitationsByInvitationId($invitation_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteApiTeamInvitationsByInvitationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invitation_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiTeamMembersByUserId()`

```php
deleteApiTeamMembersByUserId($user_id, $idempotency_key)
```

Remove member from workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiTeamMembersByUserId($user_id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteApiTeamMembersByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiTeamInvitations()`

```php
getApiTeamInvitations()
```

List pending invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiTeamInvitations();
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getApiTeamInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiTeamMembers()`

```php
getApiTeamMembers()
```

List workspace members

Each member with role, join date and `twoFactorEnabled` (TOTP two-factor authentication on the account).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiTeamMembers();
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->getApiTeamMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchApiTeamMembersByUserId()`

```php
patchApiTeamMembersByUserId($user_id, $patch_api_team_members_by_user_id_request, $idempotency_key)
```

Change member role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$patch_api_team_members_by_user_id_request = new \SeatsChart\Client\Model\PatchApiTeamMembersByUserIdRequest(); // \SeatsChart\Client\Model\PatchApiTeamMembersByUserIdRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->patchApiTeamMembersByUserId($user_id, $patch_api_team_members_by_user_id_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->patchApiTeamMembersByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **patch_api_team_members_by_user_id_request** | [**\SeatsChart\Client\Model\PatchApiTeamMembersByUserIdRequest**](../Model/PatchApiTeamMembersByUserIdRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiTeamInvitations()`

```php
postApiTeamInvitations($post_api_team_invitations_request, $idempotency_key)
```

Invite a teammate by email

Creates a pending invitation and returns a one-time `inviteToken` for the accept link. When `RESEND_API_KEY` and `EMAIL_FROM` are set, an email is also sent; the token remains in the response for manual copy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_team_invitations_request = new \SeatsChart\Client\Model\PostApiTeamInvitationsRequest(); // \SeatsChart\Client\Model\PostApiTeamInvitationsRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiTeamInvitations($post_api_team_invitations_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->postApiTeamInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_team_invitations_request** | [**\SeatsChart\Client\Model\PostApiTeamInvitationsRequest**](../Model/PostApiTeamInvitationsRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

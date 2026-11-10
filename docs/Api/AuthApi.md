# SeatsChart\Client\AuthApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiAuth2fa()**](AuthApi.md#getApiAuth2fa) | **GET** /api/auth/2fa | Two-factor status of the signed-in user |
| [**getApiAuthInviteByToken()**](AuthApi.md#getApiAuthInviteByToken) | **GET** /api/auth/invite/{token} | Preview invitation metadata |
| [**getApiAuthMe()**](AuthApi.md#getApiAuthMe) | **GET** /api/auth/me | Current dashboard user |
| [**postApiAuth2faDisable()**](AuthApi.md#postApiAuth2faDisable) | **POST** /api/auth/2fa/disable | Disable two-factor authentication |
| [**postApiAuth2faEnable()**](AuthApi.md#postApiAuth2faEnable) | **POST** /api/auth/2fa/enable | Confirm enrolment and enable two-factor authentication |
| [**postApiAuth2faEnrollConfirm()**](AuthApi.md#postApiAuth2faEnrollConfirm) | **POST** /api/auth/2fa/enroll/confirm | Confirm the required enrolment and finish signing in |
| [**postApiAuth2faEnrollStart()**](AuthApi.md#postApiAuth2faEnrollStart) | **POST** /api/auth/2fa/enroll/start | Start the enrolment required by the workspace (during sign-in) |
| [**postApiAuth2faRecoveryCodes()**](AuthApi.md#postApiAuth2faRecoveryCodes) | **POST** /api/auth/2fa/recovery-codes | Replace the recovery codes |
| [**postApiAuth2faSetup()**](AuthApi.md#postApiAuth2faSetup) | **POST** /api/auth/2fa/setup | Start two-factor enrolment |
| [**postApiAuth2faVerify()**](AuthApi.md#postApiAuth2faVerify) | **POST** /api/auth/2fa/verify | Complete sign-in with a two-factor code |
| [**postApiAuthAcceptInvite()**](AuthApi.md#postApiAuthAcceptInvite) | **POST** /api/auth/accept-invite | Accept a workspace invitation |
| [**postApiAuthLogin()**](AuthApi.md#postApiAuthLogin) | **POST** /api/auth/login | Sign in with email and password |
| [**postApiAuthLogout()**](AuthApi.md#postApiAuthLogout) | **POST** /api/auth/logout | Revoke refresh token |
| [**postApiAuthRefresh()**](AuthApi.md#postApiAuthRefresh) | **POST** /api/auth/refresh | Rotate refresh token and issue new access JWT |
| [**postApiAuthSignup()**](AuthApi.md#postApiAuthSignup) | **POST** /api/auth/signup | Create account and workspace |
| [**postApiAuthSwitchWorkspace()**](AuthApi.md#postApiAuthSwitchWorkspace) | **POST** /api/auth/switch-workspace | Switch active workspace |


## `getApiAuth2fa()`

```php
getApiAuth2fa()
```

Two-factor status of the signed-in user

`{ enabled, enabledAt, recoveryCodesRemaining, workspaceRequiresTwoFactor }`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiAuth2fa();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getApiAuth2fa: ', $e->getMessage(), PHP_EOL;
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

## `getApiAuthInviteByToken()`

```php
getApiAuthInviteByToken($token)
```

Preview invitation metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $apiInstance->getApiAuthInviteByToken($token);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getApiAuthInviteByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiAuthMe()`

```php
getApiAuthMe()
```

Current dashboard user

Returns the authenticated user when the Bearer token was issued by `/auth/login` or `/auth/signup`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getApiAuthMe();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getApiAuthMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiAuth2faDisable()`

```php
postApiAuth2faDisable($post_api_auth2fa_disable_request, $idempotency_key)
```

Disable two-factor authentication

Requires a current TOTP `code` or a `recoveryCode`. Refused (409) while the current workspace requires 2FA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_auth2fa_disable_request = new \SeatsChart\Client\Model\PostApiAuth2faDisableRequest(); // \SeatsChart\Client\Model\PostApiAuth2faDisableRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuth2faDisable($post_api_auth2fa_disable_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuth2faDisable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth2fa_disable_request** | [**\SeatsChart\Client\Model\PostApiAuth2faDisableRequest**](../Model/PostApiAuth2faDisableRequest.md)|  | |
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

## `postApiAuth2faEnable()`

```php
postApiAuth2faEnable($post_api_auth2fa_enable_request, $idempotency_key)
```

Confirm enrolment and enable two-factor authentication

Verifies a code of the pending secret, enables 2FA and returns 10 one-time `recoveryCodes` (stored hashed; shown only now).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_auth2fa_enable_request = new \SeatsChart\Client\Model\PostApiAuth2faEnableRequest(); // \SeatsChart\Client\Model\PostApiAuth2faEnableRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuth2faEnable($post_api_auth2fa_enable_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuth2faEnable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth2fa_enable_request** | [**\SeatsChart\Client\Model\PostApiAuth2faEnableRequest**](../Model/PostApiAuth2faEnableRequest.md)|  | |
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

## `postApiAuth2faEnrollConfirm()`

```php
postApiAuth2faEnrollConfirm($post_api_auth2fa_enroll_confirm_request, $idempotency_key)
```

Confirm the required enrolment and finish signing in

Verifies the first code of the new secret, enables 2FA, and returns the session tokens plus 10 one-time `recoveryCodes` (shown only now).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_auth2fa_enroll_confirm_request = new \SeatsChart\Client\Model\PostApiAuth2faEnrollConfirmRequest(); // \SeatsChart\Client\Model\PostApiAuth2faEnrollConfirmRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuth2faEnrollConfirm($post_api_auth2fa_enroll_confirm_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuth2faEnrollConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth2fa_enroll_confirm_request** | [**\SeatsChart\Client\Model\PostApiAuth2faEnrollConfirmRequest**](../Model/PostApiAuth2faEnrollConfirmRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiAuth2faEnrollStart()`

```php
postApiAuth2faEnrollStart($post_api_auth2fa_enroll_start_request, $idempotency_key)
```

Start the enrolment required by the workspace (during sign-in)

When `POST /auth/login` answered `twoFactorEnrollmentRequired`, returns a new TOTP `secret` and its `otpauthUri` (render it as a QR code). Calling again replaces the secret.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_auth2fa_enroll_start_request = new \SeatsChart\Client\Model\PostApiAuth2faEnrollStartRequest(); // \SeatsChart\Client\Model\PostApiAuth2faEnrollStartRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuth2faEnrollStart($post_api_auth2fa_enroll_start_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuth2faEnrollStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth2fa_enroll_start_request** | [**\SeatsChart\Client\Model\PostApiAuth2faEnrollStartRequest**](../Model/PostApiAuth2faEnrollStartRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiAuth2faRecoveryCodes()`

```php
postApiAuth2faRecoveryCodes($post_api_auth2fa_disable_request, $idempotency_key)
```

Replace the recovery codes

Requires a current TOTP `code` (or a recovery code). Invalidates every previous recovery code and returns 10 new ones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_auth2fa_disable_request = new \SeatsChart\Client\Model\PostApiAuth2faDisableRequest(); // \SeatsChart\Client\Model\PostApiAuth2faDisableRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuth2faRecoveryCodes($post_api_auth2fa_disable_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuth2faRecoveryCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth2fa_disable_request** | [**\SeatsChart\Client\Model\PostApiAuth2faDisableRequest**](../Model/PostApiAuth2faDisableRequest.md)|  | |
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

## `postApiAuth2faSetup()`

```php
postApiAuth2faSetup($idempotency_key)
```

Start two-factor enrolment

Returns a new TOTP `secret` and `otpauthUri` (render as a QR code client-side). Confirm within 10 minutes with `POST /auth/2fa/enable`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuth2faSetup($idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuth2faSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `postApiAuth2faVerify()`

```php
postApiAuth2faVerify($post_api_auth2fa_verify_request, $idempotency_key)
```

Complete sign-in with a two-factor code

Second step after `POST /auth/login` answered `twoFactorRequired`. Send the 6-digit TOTP `code` or a one-time `recoveryCode`. Returns the same tokens as a password-only sign-in. A pending sign-in lives 5 minutes and allows 5 attempts; 10 failures lock second-factor checks for the account for 15 minutes (429 `too_many_attempts`). A code is accepted once (replay refused).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_auth2fa_verify_request = new \SeatsChart\Client\Model\PostApiAuth2faVerifyRequest(); // \SeatsChart\Client\Model\PostApiAuth2faVerifyRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuth2faVerify($post_api_auth2fa_verify_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuth2faVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth2fa_verify_request** | [**\SeatsChart\Client\Model\PostApiAuth2faVerifyRequest**](../Model/PostApiAuth2faVerifyRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiAuthAcceptInvite()`

```php
postApiAuthAcceptInvite($post_api_auth_accept_invite_request, $idempotency_key)
```

Accept a workspace invitation

Creates a user in the invited tenant with the invited role and returns dashboard session tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_auth_accept_invite_request = new \SeatsChart\Client\Model\PostApiAuthAcceptInviteRequest(); // \SeatsChart\Client\Model\PostApiAuthAcceptInviteRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuthAcceptInvite($post_api_auth_accept_invite_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuthAcceptInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth_accept_invite_request** | [**\SeatsChart\Client\Model\PostApiAuthAcceptInviteRequest**](../Model/PostApiAuthAcceptInviteRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiAuthLogin()`

```php
postApiAuthLogin($post_api_auth_login_request, $idempotency_key)
```

Sign in with email and password

Returns tokens, or a second step: `{ twoFactorRequired: true, pendingToken }` when the account has two-factor authentication (finish with `POST /auth/2fa/verify`), or `{ twoFactorEnrollmentRequired: true, pendingToken }` when the workspace requires 2FA and the account has none yet (`POST /auth/2fa/enroll/start` then `/enroll/confirm`). No session exists until the second step succeeds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_auth_login_request = new \SeatsChart\Client\Model\PostApiAuthLoginRequest(); // \SeatsChart\Client\Model\PostApiAuthLoginRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuthLogin($post_api_auth_login_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuthLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth_login_request** | [**\SeatsChart\Client\Model\PostApiAuthLoginRequest**](../Model/PostApiAuthLoginRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiAuthLogout()`

```php
postApiAuthLogout($post_api_auth_logout_request, $idempotency_key)
```

Revoke refresh token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_auth_logout_request = new \SeatsChart\Client\Model\PostApiAuthLogoutRequest(); // \SeatsChart\Client\Model\PostApiAuthLogoutRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuthLogout($post_api_auth_logout_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuthLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth_logout_request** | [**\SeatsChart\Client\Model\PostApiAuthLogoutRequest**](../Model/PostApiAuthLogoutRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiAuthRefresh()`

```php
postApiAuthRefresh($post_api_auth_refresh_request, $idempotency_key)
```

Rotate refresh token and issue new access JWT

Consumes a one-time refresh token (Redis), revokes it, and returns a new refresh + access pair. Use `audience: viewer` for B2C embed tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_auth_refresh_request = new \SeatsChart\Client\Model\PostApiAuthRefreshRequest(); // \SeatsChart\Client\Model\PostApiAuthRefreshRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuthRefresh($post_api_auth_refresh_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuthRefresh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth_refresh_request** | [**\SeatsChart\Client\Model\PostApiAuthRefreshRequest**](../Model/PostApiAuthRefreshRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiAuthSignup()`

```php
postApiAuthSignup($post_api_auth_signup_request, $idempotency_key)
```

Create account and workspace

Registers a new user, provisions a tenant workspace, and returns an HS256 dashboard JWT (`tenant_id`, `sub`, `email`, `role`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_auth_signup_request = new \SeatsChart\Client\Model\PostApiAuthSignupRequest(); // \SeatsChart\Client\Model\PostApiAuthSignupRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuthSignup($post_api_auth_signup_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuthSignup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth_signup_request** | [**\SeatsChart\Client\Model\PostApiAuthSignupRequest**](../Model/PostApiAuthSignupRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiAuthSwitchWorkspace()`

```php
postApiAuthSwitchWorkspace($post_api_auth_switch_workspace_request, $idempotency_key)
```

Switch active workspace

Re-issues dashboard JWT and refresh token for a workspace the user already belongs to. A workspace that requires two-factor authentication refuses members without it (403 `two_factor_enrollment_required`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_api_auth_switch_workspace_request = new \SeatsChart\Client\Model\PostApiAuthSwitchWorkspaceRequest(); // \SeatsChart\Client\Model\PostApiAuthSwitchWorkspaceRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiAuthSwitchWorkspace($post_api_auth_switch_workspace_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postApiAuthSwitchWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_auth_switch_workspace_request** | [**\SeatsChart\Client\Model\PostApiAuthSwitchWorkspaceRequest**](../Model/PostApiAuthSwitchWorkspaceRequest.md)|  | |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`, `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

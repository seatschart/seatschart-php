# SeatsChart\Client\BillingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApiBilling()**](BillingApi.md#getApiBilling) | **GET** /api/billing | Get the billing account, its plan and usage |
| [**postApiBillingActionsChangePlan()**](BillingApi.md#postApiBillingActionsChangePlan) | **POST** /api/billing/actions/change-plan | Leave Ultra On-Demand for the Free plan (the whole account) |
| [**postApiBillingCheckoutSession()**](BillingApi.md#postApiBillingCheckoutSession) | **POST** /api/billing/checkout-session | Create Stripe Checkout session for a paid plan (the whole account) |
| [**postApiBillingConfirmCheckout()**](BillingApi.md#postApiBillingConfirmCheckout) | **POST** /api/billing/confirm-checkout | Confirm checkout session and sync the account plan |
| [**postApiBillingPortalSession()**](BillingApi.md#postApiBillingPortalSession) | **POST** /api/billing/portal-session | Create Stripe Customer Portal session (the account subscription) |
| [**postApiBillingWebhook()**](BillingApi.md#postApiBillingWebhook) | **POST** /api/billing/webhook | Stripe webhook |


## `getApiBilling()`

```php
getApiBilling()
```

Get the billing account, its plan and usage

One plan per account: the plan, its limits and the Stripe subscription belong to the billing account that owns the workspace, and apply to every workspace of the account. `account` names the owner (who alone may change the plan, from a dashboard session: `canManageBilling`), the workspaces it covers (listed to the owner) and the account's chart and event counts, which the caps count together. `usage` holds this workspace's counts (charts, events, embed domains and used objects this month); embed domains stay limited per workspace. `seats` is the used seats of the month over every production workspace of the account against the included seats, the overage so far and projected, and its cost. On Ultra On-Demand (`isSalesManaged`) the owner may switch to a paid plan through checkout (the account stays on Ultra until the checkout is confirmed) or to Free with `POST /billing/actions/change-plan`. `managedByPlatform` is true for a workspace a ticketing platform provisioned with its workspace admin key: it belongs to the platform admin's account, and plan-limit refusals carry `billingManagedByPlatform: true` instead of an upgrade prompt.

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


$apiInstance = new SeatsChart\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getApiBilling();
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getApiBilling: ', $e->getMessage(), PHP_EOL;
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

## `postApiBillingActionsChangePlan()`

```php
postApiBillingActionsChangePlan($post_api_billing_actions_change_plan_request, $idempotency_key)
```

Leave Ultra On-Demand for the Free plan (the whole account)

Moves an Ultra On-Demand billing account to Free right away, with no payment: every workspace of the account moves at once, the Ultra limits end now and the Free limits apply (the agreed custom limits are cleared). Charts, events and embed domains above the Free limits are kept and keep working; new ones are refused (402 `plan_limit_exceeded`) until the account is back within the limits or upgrades. Returns `{ changed, previousPlanId, planId, limits, usage, withinLimits, workspaces }` (`usage`: the account's charts and events, this workspace's embed domains; `workspaces`: the workspaces that moved); an account already on Free answers 200 with `changed: false`. Audited once on the account and once on this workspace as `billing.plan_changed`. Account owner only, from a dashboard session: the other admins get 403 `billing_managed_by_owner` (with `managedBy`), the members of a workspace a ticketing platform manages 403 `billing_managed_by_platform`, API keys 403 `forbidden` (`ERR_PARTNER_SCOPE`). Send an `Idempotency-Key` to make retries safe (the first result is replayed for 24 hours; another body with the same key: 422 `idempotency_key_reused`). 400 `checkout_required` for a paid plan (use `POST /billing/checkout-session`), 400 `plan_requires_sales` for `ultra`, 409 `ERR_SUBSCRIPTION_EXISTS` with a paid subscription (change it in the billing portal), 409 `test_workspace_not_billable` in a test workspace.

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


$apiInstance = new SeatsChart\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_billing_actions_change_plan_request = new \SeatsChart\Client\Model\PostApiBillingActionsChangePlanRequest(); // \SeatsChart\Client\Model\PostApiBillingActionsChangePlanRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiBillingActionsChangePlan($post_api_billing_actions_change_plan_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->postApiBillingActionsChangePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_billing_actions_change_plan_request** | [**\SeatsChart\Client\Model\PostApiBillingActionsChangePlanRequest**](../Model/PostApiBillingActionsChangePlanRequest.md)|  | |
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

## `postApiBillingCheckoutSession()`

```php
postApiBillingCheckoutSession($post_api_billing_checkout_session_request, $idempotency_key)
```

Create Stripe Checkout session for a paid plan (the whole account)

Returns `{ url }` of a Stripe Checkout for `planId` (`starter` | `pro` | `business` | `scale`), with the metered seat overage line of the plan when configured. The subscription is the billing account's: once confirmed, every workspace of the account moves to the plan. Only the account owner, from a dashboard session: other admins get 403 `billing_managed_by_owner` (with `managedBy`, the owner's e-mail), the members of a workspace a ticketing platform manages 403 `billing_managed_by_platform`, API keys 403. 409 `ERR_SUBSCRIPTION_EXISTS` when the account already has a live subscription (change plans in the billing portal: `POST /billing/portal-session`), 409 `test_workspace_not_billable` in a test workspace, 400 `plan_requires_sales` for `ultra` (Ultra On-Demand is arranged with the SeatsChart team), 503 `stripe_not_configured` when billing is not set up. On an Ultra On-Demand account the checkout is how the owner moves to a paid plan: the account stays on Ultra until the checkout is confirmed (`POST /billing/confirm-checkout` or the Stripe webhook); the confirmed subscription then replaces Ultra (plan, limits of the plan, agreed custom limits cleared).

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


$apiInstance = new SeatsChart\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_billing_checkout_session_request = new \SeatsChart\Client\Model\PostApiBillingCheckoutSessionRequest(); // \SeatsChart\Client\Model\PostApiBillingCheckoutSessionRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiBillingCheckoutSession($post_api_billing_checkout_session_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->postApiBillingCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_billing_checkout_session_request** | [**\SeatsChart\Client\Model\PostApiBillingCheckoutSessionRequest**](../Model/PostApiBillingCheckoutSessionRequest.md)|  | |
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

## `postApiBillingConfirmCheckout()`

```php
postApiBillingConfirmCheckout($post_api_billing_confirm_checkout_request, $idempotency_key)
```

Confirm checkout session and sync the account plan

Reads the completed Stripe Checkout session of this workspace's billing account and applies its subscription to the account: every workspace of the account moves to the plan at once (audited once on the account and once on the workspace as `billing.plan_changed`). A checkout started on an Ultra On-Demand account replaces Ultra once paid; any other Stripe subscription never changes an Ultra account. Account owner only (dashboard session).

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


$apiInstance = new SeatsChart\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_billing_confirm_checkout_request = new \SeatsChart\Client\Model\PostApiBillingConfirmCheckoutRequest(); // \SeatsChart\Client\Model\PostApiBillingConfirmCheckoutRequest
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiBillingConfirmCheckout($post_api_billing_confirm_checkout_request, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->postApiBillingConfirmCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_billing_confirm_checkout_request** | [**\SeatsChart\Client\Model\PostApiBillingConfirmCheckoutRequest**](../Model/PostApiBillingConfirmCheckoutRequest.md)|  | |
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

## `postApiBillingPortalSession()`

```php
postApiBillingPortalSession($idempotency_key)
```

Create Stripe Customer Portal session (the account subscription)

Returns `{ url }` of the Stripe billing portal of the billing account (change or cancel the subscription; the change applies to every workspace of the account). Account owner only, from a dashboard session (403 `billing_managed_by_owner` with `managedBy` for the other admins, 403 `billing_managed_by_platform` for the members of a workspace a ticketing platform manages). 409 `plan_managed_by_sales` on Ultra On-Demand (no Stripe subscription: switch plan with checkout or `POST /billing/actions/change-plan`), 409 `test_workspace_not_billable` in a test workspace.

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


$apiInstance = new SeatsChart\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiBillingPortalSession($idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->postApiBillingPortalSession: ', $e->getMessage(), PHP_EOL;
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

## `postApiBillingWebhook()`

```php
postApiBillingWebhook($idempotency_key)
```

Stripe webhook

Receives Stripe subscription lifecycle events. Requires STRIPE_WEBHOOK_SECRET and raw body signature verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SeatsChart\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->postApiBillingWebhook($idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->postApiBillingWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome. | [optional] |

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

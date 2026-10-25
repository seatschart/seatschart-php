<!-- seatschart:intro -->
# SeatsChart PHP SDK

Official SeatsChart PHP SDK for the SeatsChart seating API: seat maps, holds, reservations and ticketing inventory, with automatic retries and idempotency keys.

```sh
composer require seatschart/seatschart-php
```

Server-to-server only: authenticate with an `x-api-key` and never ship it to a browser. Write calls take an optional `Idempotency-Key`; `429` and `503` responses are retried with backoff (see the retry runtime of this package).

License: MIT. Issues and questions: seatschart@gmail.com.
<!-- seatschart:intro -->

# seatschart-client

Seat inventory and locking API for B2B2C integrations. Authenticate using `x-api-key` (partners) or `Authorization: Bearer` with an HS256 JWT.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

```sh
composer require seatschart/seatschart-php
```

Composer's autoloader then loads the `SeatsChart\Client` namespace:

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: BearerAuth
$config = SeatsChart\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SeatsChart\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | API key UUID (lowercase canonical)
$idempotency_key = 'idempotency_key_example'; // string | Required on transactional routes. Reuse the same key for every retry of one logical operation; the API replays the stored outcome.

try {
    $apiInstance->deleteApiKeysById($id, $idempotency_key);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->deleteApiKeysById: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApiKeysApi* | [**deleteApiKeysById**](docs/Api/ApiKeysApi.md#deleteapikeysbyid) | **DELETE** /api/keys/{id} | Soft-revoke an API key
*ApiKeysApi* | [**getApiKeys**](docs/Api/ApiKeysApi.md#getapikeys) | **GET** /api/keys | List active tenant API keys (prefix fingerprint only)
*ApiKeysApi* | [**getApiKeysScopes**](docs/Api/ApiKeysApi.md#getapikeysscopes) | **GET** /api/keys/scopes | List API key scopes and presets
*ApiKeysApi* | [**patchApiKeysById**](docs/Api/ApiKeysApi.md#patchapikeysbyid) | **PATCH** /api/keys/{id} | Rename an API key, change its scopes or its workspace admin capability
*ApiKeysApi* | [**postApiKeys**](docs/Api/ApiKeysApi.md#postapikeys) | **POST** /api/keys | Mint a tenant API key (secret returned once)
*AssetsApi* | [**getAssetsMapByTenantIdByEventIdByFilename**](docs/Api/AssetsApi.md#getassetsmapbytenantidbyeventidbyfilename) | **GET** /assets/map/{tenantId}/{eventId}/{filename} | Serve persisted map reference/background images
*AuditApi* | [**getApiAuditLogs**](docs/Api/AuditApi.md#getapiauditlogs) | **GET** /api/audit-logs | List recent workspace audit log entries
*AuthApi* | [**getApiAuth2fa**](docs/Api/AuthApi.md#getapiauth2fa) | **GET** /api/auth/2fa | Two-factor status of the signed-in user
*AuthApi* | [**getApiAuthInviteByToken**](docs/Api/AuthApi.md#getapiauthinvitebytoken) | **GET** /api/auth/invite/{token} | Preview invitation metadata
*AuthApi* | [**getApiAuthMe**](docs/Api/AuthApi.md#getapiauthme) | **GET** /api/auth/me | Current dashboard user
*AuthApi* | [**postApiAuth2faDisable**](docs/Api/AuthApi.md#postapiauth2fadisable) | **POST** /api/auth/2fa/disable | Disable two-factor authentication
*AuthApi* | [**postApiAuth2faEnable**](docs/Api/AuthApi.md#postapiauth2faenable) | **POST** /api/auth/2fa/enable | Confirm enrolment and enable two-factor authentication
*AuthApi* | [**postApiAuth2faEnrollConfirm**](docs/Api/AuthApi.md#postapiauth2faenrollconfirm) | **POST** /api/auth/2fa/enroll/confirm | Confirm the required enrolment and finish signing in
*AuthApi* | [**postApiAuth2faEnrollStart**](docs/Api/AuthApi.md#postapiauth2faenrollstart) | **POST** /api/auth/2fa/enroll/start | Start the enrolment required by the workspace (during sign-in)
*AuthApi* | [**postApiAuth2faRecoveryCodes**](docs/Api/AuthApi.md#postapiauth2farecoverycodes) | **POST** /api/auth/2fa/recovery-codes | Replace the recovery codes
*AuthApi* | [**postApiAuth2faSetup**](docs/Api/AuthApi.md#postapiauth2fasetup) | **POST** /api/auth/2fa/setup | Start two-factor enrolment
*AuthApi* | [**postApiAuth2faVerify**](docs/Api/AuthApi.md#postapiauth2faverify) | **POST** /api/auth/2fa/verify | Complete sign-in with a two-factor code
*AuthApi* | [**postApiAuthAcceptInvite**](docs/Api/AuthApi.md#postapiauthacceptinvite) | **POST** /api/auth/accept-invite | Accept a workspace invitation
*AuthApi* | [**postApiAuthLogin**](docs/Api/AuthApi.md#postapiauthlogin) | **POST** /api/auth/login | Sign in with email and password
*AuthApi* | [**postApiAuthLogout**](docs/Api/AuthApi.md#postapiauthlogout) | **POST** /api/auth/logout | Revoke refresh token
*AuthApi* | [**postApiAuthRefresh**](docs/Api/AuthApi.md#postapiauthrefresh) | **POST** /api/auth/refresh | Rotate refresh token and issue new access JWT
*AuthApi* | [**postApiAuthSignup**](docs/Api/AuthApi.md#postapiauthsignup) | **POST** /api/auth/signup | Create account and workspace
*AuthApi* | [**postApiAuthSwitchWorkspace**](docs/Api/AuthApi.md#postapiauthswitchworkspace) | **POST** /api/auth/switch-workspace | Switch active workspace
*BillingApi* | [**getApiBilling**](docs/Api/BillingApi.md#getapibilling) | **GET** /api/billing | Get billing status and plan usage
*BillingApi* | [**postApiBillingCheckoutSession**](docs/Api/BillingApi.md#postapibillingcheckoutsession) | **POST** /api/billing/checkout-session | Create Stripe Checkout session for a paid plan
*BillingApi* | [**postApiBillingConfirmCheckout**](docs/Api/BillingApi.md#postapibillingconfirmcheckout) | **POST** /api/billing/confirm-checkout | Confirm checkout session and sync plan
*BillingApi* | [**postApiBillingPortalSession**](docs/Api/BillingApi.md#postapibillingportalsession) | **POST** /api/billing/portal-session | Create Stripe Customer Portal session
*BillingApi* | [**postApiBillingWebhook**](docs/Api/BillingApi.md#postapibillingwebhook) | **POST** /api/billing/webhook | Stripe webhook
*ChartsApi* | [**deleteApiChartsByChartId**](docs/Api/ChartsApi.md#deleteapichartsbychartid) | **DELETE** /api/charts/{chartId} | Delete chart permanently
*ChartsApi* | [**deleteApiChartsByChartIdPreviewLink**](docs/Api/ChartsApi.md#deleteapichartsbychartidpreviewlink) | **DELETE** /api/charts/{chartId}/preview-link | Revoke every public preview link of a chart
*ChartsApi* | [**getApiCharts**](docs/Api/ChartsApi.md#getapicharts) | **GET** /api/charts | List charts
*ChartsApi* | [**getApiChartsByChartId**](docs/Api/ChartsApi.md#getapichartsbychartid) | **GET** /api/charts/{chartId} | Retrieve one chart
*ChartsApi* | [**getApiChartsByChartIdCategories**](docs/Api/ChartsApi.md#getapichartsbychartidcategories) | **GET** /api/charts/{chartId}/categories | List the categories of a chart
*ChartsApi* | [**getApiChartsByChartIdMap**](docs/Api/ChartsApi.md#getapichartsbychartidmap) | **GET** /api/charts/{chartId}/map | Read one version of a chart map
*ChartsApi* | [**getApiChartsByChartIdMapDraft**](docs/Api/ChartsApi.md#getapichartsbychartidmapdraft) | **GET** /api/charts/{chartId}/map/draft | Load chart map draft for designer
*ChartsApi* | [**getApiChartsByChartIdReportsByCategoryCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbycategorycsv) | **GET** /api/charts/{chartId}/reports/by-category.csv | Chart report by category (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsByCategoryJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbycategoryjson) | **GET** /api/charts/{chartId}/reports/by-category.json | Chart report by category
*ChartsApi* | [**getApiChartsByChartIdReportsByCategoryKeyCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbycategorykeycsv) | **GET** /api/charts/{chartId}/reports/by-category-key.csv | Chart report by category key (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsByCategoryKeyJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbycategorykeyjson) | **GET** /api/charts/{chartId}/reports/by-category-key.json | Chart report by category key
*ChartsApi* | [**getApiChartsByChartIdReportsByCategoryLabelCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbycategorylabelcsv) | **GET** /api/charts/{chartId}/reports/by-category-label.csv | Chart report by category label (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsByCategoryLabelJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbycategorylabeljson) | **GET** /api/charts/{chartId}/reports/by-category-label.json | Chart report by category label
*ChartsApi* | [**getApiChartsByChartIdReportsByLabelCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbylabelcsv) | **GET** /api/charts/{chartId}/reports/by-label.csv | Chart report by label (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsByLabelJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbylabeljson) | **GET** /api/charts/{chartId}/reports/by-label.json | Chart report by label
*ChartsApi* | [**getApiChartsByChartIdReportsByObjectTypeCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbyobjecttypecsv) | **GET** /api/charts/{chartId}/reports/by-object-type.csv | Chart report by object type (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsByObjectTypeJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbyobjecttypejson) | **GET** /api/charts/{chartId}/reports/by-object-type.json | Chart report by object type
*ChartsApi* | [**getApiChartsByChartIdReportsBySectionCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbysectioncsv) | **GET** /api/charts/{chartId}/reports/by-section.csv | Chart report by section (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsBySectionJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbysectionjson) | **GET** /api/charts/{chartId}/reports/by-section.json | Chart report by section
*ChartsApi* | [**getApiChartsByChartIdReportsByZoneCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbyzonecsv) | **GET** /api/charts/{chartId}/reports/by-zone.csv | Chart report by zone (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsByZoneJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportsbyzonejson) | **GET** /api/charts/{chartId}/reports/by-zone.json | Chart report by zone
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByCategoryCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybycategorycsv) | **GET** /api/charts/{chartId}/reports/summary/by-category.csv | Chart summary by category (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByCategoryJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybycategoryjson) | **GET** /api/charts/{chartId}/reports/summary/by-category.json | Chart summary by category
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByCategoryKeyCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybycategorykeycsv) | **GET** /api/charts/{chartId}/reports/summary/by-category-key.csv | Chart summary by category key (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByCategoryKeyJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybycategorykeyjson) | **GET** /api/charts/{chartId}/reports/summary/by-category-key.json | Chart summary by category key
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByCategoryLabelCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybycategorylabelcsv) | **GET** /api/charts/{chartId}/reports/summary/by-category-label.csv | Chart summary by category label (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByCategoryLabelJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybycategorylabeljson) | **GET** /api/charts/{chartId}/reports/summary/by-category-label.json | Chart summary by category label
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByObjectTypeCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybyobjecttypecsv) | **GET** /api/charts/{chartId}/reports/summary/by-object-type.csv | Chart summary by object type (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByObjectTypeJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybyobjecttypejson) | **GET** /api/charts/{chartId}/reports/summary/by-object-type.json | Chart summary by object type
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryBySectionCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybysectioncsv) | **GET** /api/charts/{chartId}/reports/summary/by-section.csv | Chart summary by section (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryBySectionJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybysectionjson) | **GET** /api/charts/{chartId}/reports/summary/by-section.json | Chart summary by section
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByZoneCsv**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybyzonecsv) | **GET** /api/charts/{chartId}/reports/summary/by-zone.csv | Chart summary by zone (CSV)
*ChartsApi* | [**getApiChartsByChartIdReportsSummaryByZoneJson**](docs/Api/ChartsApi.md#getapichartsbychartidreportssummarybyzonejson) | **GET** /api/charts/{chartId}/reports/summary/by-zone.json | Chart summary by zone
*ChartsApi* | [**getApiChartsByChartIdThumbnail**](docs/Api/ChartsApi.md#getapichartsbychartidthumbnail) | **GET** /api/charts/{chartId}/thumbnail | Chart thumbnail
*ChartsApi* | [**getApiChartsByChartIdVersions**](docs/Api/ChartsApi.md#getapichartsbychartidversions) | **GET** /api/charts/{chartId}/versions | List published versions
*ChartsApi* | [**getApiChartsByChartIdZones**](docs/Api/ChartsApi.md#getapichartsbychartidzones) | **GET** /api/charts/{chartId}/zones | List the zones of a chart
*ChartsApi* | [**getApiChartsTags**](docs/Api/ChartsApi.md#getapichartstags) | **GET** /api/charts/tags | List chart tags
*ChartsApi* | [**patchApiChartsByChartId**](docs/Api/ChartsApi.md#patchapichartsbychartid) | **PATCH** /api/charts/{chartId} | Update chart name or key
*ChartsApi* | [**postApiCharts**](docs/Api/ChartsApi.md#postapicharts) | **POST** /api/charts | Create chart
*ChartsApi* | [**postApiChartsByChartIdActionsArchive**](docs/Api/ChartsApi.md#postapichartsbychartidactionsarchive) | **POST** /api/charts/{chartId}/actions/archive | Archive chart
*ChartsApi* | [**postApiChartsByChartIdActionsCopyToWorkspace**](docs/Api/ChartsApi.md#postapichartsbychartidactionscopytoworkspace) | **POST** /api/charts/{chartId}/actions/copy-to-workspace | Copy a chart to another workspace
*ChartsApi* | [**postApiChartsByChartIdActionsUnarchive**](docs/Api/ChartsApi.md#postapichartsbychartidactionsunarchive) | **POST** /api/charts/{chartId}/actions/unarchive | Unarchive chart
*ChartsApi* | [**postApiChartsByChartIdActionsValidate**](docs/Api/ChartsApi.md#postapichartsbychartidactionsvalidate) | **POST** /api/charts/{chartId}/actions/validate | Validate a chart map (dry run)
*ChartsApi* | [**postApiChartsByChartIdDuplicate**](docs/Api/ChartsApi.md#postapichartsbychartidduplicate) | **POST** /api/charts/{chartId}/duplicate | Duplicate chart
*ChartsApi* | [**postApiChartsByChartIdMapDraftActionsDiscard**](docs/Api/ChartsApi.md#postapichartsbychartidmapdraftactionsdiscard) | **POST** /api/charts/{chartId}/map/draft/actions/discard | Discard chart draft
*ChartsApi* | [**postApiChartsByChartIdMapPublish**](docs/Api/ChartsApi.md#postapichartsbychartidmappublish) | **POST** /api/charts/{chartId}/map/publish | Publish chart map template
*ChartsApi* | [**postApiChartsByChartIdPreviewLink**](docs/Api/ChartsApi.md#postapichartsbychartidpreviewlink) | **POST** /api/charts/{chartId}/preview-link | Create a public preview link
*ChartsApi* | [**postApiChartsByChartIdVersionsByVersionActionsRestoreToDraft**](docs/Api/ChartsApi.md#postapichartsbychartidversionsbyversionactionsrestoretodraft) | **POST** /api/charts/{chartId}/versions/{version}/actions/restore-to-draft | Restore a version into the draft
*ChartsApi* | [**putApiChartsByChartIdMapDraft**](docs/Api/ChartsApi.md#putapichartsbychartidmapdraft) | **PUT** /api/charts/{chartId}/map/draft | Save chart map draft
*ChartsApi* | [**putApiChartsByChartIdTags**](docs/Api/ChartsApi.md#putapichartsbychartidtags) | **PUT** /api/charts/{chartId}/tags | Replace chart tags
*ChartsApi* | [**putApiChartsByChartIdVersionsByVersionThumbnail**](docs/Api/ChartsApi.md#putapichartsbychartidversionsbyversionthumbnail) | **PUT** /api/charts/{chartId}/versions/{version}/thumbnail | Attach a rendered thumbnail to a version
*DefaultApi* | [**deleteApiChartsByChartIdCategoriesByCategoryId**](docs/Api/DefaultApi.md#deleteapichartsbychartidcategoriesbycategoryid) | **DELETE** /api/charts/{chartId}/categories/{categoryId} | 
*DefaultApi* | [**getApiEventsByEventIdGeometryByHash**](docs/Api/DefaultApi.md#getapieventsbyeventidgeometrybyhash) | **GET** /api/events/{eventId}/geometry/{hash} | 
*DefaultApi* | [**getApiEventsByEventIdManifest**](docs/Api/DefaultApi.md#getapieventsbyeventidmanifest) | **GET** /api/events/{eventId}/manifest | 
*DefaultApi* | [**getHealthLive**](docs/Api/DefaultApi.md#gethealthlive) | **GET** /health/live | 
*DefaultApi* | [**getInternalMetrics**](docs/Api/DefaultApi.md#getinternalmetrics) | **GET** /internal/metrics | 
*DefaultApi* | [**patchApiChartsByChartIdCategoriesByCategoryId**](docs/Api/DefaultApi.md#patchapichartsbychartidcategoriesbycategoryid) | **PATCH** /api/charts/{chartId}/categories/{categoryId} | 
*DefaultApi* | [**postApiChartsByChartIdActionsScanChart**](docs/Api/DefaultApi.md#postapichartsbychartidactionsscanchart) | **POST** /api/charts/{chartId}/actions/scan-chart | 
*DefaultApi* | [**postApiChartsByChartIdCategories**](docs/Api/DefaultApi.md#postapichartsbychartidcategories) | **POST** /api/charts/{chartId}/categories | 
*DefaultApi* | [**postApiChartsByChartIdVersionsByVersionActionsCopy**](docs/Api/DefaultApi.md#postapichartsbychartidversionsbyversionactionscopy) | **POST** /api/charts/{chartId}/versions/{version}/actions/copy | 
*DefaultApi* | [**postApiEventsByEventIdActionsScanChart**](docs/Api/DefaultApi.md#postapieventsbyeventidactionsscanchart) | **POST** /api/events/{eventId}/actions/scan-chart | 
*EmbedApi* | [**getApiTicketBuyers**](docs/Api/EmbedApi.md#getapiticketbuyers) | **GET** /api/ticket-buyers | List registered ticket buyer ids
*EmbedApi* | [**postApiEmbedTokens**](docs/Api/EmbedApi.md#postapiembedtokens) | **POST** /api/embed-tokens | Mint a short-lived designer/manager embed token
*EmbedApi* | [**postApiTicketBuyers**](docs/Api/EmbedApi.md#postapiticketbuyers) | **POST** /api/ticket-buyers | Register ticket buyer ids
*EmbedApi* | [**postApiTicketBuyersActionsRemove**](docs/Api/EmbedApi.md#postapiticketbuyersactionsremove) | **POST** /api/ticket-buyers/actions/remove | Remove ticket buyer ids
*EmbedApi* | [**postApiViewerTokens**](docs/Api/EmbedApi.md#postapiviewertokens) | **POST** /api/viewer-tokens | Mint a short-lived buyer (viewer) token with the partner API key
*EmbedOriginsApi* | [**deleteApiEmbedOriginsById**](docs/Api/EmbedOriginsApi.md#deleteapiembedoriginsbyid) | **DELETE** /api/embed-origins/{id} | Remove an embed origin
*EmbedOriginsApi* | [**getApiEmbedOrigins**](docs/Api/EmbedOriginsApi.md#getapiembedorigins) | **GET** /api/embed-origins | List allowed embed origins for the workspace
*EmbedOriginsApi* | [**getApiEventsByEventIdEmbedPolicy**](docs/Api/EmbedOriginsApi.md#getapieventsbyeventidembedpolicy) | **GET** /api/events/{eventId}/embed-policy | Resolve tenant embed origins for an event
*EmbedOriginsApi* | [**postApiEmbedOrigins**](docs/Api/EmbedOriginsApi.md#postapiembedorigins) | **POST** /api/embed-origins | Register an allowed embed origin
*EventLogApi* | [**getApiEventLog**](docs/Api/EventLogApi.md#getapieventlog) | **GET** /api/event-log | Event log: admin changes of charts and events (cursor-paginated)
*EventsApi* | [**deleteApiEventsByEventId**](docs/Api/EventsApi.md#deleteapieventsbyeventid) | **DELETE** /api/events/{eventId} | Delete event
*EventsApi* | [**deleteApiEventsByEventIdInventoryChannelsByChannelKeyId**](docs/Api/EventsApi.md#deleteapieventsbyeventidinventorychannelsbychannelkeyid) | **DELETE** /api/events/{eventId}/inventory/channels/{channelKeyId} | Delete inventory channel
*EventsApi* | [**getApiEvents**](docs/Api/EventsApi.md#getapievents) | **GET** /api/events | List events for the authenticated tenant
*EventsApi* | [**getApiEventsByEventId**](docs/Api/EventsApi.md#getapieventsbyeventid) | **GET** /api/events/{eventId} | Retrieve one event
*EventsApi* | [**getApiEventsByEventIdChannelMembership**](docs/Api/EventsApi.md#getapieventsbyeventidchannelmembership) | **GET** /api/events/{eventId}/channel-membership | Do objects belong to my inventory channel? (renderer isObjectInChannel)
*EventsApi* | [**getApiEventsByEventIdInventoryChannels**](docs/Api/EventsApi.md#getapieventsbyeventidinventorychannels) | **GET** /api/events/{eventId}/inventory/channels | List inventory channels (ops)
*EventsApi* | [**getApiEventsByEventIdMapDraft**](docs/Api/EventsApi.md#getapieventsbyeventidmapdraft) | **GET** /api/events/{eventId}/map/draft | Load map draft for designer
*EventsApi* | [**getApiEventsByEventIdMapVersions**](docs/Api/EventsApi.md#getapieventsbyeventidmapversions) | **GET** /api/events/{eventId}/map/versions | List event map versions
*EventsApi* | [**getApiEventsByEventIdMapVersionsByVersionThumbnail**](docs/Api/EventsApi.md#getapieventsbyeventidmapversionsbyversionthumbnail) | **GET** /api/events/{eventId}/map/versions/{version}/thumbnail | Event map version preview
*EventsApi* | [**getApiEventsByEventIdObjects**](docs/Api/EventsApi.md#getapieventsbyeventidobjects) | **GET** /api/events/{eventId}/objects | List the objects of a ticket buyer
*EventsApi* | [**getApiEventsByEventIdObjectsByObjectId**](docs/Api/EventsApi.md#getapieventsbyeventidobjectsbyobjectid) | **GET** /api/events/{eventId}/objects/{objectId} | Retrieve one object (seat or GA area)
*EventsApi* | [**getApiEventsByEventIdObjectsByObjectIdStatusChanges**](docs/Api/EventsApi.md#getapieventsbyeventidobjectsbyobjectidstatuschanges) | **GET** /api/events/{eventId}/objects/{objectId}/status-changes | List status changes of one object
*EventsApi* | [**getApiEventsByEventIdPricing**](docs/Api/EventsApi.md#getapieventsbyeventidpricing) | **GET** /api/events/{eventId}/pricing | Read the synced price table of an event
*EventsApi* | [**getApiEventsByEventIdReportsByAvailabilityCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbyavailabilitycsv) | **GET** /api/events/{eventId}/reports/by-availability.csv | Detailed report grouped by availability (available / not_available) (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsByAvailabilityJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbyavailabilityjson) | **GET** /api/events/{eventId}/reports/by-availability.json | Detailed report grouped by availability (available / not_available)
*EventsApi* | [**getApiEventsByEventIdReportsByAvailabilityReasonCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbyavailabilityreasoncsv) | **GET** /api/events/{eventId}/reports/by-availability-reason.csv | Detailed report grouped by availability reason (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsByAvailabilityReasonJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbyavailabilityreasonjson) | **GET** /api/events/{eventId}/reports/by-availability-reason.json | Detailed report grouped by availability reason
*EventsApi* | [**getApiEventsByEventIdReportsByCategoryJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbycategoryjson) | **GET** /api/events/{eventId}/reports/by-category.json | Seat and GA counts by category
*EventsApi* | [**getApiEventsByEventIdReportsByCategoryKeyCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbycategorykeycsv) | **GET** /api/events/{eventId}/reports/by-category-key.csv | Detailed report grouped by category key (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsByCategoryKeyJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbycategorykeyjson) | **GET** /api/events/{eventId}/reports/by-category-key.json | Detailed report grouped by category key
*EventsApi* | [**getApiEventsByEventIdReportsByCategoryLabelCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbycategorylabelcsv) | **GET** /api/events/{eventId}/reports/by-category-label.csv | Detailed report grouped by category label (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsByCategoryLabelJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbycategorylabeljson) | **GET** /api/events/{eventId}/reports/by-category-label.json | Detailed report grouped by category label
*EventsApi* | [**getApiEventsByEventIdReportsByChannelJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbychanneljson) | **GET** /api/events/{eventId}/reports/by-channel.json | Detailed report grouped by inventory channel
*EventsApi* | [**getApiEventsByEventIdReportsByLabelJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbylabeljson) | **GET** /api/events/{eventId}/reports/by-label.json | Detailed report grouped by object label (Postgres)
*EventsApi* | [**getApiEventsByEventIdReportsByObjectTypeJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbyobjecttypejson) | **GET** /api/events/{eventId}/reports/by-object-type.json | Detailed report grouped by object type (seat|ga)
*EventsApi* | [**getApiEventsByEventIdReportsByOrderIdJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbyorderidjson) | **GET** /api/events/{eventId}/reports/by-order-id.json | Detailed report grouped by orderId (Postgres)
*EventsApi* | [**getApiEventsByEventIdReportsBySectionJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbysectionjson) | **GET** /api/events/{eventId}/reports/by-section.json | Detailed report grouped by section
*EventsApi* | [**getApiEventsByEventIdReportsByStatusJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbystatusjson) | **GET** /api/events/{eventId}/reports/by-status.json | Seat counts by Postgres status
*EventsApi* | [**getApiEventsByEventIdReportsByZoneCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbyzonecsv) | **GET** /api/events/{eventId}/reports/by-zone.csv | Detailed report grouped by zone (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsByZoneJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsbyzonejson) | **GET** /api/events/{eventId}/reports/by-zone.json | Detailed report grouped by zone
*EventsApi* | [**getApiEventsByEventIdReportsDeepSummaryJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportsdeepsummaryjson) | **GET** /api/events/{eventId}/reports/deep-summary.json | Deep summary: status counts nested by category
*EventsApi* | [**getApiEventsByEventIdReportsOccupancyCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportsoccupancycsv) | **GET** /api/events/{eventId}/reports/occupancy.csv | Export seat and GA occupancy as CSV
*EventsApi* | [**getApiEventsByEventIdReportsSalesCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssalescsv) | **GET** /api/events/{eventId}/reports/sales.csv | Export confirmed seat and GA sales as CSV
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByAvailabilityCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybyavailabilitycsv) | **GET** /api/events/{eventId}/reports/summary/by-availability.csv | Summary report by availability (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByAvailabilityJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybyavailabilityjson) | **GET** /api/events/{eventId}/reports/summary/by-availability.json | Summary report by availability
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByAvailabilityReasonCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybyavailabilityreasoncsv) | **GET** /api/events/{eventId}/reports/summary/by-availability-reason.csv | Summary report by availability reason (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByAvailabilityReasonJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybyavailabilityreasonjson) | **GET** /api/events/{eventId}/reports/summary/by-availability-reason.json | Summary report by availability reason
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByCategoryCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybycategorycsv) | **GET** /api/events/{eventId}/reports/summary/by-category.csv | Summary report by category (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByCategoryJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybycategoryjson) | **GET** /api/events/{eventId}/reports/summary/by-category.json | Summary report by category
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByCategoryKeyCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybycategorykeycsv) | **GET** /api/events/{eventId}/reports/summary/by-category-key.csv | Summary report by category key (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByCategoryKeyJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybycategorykeyjson) | **GET** /api/events/{eventId}/reports/summary/by-category-key.json | Summary report by category key
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByCategoryLabelCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybycategorylabelcsv) | **GET** /api/events/{eventId}/reports/summary/by-category-label.csv | Summary report by category label (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByCategoryLabelJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybycategorylabeljson) | **GET** /api/events/{eventId}/reports/summary/by-category-label.json | Summary report by category label
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByChannelCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybychannelcsv) | **GET** /api/events/{eventId}/reports/summary/by-channel.csv | Summary report by channel (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByChannelJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybychanneljson) | **GET** /api/events/{eventId}/reports/summary/by-channel.json | Summary report by channel
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByObjectTypeCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybyobjecttypecsv) | **GET** /api/events/{eventId}/reports/summary/by-object-type.csv | Summary report by object type (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByObjectTypeJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybyobjecttypejson) | **GET** /api/events/{eventId}/reports/summary/by-object-type.json | Summary report by object type
*EventsApi* | [**getApiEventsByEventIdReportsSummaryBySectionCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybysectioncsv) | **GET** /api/events/{eventId}/reports/summary/by-section.csv | Summary report by section (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryBySectionJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybysectionjson) | **GET** /api/events/{eventId}/reports/summary/by-section.json | Summary report by section
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByStatusCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybystatuscsv) | **GET** /api/events/{eventId}/reports/summary/by-status.csv | Summary report by status (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByStatusJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybystatusjson) | **GET** /api/events/{eventId}/reports/summary/by-status.json | Summary report by status
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByZoneCsv**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybyzonecsv) | **GET** /api/events/{eventId}/reports/summary/by-zone.csv | Summary report by zone (CSV)
*EventsApi* | [**getApiEventsByEventIdReportsSummaryByZoneJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummarybyzonejson) | **GET** /api/events/{eventId}/reports/summary/by-zone.json | Summary report by zone
*EventsApi* | [**getApiEventsByEventIdReportsSummaryJson**](docs/Api/EventsApi.md#getapieventsbyeventidreportssummaryjson) | **GET** /api/events/{eventId}/reports/summary.json | Occupancy summary JSON (Postgres only)
*EventsApi* | [**getApiEventsByEventIdSalesCounters**](docs/Api/EventsApi.md#getapieventsbyeventidsalescounters) | **GET** /api/events/{eventId}/sales-counters | Live sales counters (quotas, lots) of an event
*EventsApi* | [**getApiEventsByEventIdSalesRules**](docs/Api/EventsApi.md#getapieventsbyeventidsalesrules) | **GET** /api/events/{eventId}/sales-rules | Read the sales rules of an event
*EventsApi* | [**getApiEventsByEventIdSeatViews**](docs/Api/EventsApi.md#getapieventsbyeventidseatviews) | **GET** /api/events/{eventId}/seat-views | List view-from-seat image and optional 360 URLs
*EventsApi* | [**getApiEventsByEventIdSeats**](docs/Api/EventsApi.md#getapieventsbyeventidseats) | **GET** /api/events/{eventId}/seats | List seats for an event
*EventsApi* | [**getApiEventsByEventIdState**](docs/Api/EventsApi.md#getapieventsbyeventidstate) | **GET** /api/events/{eventId}/state | Compact visual state (protocol 5)
*EventsApi* | [**getApiEventsByEventIdStatusChanges**](docs/Api/EventsApi.md#getapieventsbyeventidstatuschanges) | **GET** /api/events/{eventId}/status-changes | List status changes of an event
*EventsApi* | [**getApiEventsByEventIdZones**](docs/Api/EventsApi.md#getapieventsbyeventidzones) | **GET** /api/events/{eventId}/zones | List the zones of an event
*EventsApi* | [**patchApiEventsByEventId**](docs/Api/EventsApi.md#patchapieventsbyeventid) | **PATCH** /api/events/{eventId} | Patch event: name, date, currency, overrides (isInThePast is irreversible)
*EventsApi* | [**patchApiEventsByEventIdInventoryChannelsByChannelKeyId**](docs/Api/EventsApi.md#patchapieventsbyeventidinventorychannelsbychannelkeyid) | **PATCH** /api/events/{eventId}/inventory/channels/{channelKeyId} | Rename or recolor an inventory channel
*EventsApi* | [**postApiEvents**](docs/Api/EventsApi.md#postapievents) | **POST** /api/events | Create event
*EventsApi* | [**postApiEventsBulk**](docs/Api/EventsApi.md#postapieventsbulk) | **POST** /api/events/bulk | Create up to 50 events for one chart
*EventsApi* | [**postApiEventsByEventIdActionsMoveToNewChartCopy**](docs/Api/EventsApi.md#postapieventsbyeventidactionsmovetonewchartcopy) | **POST** /api/events/{eventId}/actions/move-to-new-chart-copy | Move the event to a new copy of its chart
*EventsApi* | [**postApiEventsByEventIdDuplicate**](docs/Api/EventsApi.md#postapieventsbyeventidduplicate) | **POST** /api/events/{eventId}/duplicate | Duplicate event
*EventsApi* | [**postApiEventsByEventIdInventoryChannels**](docs/Api/EventsApi.md#postapieventsbyeventidinventorychannels) | **POST** /api/events/{eventId}/inventory/channels | Create inventory channel
*EventsApi* | [**postApiEventsByEventIdInventoryChannelsAssign**](docs/Api/EventsApi.md#postapieventsbyeventidinventorychannelsassign) | **POST** /api/events/{eventId}/inventory/channels/assign | Assign seats/GA to inventory channel
*EventsApi* | [**postApiEventsByEventIdInventoryForSaleApply**](docs/Api/EventsApi.md#postapieventsbyeventidinventoryforsaleapply) | **POST** /api/events/{eventId}/inventory/for-sale/apply | Apply for-sale / not-for-sale to a selection (incremental)
*EventsApi* | [**postApiEventsByEventIdMapDraftActionsDiscard**](docs/Api/EventsApi.md#postapieventsbyeventidmapdraftactionsdiscard) | **POST** /api/events/{eventId}/map/draft/actions/discard | Discard event map draft
*EventsApi* | [**postApiEventsByEventIdMapPublish**](docs/Api/EventsApi.md#postapieventsbyeventidmappublish) | **POST** /api/events/{eventId}/map/publish | Publish draft map to live seats
*EventsApi* | [**postApiEventsByEventIdMapVersionsByVersionActionsRestoreToDraft**](docs/Api/EventsApi.md#postapieventsbyeventidmapversionsbyversionactionsrestoretodraft) | **POST** /api/events/{eventId}/map/versions/{version}/actions/restore-to-draft | Restore an event map version into the draft
*EventsApi* | [**postApiEventsByEventIdObjectsActionsRetrieve**](docs/Api/EventsApi.md#postapieventsbyeventidobjectsactionsretrieve) | **POST** /api/events/{eventId}/objects/actions/retrieve | Retrieve several objects at once (seats.io retrieveObjectInfos)
*EventsApi* | [**postApiEventsByEventIdSalesCountersActionsRebuild**](docs/Api/EventsApi.md#postapieventsbyeventidsalescountersactionsrebuild) | **POST** /api/events/{eventId}/sales-counters/actions/rebuild | Rebuild the sold counters of an event from its orders
*EventsApi* | [**putApiEventsByEventIdInventoryChannels**](docs/Api/EventsApi.md#putapieventsbyeventidinventorychannels) | **PUT** /api/events/{eventId}/inventory/channels | Replace all inventory channel assignments atomically
*EventsApi* | [**putApiEventsByEventIdInventoryChannelsDefinitions**](docs/Api/EventsApi.md#putapieventsbyeventidinventorychannelsdefinitions) | **PUT** /api/events/{eventId}/inventory/channels/definitions | Replace all inventory channels (definitions and assignments) atomically
*EventsApi* | [**putApiEventsByEventIdInventoryForSale**](docs/Api/EventsApi.md#putapieventsbyeventidinventoryforsale) | **PUT** /api/events/{eventId}/inventory/for-sale | Replace the whole for-sale configuration atomically
*EventsApi* | [**putApiEventsByEventIdMap**](docs/Api/EventsApi.md#putapieventsbyeventidmap) | **PUT** /api/events/{eventId}/map | Save map draft (legacy path)
*EventsApi* | [**putApiEventsByEventIdMapDraft**](docs/Api/EventsApi.md#putapieventsbyeventidmapdraft) | **PUT** /api/events/{eventId}/map/draft | Save map draft (does not go live)
*EventsApi* | [**putApiEventsByEventIdPricing**](docs/Api/EventsApi.md#putapieventsbyeventidpricing) | **PUT** /api/events/{eventId}/pricing | Push the synced price table of an event (synced catalog mode)
*EventsApi* | [**putApiEventsByEventIdSalesRules**](docs/Api/EventsApi.md#putapieventsbyeventidsalesrules) | **PUT** /api/events/{eventId}/sales-rules | Replace the sales rules of an event (quotas, lots, buyer limit, pricing source)
*HealthApi* | [**getApiHealth**](docs/Api/HealthApi.md#getapihealth) | **GET** /api/health | Health check
*MapDesignerApi* | [**postApiExtractSeats**](docs/Api/MapDesignerApi.md#postapiextractseats) | **POST** /api/extract-seats | Extract seat candidates with OpenCV
*ObjectStatusApi* | [**getApiEventsByEventIdObjectStatuses**](docs/Api/ObjectStatusApi.md#getapieventsbyeventidobjectstatuses) | **GET** /api/events/{eventId}/object-statuses | List object status overlays for an event
*ObjectStatusApi* | [**postApiEventsActionsChangeObjectStatus**](docs/Api/ObjectStatusApi.md#postapieventsactionschangeobjectstatus) | **POST** /api/events/actions/change-object-status | Atomically change object statuses across events (all-or-nothing batch)
*ObjectStatusApi* | [**postApiEventsByEventIdActionsBook**](docs/Api/ObjectStatusApi.md#postapieventsbyeventidactionsbook) | **POST** /api/events/{eventId}/actions/book | Create a durable administrative booking on unheld inventory (or on a hold token)
*ObjectStatusApi* | [**postApiEventsByEventIdActionsChangeObjectStatus**](docs/Api/ObjectStatusApi.md#postapieventsbyeventidactionschangeobjectstatus) | **POST** /api/events/{eventId}/actions/change-object-status | Change object status (booked / free / resale / retired / custom)
*ObjectStatusApi* | [**postApiEventsByEventIdActionsHold**](docs/Api/ObjectStatusApi.md#postapieventsbyeventidactionshold) | **POST** /api/events/{eventId}/actions/hold | Hold general admission places administratively (issues a GA hold token)
*ObjectStatusApi* | [**postApiEventsByEventIdActionsPutUpForResale**](docs/Api/ObjectStatusApi.md#postapieventsbyeventidactionsputupforresale) | **POST** /api/events/{eventId}/actions/put-up-for-resale | Put booked objects up for resale
*ObjectStatusApi* | [**postApiEventsByEventIdActionsRelease**](docs/Api/ObjectStatusApi.md#postapieventsbyeventidactionsrelease) | **POST** /api/events/{eventId}/actions/release | Release unsold objects; sales require explicit order cancellation
*ObjectStatusApi* | [**postApiEventsByEventIdActionsRetire**](docs/Api/ObjectStatusApi.md#postapieventsbyeventidactionsretire) | **POST** /api/events/{eventId}/actions/retire | Retire objects (not for sale, history kept)
*ObjectStatusApi* | [**postApiEventsByEventIdActionsUpdateExtraData**](docs/Api/ObjectStatusApi.md#postapieventsbyeventidactionsupdateextradata) | **POST** /api/events/{eventId}/actions/update-extra-data | Update extraData of objects without changing their status
*OrdersApi* | [**getApiOrdersByOrderId**](docs/Api/OrdersApi.md#getapiordersbyorderid) | **GET** /api/orders/{orderId} | Read a durable confirmation and its requested items
*OrdersApi* | [**postApiOrdersByOrderIdCancel**](docs/Api/OrdersApi.md#postapiordersbyorderidcancel) | **POST** /api/orders/{orderId}/cancel | Cancel the entire order and preserve its history; does not refund payment
*PublicApi* | [**getApiPublicByPublicKeyEventsByEventIdGeometryByHash**](docs/Api/PublicApi.md#getapipublicbypublickeyeventsbyeventidgeometrybyhash) | **GET** /api/public/{publicKey}/events/{eventId}/geometry/{hash} | Public immutable geometry (CDN-cacheable)
*PublicApi* | [**getApiPublicByPublicKeyEventsByEventIdManifest**](docs/Api/PublicApi.md#getapipublicbypublickeyeventsbyeventidmanifest) | **GET** /api/public/{publicKey}/events/{eventId}/manifest | Public geometry manifest (CDN-cacheable)
*PublicApi* | [**getApiPublicByPublicKeyEventsByEventIdState**](docs/Api/PublicApi.md#getapipublicbypublickeyeventsbyeventidstate) | **GET** /api/public/{publicKey}/events/{eventId}/state | Public compact visual state (CDN-cacheable)
*PublicApi* | [**getApiPublicChartPreviewsByChartIdGeometryByHash**](docs/Api/PublicApi.md#getapipublicchartpreviewsbychartidgeometrybyhash) | **GET** /api/public/chart-previews/{chartId}/geometry/{hash} | Chart preview geometry (signed link)
*PublicApi* | [**getApiPublicChartPreviewsByChartIdManifest**](docs/Api/PublicApi.md#getapipublicchartpreviewsbychartidmanifest) | **GET** /api/public/chart-previews/{chartId}/manifest | Chart preview manifest (signed link)
*QuotesApi* | [**postApiQuotes**](docs/Api/QuotesApi.md#postapiquotes) | **POST** /api/quotes | Freeze a server-calculated catalog quote before external payment
*SeasonsApi* | [**deleteApiSeasonsBySeasonId**](docs/Api/SeasonsApi.md#deleteapiseasonsbyseasonid) | **DELETE** /api/seasons/{seasonId} | Delete season
*SeasonsApi* | [**deleteApiSeasonsBySeasonIdEventsByEventId**](docs/Api/SeasonsApi.md#deleteapiseasonsbyseasonideventsbyeventid) | **DELETE** /api/seasons/{seasonId}/events/{eventId} | Detach event from season
*SeasonsApi* | [**deleteApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId**](docs/Api/SeasonsApi.md#deleteapiseasonsbyseasonidpartialseasonsbypartialseasonid) | **DELETE** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId} | Delete a partial season
*SeasonsApi* | [**getApiEventsByEventIdSeasonStatus**](docs/Api/SeasonsApi.md#getapieventsbyeventidseasonstatus) | **GET** /api/events/{eventId}/season-status | Season membership and status overrides of an event
*SeasonsApi* | [**getApiSeasons**](docs/Api/SeasonsApi.md#getapiseasons) | **GET** /api/seasons | List seasons
*SeasonsApi* | [**getApiSeasonsBySeasonId**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonid) | **GET** /api/seasons/{seasonId} | Get season detail
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasons**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasons) | **GET** /api/seasons/{seasonId}/partial-seasons | List partial seasons of a season
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonId**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonid) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId} | Get one partial season
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportsbyavailabilitycsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-availability.csv | Partial season report by availability (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByAvailabilityJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportsbyavailabilityjson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-availability.json | Partial season report by availability
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportsbycategorycsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-category.csv | Partial season report by category (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByCategoryJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportsbycategoryjson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-category.json | Partial season report by category
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportsbystatuscsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-status.csv | Partial season report by status (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByStatusJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportsbystatusjson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-status.json | Partial season report by status
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportsbyzonecsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-zone.csv | Partial season report by zone (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsByZoneJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportsbyzonejson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/by-zone.json | Partial season report by zone
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybyavailabilitycsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-availability.csv | Partial season summary by availability (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybyavailabilityjson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-availability.json | Partial season summary by availability
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybyavailabilityreasoncsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-availability-reason.csv | Partial season summary by availability reason (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByAvailabilityReasonJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybyavailabilityreasonjson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-availability-reason.json | Partial season summary by availability reason
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybycategorycsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-category.csv | Partial season summary by category (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByCategoryJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybycategoryjson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-category.json | Partial season summary by category
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybysectioncsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-section.csv | Partial season summary by section (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryBySectionJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybysectionjson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-section.json | Partial season summary by section
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybystatuscsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-status.csv | Partial season summary by status (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByStatusJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybystatusjson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-status.json | Partial season summary by status
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybyzonecsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-zone.csv | Partial season summary by zone (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryByZoneJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarybyzonejson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary/by-zone.json | Partial season summary by zone
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummarycsv) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary.csv | Partial season summary across member events (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdReportsSummaryJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidpartialseasonsbypartialseasonidreportssummaryjson) | **GET** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/reports/summary.json | Partial season summary across member events
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsByAvailabilityCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportsbyavailabilitycsv) | **GET** /api/seasons/{seasonId}/reports/by-availability.csv | Season report by availability (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsByAvailabilityJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportsbyavailabilityjson) | **GET** /api/seasons/{seasonId}/reports/by-availability.json | Season report by availability
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsByCategoryCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportsbycategorycsv) | **GET** /api/seasons/{seasonId}/reports/by-category.csv | Season report by category (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsByCategoryJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportsbycategoryjson) | **GET** /api/seasons/{seasonId}/reports/by-category.json | Season report by category
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsByStatusCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportsbystatuscsv) | **GET** /api/seasons/{seasonId}/reports/by-status.csv | Season report by status (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsByStatusJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportsbystatusjson) | **GET** /api/seasons/{seasonId}/reports/by-status.json | Season report by status
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsByZoneCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportsbyzonecsv) | **GET** /api/seasons/{seasonId}/reports/by-zone.csv | Season report by zone (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsByZoneJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportsbyzonejson) | **GET** /api/seasons/{seasonId}/reports/by-zone.json | Season report by zone
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByAvailabilityCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybyavailabilitycsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-availability.csv | Season summary by availability (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByAvailabilityJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybyavailabilityjson) | **GET** /api/seasons/{seasonId}/reports/summary/by-availability.json | Season summary by availability
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybyavailabilityreasoncsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-availability-reason.csv | Season summary by availability reason (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByAvailabilityReasonJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybyavailabilityreasonjson) | **GET** /api/seasons/{seasonId}/reports/summary/by-availability-reason.json | Season summary by availability reason
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByCategoryCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybycategorycsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-category.csv | Season summary by category (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByCategoryJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybycategoryjson) | **GET** /api/seasons/{seasonId}/reports/summary/by-category.json | Season summary by category
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryBySectionCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybysectioncsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-section.csv | Season summary by section (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryBySectionJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybysectionjson) | **GET** /api/seasons/{seasonId}/reports/summary/by-section.json | Season summary by section
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByStatusCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybystatuscsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-status.csv | Season summary by status (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByStatusJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybystatusjson) | **GET** /api/seasons/{seasonId}/reports/summary/by-status.json | Season summary by status
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByZoneCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybyzonecsv) | **GET** /api/seasons/{seasonId}/reports/summary/by-zone.csv | Season summary by zone (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryByZoneJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarybyzonejson) | **GET** /api/seasons/{seasonId}/reports/summary/by-zone.json | Season summary by zone
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryCsv**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummarycsv) | **GET** /api/seasons/{seasonId}/reports/summary.csv | Season summary across member events (CSV)
*SeasonsApi* | [**getApiSeasonsBySeasonIdReportsSummaryJson**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidreportssummaryjson) | **GET** /api/seasons/{seasonId}/reports/summary.json | Season summary across member events
*SeasonsApi* | [**getApiSeasonsBySeasonIdSeats**](docs/Api/SeasonsApi.md#getapiseasonsbyseasonidseats) | **GET** /api/seasons/{seasonId}/seats | Season booking view (source geometry + intersection status)
*SeasonsApi* | [**patchApiSeasonsBySeasonId**](docs/Api/SeasonsApi.md#patchapiseasonsbyseasonid) | **PATCH** /api/seasons/{seasonId} | Update season
*SeasonsApi* | [**patchApiSeasonsBySeasonIdEventsByEventId**](docs/Api/SeasonsApi.md#patchapiseasonsbyseasonideventsbyeventid) | **PATCH** /api/seasons/{seasonId}/events/{eventId} | Season member settings (forSalePropagated)
*SeasonsApi* | [**postApiEventsByEventIdActionsOverrideSeasonStatus**](docs/Api/SeasonsApi.md#postapieventsbyeventidactionsoverrideseasonstatus) | **POST** /api/events/{eventId}/actions/override-season-status | Override the season status of objects in an event (OVERRIDE_SEASON_STATUS)
*SeasonsApi* | [**postApiEventsByEventIdActionsUseSeasonStatus**](docs/Api/SeasonsApi.md#postapieventsbyeventidactionsuseseasonstatus) | **POST** /api/events/{eventId}/actions/use-season-status | Make objects follow the season status again (USE_SEASON_STATUS)
*SeasonsApi* | [**postApiSeasons**](docs/Api/SeasonsApi.md#postapiseasons) | **POST** /api/seasons | Create season
*SeasonsApi* | [**postApiSeasonsBySeasonIdActionsAddEvents**](docs/Api/SeasonsApi.md#postapiseasonsbyseasonidactionsaddevents) | **POST** /api/seasons/{seasonId}/actions/add-events | Add several events to a season (atomic)
*SeasonsApi* | [**postApiSeasonsBySeasonIdActionsCreateEvents**](docs/Api/SeasonsApi.md#postapiseasonsbyseasonidactionscreateevents) | **POST** /api/seasons/{seasonId}/actions/create-events | Create events in a season
*SeasonsApi* | [**postApiSeasonsBySeasonIdActionsRemoveEvents**](docs/Api/SeasonsApi.md#postapiseasonsbyseasonidactionsremoveevents) | **POST** /api/seasons/{seasonId}/actions/remove-events | Remove several events from a season (atomic)
*SeasonsApi* | [**postApiSeasonsBySeasonIdEvents**](docs/Api/SeasonsApi.md#postapiseasonsbyseasonidevents) | **POST** /api/seasons/{seasonId}/events | Attach event to season
*SeasonsApi* | [**postApiSeasonsBySeasonIdInventorySync**](docs/Api/SeasonsApi.md#postapiseasonsbyseasonidinventorysync) | **POST** /api/seasons/{seasonId}/inventory/sync | Sync season inventory from source
*SeasonsApi* | [**postApiSeasonsBySeasonIdPartialSeasons**](docs/Api/SeasonsApi.md#postapiseasonsbyseasonidpartialseasons) | **POST** /api/seasons/{seasonId}/partial-seasons | Create a partial season
*SeasonsApi* | [**postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsAddEvents**](docs/Api/SeasonsApi.md#postapiseasonsbyseasonidpartialseasonsbypartialseasonidactionsaddevents) | **POST** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/actions/add-events | Add events to a partial season (bulk, all-or-nothing)
*SeasonsApi* | [**postApiSeasonsBySeasonIdPartialSeasonsByPartialSeasonIdActionsRemoveEvents**](docs/Api/SeasonsApi.md#postapiseasonsbyseasonidpartialseasonsbypartialseasonidactionsremoveevents) | **POST** /api/seasons/{seasonId}/partial-seasons/{partialSeasonId}/actions/remove-events | Remove events from a partial season (bulk)
*SeatsApi* | [**getApiChannels**](docs/Api/SeatsApi.md#getapichannels) | **GET** /api/channels | List sales channels
*SeatsApi* | [**getApiHoldTokensByToken**](docs/Api/SeatsApi.md#getapiholdtokensbytoken) | **GET** /api/hold-tokens/{token} | Validate a hold-token session
*SeatsApi* | [**getApiSeatsGroup**](docs/Api/SeatsApi.md#getapiseatsgroup) | **GET** /api/seats/group | Event-group availability intersection by label
*SeatsApi* | [**postApiGaConfirm**](docs/Api/SeatsApi.md#postapigaconfirm) | **POST** /api/ga/confirm | Confirm GA purchase (Postgres sold_count)
*SeatsApi* | [**postApiGaRelease**](docs/Api/SeatsApi.md#postapigarelease) | **POST** /api/ga/release | Release a GA capacity hold
*SeatsApi* | [**postApiGaReserve**](docs/Api/SeatsApi.md#postapigareserve) | **POST** /api/ga/reserve | Hold GA area capacity (Redis)
*SeatsApi* | [**postApiHoldTokens**](docs/Api/SeatsApi.md#postapiholdtokens) | **POST** /api/hold-tokens | Create an empty hold-token session
*SeatsApi* | [**postApiHoldTokensByToken**](docs/Api/SeatsApi.md#postapiholdtokensbytoken) | **POST** /api/hold-tokens/{token} | Change hold-token expiration (max 2h from creation)
*SeatsApi* | [**postApiSeatsBestAvailable**](docs/Api/SeatsApi.md#postapiseatsbestavailable) | **POST** /api/seats/best-available | Suggest or atomically hold best available seats
*SeatsApi* | [**postApiSeatsConfirm**](docs/Api/SeatsApi.md#postapiseatsconfirm) | **POST** /api/seats/confirm | Accept a durable confirmation intent before asynchronous seat materialization
*SeatsApi* | [**postApiSeatsHoldsRelease**](docs/Api/SeatsApi.md#postapiseatsholdsrelease) | **POST** /api/seats/holds/release | Release all seats held by a hold token
*SeatsApi* | [**postApiSeatsHoldsRenew**](docs/Api/SeatsApi.md#postapiseatsholdsrenew) | **POST** /api/seats/holds/renew | Renew Redis TTL for all seats in a hold session
*SeatsApi* | [**postApiSeatsRelease**](docs/Api/SeatsApi.md#postapiseatsrelease) | **POST** /api/seats/release | Clear Redis TTL holds before expiry (checkout abandoned / declined)
*SeatsApi* | [**postApiSeatsReserve**](docs/Api/SeatsApi.md#postapiseatsreserve) | **POST** /api/seats/reserve | Place a temporary Redis hold (Lua TTL) before payment
*SseApi* | [**getApiEventsByEventIdStream**](docs/Api/SseApi.md#getapieventsbyeventidstream) | **GET** /api/events/{eventId}/stream | Indexed visual projection stream
*TeamApi* | [**deleteApiTeamInvitationsByInvitationId**](docs/Api/TeamApi.md#deleteapiteaminvitationsbyinvitationid) | **DELETE** /api/team/invitations/{invitationId} | Revoke a pending invitation
*TeamApi* | [**deleteApiTeamMembersByUserId**](docs/Api/TeamApi.md#deleteapiteammembersbyuserid) | **DELETE** /api/team/members/{userId} | Remove member from workspace
*TeamApi* | [**getApiTeamInvitations**](docs/Api/TeamApi.md#getapiteaminvitations) | **GET** /api/team/invitations | List pending invitations
*TeamApi* | [**getApiTeamMembers**](docs/Api/TeamApi.md#getapiteammembers) | **GET** /api/team/members | List workspace members
*TeamApi* | [**patchApiTeamMembersByUserId**](docs/Api/TeamApi.md#patchapiteammembersbyuserid) | **PATCH** /api/team/members/{userId} | Change member role
*TeamApi* | [**postApiTeamInvitations**](docs/Api/TeamApi.md#postapiteaminvitations) | **POST** /api/team/invitations | Invite a teammate by email
*UsageApi* | [**getApiMonitoringRequests**](docs/Api/UsageApi.md#getapimonitoringrequests) | **GET** /api/monitoring/requests | Request monitoring per rate-limit lane
*UsageApi* | [**getApiUsage**](docs/Api/UsageApi.md#getapiusage) | **GET** /api/usage | Monthly usage: used objects, charts and events
*UsageApi* | [**getApiUsageCharts**](docs/Api/UsageApi.md#getapiusagecharts) | **GET** /api/usage/charts | Monthly used objects per chart and event
*UsageApi* | [**getApiUsageEvents**](docs/Api/UsageApi.md#getapiusageevents) | **GET** /api/usage/events | Monthly used objects per event (paginated)
*UsageApi* | [**getApiUsageEventsByEventId**](docs/Api/UsageApi.md#getapiusageeventsbyeventid) | **GET** /api/usage/events/{eventId} | Monthly used objects of one event (paginated)
*UsageApi* | [**getApiUsageHistory**](docs/Api/UsageApi.md#getapiusagehistory) | **GET** /api/usage/history | Used objects per month over a range
*UsageApi* | [**getApiUsageWorkspaces**](docs/Api/UsageApi.md#getapiusageworkspaces) | **GET** /api/usage/workspaces | Monthly used objects across my workspaces (admin view)
*WebhooksApi* | [**deleteApiWebhooksById**](docs/Api/WebhooksApi.md#deleteapiwebhooksbyid) | **DELETE** /api/webhooks/{id} | Delete a webhook
*WebhooksApi* | [**getApiWebhooks**](docs/Api/WebhooksApi.md#getapiwebhooks) | **GET** /api/webhooks | List webhooks for the authenticated tenant
*WebhooksApi* | [**getApiWebhooksByIdDeliveries**](docs/Api/WebhooksApi.md#getapiwebhooksbyiddeliveries) | **GET** /api/webhooks/{id}/deliveries | List deliveries of a webhook endpoint
*WebhooksApi* | [**getApiWebhooksByIdDeliveriesByDeliveryId**](docs/Api/WebhooksApi.md#getapiwebhooksbyiddeliveriesbydeliveryid) | **GET** /api/webhooks/{id}/deliveries/{deliveryId} | Get one webhook delivery with its request payload
*WebhooksApi* | [**getApiWebhooksEventTypes**](docs/Api/WebhooksApi.md#getapiwebhookseventtypes) | **GET** /api/webhooks/event-types | List subscribable webhook event types
*WebhooksApi* | [**patchApiWebhooksById**](docs/Api/WebhooksApi.md#patchapiwebhooksbyid) | **PATCH** /api/webhooks/{id} | Update a webhook
*WebhooksApi* | [**postApiWebhooks**](docs/Api/WebhooksApi.md#postapiwebhooks) | **POST** /api/webhooks | Create a webhook endpoint
*WebhooksApi* | [**postApiWebhooksByIdDeliveriesByDeliveryIdReplay**](docs/Api/WebhooksApi.md#postapiwebhooksbyiddeliveriesbydeliveryidreplay) | **POST** /api/webhooks/{id}/deliveries/{deliveryId}/replay | Replay a webhook delivery
*WebhooksApi* | [**postApiWebhooksByIdRotateSecret**](docs/Api/WebhooksApi.md#postapiwebhooksbyidrotatesecret) | **POST** /api/webhooks/{id}/rotate-secret | Rotate a webhook signing secret
*WebhooksApi* | [**postApiWebhooksByIdTest**](docs/Api/WebhooksApi.md#postapiwebhooksbyidtest) | **POST** /api/webhooks/{id}/test | Send a signed test event
*WorkspaceApi* | [**deleteApiWorkspacesByWorkspaceId**](docs/Api/WorkspaceApi.md#deleteapiworkspacesbyworkspaceid) | **DELETE** /api/workspaces/{workspaceId} | Delete (soft) a workspace
*WorkspaceApi* | [**getApiWorkspace**](docs/Api/WorkspaceApi.md#getapiworkspace) | **GET** /api/workspace | Get workspace profile for the authenticated tenant
*WorkspaceApi* | [**getApiWorkspaceChartValidation**](docs/Api/WorkspaceApi.md#getapiworkspacechartvalidation) | **GET** /api/workspace/chart-validation | Get chart validation severities
*WorkspaceApi* | [**getApiWorkspaceIntegration**](docs/Api/WorkspaceApi.md#getapiworkspaceintegration) | **GET** /api/workspace/integration | Get the workspace integration mode (pricing source)
*WorkspaceApi* | [**getApiWorkspaceSettings**](docs/Api/WorkspaceApi.md#getapiworkspacesettings) | **GET** /api/workspace/settings | Get workspace settings (effective value and source)
*WorkspaceApi* | [**getApiWorkspaces**](docs/Api/WorkspaceApi.md#getapiworkspaces) | **GET** /api/workspaces | List my workspaces
*WorkspaceApi* | [**getApiWorkspacesByWorkspaceId**](docs/Api/WorkspaceApi.md#getapiworkspacesbyworkspaceid) | **GET** /api/workspaces/{workspaceId} | Get one of my workspaces
*WorkspaceApi* | [**patchApiWorkspace**](docs/Api/WorkspaceApi.md#patchapiworkspace) | **PATCH** /api/workspace | Update workspace display name
*WorkspaceApi* | [**patchApiWorkspaceChartValidation**](docs/Api/WorkspaceApi.md#patchapiworkspacechartvalidation) | **PATCH** /api/workspace/chart-validation | Update chart validation severities
*WorkspaceApi* | [**patchApiWorkspaceIntegration**](docs/Api/WorkspaceApi.md#patchapiworkspaceintegration) | **PATCH** /api/workspace/integration | Change the workspace integration mode
*WorkspaceApi* | [**patchApiWorkspaceSettings**](docs/Api/WorkspaceApi.md#patchapiworkspacesettings) | **PATCH** /api/workspace/settings | Override workspace settings or return them to the default
*WorkspaceApi* | [**patchApiWorkspacesByWorkspaceId**](docs/Api/WorkspaceApi.md#patchapiworkspacesbyworkspaceid) | **PATCH** /api/workspaces/{workspaceId} | Rename one of my workspaces
*WorkspaceApi* | [**postApiWorkspacePublicKeyRotate**](docs/Api/WorkspaceApi.md#postapiworkspacepublickeyrotate) | **POST** /api/workspace/public-key/rotate | Rotate the public workspace key
*WorkspaceApi* | [**postApiWorkspaces**](docs/Api/WorkspaceApi.md#postapiworkspaces) | **POST** /api/workspaces | Create an additional workspace
*WorkspaceApi* | [**postApiWorkspacesByWorkspaceIdActionsActivate**](docs/Api/WorkspaceApi.md#postapiworkspacesbyworkspaceidactionsactivate) | **POST** /api/workspaces/{workspaceId}/actions/activate | Reactivate a workspace
*WorkspaceApi* | [**postApiWorkspacesByWorkspaceIdActionsDeactivate**](docs/Api/WorkspaceApi.md#postapiworkspacesbyworkspaceidactionsdeactivate) | **POST** /api/workspaces/{workspaceId}/actions/deactivate | Deactivate a workspace
*WorkspaceApi* | [**postApiWorkspacesByWorkspaceIdActionsSetDefault**](docs/Api/WorkspaceApi.md#postapiworkspacesbyworkspaceidactionssetdefault) | **POST** /api/workspaces/{workspaceId}/actions/set-default | Set my default workspace

## Models

- [DeleteApiWorkspacesByWorkspaceId200Response](docs/Model/DeleteApiWorkspacesByWorkspaceId200Response.md)
- [GetApiChartsByChartIdVersions200Response](docs/Model/GetApiChartsByChartIdVersions200Response.md)
- [GetApiChartsByChartIdVersions200ResponseItemsInner](docs/Model/GetApiChartsByChartIdVersions200ResponseItemsInner.md)
- [GetApiChartsByChartIdVersions200ResponseItemsInnerPublishedBy](docs/Model/GetApiChartsByChartIdVersions200ResponseItemsInnerPublishedBy.md)
- [GetApiEventsByEventIdMapVersions200Response](docs/Model/GetApiEventsByEventIdMapVersions200Response.md)
- [GetApiEventsByEventIdMapVersions200ResponseItemsInner](docs/Model/GetApiEventsByEventIdMapVersions200ResponseItemsInner.md)
- [GetApiEventsByEventIdSeatViews200Response](docs/Model/GetApiEventsByEventIdSeatViews200Response.md)
- [GetApiEventsByEventIdSeatViews200ResponseViewsValue](docs/Model/GetApiEventsByEventIdSeatViews200ResponseViewsValue.md)
- [GetApiEventsByEventIdSeatViews404Response](docs/Model/GetApiEventsByEventIdSeatViews404Response.md)
- [GetApiMonitoringRequests200Response](docs/Model/GetApiMonitoringRequests200Response.md)
- [GetApiMonitoringRequests200ResponseLanes](docs/Model/GetApiMonitoringRequests200ResponseLanes.md)
- [GetApiMonitoringRequests200ResponseLanesSales](docs/Model/GetApiMonitoringRequests200ResponseLanesSales.md)
- [GetApiMonitoringRequests200ResponsePointsInner](docs/Model/GetApiMonitoringRequests200ResponsePointsInner.md)
- [GetApiWorkspaceIntegration200Response](docs/Model/GetApiWorkspaceIntegration200Response.md)
- [GetApiWorkspaceSettings200Response](docs/Model/GetApiWorkspaceSettings200Response.md)
- [GetApiWorkspaceSettings200ResponseBounds](docs/Model/GetApiWorkspaceSettings200ResponseBounds.md)
- [GetApiWorkspaceSettings200ResponseBoundsHoldPeriodMinutes](docs/Model/GetApiWorkspaceSettings200ResponseBoundsHoldPeriodMinutes.md)
- [GetApiWorkspaceSettings200ResponseEffective](docs/Model/GetApiWorkspaceSettings200ResponseEffective.md)
- [GetApiWorkspaceSettings200ResponseOverrides](docs/Model/GetApiWorkspaceSettings200ResponseOverrides.md)
- [GetApiWorkspaceSettings200ResponseSources](docs/Model/GetApiWorkspaceSettings200ResponseSources.md)
- [GetApiWorkspaces200Response](docs/Model/GetApiWorkspaces200Response.md)
- [GetApiWorkspaces200ResponseItemsInner](docs/Model/GetApiWorkspaces200ResponseItemsInner.md)
- [PatchApiChartsByChartIdCategoriesByCategoryIdRequest](docs/Model/PatchApiChartsByChartIdCategoriesByCategoryIdRequest.md)
- [PatchApiChartsByChartIdRequest](docs/Model/PatchApiChartsByChartIdRequest.md)
- [PatchApiEventsByEventIdInventoryChannelsByChannelKeyIdRequest](docs/Model/PatchApiEventsByEventIdInventoryChannelsByChannelKeyIdRequest.md)
- [PatchApiEventsByEventIdRequest](docs/Model/PatchApiEventsByEventIdRequest.md)
- [PatchApiEventsByEventIdRequestCategoriesInner](docs/Model/PatchApiEventsByEventIdRequestCategoriesInner.md)
- [PatchApiEventsByEventIdRequestTableBookingConfig](docs/Model/PatchApiEventsByEventIdRequestTableBookingConfig.md)
- [PatchApiKeysByIdRequest](docs/Model/PatchApiKeysByIdRequest.md)
- [PatchApiSeasonsBySeasonIdEventsByEventIdRequest](docs/Model/PatchApiSeasonsBySeasonIdEventsByEventIdRequest.md)
- [PatchApiSeasonsBySeasonIdRequest](docs/Model/PatchApiSeasonsBySeasonIdRequest.md)
- [PatchApiTeamMembersByUserIdRequest](docs/Model/PatchApiTeamMembersByUserIdRequest.md)
- [PatchApiWebhooksByIdRequest](docs/Model/PatchApiWebhooksByIdRequest.md)
- [PatchApiWorkspaceChartValidationRequest](docs/Model/PatchApiWorkspaceChartValidationRequest.md)
- [PatchApiWorkspaceChartValidationRequestSeverities](docs/Model/PatchApiWorkspaceChartValidationRequestSeverities.md)
- [PatchApiWorkspaceIntegrationRequest](docs/Model/PatchApiWorkspaceIntegrationRequest.md)
- [PatchApiWorkspaceRequest](docs/Model/PatchApiWorkspaceRequest.md)
- [PatchApiWorkspaceSettingsRequest](docs/Model/PatchApiWorkspaceSettingsRequest.md)
- [PostApiAuth2faDisableRequest](docs/Model/PostApiAuth2faDisableRequest.md)
- [PostApiAuth2faEnableRequest](docs/Model/PostApiAuth2faEnableRequest.md)
- [PostApiAuth2faEnrollConfirmRequest](docs/Model/PostApiAuth2faEnrollConfirmRequest.md)
- [PostApiAuth2faEnrollStartRequest](docs/Model/PostApiAuth2faEnrollStartRequest.md)
- [PostApiAuth2faVerifyRequest](docs/Model/PostApiAuth2faVerifyRequest.md)
- [PostApiAuthAcceptInviteRequest](docs/Model/PostApiAuthAcceptInviteRequest.md)
- [PostApiAuthLoginRequest](docs/Model/PostApiAuthLoginRequest.md)
- [PostApiAuthLogoutRequest](docs/Model/PostApiAuthLogoutRequest.md)
- [PostApiAuthRefreshRequest](docs/Model/PostApiAuthRefreshRequest.md)
- [PostApiAuthSignupRequest](docs/Model/PostApiAuthSignupRequest.md)
- [PostApiAuthSwitchWorkspaceRequest](docs/Model/PostApiAuthSwitchWorkspaceRequest.md)
- [PostApiBillingCheckoutSessionRequest](docs/Model/PostApiBillingCheckoutSessionRequest.md)
- [PostApiBillingConfirmCheckoutRequest](docs/Model/PostApiBillingConfirmCheckoutRequest.md)
- [PostApiChartsByChartIdActionsArchive200Response](docs/Model/PostApiChartsByChartIdActionsArchive200Response.md)
- [PostApiChartsByChartIdActionsArchive200ResponseChart](docs/Model/PostApiChartsByChartIdActionsArchive200ResponseChart.md)
- [PostApiChartsByChartIdActionsCopyToWorkspaceRequest](docs/Model/PostApiChartsByChartIdActionsCopyToWorkspaceRequest.md)
- [PostApiChartsByChartIdActionsValidateRequest](docs/Model/PostApiChartsByChartIdActionsValidateRequest.md)
- [PostApiChartsByChartIdActionsValidateRequestSeatsInner](docs/Model/PostApiChartsByChartIdActionsValidateRequestSeatsInner.md)
- [PostApiChartsByChartIdActionsValidateRequestSeatsInnerAccessibility](docs/Model/PostApiChartsByChartIdActionsValidateRequestSeatsInnerAccessibility.md)
- [PostApiChartsByChartIdCategoriesRequest](docs/Model/PostApiChartsByChartIdCategoriesRequest.md)
- [PostApiChartsByChartIdCategoriesRequestTicketTypesInner](docs/Model/PostApiChartsByChartIdCategoriesRequestTicketTypesInner.md)
- [PostApiChartsByChartIdDuplicateRequest](docs/Model/PostApiChartsByChartIdDuplicateRequest.md)
- [PostApiChartsByChartIdMapPublish422Response](docs/Model/PostApiChartsByChartIdMapPublish422Response.md)
- [PostApiChartsByChartIdMapPublish422ResponseIssuesInner](docs/Model/PostApiChartsByChartIdMapPublish422ResponseIssuesInner.md)
- [PostApiChartsByChartIdMapPublishRequest](docs/Model/PostApiChartsByChartIdMapPublishRequest.md)
- [PostApiChartsByChartIdPreviewLinkRequest](docs/Model/PostApiChartsByChartIdPreviewLinkRequest.md)
- [PostApiChartsByChartIdVersionsByVersionActionsCopyRequest](docs/Model/PostApiChartsByChartIdVersionsByVersionActionsCopyRequest.md)
- [PostApiChartsRequest](docs/Model/PostApiChartsRequest.md)
- [PostApiChartsRequestCategoriesInner](docs/Model/PostApiChartsRequestCategoriesInner.md)
- [PostApiEmbedOriginsRequest](docs/Model/PostApiEmbedOriginsRequest.md)
- [PostApiEmbedTokensRequest](docs/Model/PostApiEmbedTokensRequest.md)
- [PostApiEventsActionsChangeObjectStatusRequest](docs/Model/PostApiEventsActionsChangeObjectStatusRequest.md)
- [PostApiEventsActionsChangeObjectStatusRequestStatusChangesInner](docs/Model/PostApiEventsActionsChangeObjectStatusRequestStatusChangesInner.md)
- [PostApiEventsActionsChangeObjectStatusRequestStatusChangesInnerObjectsInner](docs/Model/PostApiEventsActionsChangeObjectStatusRequestStatusChangesInnerObjectsInner.md)
- [PostApiEventsActionsChangeObjectStatusRequestStatusChangesInnerObjectsInnerAnyOf](docs/Model/PostApiEventsActionsChangeObjectStatusRequestStatusChangesInnerObjectsInnerAnyOf.md)
- [PostApiEventsBulkRequest](docs/Model/PostApiEventsBulkRequest.md)
- [PostApiEventsBulkRequestEventsInner](docs/Model/PostApiEventsBulkRequestEventsInner.md)
- [PostApiEventsByEventIdActionsChangeObjectStatusRequest](docs/Model/PostApiEventsByEventIdActionsChangeObjectStatusRequest.md)
- [PostApiEventsByEventIdActionsOverrideSeasonStatusRequest](docs/Model/PostApiEventsByEventIdActionsOverrideSeasonStatusRequest.md)
- [PostApiEventsByEventIdActionsUpdateExtraDataRequest](docs/Model/PostApiEventsByEventIdActionsUpdateExtraDataRequest.md)
- [PostApiEventsByEventIdActionsUpdateExtraDataRequestObjectsInner](docs/Model/PostApiEventsByEventIdActionsUpdateExtraDataRequestObjectsInner.md)
- [PostApiEventsByEventIdActionsUseSeasonStatusRequest](docs/Model/PostApiEventsByEventIdActionsUseSeasonStatusRequest.md)
- [PostApiEventsByEventIdDuplicateRequest](docs/Model/PostApiEventsByEventIdDuplicateRequest.md)
- [PostApiEventsByEventIdInventoryChannelsAssignRequest](docs/Model/PostApiEventsByEventIdInventoryChannelsAssignRequest.md)
- [PostApiEventsByEventIdInventoryChannelsRequest](docs/Model/PostApiEventsByEventIdInventoryChannelsRequest.md)
- [PostApiEventsByEventIdInventoryForSaleApplyRequest](docs/Model/PostApiEventsByEventIdInventoryForSaleApplyRequest.md)
- [PostApiEventsByEventIdObjectsActionsRetrieveRequest](docs/Model/PostApiEventsByEventIdObjectsActionsRetrieveRequest.md)
- [PostApiEventsRequest](docs/Model/PostApiEventsRequest.md)
- [PostApiEventsRequestCategoryOverridesValue](docs/Model/PostApiEventsRequestCategoryOverridesValue.md)
- [PostApiEventsRequestChannelsInner](docs/Model/PostApiEventsRequestChannelsInner.md)
- [PostApiEventsRequestForSaleConfig](docs/Model/PostApiEventsRequestForSaleConfig.md)
- [PostApiEventsRequestTableBookingConfig](docs/Model/PostApiEventsRequestTableBookingConfig.md)
- [PostApiExtractSeatsRequest](docs/Model/PostApiExtractSeatsRequest.md)
- [PostApiGaConfirm409Response](docs/Model/PostApiGaConfirm409Response.md)
- [PostApiGaConfirmRequest](docs/Model/PostApiGaConfirmRequest.md)
- [PostApiGaReleaseRequest](docs/Model/PostApiGaReleaseRequest.md)
- [PostApiGaReserveRequest](docs/Model/PostApiGaReserveRequest.md)
- [PostApiHoldTokensByTokenRequest](docs/Model/PostApiHoldTokensByTokenRequest.md)
- [PostApiHoldTokensRequest](docs/Model/PostApiHoldTokensRequest.md)
- [PostApiKeysRequest](docs/Model/PostApiKeysRequest.md)
- [PostApiOrdersByOrderIdCancelRequest](docs/Model/PostApiOrdersByOrderIdCancelRequest.md)
- [PostApiQuotesRequest](docs/Model/PostApiQuotesRequest.md)
- [PostApiSeasonsBySeasonIdActionsAddEventsRequest](docs/Model/PostApiSeasonsBySeasonIdActionsAddEventsRequest.md)
- [PostApiSeasonsBySeasonIdActionsCreateEventsRequest](docs/Model/PostApiSeasonsBySeasonIdActionsCreateEventsRequest.md)
- [PostApiSeasonsBySeasonIdActionsCreateEventsRequestEventsInner](docs/Model/PostApiSeasonsBySeasonIdActionsCreateEventsRequestEventsInner.md)
- [PostApiSeasonsBySeasonIdActionsRemoveEventsRequest](docs/Model/PostApiSeasonsBySeasonIdActionsRemoveEventsRequest.md)
- [PostApiSeasonsBySeasonIdEventsRequest](docs/Model/PostApiSeasonsBySeasonIdEventsRequest.md)
- [PostApiSeasonsBySeasonIdInventorySyncRequest](docs/Model/PostApiSeasonsBySeasonIdInventorySyncRequest.md)
- [PostApiSeasonsBySeasonIdPartialSeasonsRequest](docs/Model/PostApiSeasonsBySeasonIdPartialSeasonsRequest.md)
- [PostApiSeasonsRequest](docs/Model/PostApiSeasonsRequest.md)
- [PostApiSeatsBestAvailableRequest](docs/Model/PostApiSeatsBestAvailableRequest.md)
- [PostApiSeatsConfirm409Response](docs/Model/PostApiSeatsConfirm409Response.md)
- [PostApiSeatsConfirmRequest](docs/Model/PostApiSeatsConfirmRequest.md)
- [PostApiSeatsHoldsRenewRequest](docs/Model/PostApiSeatsHoldsRenewRequest.md)
- [PostApiSeatsReleaseRequest](docs/Model/PostApiSeatsReleaseRequest.md)
- [PostApiSeatsReserveRequest](docs/Model/PostApiSeatsReserveRequest.md)
- [PostApiTeamInvitationsRequest](docs/Model/PostApiTeamInvitationsRequest.md)
- [PostApiTicketBuyersRequest](docs/Model/PostApiTicketBuyersRequest.md)
- [PostApiViewerTokensRequest](docs/Model/PostApiViewerTokensRequest.md)
- [PostApiWebhooksRequest](docs/Model/PostApiWebhooksRequest.md)
- [PostApiWorkspacesRequest](docs/Model/PostApiWorkspacesRequest.md)
- [PutApiChartsByChartIdTagsRequest](docs/Model/PutApiChartsByChartIdTagsRequest.md)
- [PutApiChartsByChartIdVersionsByVersionThumbnailRequest](docs/Model/PutApiChartsByChartIdVersionsByVersionThumbnailRequest.md)
- [PutApiEventsByEventIdInventoryChannelsDefinitionsRequest](docs/Model/PutApiEventsByEventIdInventoryChannelsDefinitionsRequest.md)
- [PutApiEventsByEventIdInventoryChannelsDefinitionsRequestChannelsInner](docs/Model/PutApiEventsByEventIdInventoryChannelsDefinitionsRequestChannelsInner.md)
- [PutApiEventsByEventIdInventoryChannelsRequest](docs/Model/PutApiEventsByEventIdInventoryChannelsRequest.md)
- [PutApiEventsByEventIdInventoryChannelsRequestAssignmentsInner](docs/Model/PutApiEventsByEventIdInventoryChannelsRequestAssignmentsInner.md)
- [PutApiEventsByEventIdInventoryForSaleRequest](docs/Model/PutApiEventsByEventIdInventoryForSaleRequest.md)
- [PutApiEventsByEventIdPricingRequest](docs/Model/PutApiEventsByEventIdPricingRequest.md)
- [PutApiEventsByEventIdPricingRequestCategoriesInner](docs/Model/PutApiEventsByEventIdPricingRequestCategoriesInner.md)
- [PutApiEventsByEventIdPricingRequestCategoriesInnerTicketTypesInner](docs/Model/PutApiEventsByEventIdPricingRequestCategoriesInnerTicketTypesInner.md)
- [PutApiEventsByEventIdSalesRulesRequest](docs/Model/PutApiEventsByEventIdSalesRulesRequest.md)
- [PutApiEventsByEventIdSalesRulesRequestBuyerLimit](docs/Model/PutApiEventsByEventIdSalesRulesRequestBuyerLimit.md)
- [PutApiEventsByEventIdSalesRulesRequestLotPlansInner](docs/Model/PutApiEventsByEventIdSalesRulesRequestLotPlansInner.md)
- [PutApiEventsByEventIdSalesRulesRequestLotPlansInnerLotsInner](docs/Model/PutApiEventsByEventIdSalesRulesRequestLotPlansInnerLotsInner.md)
- [PutApiEventsByEventIdSalesRulesRequestQuotasInner](docs/Model/PutApiEventsByEventIdSalesRulesRequestQuotasInner.md)

## Authorization

Authentication schemes defined for the API:
### BearerAuth

- **Type**: Bearer authentication (JWT)

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `0.1.0`
    - Generator version: `7.11.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

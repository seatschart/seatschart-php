# # PostApiWorkspacesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** |  |
**is_test** | **bool** | Create a sandbox of the current workspace (prefer &#x60;POST /sandboxes&#x60;): never billed (usage shown, not counted), no chart/event caps, &#x60;sk_test_&#x60; API keys, a Sandbox ribbon for buyers. Permanent. | [optional]
**copy_charts** | **bool** | Test workspaces only: copy the current workspace&#39;s charts as unpublished drafts (up to 50, archived skipped). Default false. | [optional]
**external_id** | **string** | Your own organizer id (letters, digits and &#x60;_ . ~ -&#x60;), unique among the workspaces you administer: 409 &#x60;external_id_taken&#x60; names the workspace that has it. Usable in &#x60;X-Workspace-Key&#x60; and &#x60;GET /workspaces/by-external-id/{externalId}&#x60;. | [optional]
**template_workspace_id** | **string** | A production workspace you administer (id or external id) whose integration settings the new workspace copies: every setting override (pricing source, own catalog, hold period, seats per hold token, ticket buyer validation, GA places to channels, new events not for sale, renderer and draft defaults, buyer extraData), chart validation levels, embed domains (up to the new plan limit) and webhook endpoints (same URL, event types and active flag, each with a NEW signing secret returned once). Not copied: members, API keys, charts, events and the two-factor requirement. 404 &#x60;template_not_found&#x60; otherwise. | [optional]
**issue_key** | [**\SeatsChart\Client\Model\PostApiWorkspacesRequestIssueKey**](PostApiWorkspacesRequestIssueKey.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

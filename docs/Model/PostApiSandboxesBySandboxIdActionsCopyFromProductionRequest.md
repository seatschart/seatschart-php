# # PostApiSandboxesBySandboxIdActionsCopyFromProductionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chart_ids** | **string[]** | Charts of the production workspace to copy (default: every non-archived chart, up to 50, by name). | [optional]
**include_events** | **bool** | Also copy the events of each copied published chart (up to 200 per call, newest first) with their for-sale configuration: for-sale flags, channels (new channel keys), GA place quotas, category overrides, event categories, table booking, sales rules, synced prices and the event-level layout. Seasons and partial seasons of the copied events are copied too (fresh ids, remapped members). Nothing sold or held is copied. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

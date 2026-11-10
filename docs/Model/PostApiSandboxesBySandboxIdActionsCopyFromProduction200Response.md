# # PostApiSandboxesBySandboxIdActionsCopyFromProduction200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charts** | [**\SeatsChart\Client\Model\PostApiSandboxes201ResponseCopiedChartsInner[]**](PostApiSandboxes201ResponseCopiedChartsInner.md) |  |
**events** | [**\SeatsChart\Client\Model\PostApiSandboxes201ResponseCopiedEventsInner[]**](PostApiSandboxes201ResponseCopiedEventsInner.md) |  |
**key_conflicts** | [**\SeatsChart\Client\Model\PostApiSandboxes201ResponseCopiedKeyConflictsInner[]**](PostApiSandboxes201ResponseCopiedKeyConflictsInner.md) |  |
**truncated_events** | **int** |  |
**events_with_own_map** | [**\SeatsChart\Client\Model\PostApiSandboxes201ResponseCopiedEventsWithOwnMapInner[]**](PostApiSandboxes201ResponseCopiedEventsWithOwnMapInner.md) | Events with their own map (no chart) copied with their event layout: only when every chart is copied (no &#x60;chartIds&#x60;) with &#x60;includeEvents&#x60;. |
**seasons** | [**\SeatsChart\Client\Model\PostApiSandboxes201ResponseCopiedSeasonsInner[]**](PostApiSandboxes201ResponseCopiedSeasonsInner.md) | Seasons (with partial seasons) whose member events were copied (&#x60;includeEvents&#x60;), with fresh ids and remapped members. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

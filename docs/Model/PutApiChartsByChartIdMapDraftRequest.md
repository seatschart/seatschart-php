# # PutApiChartsByChartIdMapDraftRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seats** | [**\SeatsChart\Client\Model\PostApiChartsByChartIdActionsValidateRequestSeatsInner[]**](PostApiChartsByChartIdActionsValidateRequestSeatsInner.md) |  |
**shapes** | **mixed[]** | Layout shapes (sections, zones, GA areas, tables, icons…) and one &#x60;layoutMeta&#x60;. &#x60;layoutMeta.settings3d&#x60; holds the authored 3D (elevation / rake per section or zone, floors, light preset, spectator target) and the 3D billboards: &#x60;billboards&#x60; (at most 64 boards, each &#x60;{ id, points: [{x, y}] (2-64, map px), height?: m (0.2-20, default 1), elevation?: m (-20-100), scroll?: \&quot;reverse\&quot; | \&quot;off\&quot; }&#x60;) and &#x60;billboardImages&#x60; (at most 12 sponsor images shared by every board, in scroll order: base64 WebP / PNG / JPEG data URLs, stored to the map-asset CDN when configured, or map-asset URLs). Invalid values are refused with 400 &#x60;validation_error&#x60;, never clamped. &#x60;settings3d.seatPicking&#x60; (boolean) is the chart-level \&quot;Allow 3D seat picking\&quot; switch (absent: on for charts that author 3D). Optional fields published only when set: tables &#x60;oneSide&#x60; (rectangular, every guest on one long side) and &#x60;openSpaces&#x60; (1-20 empty chair positions); text &#x60;bold&#x60; / &#x60;italic&#x60;; decorative shapes &#x60;layer: \&quot;foreground\&quot;&#x60; (drawn above the seats for buyers, never interactive); &#x60;layoutMeta.floors[].abbreviation&#x60; (at most 6 characters) and &#x60;layoutMeta.displayTypes&#x60; (object id → displayed type, at most 64 characters, seats.io &#x60;displayObjectType&#x60;). Designer-only metadata (&#x60;bytes&#x60; on images, &#x60;layoutMeta.backgroundBytes&#x60;) feeds the &#x60;images_size&#x60; check and is never published. | [optional]
**background** | **string** |  | [optional]
**reference** | **string** |  | [optional]
**base_draft_updated_at** | **string** | Draft version this save is based on (&#x60;draftUpdatedAt&#x60; from the last load or save; null for a never-saved draft). When given and the stored draft changed meanwhile, the save is refused with 409 &#x60;draft_conflict&#x60; (designer autosave). Omit it for last-writer-wins. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

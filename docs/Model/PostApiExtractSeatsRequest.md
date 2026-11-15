# # PostApiExtractSeatsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file** | **\SplFileObject** |  |
**calibration** | **string** | Calibration JSON (sample patches, rotations, grouping) for the legacy matcher. | [optional]
**profile** | **string** |  | [optional]
**mode** | **string** | &#x60;auto&#x60; (default): discover the seat glyphs and match them, no clicks needed. &#x60;examples&#x60;: use the seats clicked in &#x60;examples&#x60;. &#x60;edges&#x60;: legacy contour mode tuned by &#x60;seat_diameter&#x60; and &#x60;closing_kernel&#x60;. | [optional]
**examples** | [**\SeatsChart\Client\Model\PostApiExtractSeatsRequestExamples**](PostApiExtractSeatsRequestExamples.md) |  | [optional]
**negatives** | [**\SeatsChart\Client\Model\PostApiExtractSeatsRequestNegatives**](PostApiExtractSeatsRequestNegatives.md) |  | [optional]
**region** | [**\SeatsChart\Client\Model\PostApiExtractSeatsRequestRegion**](PostApiExtractSeatsRequestRegion.md) |  | [optional]
**vector** | **\SplFileObject** | Optional vector source of &#x60;file&#x60; (a PDF or an SVG, at most 8 MiB): &#x60;file&#x60; must be that PDF page or SVG rendered whole (any scale; the page box, or the SVG viewBox, maps onto the full image). The scanner reads the drawn geometry (closed paths, rectangles, circles, repeated symbols, text runs) and uses it to check, add and drop seats; a scanned page or one without seat-sized shapes falls back to the image alone (&#x60;vector: \&quot;unusable\&quot;&#x60;). Works with &#x60;auto&#x60; and &#x60;examples&#x60;. | [optional]
**vector_page** | **float** | PDF page (1-based) that &#x60;file&#x60; shows; default 1. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

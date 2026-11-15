# # PostApiExtractSeats200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**width** | **int** |  |
**height** | **int** |  |
**seats** | [**\SeatsChart\Client\Model\PostApiExtractSeats200ResponseSeatsInner[]**](PostApiExtractSeats200ResponseSeatsInner.md) |  |
**mode** | **string** |  | [optional]
**legibility** | **string** | &#x60;ok&#x60;; &#x60;low_resolution&#x60;: the seats are drawn too small to be read one by one; &#x60;no_individual_seats&#x60;: the plan shows sections or blocks, not seats. When not &#x60;ok&#x60;, every seat is &#x60;doubtful&#x60; and the count must not be trusted. | [optional]
**review** | **int** | How many seats are flagged &#x60;doubtful&#x60;. | [optional]
**vector** | **string** | Only when a &#x60;vector&#x60; file was sent: &#x60;used&#x60; when its drawn geometry checked the seats, &#x60;unusable&#x60; when it held none (a scanned page, no seat-sized shapes, over the work budget) and the image alone was scanned. | [optional]
**suggested** | [**\SeatsChart\Client\Model\PostApiExtractSeats200ResponseSuggestedInner[]**](PostApiExtractSeats200ResponseSuggestedInner.md) | Auto and examples modes: places where a seat was probably missed (a gap in a row, the end of a row, a mark that looks like the clicked seats but scored below the threshold), best first. They are not part of &#x60;seats&#x60;; the designer offers them in the review, where one key adds one. Omitted when there are none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

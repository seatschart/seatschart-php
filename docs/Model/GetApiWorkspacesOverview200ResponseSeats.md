# # GetApiWorkspacesOverview200ResponseSeats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**month** | **string** |  |
**plan_id** | **string** |  |
**mode** | **string** |  |
**used_seats** | **int** |  |
**included_seats** | **int** |  |
**overage_price_cents_per_seat** | **float** | US cents per seat beyond the included ones (may be fractional). |
**overage** | [**\SeatsChart\Client\Model\GetApiWorkspacesOverview200ResponseSeatsOverage**](GetApiWorkspacesOverview200ResponseSeatsOverage.md) |  |
**allowance_exceeded** | **bool** |  |
**allowance_near** | **bool** |  |
**projected** | [**\SeatsChart\Client\Model\GetApiWorkspacesOverview200ResponseSeatsProjected**](GetApiWorkspacesOverview200ResponseSeatsProjected.md) |  | [optional]
**billing_owner_user_id** | **string** |  |
**rolled_up** | **bool** |  |
**workspace_count** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # OrderItemPromoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\OrderPromoType**](OrderPromoType.md) |  |
**discount** | **float** | Размер пользовательской скидки в валюте покупателя. | [optional]
**subsidy** | **float** | Вознаграждение партнеру от Маркета за товар, проданный в рамках акции.  Передается в валюте заказа, для отделения целой части от дробной используется точка. | [optional]
**shop_promo_id** | **string** | Идентификатор акции поставщика. | [optional]
**market_promo_id** | **string** | Идентификатор акции в рамках соглашения на оказание услуг по продвижению сервиса между Маркетом и партнером.  Параметр передается, только если параметр &#x60;type&#x3D;MARKET_DEAL&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

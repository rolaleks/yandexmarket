# # OfferForRecommendationDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | Ваш SKU — идентификатор товара в вашей системе.  Разрешена любая последовательность длиной до 80 знаков. В нее могут входить английские и русские буквы, цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) | [optional]
**price** | [**\OpenAPI\Client\Model\BasePriceDTO**](BasePriceDTO.md) |  | [optional]
**cofinance_price** | [**\OpenAPI\Client\Model\GetPriceDTO**](GetPriceDTO.md) |  | [optional]
**competitiveness** | [**\OpenAPI\Client\Model\PriceCompetitivenessType**](PriceCompetitivenessType.md) |  | [optional]
**shows** | **int** | Количество показов карточки товара за последние 7 дней. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

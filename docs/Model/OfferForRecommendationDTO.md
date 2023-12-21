# # OfferForRecommendationDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы, цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields). | [optional]
**price** | [**\OpenAPI\Client\Model\BasePriceDTO**](BasePriceDTO.md) |  | [optional]
**cofinance_price** | [**\OpenAPI\Client\Model\GetPriceDTO**](GetPriceDTO.md) |  | [optional]
**competitiveness** | [**\OpenAPI\Client\Model\PriceCompetitivenessType**](PriceCompetitivenessType.md) |  | [optional]
**shows** | **int** | Количество показов карточки товара за последние 7 дней. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # BriefOrderItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор товара в заказе.  Позволяет идентифицировать товар в рамках данного заказа. | [optional]
**vat** | [**\OpenAPI\Client\Model\OrderVatType**](OrderVatType.md) |  | [optional]
**count** | **int** | Количество единиц товара. | [optional]
**price** | **float** | Цена на товар. Указана в той валюте, которая была задана в каталоге. Разделитель целой и дробной части — точка. | [optional]
**feed_category_id** | **string** | Идентификатор категории, в которую входит товар.  {% note alert %}  Параметр устарел и не рекомендуется к использованию.  {% endnote %} | [optional]
**offer_name** | **string** | Название товара. | [optional]
**offer_id** | **string** | Ваш SKU — идентификатор товара в вашей системе.  Разрешена любая последовательность длиной до 80 знаков. В нее могут входить английские и русские буквы, цифры и символы &#x60;. , / \\ ( ) [ ] - &#x3D; _&#x60;  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) | [optional]
**instances** | [**\OpenAPI\Client\Model\OrderItemInstanceDTO[]**](OrderItemInstanceDTO.md) | Переданные вами коды маркировки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

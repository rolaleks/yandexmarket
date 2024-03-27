# # OrderShipmentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор посылки, присвоенный Маркетом. | [optional]
**status** | [**\OpenAPI\Client\Model\OrderParcelStatusType**](OrderParcelStatusType.md) |  | [optional]
**shipment_date** | **string** | Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;. | [optional]
**shipment_time** | **string** | **Только для модели Экспресс**  Время, к которому магазин должен упаковать заказ и перевести его в статус &#x60;READY_TO_SHIP&#x60;. После смены статуса за заказом приедет курьер.  Формат времени: 24-часовой, &#x60;ЧЧ:ММ&#x60;.  Если заказ сделан организацией, параметр не возвращается до согласования даты доставки. | [optional]
**tracks** | [**\OpenAPI\Client\Model\OrderTrackDTO[]**](OrderTrackDTO.md) | **Только для модели DBS**  Информация для отслеживания перемещений посылки. | [optional]
**boxes** | [**\OpenAPI\Client\Model\OrderParcelBoxDTO[]**](OrderParcelBoxDTO.md) | Список грузовых мест. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

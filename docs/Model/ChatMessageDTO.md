# # ChatMessageDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **int** | Идентификатор сообщения. |
**created_at** | **\DateTime** | Дата и время создания сообщения.  Формат даты: ISO 8601 со смещением относительно UTC. Например, 2017-11-21T00:00:00+03:00. |
**sender** | [**\OpenAPI\Client\Model\ChatMessageSenderType**](ChatMessageSenderType.md) |  |
**message** | **string** | Текст сообщения.  Необязательный параметр, если возвращается параметр &#x60;payload&#x60;. | [optional]
**payload** | [**\OpenAPI\Client\Model\ChatMessagePayloadDTO[]**](ChatMessagePayloadDTO.md) | Информация о приложенных к сообщению файлах.  Необязательный параметр, если возвращается параметр &#x60;message&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

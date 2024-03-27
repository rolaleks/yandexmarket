<?php
/**
 * ChatStatusType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ChatStatusType Class Doc Comment
 *
 * @category Class
 * @description Статус чата:  * &#x60;NEW&#x60; — новый чат. * &#x60;WAITING_FOR_CUSTOMER&#x60; — нужен ответ покупателя; * &#x60;WAITING_FOR_PARTNER&#x60; — нужен ответ магазина; * &#x60;WAITING_FOR_ARBITER&#x60; — нужен ответ арбитра; * &#x60;WAITING_FOR_MARKET&#x60; — нужен ответ Маркета; * &#x60;FINISHED&#x60; — чат завершен.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChatStatusType
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'NEW';

    public const WAITING_FOR_CUSTOMER = 'WAITING_FOR_CUSTOMER';

    public const WAITING_FOR_PARTNER = 'WAITING_FOR_PARTNER';

    public const WAITING_FOR_ARBITER = 'WAITING_FOR_ARBITER';

    public const WAITING_FOR_MARKET = 'WAITING_FOR_MARKET';

    public const FINISHED = 'FINISHED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::WAITING_FOR_CUSTOMER,
            self::WAITING_FOR_PARTNER,
            self::WAITING_FOR_ARBITER,
            self::WAITING_FOR_MARKET,
            self::FINISHED
        ];
    }
}



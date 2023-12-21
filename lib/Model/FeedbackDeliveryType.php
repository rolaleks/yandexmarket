<?php
/**
 * FeedbackDeliveryType
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
 * FeedbackDeliveryType Class Doc Comment
 *
 * @category Class
 * @description Способ покупки, указанный в отзыве:  * &#x60;DELIVERY&#x60; — доставка. * &#x60;PICKUP&#x60; — самовывоз. * &#x60;INSTORE&#x60; — в магазине.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedbackDeliveryType
{
    /**
     * Possible values of this enum
     */
    public const DELIVERY = 'DELIVERY';

    public const PICKUP = 'PICKUP';

    public const INSTORE = 'INSTORE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DELIVERY,
            self::PICKUP,
            self::INSTORE
        ];
    }
}



<?php
/**
 * OrderLiftType
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
 * OrderLiftType Class Doc Comment
 *
 * @category Class
 * @description Тип подъема заказа на этаж.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderLiftType
{
    /**
     * Possible values of this enum
     */
    public const NOT_NEEDED = 'NOT_NEEDED';

    public const MANUAL = 'MANUAL';

    public const ELEVATOR = 'ELEVATOR';

    public const CARGO_ELEVATOR = 'CARGO_ELEVATOR';

    public const FREE = 'FREE';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_NEEDED,
            self::MANUAL,
            self::ELEVATOR,
            self::CARGO_ELEVATOR,
            self::FREE,
            self::UNKNOWN
        ];
    }
}



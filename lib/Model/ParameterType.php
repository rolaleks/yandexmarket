<?php
/**
 * ParameterType
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
 * ParameterType Class Doc Comment
 *
 * @category Class
 * @description Тип данных:  * &#x60;TEXT&#x60; — текст; * &#x60;ENUM&#x60; — список возможных значений; * &#x60;BOOLEAN&#x60; — &#x60;true&#x60; или &#x60;false&#x60;; * &#x60;NUMERIC&#x60; — число.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParameterType
{
    /**
     * Possible values of this enum
     */
    public const TEXT = 'TEXT';

    public const ENUM = 'ENUM';

    public const BOOLEAN = 'BOOLEAN';

    public const NUMERIC = 'NUMERIC';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::ENUM,
            self::BOOLEAN,
            self::NUMERIC
        ];
    }
}



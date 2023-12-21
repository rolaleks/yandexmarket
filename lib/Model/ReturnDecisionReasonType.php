<?php
/**
 * ReturnDecisionReasonType
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
 * ReturnDecisionReasonType Class Doc Comment
 *
 * @category Class
 * @description Причины возврата:  * BAD_QUALITY — бракованный товар (есть недостатки).  * DO_NOT_FIT — товар не подошел.  * WRONG_ITEM — привезли не тот товар.  * DAMAGE_DELIVERY — товар поврежден при доставке.  * LOYALTY_FAIL — невозможно установить виновного в браке/пересорте.  * CONTENT_FAIL — ошибочное описание товара по вине Маркета.  * UNKNOWN — причина не известна.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnDecisionReasonType
{
    /**
     * Possible values of this enum
     */
    public const BAD_QUALITY = 'BAD_QUALITY';

    public const DOES_NOT_FIT = 'DOES_NOT_FIT';

    public const WRONG_ITEM = 'WRONG_ITEM';

    public const DAMAGE_DELIVERY = 'DAMAGE_DELIVERY';

    public const LOYALTY_FAIL = 'LOYALTY_FAIL';

    public const CONTENT_FAIL = 'CONTENT_FAIL';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BAD_QUALITY,
            self::DOES_NOT_FIT,
            self::WRONG_ITEM,
            self::DAMAGE_DELIVERY,
            self::LOYALTY_FAIL,
            self::CONTENT_FAIL,
            self::UNKNOWN
        ];
    }
}



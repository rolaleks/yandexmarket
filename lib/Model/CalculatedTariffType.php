<?php
/**
 * CalculatedTariffType
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
 * CalculatedTariffType Class Doc Comment
 *
 * @category Class
 * @description Услуга Маркета:  * &#x60;AGENCY_COMMISSION&#x60; — прием платежа покупателя.  * &#x60;PAYMENT_TRANSFER&#x60; — перевод платежа покупателя.  * &#x60;FEE&#x60; — размещение товара на Маркете.  * &#x60;DELIVERY_TO_CUSTOMER&#x60; — доставка покупателю.  * &#x60;CROSSREGIONAL_DELIVERY&#x60; — доставка в федеральный округ, город или населенный пункт.  * &#x60;EXPRESS_DELIVERY&#x60; — экспресс-доставка покупателю.  * &#x60;SORTING&#x60; — обработка заказа.  * &#x60;MIDDLE_MILE&#x60; — средняя миля.  Подробнее об услугах Маркета читайте [в Справке для продавцов](https://yandex.ru/support/marketplace/introduction/rates/index.html).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CalculatedTariffType
{
    /**
     * Possible values of this enum
     */
    public const AGENCY_COMMISSION = 'AGENCY_COMMISSION';

    public const PAYMENT_TRANSFER = 'PAYMENT_TRANSFER';

    public const FEE = 'FEE';

    public const DELIVERY_TO_CUSTOMER = 'DELIVERY_TO_CUSTOMER';

    public const CROSSREGIONAL_DELIVERY = 'CROSSREGIONAL_DELIVERY';

    public const EXPRESS_DELIVERY = 'EXPRESS_DELIVERY';

    public const SORTING = 'SORTING';

    public const MIDDLE_MILE = 'MIDDLE_MILE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENCY_COMMISSION,
            self::PAYMENT_TRANSFER,
            self::FEE,
            self::DELIVERY_TO_CUSTOMER,
            self::CROSSREGIONAL_DELIVERY,
            self::EXPRESS_DELIVERY,
            self::SORTING,
            self::MIDDLE_MILE
        ];
    }
}



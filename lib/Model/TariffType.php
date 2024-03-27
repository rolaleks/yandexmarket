<?php
/**
 * TariffType
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
 * TariffType Class Doc Comment
 *
 * @category Class
 * @description Услуга Маркета, за которую начисляется тариф:  * &#x60;AGENCY_COMMISSION&#x60; — прием платежа покупателя.  * &#x60;PAYMENT_TRANSFER&#x60; — перевод платежа покупателя.  * &#x60;STORAGE&#x60; — хранение товара на складе Маркета в течение суток.  * &#x60;SURPLUS&#x60; — хранение излишков на складе Маркета.  * &#x60;WITHDRAW&#x60; — вывоз товара со склада Маркета.  * &#x60;FEE&#x60; — размещение товара на Маркете.  * &#x60;DELIVERY_TO_CUSTOMER&#x60; — доставка покупателю.  * &#x60;CROSSREGIONAL_DELIVERY&#x60; — доставка в федеральный округ, город или населенный пункт.  * &#x60;CROSSREGIONAL_DELIVERY_RETURN&#x60; — доставка невыкупов и возвратов.  * &#x60;DISPOSAL&#x60; — утилизация.  * &#x60;SORTING_CENTER_STORAGE&#x60; — хранение невыкупов и возвратов.  * &#x60;EXPRESS_DELIVERY&#x60; — экспресс-доставка покупателю.  * &#x60;FF_XDOC_SUPPLY_BOX&#x60; — поставка товара через транзитный склад (за короб).  * &#x60;FF_XDOC_SUPPLY_PALLET&#x60; — поставка товара через транзитный склад (за палету).  * &#x60;SORTING&#x60; — обработка заказа.  * &#x60;MIDDLE_MILE&#x60; — средняя миля.  * &#x60;RETURN_PROCESSING&#x60; — обработка невыкупов и возвратов.  * &#x60;EXPRESS_CANCELLED_BY_PARTNER&#x60; — отмена заказа с экспресс-доставкой.  * &#x60;DELIVERY_TO_CUSTOMER_RETURN&#x60; — возврат доставляемого товара на склад.  * &#x60;CROSSBORDER_DELIVERY&#x60; — доставка из-за рубежа.  * &#x60;INTAKE_SORTING_BULKY_CARGO&#x60; — сортировка заказов с крупногабаритными товарами, которые Маркет забрал со склада продавца.  * &#x60;INTAKE_SORTING_SMALL_GOODS&#x60; — сортировка заказов с малогабаритными товарами, которые Маркет забрал со склада продавца.  * &#x60;INTAKE_SORTING_DAILY&#x60; — организация забора заказов со склада продавца.  * &#x60;FF_STORAGE_BILLING&#x60; — хранения товаров на складе.  Подробнее об услугах Маркета читайте [в Справке для продавцов](https://yandex.ru/support/marketplace/introduction/rates/index.html).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TariffType
{
    /**
     * Possible values of this enum
     */
    public const AGENCY_COMMISSION = 'AGENCY_COMMISSION';

    public const PAYMENT_TRANSFER = 'PAYMENT_TRANSFER';

    public const STORAGE = 'STORAGE';

    public const WITHDRAW = 'WITHDRAW';

    public const SURPLUS = 'SURPLUS';

    public const FEE = 'FEE';

    public const DELIVERY_TO_CUSTOMER = 'DELIVERY_TO_CUSTOMER';

    public const CROSSREGIONAL_DELIVERY = 'CROSSREGIONAL_DELIVERY';

    public const CROSSREGIONAL_DELIVERY_RETURN = 'CROSSREGIONAL_DELIVERY_RETURN';

    public const DISPOSAL = 'DISPOSAL';

    public const SORTING_CENTER_STORAGE = 'SORTING_CENTER_STORAGE';

    public const EXPRESS_DELIVERY = 'EXPRESS_DELIVERY';

    public const FF_XDOC_SUPPLY_BOX = 'FF_XDOC_SUPPLY_BOX';

    public const FF_XDOC_SUPPLY_PALLET = 'FF_XDOC_SUPPLY_PALLET';

    public const SORTING = 'SORTING';

    public const MIDDLE_MILE = 'MIDDLE_MILE';

    public const RETURN_PROCESSING = 'RETURN_PROCESSING';

    public const EXPRESS_CANCELLED_BY_PARTNER = 'EXPRESS_CANCELLED_BY_PARTNER';

    public const DELIVERY_TO_CUSTOMER_RETURN = 'DELIVERY_TO_CUSTOMER_RETURN';

    public const CROSSBORDER_DELIVERY = 'CROSSBORDER_DELIVERY';

    public const INTAKE_SORTING_BULKY_CARGO = 'INTAKE_SORTING_BULKY_CARGO';

    public const INTAKE_SORTING_SMALL_GOODS = 'INTAKE_SORTING_SMALL_GOODS';

    public const INTAKE_SORTING_DAILY = 'INTAKE_SORTING_DAILY';

    public const FF_STORAGE_BILLING = 'FF_STORAGE_BILLING';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENCY_COMMISSION,
            self::PAYMENT_TRANSFER,
            self::STORAGE,
            self::WITHDRAW,
            self::SURPLUS,
            self::FEE,
            self::DELIVERY_TO_CUSTOMER,
            self::CROSSREGIONAL_DELIVERY,
            self::CROSSREGIONAL_DELIVERY_RETURN,
            self::DISPOSAL,
            self::SORTING_CENTER_STORAGE,
            self::EXPRESS_DELIVERY,
            self::FF_XDOC_SUPPLY_BOX,
            self::FF_XDOC_SUPPLY_PALLET,
            self::SORTING,
            self::MIDDLE_MILE,
            self::RETURN_PROCESSING,
            self::EXPRESS_CANCELLED_BY_PARTNER,
            self::DELIVERY_TO_CUSTOMER_RETURN,
            self::CROSSBORDER_DELIVERY,
            self::INTAKE_SORTING_BULKY_CARGO,
            self::INTAKE_SORTING_SMALL_GOODS,
            self::INTAKE_SORTING_DAILY,
            self::FF_STORAGE_BILLING
        ];
    }
}



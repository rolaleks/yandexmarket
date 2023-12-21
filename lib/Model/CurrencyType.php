<?php
/**
 * CurrencyType
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
 * CurrencyType Class Doc Comment
 *
 * @category Class
 * @description Коды валют. Возможные значения: * &#x60;BYR&#x60; — белорусский рубль. * &#x60;KZT&#x60; — казахстанский тенге. * &#x60;RUR&#x60; — российский рубль. * &#x60;UAH&#x60; — украинская гривна.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CurrencyType
{
    /**
     * Possible values of this enum
     */
    public const RUR = 'RUR';

    public const USD = 'USD';

    public const EUR = 'EUR';

    public const UAH = 'UAH';

    public const AUD = 'AUD';

    public const GBP = 'GBP';

    public const BYR = 'BYR';

    public const BYN = 'BYN';

    public const DKK = 'DKK';

    public const ISK = 'ISK';

    public const KZT = 'KZT';

    public const CAD = 'CAD';

    public const CNY = 'CNY';

    public const NOK = 'NOK';

    public const XDR = 'XDR';

    public const SGD = 'SGD';

    public const _TRY = 'TRY';

    public const SEK = 'SEK';

    public const CHF = 'CHF';

    public const JPY = 'JPY';

    public const AZN = 'AZN';

    public const ALL = 'ALL';

    public const DZD = 'DZD';

    public const AOA = 'AOA';

    public const ARS = 'ARS';

    public const AMD = 'AMD';

    public const AFN = 'AFN';

    public const BHD = 'BHD';

    public const BGN = 'BGN';

    public const BOB = 'BOB';

    public const BWP = 'BWP';

    public const BND = 'BND';

    public const BRL = 'BRL';

    public const BIF = 'BIF';

    public const HUF = 'HUF';

    public const VEF = 'VEF';

    public const KPW = 'KPW';

    public const VND = 'VND';

    public const GMD = 'GMD';

    public const GHS = 'GHS';

    public const GNF = 'GNF';

    public const HKD = 'HKD';

    public const GEL = 'GEL';

    public const AED = 'AED';

    public const EGP = 'EGP';

    public const ZMK = 'ZMK';

    public const ILS = 'ILS';

    public const INR = 'INR';

    public const IDR = 'IDR';

    public const JOD = 'JOD';

    public const IQD = 'IQD';

    public const IRR = 'IRR';

    public const YER = 'YER';

    public const QAR = 'QAR';

    public const KES = 'KES';

    public const KGS = 'KGS';

    public const COP = 'COP';

    public const CDF = 'CDF';

    public const CRC = 'CRC';

    public const KWD = 'KWD';

    public const CUP = 'CUP';

    public const LAK = 'LAK';

    public const LVL = 'LVL';

    public const SLL = 'SLL';

    public const LBP = 'LBP';

    public const LYD = 'LYD';

    public const SZL = 'SZL';

    public const LTL = 'LTL';

    public const MUR = 'MUR';

    public const MRO = 'MRO';

    public const MKD = 'MKD';

    public const MWK = 'MWK';

    public const MGA = 'MGA';

    public const MYR = 'MYR';

    public const MAD = 'MAD';

    public const MXN = 'MXN';

    public const MZN = 'MZN';

    public const MDL = 'MDL';

    public const MNT = 'MNT';

    public const NPR = 'NPR';

    public const NGN = 'NGN';

    public const NIO = 'NIO';

    public const NZD = 'NZD';

    public const OMR = 'OMR';

    public const PKR = 'PKR';

    public const PYG = 'PYG';

    public const PEN = 'PEN';

    public const PLN = 'PLN';

    public const KHR = 'KHR';

    public const SAR = 'SAR';

    public const RON = 'RON';

    public const SCR = 'SCR';

    public const SYP = 'SYP';

    public const SKK = 'SKK';

    public const SOS = 'SOS';

    public const SDG = 'SDG';

    public const SRD = 'SRD';

    public const TJS = 'TJS';

    public const THB = 'THB';

    public const TWD = 'TWD';

    public const BDT = 'BDT';

    public const TZS = 'TZS';

    public const TND = 'TND';

    public const TMM = 'TMM';

    public const UGX = 'UGX';

    public const UZS = 'UZS';

    public const UYU = 'UYU';

    public const PHP = 'PHP';

    public const DJF = 'DJF';

    public const XAF = 'XAF';

    public const XOF = 'XOF';

    public const HRK = 'HRK';

    public const CZK = 'CZK';

    public const CLP = 'CLP';

    public const LKR = 'LKR';

    public const EEK = 'EEK';

    public const ETB = 'ETB';

    public const RSD = 'RSD';

    public const ZAR = 'ZAR';

    public const KRW = 'KRW';

    public const NAD = 'NAD';

    public const TL = 'TL';

    public const UE = 'UE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RUR,
            self::USD,
            self::EUR,
            self::UAH,
            self::AUD,
            self::GBP,
            self::BYR,
            self::BYN,
            self::DKK,
            self::ISK,
            self::KZT,
            self::CAD,
            self::CNY,
            self::NOK,
            self::XDR,
            self::SGD,
            self::_TRY,
            self::SEK,
            self::CHF,
            self::JPY,
            self::AZN,
            self::ALL,
            self::DZD,
            self::AOA,
            self::ARS,
            self::AMD,
            self::AFN,
            self::BHD,
            self::BGN,
            self::BOB,
            self::BWP,
            self::BND,
            self::BRL,
            self::BIF,
            self::HUF,
            self::VEF,
            self::KPW,
            self::VND,
            self::GMD,
            self::GHS,
            self::GNF,
            self::HKD,
            self::GEL,
            self::AED,
            self::EGP,
            self::ZMK,
            self::ILS,
            self::INR,
            self::IDR,
            self::JOD,
            self::IQD,
            self::IRR,
            self::YER,
            self::QAR,
            self::KES,
            self::KGS,
            self::COP,
            self::CDF,
            self::CRC,
            self::KWD,
            self::CUP,
            self::LAK,
            self::LVL,
            self::SLL,
            self::LBP,
            self::LYD,
            self::SZL,
            self::LTL,
            self::MUR,
            self::MRO,
            self::MKD,
            self::MWK,
            self::MGA,
            self::MYR,
            self::MAD,
            self::MXN,
            self::MZN,
            self::MDL,
            self::MNT,
            self::NPR,
            self::NGN,
            self::NIO,
            self::NZD,
            self::OMR,
            self::PKR,
            self::PYG,
            self::PEN,
            self::PLN,
            self::KHR,
            self::SAR,
            self::RON,
            self::SCR,
            self::SYP,
            self::SKK,
            self::SOS,
            self::SDG,
            self::SRD,
            self::TJS,
            self::THB,
            self::TWD,
            self::BDT,
            self::TZS,
            self::TND,
            self::TMM,
            self::UGX,
            self::UZS,
            self::UYU,
            self::PHP,
            self::DJF,
            self::XAF,
            self::XOF,
            self::HRK,
            self::CZK,
            self::CLP,
            self::LKR,
            self::EEK,
            self::ETB,
            self::RSD,
            self::ZAR,
            self::KRW,
            self::NAD,
            self::TL,
            self::UE
        ];
    }
}



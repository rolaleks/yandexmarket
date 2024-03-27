<?php
/**
 * ModelOfferDTO
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ModelOfferDTO Class Doc Comment
 *
 * @category Class
 * @description Информация о предложении.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModelOfferDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModelOfferDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'discount' => 'int',
        'name' => 'string',
        'pos' => 'int',
        'pre_discount_price' => 'float',
        'price' => 'float',
        'region_id' => 'int',
        'shipping_cost' => 'float',
        'shop_name' => 'string',
        'shop_rating' => 'int',
        'in_stock' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'discount' => 'int32',
        'name' => null,
        'pos' => 'int32',
        'pre_discount_price' => null,
        'price' => null,
        'region_id' => 'int64',
        'shipping_cost' => null,
        'shop_name' => null,
        'shop_rating' => 'int32',
        'in_stock' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'discount' => false,
        'name' => false,
        'pos' => false,
        'pre_discount_price' => false,
        'price' => false,
        'region_id' => false,
        'shipping_cost' => false,
        'shop_name' => false,
        'shop_rating' => false,
        'in_stock' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'discount' => 'discount',
        'name' => 'name',
        'pos' => 'pos',
        'pre_discount_price' => 'preDiscountPrice',
        'price' => 'price',
        'region_id' => 'regionId',
        'shipping_cost' => 'shippingCost',
        'shop_name' => 'shopName',
        'shop_rating' => 'shopRating',
        'in_stock' => 'inStock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discount' => 'setDiscount',
        'name' => 'setName',
        'pos' => 'setPos',
        'pre_discount_price' => 'setPreDiscountPrice',
        'price' => 'setPrice',
        'region_id' => 'setRegionId',
        'shipping_cost' => 'setShippingCost',
        'shop_name' => 'setShopName',
        'shop_rating' => 'setShopRating',
        'in_stock' => 'setInStock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discount' => 'getDiscount',
        'name' => 'getName',
        'pos' => 'getPos',
        'pre_discount_price' => 'getPreDiscountPrice',
        'price' => 'getPrice',
        'region_id' => 'getRegionId',
        'shipping_cost' => 'getShippingCost',
        'shop_name' => 'getShopName',
        'shop_rating' => 'getShopRating',
        'in_stock' => 'getInStock'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('pos', $data ?? [], null);
        $this->setIfExists('pre_discount_price', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('region_id', $data ?? [], null);
        $this->setIfExists('shipping_cost', $data ?? [], null);
        $this->setIfExists('shop_name', $data ?? [], null);
        $this->setIfExists('shop_rating', $data ?? [], null);
        $this->setIfExists('in_stock', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets discount
     *
     * @return int|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param int|null $discount Скидка на предложение, в %.
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        if (is_null($discount)) {
            throw new \InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Наименование предложения.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pos
     *
     * @return int|null
     */
    public function getPos()
    {
        return $this->container['pos'];
    }

    /**
     * Sets pos
     *
     * @param int|null $pos Позиция предложения в выдаче Маркета на карточке модели.
     *
     * @return self
     */
    public function setPos($pos)
    {
        if (is_null($pos)) {
            throw new \InvalidArgumentException('non-nullable pos cannot be null');
        }
        $this->container['pos'] = $pos;

        return $this;
    }

    /**
     * Gets pre_discount_price
     *
     * @return float|null
     */
    public function getPreDiscountPrice()
    {
        return $this->container['pre_discount_price'];
    }

    /**
     * Sets pre_discount_price
     *
     * @param float|null $pre_discount_price Цена предложения без скидки магазина.
     *
     * @return self
     */
    public function setPreDiscountPrice($pre_discount_price)
    {
        if (is_null($pre_discount_price)) {
            throw new \InvalidArgumentException('non-nullable pre_discount_price cannot be null');
        }
        $this->container['pre_discount_price'] = $pre_discount_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Цена предложения без скидки, которую получает покупатель при оплате через Yandex Pay.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return int|null
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param int|null $region_id Идентификатор региона предложения (регион, откуда доставляется товар).  Сначала показываются предложения, доставляемые из региона, указанного в запросе в параметре `regionId`. Предложения, доставляемые из других регионов, показываются после них.
     *
     * @return self
     */
    public function setRegionId($region_id)
    {
        if (is_null($region_id)) {
            throw new \InvalidArgumentException('non-nullable region_id cannot be null');
        }
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return float|null
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param float|null $shipping_cost Стоимость доставки товара в регион.  Если значение параметра — `0`, доставка осуществляется бесплатно. Если значение параметра — `-1`, магазин не осуществляет доставку этого товара (самовывоз). Если стоимость доставки неизвестна, параметр не выводится.
     *
     * @return self
     */
    public function setShippingCost($shipping_cost)
    {
        if (is_null($shipping_cost)) {
            throw new \InvalidArgumentException('non-nullable shipping_cost cannot be null');
        }
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets shop_name
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shop_name'];
    }

    /**
     * Sets shop_name
     *
     * @param string|null $shop_name Название магазина (в том виде, в котором отображается на Маркете).
     *
     * @return self
     */
    public function setShopName($shop_name)
    {
        if (is_null($shop_name)) {
            throw new \InvalidArgumentException('non-nullable shop_name cannot be null');
        }
        $this->container['shop_name'] = $shop_name;

        return $this;
    }

    /**
     * Gets shop_rating
     *
     * @return int|null
     */
    public function getShopRating()
    {
        return $this->container['shop_rating'];
    }

    /**
     * Sets shop_rating
     *
     * @param int|null $shop_rating Рейтинг магазина.  Возможные значения: * `-1` — у магазинов, недавно появившихся на Маркете, рейтинг появляется не сразу. До момента появления рейтинга для таких магазинов возвращается значение `-1`. * `1`. * `2`. * `3`. * `4`. * `5`.
     *
     * @return self
     */
    public function setShopRating($shop_rating)
    {
        if (is_null($shop_rating)) {
            throw new \InvalidArgumentException('non-nullable shop_rating cannot be null');
        }
        $this->container['shop_rating'] = $shop_rating;

        return $this;
    }

    /**
     * Gets in_stock
     *
     * @return int|null
     * @deprecated
     */
    public function getInStock()
    {
        return $this->container['in_stock'];
    }

    /**
     * Sets in_stock
     *
     * @param int|null $in_stock {% note alert %}  Параметр устарел и не рекомендуется к использованию.  {% endnote %}
     *
     * @return self
     * @deprecated
     */
    public function setInStock($in_stock)
    {
        if (is_null($in_stock)) {
            throw new \InvalidArgumentException('non-nullable in_stock cannot be null');
        }
        $this->container['in_stock'] = $in_stock;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



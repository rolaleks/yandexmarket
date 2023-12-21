<?php
/**
 * ReturnDTO
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
 * ReturnDTO Class Doc Comment
 *
 * @category Class
 * @description Возврат заказа.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReturnDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'order_id' => 'int',
        'creation_date' => '\DateTime',
        'update_date' => '\DateTime',
        'refund_status' => '\OpenAPI\Client\Model\RefundStatusType',
        'logistic_pickup_point' => '\OpenAPI\Client\Model\LogisticPickupPointDTO',
        'shipment_recipient_type' => '\OpenAPI\Client\Model\RecipientType',
        'shipment_status' => '\OpenAPI\Client\Model\ReturnShipmentStatusType',
        'refund_amount' => 'int',
        'items' => '\OpenAPI\Client\Model\ReturnItemDTO[]',
        'return_type' => '\OpenAPI\Client\Model\ReturnType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'order_id' => 'int64',
        'creation_date' => 'date-time',
        'update_date' => 'date-time',
        'refund_status' => null,
        'logistic_pickup_point' => null,
        'shipment_recipient_type' => null,
        'shipment_status' => null,
        'refund_amount' => 'int64',
        'items' => null,
        'return_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'order_id' => false,
        'creation_date' => false,
        'update_date' => false,
        'refund_status' => false,
        'logistic_pickup_point' => false,
        'shipment_recipient_type' => false,
        'shipment_status' => false,
        'refund_amount' => false,
        'items' => false,
        'return_type' => false
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
        'id' => 'id',
        'order_id' => 'orderId',
        'creation_date' => 'creationDate',
        'update_date' => 'updateDate',
        'refund_status' => 'refundStatus',
        'logistic_pickup_point' => 'logisticPickupPoint',
        'shipment_recipient_type' => 'shipmentRecipientType',
        'shipment_status' => 'shipmentStatus',
        'refund_amount' => 'refundAmount',
        'items' => 'items',
        'return_type' => 'returnType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'order_id' => 'setOrderId',
        'creation_date' => 'setCreationDate',
        'update_date' => 'setUpdateDate',
        'refund_status' => 'setRefundStatus',
        'logistic_pickup_point' => 'setLogisticPickupPoint',
        'shipment_recipient_type' => 'setShipmentRecipientType',
        'shipment_status' => 'setShipmentStatus',
        'refund_amount' => 'setRefundAmount',
        'items' => 'setItems',
        'return_type' => 'setReturnType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'order_id' => 'getOrderId',
        'creation_date' => 'getCreationDate',
        'update_date' => 'getUpdateDate',
        'refund_status' => 'getRefundStatus',
        'logistic_pickup_point' => 'getLogisticPickupPoint',
        'shipment_recipient_type' => 'getShipmentRecipientType',
        'shipment_status' => 'getShipmentStatus',
        'refund_amount' => 'getRefundAmount',
        'items' => 'getItems',
        'return_type' => 'getReturnType'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('update_date', $data ?? [], null);
        $this->setIfExists('refund_status', $data ?? [], null);
        $this->setIfExists('logistic_pickup_point', $data ?? [], null);
        $this->setIfExists('shipment_recipient_type', $data ?? [], null);
        $this->setIfExists('shipment_status', $data ?? [], null);
        $this->setIfExists('refund_amount', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('return_type', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Идентификатор возврата.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id Номер заказа.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime|null $creation_date Дата создания возврата клиентом.
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            throw new \InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets update_date
     *
     * @return \DateTime|null
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime|null $update_date Дата обновления заказа.
     *
     * @return self
     */
    public function setUpdateDate($update_date)
    {
        if (is_null($update_date)) {
            throw new \InvalidArgumentException('non-nullable update_date cannot be null');
        }
        $this->container['update_date'] = $update_date;

        return $this;
    }

    /**
     * Gets refund_status
     *
     * @return \OpenAPI\Client\Model\RefundStatusType|null
     */
    public function getRefundStatus()
    {
        return $this->container['refund_status'];
    }

    /**
     * Sets refund_status
     *
     * @param \OpenAPI\Client\Model\RefundStatusType|null $refund_status refund_status
     *
     * @return self
     */
    public function setRefundStatus($refund_status)
    {
        if (is_null($refund_status)) {
            throw new \InvalidArgumentException('non-nullable refund_status cannot be null');
        }
        $this->container['refund_status'] = $refund_status;

        return $this;
    }

    /**
     * Gets logistic_pickup_point
     *
     * @return \OpenAPI\Client\Model\LogisticPickupPointDTO|null
     */
    public function getLogisticPickupPoint()
    {
        return $this->container['logistic_pickup_point'];
    }

    /**
     * Sets logistic_pickup_point
     *
     * @param \OpenAPI\Client\Model\LogisticPickupPointDTO|null $logistic_pickup_point logistic_pickup_point
     *
     * @return self
     */
    public function setLogisticPickupPoint($logistic_pickup_point)
    {
        if (is_null($logistic_pickup_point)) {
            throw new \InvalidArgumentException('non-nullable logistic_pickup_point cannot be null');
        }
        $this->container['logistic_pickup_point'] = $logistic_pickup_point;

        return $this;
    }

    /**
     * Gets shipment_recipient_type
     *
     * @return \OpenAPI\Client\Model\RecipientType|null
     */
    public function getShipmentRecipientType()
    {
        return $this->container['shipment_recipient_type'];
    }

    /**
     * Sets shipment_recipient_type
     *
     * @param \OpenAPI\Client\Model\RecipientType|null $shipment_recipient_type shipment_recipient_type
     *
     * @return self
     */
    public function setShipmentRecipientType($shipment_recipient_type)
    {
        if (is_null($shipment_recipient_type)) {
            throw new \InvalidArgumentException('non-nullable shipment_recipient_type cannot be null');
        }
        $this->container['shipment_recipient_type'] = $shipment_recipient_type;

        return $this;
    }

    /**
     * Gets shipment_status
     *
     * @return \OpenAPI\Client\Model\ReturnShipmentStatusType|null
     */
    public function getShipmentStatus()
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status
     *
     * @param \OpenAPI\Client\Model\ReturnShipmentStatusType|null $shipment_status shipment_status
     *
     * @return self
     */
    public function setShipmentStatus($shipment_status)
    {
        if (is_null($shipment_status)) {
            throw new \InvalidArgumentException('non-nullable shipment_status cannot be null');
        }
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return int|null
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param int|null $refund_amount Сумма возврата.
     *
     * @return self
     */
    public function setRefundAmount($refund_amount)
    {
        if (is_null($refund_amount)) {
            throw new \InvalidArgumentException('non-nullable refund_amount cannot be null');
        }
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\ReturnItemDTO[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\ReturnItemDTO[]|null $items Список товаров в возврате.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets return_type
     *
     * @return \OpenAPI\Client\Model\ReturnType|null
     */
    public function getReturnType()
    {
        return $this->container['return_type'];
    }

    /**
     * Sets return_type
     *
     * @param \OpenAPI\Client\Model\ReturnType|null $return_type return_type
     *
     * @return self
     */
    public function setReturnType($return_type)
    {
        if (is_null($return_type)) {
            throw new \InvalidArgumentException('non-nullable return_type cannot be null');
        }
        $this->container['return_type'] = $return_type;

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



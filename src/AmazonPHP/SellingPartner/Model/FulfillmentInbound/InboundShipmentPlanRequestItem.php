<?php declare(strict_types=1);
/**
 * InboundShipmentPlanRequestItem.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use Plenty\AmazonPHP\SellingPartner\ModelInterface;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InboundShipmentPlanRequestItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'InboundShipmentPlanRequestItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'seller_sku' => 'string',
        'asin' => 'string',
        'condition' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Condition',
        'quantity' => 'int',
        'quantity_in_case' => 'int',
        'prep_details_list' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepDetails[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'seller_sku' => null,
        'asin' => null,
        'condition' => null,
        'quantity' => 'int32',
        'quantity_in_case' => 'int32',
        'prep_details_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'seller_sku' => 'SellerSKU',
        'asin' => 'ASIN',
        'condition' => 'Condition',
        'quantity' => 'Quantity',
        'quantity_in_case' => 'QuantityInCase',
        'prep_details_list' => 'PrepDetailsList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'seller_sku' => 'setSellerSku',
        'asin' => 'setAsin',
        'condition' => 'setCondition',
        'quantity' => 'setQuantity',
        'quantity_in_case' => 'setQuantityInCase',
        'prep_details_list' => 'setPrepDetailsList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'seller_sku' => 'getSellerSku',
        'asin' => 'getAsin',
        'condition' => 'getCondition',
        'quantity' => 'getQuantity',
        'quantity_in_case' => 'getQuantityInCase',
        'prep_details_list' => 'getPrepDetailsList',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected /** [COMPAT] array */ $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['quantity_in_case'] = $data['quantity_in_case'] ?? null;
        $this->container['prep_details_list'] = $data['prep_details_list'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }

        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }

        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets seller_sku.
     */
    public function getSellerSku() : string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param string $seller_sku the seller SKU of the item
     */
    public function setSellerSku(string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets asin.
     */
    public function getAsin() : string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN) of the item
     */
    public function setAsin(string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets condition.
     */
    public function getCondition() : Condition
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Condition $condition condition
     */
    public function setCondition(Condition $condition) : self
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets quantity.
     */
    public function getQuantity() : int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param int $quantity the item quantity
     */
    public function setQuantity(int $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_in_case.
     */
    public function getQuantityInCase() : ?int
    {
        return $this->container['quantity_in_case'];
    }

    /**
     * Sets quantity_in_case.
     *
     * @param null|int $quantity_in_case the item quantity
     */
    public function setQuantityInCase(?int $quantity_in_case) : self
    {
        $this->container['quantity_in_case'] = $quantity_in_case;

        return $this;
    }

    /**
     * Gets prep_details_list.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepDetails[]
     */
    public function getPrepDetailsList() : ?array
    {
        return $this->container['prep_details_list'];
    }

    /**
     * Sets prep_details_list.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepDetails[] $prep_details_list a list of preparation instructions and who is responsible for that preparation
     */
    public function setPrepDetailsList(?array $prep_details_list) : self
    {
        $this->container['prep_details_list'] = $prep_details_list;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : mixed
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}

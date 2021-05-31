<?php declare(strict_types=1);
/**
 * InventoryDetails.
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
 * Selling Partner API for FBA Inventory.
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network. Today this API is available only in the North America region. In 2021 we plan to release this API in the Europe and Far East regions.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\FBAInventory;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InventoryDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'InventoryDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'fulfillableQuantity' => 'int',
        'inboundWorkingQuantity' => 'int',
        'inboundShippedQuantity' => 'int',
        'inboundReceivingQuantity' => 'int',
        'reservedQuantity' => '\AmazonPHP\SellingPartner\Model\FBAInventory\ReservedQuantity',
        'researchingQuantity' => '\AmazonPHP\SellingPartner\Model\FBAInventory\ResearchingQuantity',
        'unfulfillableQuantity' => '\AmazonPHP\SellingPartner\Model\FBAInventory\UnfulfillableQuantity',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'fulfillableQuantity' => null,
        'inboundWorkingQuantity' => null,
        'inboundShippedQuantity' => null,
        'inboundReceivingQuantity' => null,
        'reservedQuantity' => null,
        'researchingQuantity' => null,
        'unfulfillableQuantity' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillableQuantity' => 'fulfillableQuantity',
        'inboundWorkingQuantity' => 'inboundWorkingQuantity',
        'inboundShippedQuantity' => 'inboundShippedQuantity',
        'inboundReceivingQuantity' => 'inboundReceivingQuantity',
        'reservedQuantity' => 'reservedQuantity',
        'researchingQuantity' => 'researchingQuantity',
        'unfulfillableQuantity' => 'unfulfillableQuantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillableQuantity' => 'setFulfillableQuantity',
        'inboundWorkingQuantity' => 'setInboundWorkingQuantity',
        'inboundShippedQuantity' => 'setInboundShippedQuantity',
        'inboundReceivingQuantity' => 'setInboundReceivingQuantity',
        'reservedQuantity' => 'setReservedQuantity',
        'researchingQuantity' => 'setResearchingQuantity',
        'unfulfillableQuantity' => 'setUnfulfillableQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillableQuantity' => 'getFulfillableQuantity',
        'inboundWorkingQuantity' => 'getInboundWorkingQuantity',
        'inboundShippedQuantity' => 'getInboundShippedQuantity',
        'inboundReceivingQuantity' => 'getInboundReceivingQuantity',
        'reservedQuantity' => 'getReservedQuantity',
        'researchingQuantity' => 'getResearchingQuantity',
        'unfulfillableQuantity' => 'getUnfulfillableQuantity',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fulfillableQuantity'] = $data['fulfillableQuantity'] ?? null;
        $this->container['inboundWorkingQuantity'] = $data['inboundWorkingQuantity'] ?? null;
        $this->container['inboundShippedQuantity'] = $data['inboundShippedQuantity'] ?? null;
        $this->container['inboundReceivingQuantity'] = $data['inboundReceivingQuantity'] ?? null;
        $this->container['reservedQuantity'] = $data['reservedQuantity'] ?? null;
        $this->container['researchingQuantity'] = $data['researchingQuantity'] ?? null;
        $this->container['unfulfillableQuantity'] = $data['unfulfillableQuantity'] ?? null;
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
        return [];
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
     * Gets fulfillableQuantity.
     */
    public function getFulfillableQuantity() : ?int
    {
        return $this->container['fulfillableQuantity'];
    }

    /**
     * Sets fulfillableQuantity.
     *
     * @param null|int $fulfillableQuantity the item quantity that can be picked, packed, and shipped
     */
    public function setFulfillableQuantity(?int $fulfillableQuantity) : self
    {
        $this->container['fulfillableQuantity'] = $fulfillableQuantity;

        return $this;
    }

    /**
     * Gets inboundWorkingQuantity.
     */
    public function getInboundWorkingQuantity() : ?int
    {
        return $this->container['inboundWorkingQuantity'];
    }

    /**
     * Sets inboundWorkingQuantity.
     *
     * @param null|int $inboundWorkingQuantity the number of units in an inbound shipment for which you have notified Amazon
     */
    public function setInboundWorkingQuantity(?int $inboundWorkingQuantity) : self
    {
        $this->container['inboundWorkingQuantity'] = $inboundWorkingQuantity;

        return $this;
    }

    /**
     * Gets inboundShippedQuantity.
     */
    public function getInboundShippedQuantity() : ?int
    {
        return $this->container['inboundShippedQuantity'];
    }

    /**
     * Sets inboundShippedQuantity.
     *
     * @param null|int $inboundShippedQuantity the number of units in an inbound shipment that you have notified Amazon about and have provided a tracking number
     */
    public function setInboundShippedQuantity(?int $inboundShippedQuantity) : self
    {
        $this->container['inboundShippedQuantity'] = $inboundShippedQuantity;

        return $this;
    }

    /**
     * Gets inboundReceivingQuantity.
     */
    public function getInboundReceivingQuantity() : ?int
    {
        return $this->container['inboundReceivingQuantity'];
    }

    /**
     * Sets inboundReceivingQuantity.
     *
     * @param null|int $inboundReceivingQuantity the number of units that have not yet been received at an Amazon fulfillment center for processing, but are part of an inbound shipment with some units that have already been received and processed
     */
    public function setInboundReceivingQuantity(?int $inboundReceivingQuantity) : self
    {
        $this->container['inboundReceivingQuantity'] = $inboundReceivingQuantity;

        return $this;
    }

    /**
     * Gets reservedQuantity.
     */
    public function getReservedQuantity() : ?ReservedQuantity
    {
        return $this->container['reservedQuantity'];
    }

    /**
     * Sets reservedQuantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBAInventory\ReservedQuantity $reservedQuantity reservedQuantity
     */
    public function setReservedQuantity(?ReservedQuantity $reservedQuantity) : self
    {
        $this->container['reservedQuantity'] = $reservedQuantity;

        return $this;
    }

    /**
     * Gets researchingQuantity.
     */
    public function getResearchingQuantity() : ?ResearchingQuantity
    {
        return $this->container['researchingQuantity'];
    }

    /**
     * Sets researchingQuantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBAInventory\ResearchingQuantity $researchingQuantity researchingQuantity
     */
    public function setResearchingQuantity(?ResearchingQuantity $researchingQuantity) : self
    {
        $this->container['researchingQuantity'] = $researchingQuantity;

        return $this;
    }

    /**
     * Gets unfulfillableQuantity.
     */
    public function getUnfulfillableQuantity() : ?UnfulfillableQuantity
    {
        return $this->container['unfulfillableQuantity'];
    }

    /**
     * Sets unfulfillableQuantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBAInventory\UnfulfillableQuantity $unfulfillableQuantity unfulfillableQuantity
     */
    public function setUnfulfillableQuantity(?UnfulfillableQuantity $unfulfillableQuantity) : self
    {
        $this->container['unfulfillableQuantity'] = $unfulfillableQuantity;

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
    public function jsonSerialize() : string
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}

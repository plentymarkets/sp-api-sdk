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
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\FBAInventory;

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
    protected static /** [COMPAT] string */ $openAPIModelName = 'InventoryDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'fulfillable_quantity' => 'int',
        'inbound_working_quantity' => 'int',
        'inbound_shipped_quantity' => 'int',
        'inbound_receiving_quantity' => 'int',
        'reserved_quantity' => '\AmazonPHP\SellingPartner\Model\FBAInventory\ReservedQuantity',
        'researching_quantity' => '\AmazonPHP\SellingPartner\Model\FBAInventory\ResearchingQuantity',
        'unfulfillable_quantity' => '\AmazonPHP\SellingPartner\Model\FBAInventory\UnfulfillableQuantity',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'fulfillable_quantity' => null,
        'inbound_working_quantity' => null,
        'inbound_shipped_quantity' => null,
        'inbound_receiving_quantity' => null,
        'reserved_quantity' => null,
        'researching_quantity' => null,
        'unfulfillable_quantity' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'fulfillable_quantity' => 'fulfillableQuantity',
        'inbound_working_quantity' => 'inboundWorkingQuantity',
        'inbound_shipped_quantity' => 'inboundShippedQuantity',
        'inbound_receiving_quantity' => 'inboundReceivingQuantity',
        'reserved_quantity' => 'reservedQuantity',
        'researching_quantity' => 'researchingQuantity',
        'unfulfillable_quantity' => 'unfulfillableQuantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'fulfillable_quantity' => 'setFulfillableQuantity',
        'inbound_working_quantity' => 'setInboundWorkingQuantity',
        'inbound_shipped_quantity' => 'setInboundShippedQuantity',
        'inbound_receiving_quantity' => 'setInboundReceivingQuantity',
        'reserved_quantity' => 'setReservedQuantity',
        'researching_quantity' => 'setResearchingQuantity',
        'unfulfillable_quantity' => 'setUnfulfillableQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'fulfillable_quantity' => 'getFulfillableQuantity',
        'inbound_working_quantity' => 'getInboundWorkingQuantity',
        'inbound_shipped_quantity' => 'getInboundShippedQuantity',
        'inbound_receiving_quantity' => 'getInboundReceivingQuantity',
        'reserved_quantity' => 'getReservedQuantity',
        'researching_quantity' => 'getResearchingQuantity',
        'unfulfillable_quantity' => 'getUnfulfillableQuantity',
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
        $this->container['fulfillable_quantity'] = $data['fulfillable_quantity'] ?? null;
        $this->container['inbound_working_quantity'] = $data['inbound_working_quantity'] ?? null;
        $this->container['inbound_shipped_quantity'] = $data['inbound_shipped_quantity'] ?? null;
        $this->container['inbound_receiving_quantity'] = $data['inbound_receiving_quantity'] ?? null;
        $this->container['reserved_quantity'] = $data['reserved_quantity'] ?? null;
        $this->container['researching_quantity'] = $data['researching_quantity'] ?? null;
        $this->container['unfulfillable_quantity'] = $data['unfulfillable_quantity'] ?? null;
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
     * Gets fulfillable_quantity.
     */
    public function getFulfillableQuantity() : ?int
    {
        return $this->container['fulfillable_quantity'];
    }

    /**
     * Sets fulfillable_quantity.
     *
     * @param null|int $fulfillable_quantity the item quantity that can be picked, packed, and shipped
     */
    public function setFulfillableQuantity(?int $fulfillable_quantity) : self
    {
        $this->container['fulfillable_quantity'] = $fulfillable_quantity;

        return $this;
    }

    /**
     * Gets inbound_working_quantity.
     */
    public function getInboundWorkingQuantity() : ?int
    {
        return $this->container['inbound_working_quantity'];
    }

    /**
     * Sets inbound_working_quantity.
     *
     * @param null|int $inbound_working_quantity the number of units in an inbound shipment for which you have notified Amazon
     */
    public function setInboundWorkingQuantity(?int $inbound_working_quantity) : self
    {
        $this->container['inbound_working_quantity'] = $inbound_working_quantity;

        return $this;
    }

    /**
     * Gets inbound_shipped_quantity.
     */
    public function getInboundShippedQuantity() : ?int
    {
        return $this->container['inbound_shipped_quantity'];
    }

    /**
     * Sets inbound_shipped_quantity.
     *
     * @param null|int $inbound_shipped_quantity the number of units in an inbound shipment that you have notified Amazon about and have provided a tracking number
     */
    public function setInboundShippedQuantity(?int $inbound_shipped_quantity) : self
    {
        $this->container['inbound_shipped_quantity'] = $inbound_shipped_quantity;

        return $this;
    }

    /**
     * Gets inbound_receiving_quantity.
     */
    public function getInboundReceivingQuantity() : ?int
    {
        return $this->container['inbound_receiving_quantity'];
    }

    /**
     * Sets inbound_receiving_quantity.
     *
     * @param null|int $inbound_receiving_quantity the number of units that have not yet been received at an Amazon fulfillment center for processing, but are part of an inbound shipment with some units that have already been received and processed
     */
    public function setInboundReceivingQuantity(?int $inbound_receiving_quantity) : self
    {
        $this->container['inbound_receiving_quantity'] = $inbound_receiving_quantity;

        return $this;
    }

    /**
     * Gets reserved_quantity.
     */
    public function getReservedQuantity() : ?ReservedQuantity
    {
        return $this->container['reserved_quantity'];
    }

    /**
     * Sets reserved_quantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBAInventory\ReservedQuantity $reserved_quantity reserved_quantity
     */
    public function setReservedQuantity(?ReservedQuantity $reserved_quantity) : self
    {
        $this->container['reserved_quantity'] = $reserved_quantity;

        return $this;
    }

    /**
     * Gets researching_quantity.
     */
    public function getResearchingQuantity() : ?ResearchingQuantity
    {
        return $this->container['researching_quantity'];
    }

    /**
     * Sets researching_quantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBAInventory\ResearchingQuantity $researching_quantity researching_quantity
     */
    public function setResearchingQuantity(?ResearchingQuantity $researching_quantity) : self
    {
        $this->container['researching_quantity'] = $researching_quantity;

        return $this;
    }

    /**
     * Gets unfulfillable_quantity.
     */
    public function getUnfulfillableQuantity() : ?UnfulfillableQuantity
    {
        return $this->container['unfulfillable_quantity'];
    }

    /**
     * Sets unfulfillable_quantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBAInventory\UnfulfillableQuantity $unfulfillable_quantity unfulfillable_quantity
     */
    public function setUnfulfillableQuantity(?UnfulfillableQuantity $unfulfillable_quantity) : self
    {
        $this->container['unfulfillable_quantity'] = $unfulfillable_quantity;

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

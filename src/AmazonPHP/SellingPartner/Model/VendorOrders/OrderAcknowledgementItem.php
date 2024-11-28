<?php declare(strict_types=1);
/**
 * OrderAcknowledgementItem.
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
 * Selling Partner API for Retail Procurement Orders.
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\VendorOrders;

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
class OrderAcknowledgementItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'OrderAcknowledgementItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'item_sequence_number' => 'string',
        'amazon_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'ordered_quantity' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity',
        'net_cost' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\Money',
        'list_price' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\Money',
        'discount_multiplier' => 'string',
        'item_acknowledgements' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemAcknowledgement[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'item_sequence_number' => null,
        'amazon_product_identifier' => null,
        'vendor_product_identifier' => null,
        'ordered_quantity' => null,
        'net_cost' => null,
        'list_price' => null,
        'discount_multiplier' => null,
        'item_acknowledgements' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'item_sequence_number' => 'itemSequenceNumber',
        'amazon_product_identifier' => 'amazonProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'ordered_quantity' => 'orderedQuantity',
        'net_cost' => 'netCost',
        'list_price' => 'listPrice',
        'discount_multiplier' => 'discountMultiplier',
        'item_acknowledgements' => 'itemAcknowledgements',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'amazon_product_identifier' => 'setAmazonProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'ordered_quantity' => 'setOrderedQuantity',
        'net_cost' => 'setNetCost',
        'list_price' => 'setListPrice',
        'discount_multiplier' => 'setDiscountMultiplier',
        'item_acknowledgements' => 'setItemAcknowledgements',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'amazon_product_identifier' => 'getAmazonProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'ordered_quantity' => 'getOrderedQuantity',
        'net_cost' => 'getNetCost',
        'list_price' => 'getListPrice',
        'discount_multiplier' => 'getDiscountMultiplier',
        'item_acknowledgements' => 'getItemAcknowledgements',
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
        $this->container['item_sequence_number'] = $data['item_sequence_number'] ?? null;
        $this->container['amazon_product_identifier'] = $data['amazon_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['ordered_quantity'] = $data['ordered_quantity'] ?? null;
        $this->container['net_cost'] = $data['net_cost'] ?? null;
        $this->container['list_price'] = $data['list_price'] ?? null;
        $this->container['discount_multiplier'] = $data['discount_multiplier'] ?? null;
        $this->container['item_acknowledgements'] = $data['item_acknowledgements'] ?? null;
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

        if ($this->container['ordered_quantity'] === null) {
            $invalidProperties[] = "'ordered_quantity' can't be null";
        }

        if ($this->container['item_acknowledgements'] === null) {
            $invalidProperties[] = "'item_acknowledgements' can't be null";
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
     * Gets item_sequence_number.
     */
    public function getItemSequenceNumber() : ?string
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number.
     *
     * @param null|string $item_sequence_number line item sequence number for the item
     */
    public function setItemSequenceNumber(?string $item_sequence_number) : self
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets amazon_product_identifier.
     */
    public function getAmazonProductIdentifier() : ?string
    {
        return $this->container['amazon_product_identifier'];
    }

    /**
     * Sets amazon_product_identifier.
     *
     * @param null|string $amazon_product_identifier amazon Standard Identification Number (ASIN) of an item
     */
    public function setAmazonProductIdentifier(?string $amazon_product_identifier) : self
    {
        $this->container['amazon_product_identifier'] = $amazon_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier.
     */
    public function getVendorProductIdentifier() : ?string
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier.
     *
     * @param null|string $vendor_product_identifier The vendor selected product identification of the item. Should be the same as was sent in the purchase order.
     */
    public function setVendorProductIdentifier(?string $vendor_product_identifier) : self
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets ordered_quantity.
     */
    public function getOrderedQuantity() : ItemQuantity
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity $ordered_quantity ordered_quantity
     */
    public function setOrderedQuantity(ItemQuantity $ordered_quantity) : self
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }

    /**
     * Gets net_cost.
     */
    public function getNetCost() : ?Money
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\Money $net_cost net_cost
     */
    public function setNetCost(?Money $net_cost) : self
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }

    /**
     * Gets list_price.
     */
    public function getListPrice() : ?Money
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\Money $list_price list_price
     */
    public function setListPrice(?Money $list_price) : self
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets discount_multiplier.
     */
    public function getDiscountMultiplier() : ?string
    {
        return $this->container['discount_multiplier'];
    }

    /**
     * Sets discount_multiplier.
     *
     * @param null|string $discount_multiplier The discount multiplier that should be applied to the price if a vendor sells books with a list price. This is a multiplier factor to arrive at a final discounted price. A multiplier of .90 would be the factor if a 10% discount is given.
     */
    public function setDiscountMultiplier(?string $discount_multiplier) : self
    {
        $this->container['discount_multiplier'] = $discount_multiplier;

        return $this;
    }

    /**
     * Gets item_acknowledgements.
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemAcknowledgement[]
     */
    public function getItemAcknowledgements() : array
    {
        return $this->container['item_acknowledgements'];
    }

    /**
     * Sets item_acknowledgements.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemAcknowledgement[] $item_acknowledgements this is used to indicate acknowledged quantity
     */
    public function setItemAcknowledgements(array $item_acknowledgements) : self
    {
        $this->container['item_acknowledgements'] = $item_acknowledgements;

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
    public function offsetGet($offset): mixed
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

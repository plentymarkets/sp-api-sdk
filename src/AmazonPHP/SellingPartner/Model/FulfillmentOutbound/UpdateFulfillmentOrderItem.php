<?php declare(strict_types=1);
/**
 * UpdateFulfillmentOrderItem.
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
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class UpdateFulfillmentOrderItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'UpdateFulfillmentOrderItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'seller_sku' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'quantity' => 'int',
        'gift_message' => 'string',
        'displayable_comment' => 'string',
        'fulfillment_network_sku' => 'string',
        'order_item_disposition' => 'string',
        'per_unit_declared_value' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'per_unit_price' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'per_unit_tax' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
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
        'seller_fulfillment_order_item_id' => null,
        'quantity' => 'int32',
        'gift_message' => null,
        'displayable_comment' => null,
        'fulfillment_network_sku' => null,
        'order_item_disposition' => null,
        'per_unit_declared_value' => null,
        'per_unit_price' => null,
        'per_unit_tax' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'seller_sku' => 'sellerSku',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'quantity' => 'quantity',
        'gift_message' => 'giftMessage',
        'displayable_comment' => 'displayableComment',
        'fulfillment_network_sku' => 'fulfillmentNetworkSku',
        'order_item_disposition' => 'orderItemDisposition',
        'per_unit_declared_value' => 'perUnitDeclaredValue',
        'per_unit_price' => 'perUnitPrice',
        'per_unit_tax' => 'perUnitTax',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'seller_sku' => 'setSellerSku',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'quantity' => 'setQuantity',
        'gift_message' => 'setGiftMessage',
        'displayable_comment' => 'setDisplayableComment',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'order_item_disposition' => 'setOrderItemDisposition',
        'per_unit_declared_value' => 'setPerUnitDeclaredValue',
        'per_unit_price' => 'setPerUnitPrice',
        'per_unit_tax' => 'setPerUnitTax',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'seller_sku' => 'getSellerSku',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'quantity' => 'getQuantity',
        'gift_message' => 'getGiftMessage',
        'displayable_comment' => 'getDisplayableComment',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'order_item_disposition' => 'getOrderItemDisposition',
        'per_unit_declared_value' => 'getPerUnitDeclaredValue',
        'per_unit_price' => 'getPerUnitPrice',
        'per_unit_tax' => 'getPerUnitTax',
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
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['gift_message'] = $data['gift_message'] ?? null;
        $this->container['displayable_comment'] = $data['displayable_comment'] ?? null;
        $this->container['fulfillment_network_sku'] = $data['fulfillment_network_sku'] ?? null;
        $this->container['order_item_disposition'] = $data['order_item_disposition'] ?? null;
        $this->container['per_unit_declared_value'] = $data['per_unit_declared_value'] ?? null;
        $this->container['per_unit_price'] = $data['per_unit_price'] ?? null;
        $this->container['per_unit_tax'] = $data['per_unit_tax'] ?? null;
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

        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }

        if ((\mb_strlen($this->container['seller_fulfillment_order_item_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }

        if (null !== $this->container['gift_message'] && (\mb_strlen($this->container['gift_message']) > 512)) {
            $invalidProperties[] = "invalid value for 'gift_message', the character length must be smaller than or equal to 512.";
        }

        if (null !== $this->container['displayable_comment'] && (\mb_strlen($this->container['displayable_comment']) > 250)) {
            $invalidProperties[] = "invalid value for 'displayable_comment', the character length must be smaller than or equal to 250.";
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
    public function getSellerSku() : ?string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param null|string $seller_sku the seller SKU of the item
     */
    public function setSellerSku(?string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     */
    public function getSellerFulfillmentOrderItemId() : string
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id Identifies the fulfillment order item to update. Created with a previous call to the createFulfillmentOrder operation.
     */
    public function setSellerFulfillmentOrderItemId(string $seller_fulfillment_order_item_id) : self
    {
        if ((\mb_strlen($seller_fulfillment_order_item_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $seller_fulfillment_order_item_id when calling UpdateFulfillmentOrderItem., must be smaller than or equal to 50.');
        }

        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

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
     * Gets gift_message.
     */
    public function getGiftMessage() : ?string
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message.
     *
     * @param null|string $gift_message a message to the gift recipient, if applicable
     */
    public function setGiftMessage(?string $gift_message) : self
    {
        if (null !== $gift_message && (\mb_strlen($gift_message) > 512)) {
            throw new \InvalidArgumentException('invalid length for $gift_message when calling UpdateFulfillmentOrderItem., must be smaller than or equal to 512.');
        }

        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    /**
     * Gets displayable_comment.
     */
    public function getDisplayableComment() : ?string
    {
        return $this->container['displayable_comment'];
    }

    /**
     * Sets displayable_comment.
     *
     * @param null|string $displayable_comment item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip
     */
    public function setDisplayableComment(?string $displayable_comment) : self
    {
        if (null !== $displayable_comment && (\mb_strlen($displayable_comment) > 250)) {
            throw new \InvalidArgumentException('invalid length for $displayable_comment when calling UpdateFulfillmentOrderItem., must be smaller than or equal to 250.');
        }

        $this->container['displayable_comment'] = $displayable_comment;

        return $this;
    }

    /**
     * Gets fulfillment_network_sku.
     */
    public function getFulfillmentNetworkSku() : ?string
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku.
     *
     * @param null|string $fulfillment_network_sku amazon's fulfillment network SKU of the item
     */
    public function setFulfillmentNetworkSku(?string $fulfillment_network_sku) : self
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets order_item_disposition.
     */
    public function getOrderItemDisposition() : ?string
    {
        return $this->container['order_item_disposition'];
    }

    /**
     * Sets order_item_disposition.
     *
     * @param null|string $order_item_disposition indicates whether the item is sellable or unsellable
     */
    public function setOrderItemDisposition(?string $order_item_disposition) : self
    {
        $this->container['order_item_disposition'] = $order_item_disposition;

        return $this;
    }

    /**
     * Gets per_unit_declared_value.
     */
    public function getPerUnitDeclaredValue() : ?Money
    {
        return $this->container['per_unit_declared_value'];
    }

    /**
     * Sets per_unit_declared_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $per_unit_declared_value per_unit_declared_value
     */
    public function setPerUnitDeclaredValue(?Money $per_unit_declared_value) : self
    {
        $this->container['per_unit_declared_value'] = $per_unit_declared_value;

        return $this;
    }

    /**
     * Gets per_unit_price.
     */
    public function getPerUnitPrice() : ?Money
    {
        return $this->container['per_unit_price'];
    }

    /**
     * Sets per_unit_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $per_unit_price per_unit_price
     */
    public function setPerUnitPrice(?Money $per_unit_price) : self
    {
        $this->container['per_unit_price'] = $per_unit_price;

        return $this;
    }

    /**
     * Gets per_unit_tax.
     */
    public function getPerUnitTax() : ?Money
    {
        return $this->container['per_unit_tax'];
    }

    /**
     * Sets per_unit_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $per_unit_tax per_unit_tax
     */
    public function setPerUnitTax(?Money $per_unit_tax) : self
    {
        $this->container['per_unit_tax'] = $per_unit_tax;

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

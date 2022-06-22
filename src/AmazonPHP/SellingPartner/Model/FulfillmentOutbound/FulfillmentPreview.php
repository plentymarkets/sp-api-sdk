<?php declare(strict_types=1);
/**
 * FulfillmentPreview.
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
class FulfillmentPreview implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'FulfillmentPreview';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'shipping_speed_category' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory',
        'scheduled_delivery_info' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ScheduledDeliveryInfo',
        'is_fulfillable' => 'bool',
        'is_cod_capable' => 'bool',
        'estimated_shipping_weight' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Weight',
        'estimated_fees' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Fee[]',
        'fulfillment_preview_shipments' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewShipment[]',
        'unfulfillable_preview_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UnfulfillablePreviewItem[]',
        'order_unfulfillable_reasons' => 'string[]',
        'marketplace_id' => 'string',
        'feature_constraints' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'shipping_speed_category' => null,
        'scheduled_delivery_info' => null,
        'is_fulfillable' => null,
        'is_cod_capable' => null,
        'estimated_shipping_weight' => null,
        'estimated_fees' => null,
        'fulfillment_preview_shipments' => null,
        'unfulfillable_preview_items' => null,
        'order_unfulfillable_reasons' => null,
        'marketplace_id' => null,
        'feature_constraints' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'shipping_speed_category' => 'shippingSpeedCategory',
        'scheduled_delivery_info' => 'scheduledDeliveryInfo',
        'is_fulfillable' => 'isFulfillable',
        'is_cod_capable' => 'isCODCapable',
        'estimated_shipping_weight' => 'estimatedShippingWeight',
        'estimated_fees' => 'estimatedFees',
        'fulfillment_preview_shipments' => 'fulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'unfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'orderUnfulfillableReasons',
        'marketplace_id' => 'marketplaceId',
        'feature_constraints' => 'featureConstraints',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'shipping_speed_category' => 'setShippingSpeedCategory',
        'scheduled_delivery_info' => 'setScheduledDeliveryInfo',
        'is_fulfillable' => 'setIsFulfillable',
        'is_cod_capable' => 'setIsCodCapable',
        'estimated_shipping_weight' => 'setEstimatedShippingWeight',
        'estimated_fees' => 'setEstimatedFees',
        'fulfillment_preview_shipments' => 'setFulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'setUnfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'setOrderUnfulfillableReasons',
        'marketplace_id' => 'setMarketplaceId',
        'feature_constraints' => 'setFeatureConstraints',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'shipping_speed_category' => 'getShippingSpeedCategory',
        'scheduled_delivery_info' => 'getScheduledDeliveryInfo',
        'is_fulfillable' => 'getIsFulfillable',
        'is_cod_capable' => 'getIsCodCapable',
        'estimated_shipping_weight' => 'getEstimatedShippingWeight',
        'estimated_fees' => 'getEstimatedFees',
        'fulfillment_preview_shipments' => 'getFulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'getUnfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'getOrderUnfulfillableReasons',
        'marketplace_id' => 'getMarketplaceId',
        'feature_constraints' => 'getFeatureConstraints',
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
        $this->container['shipping_speed_category'] = $data['shipping_speed_category'] ?? null;
        $this->container['scheduled_delivery_info'] = $data['scheduled_delivery_info'] ?? null;
        $this->container['is_fulfillable'] = $data['is_fulfillable'] ?? null;
        $this->container['is_cod_capable'] = $data['is_cod_capable'] ?? null;
        $this->container['estimated_shipping_weight'] = $data['estimated_shipping_weight'] ?? null;
        $this->container['estimated_fees'] = $data['estimated_fees'] ?? null;
        $this->container['fulfillment_preview_shipments'] = $data['fulfillment_preview_shipments'] ?? null;
        $this->container['unfulfillable_preview_items'] = $data['unfulfillable_preview_items'] ?? null;
        $this->container['order_unfulfillable_reasons'] = $data['order_unfulfillable_reasons'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
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

        if ($this->container['shipping_speed_category'] === null) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }

        if ($this->container['is_fulfillable'] === null) {
            $invalidProperties[] = "'is_fulfillable' can't be null";
        }

        if ($this->container['is_cod_capable'] === null) {
            $invalidProperties[] = "'is_cod_capable' can't be null";
        }

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
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
     * Gets shipping_speed_category.
     */
    public function getShippingSpeedCategory() : ShippingSpeedCategory
    {
        return $this->container['shipping_speed_category'];
    }

    /**
     * Sets shipping_speed_category.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory $shipping_speed_category shipping_speed_category
     */
    public function setShippingSpeedCategory(ShippingSpeedCategory $shipping_speed_category) : self
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    /**
     * Gets scheduled_delivery_info.
     */
    public function getScheduledDeliveryInfo() : ?ScheduledDeliveryInfo
    {
        return $this->container['scheduled_delivery_info'];
    }

    /**
     * Sets scheduled_delivery_info.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ScheduledDeliveryInfo $scheduled_delivery_info scheduled_delivery_info
     */
    public function setScheduledDeliveryInfo(?ScheduledDeliveryInfo $scheduled_delivery_info) : self
    {
        $this->container['scheduled_delivery_info'] = $scheduled_delivery_info;

        return $this;
    }

    /**
     * Gets is_fulfillable.
     */
    public function getIsFulfillable() : bool
    {
        return $this->container['is_fulfillable'];
    }

    /**
     * Sets is_fulfillable.
     *
     * @param bool $is_fulfillable when true, this fulfillment order preview is fulfillable
     */
    public function setIsFulfillable(bool $is_fulfillable) : self
    {
        $this->container['is_fulfillable'] = $is_fulfillable;

        return $this;
    }

    /**
     * Gets is_cod_capable.
     */
    public function getIsCodCapable() : bool
    {
        return $this->container['is_cod_capable'];
    }

    /**
     * Sets is_cod_capable.
     *
     * @param bool $is_cod_capable when true, this fulfillment order preview is for COD (Cash On Delivery)
     */
    public function setIsCodCapable(bool $is_cod_capable) : self
    {
        $this->container['is_cod_capable'] = $is_cod_capable;

        return $this;
    }

    /**
     * Gets estimated_shipping_weight.
     */
    public function getEstimatedShippingWeight() : ?Weight
    {
        return $this->container['estimated_shipping_weight'];
    }

    /**
     * Sets estimated_shipping_weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Weight $estimated_shipping_weight estimated_shipping_weight
     */
    public function setEstimatedShippingWeight(?Weight $estimated_shipping_weight) : self
    {
        $this->container['estimated_shipping_weight'] = $estimated_shipping_weight;

        return $this;
    }

    /**
     * Gets estimated_fees.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Fee[]
     */
    public function getEstimatedFees() : ?array
    {
        return $this->container['estimated_fees'];
    }

    /**
     * Sets estimated_fees.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Fee[] $estimated_fees an array of fee type and cost pairs
     */
    public function setEstimatedFees(?array $estimated_fees) : self
    {
        $this->container['estimated_fees'] = $estimated_fees;

        return $this;
    }

    /**
     * Gets fulfillment_preview_shipments.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewShipment[]
     */
    public function getFulfillmentPreviewShipments() : ?array
    {
        return $this->container['fulfillment_preview_shipments'];
    }

    /**
     * Sets fulfillment_preview_shipments.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewShipment[] $fulfillment_preview_shipments an array of fulfillment preview shipment information
     */
    public function setFulfillmentPreviewShipments(?array $fulfillment_preview_shipments) : self
    {
        $this->container['fulfillment_preview_shipments'] = $fulfillment_preview_shipments;

        return $this;
    }

    /**
     * Gets unfulfillable_preview_items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UnfulfillablePreviewItem[]
     */
    public function getUnfulfillablePreviewItems() : ?array
    {
        return $this->container['unfulfillable_preview_items'];
    }

    /**
     * Sets unfulfillable_preview_items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UnfulfillablePreviewItem[] $unfulfillable_preview_items an array of unfulfillable preview item information
     */
    public function setUnfulfillablePreviewItems(?array $unfulfillable_preview_items) : self
    {
        $this->container['unfulfillable_preview_items'] = $unfulfillable_preview_items;

        return $this;
    }

    /**
     * Gets order_unfulfillable_reasons.
     *
     * @return null|string[]
     */
    public function getOrderUnfulfillableReasons() : ?array
    {
        return $this->container['order_unfulfillable_reasons'];
    }

    /**
     * Sets order_unfulfillable_reasons.
     *
     * @param null|string[] $order_unfulfillable_reasons order_unfulfillable_reasons
     */
    public function setOrderUnfulfillableReasons(?array $order_unfulfillable_reasons) : self
    {
        $this->container['order_unfulfillable_reasons'] = $order_unfulfillable_reasons;

        return $this;
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the marketplace the fulfillment order is placed against
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets feature_constraints.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]
     */
    public function getFeatureConstraints() : ?array
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[] $feature_constraints a list of features and their fulfillment policies to apply to the order
     */
    public function setFeatureConstraints(?array $feature_constraints) : self
    {
        $this->container['feature_constraints'] = $feature_constraints;

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

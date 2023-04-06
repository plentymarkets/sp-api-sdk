<?php declare(strict_types=1);
/**
 * GetFulfillmentPreviewRequest.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class GetFulfillmentPreviewRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'GetFulfillmentPreviewRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'marketplace_id' => 'string',
        'address' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address',
        'items' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewItem[]',
        'shipping_speed_categories' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory[]',
        'include_cod_fulfillment_preview' => 'bool',
        'include_delivery_windows' => 'bool',
        'feature_constraints' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'marketplace_id' => null,
        'address' => null,
        'items' => null,
        'shipping_speed_categories' => null,
        'include_cod_fulfillment_preview' => null,
        'include_delivery_windows' => null,
        'feature_constraints' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'address' => 'address',
        'items' => 'items',
        'shipping_speed_categories' => 'shippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'includeCODFulfillmentPreview',
        'include_delivery_windows' => 'includeDeliveryWindows',
        'feature_constraints' => 'featureConstraints',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'address' => 'setAddress',
        'items' => 'setItems',
        'shipping_speed_categories' => 'setShippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'setIncludeCodFulfillmentPreview',
        'include_delivery_windows' => 'setIncludeDeliveryWindows',
        'feature_constraints' => 'setFeatureConstraints',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'address' => 'getAddress',
        'items' => 'getItems',
        'shipping_speed_categories' => 'getShippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'getIncludeCodFulfillmentPreview',
        'include_delivery_windows' => 'getIncludeDeliveryWindows',
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['shipping_speed_categories'] = $data['shipping_speed_categories'] ?? null;
        $this->container['include_cod_fulfillment_preview'] = $data['include_cod_fulfillment_preview'] ?? null;
        $this->container['include_delivery_windows'] = $data['include_delivery_windows'] ?? null;
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

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param null|string $marketplace_id the marketplace the fulfillment order is placed against
     */
    public function setMarketplaceId(?string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets address.
     */
    public function getAddress() : Address
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address $address address
     */
    public function setAddress(Address $address) : self
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewItem[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewItem[] $items an array of fulfillment preview item information
     */
    public function setItems(array $items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets shipping_speed_categories.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory[]
     */
    public function getShippingSpeedCategories() : ?array
    {
        return $this->container['shipping_speed_categories'];
    }

    /**
     * Sets shipping_speed_categories.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory[] $shipping_speed_categories shipping_speed_categories
     */
    public function setShippingSpeedCategories(?array $shipping_speed_categories) : self
    {
        $this->container['shipping_speed_categories'] = $shipping_speed_categories;

        return $this;
    }

    /**
     * Gets include_cod_fulfillment_preview.
     */
    public function getIncludeCodFulfillmentPreview() : ?bool
    {
        return $this->container['include_cod_fulfillment_preview'];
    }

    /**
     * Sets include_cod_fulfillment_preview.
     *
     * @param null|bool $include_cod_fulfillment_preview Specifies whether to return fulfillment order previews that are for COD (Cash On Delivery).  Possible values:  * true - Returns all fulfillment order previews (both for COD and not for COD). * false - Returns only fulfillment order previews that are not for COD.
     */
    public function setIncludeCodFulfillmentPreview(?bool $include_cod_fulfillment_preview) : self
    {
        $this->container['include_cod_fulfillment_preview'] = $include_cod_fulfillment_preview;

        return $this;
    }

    /**
     * Gets include_delivery_windows.
     */
    public function getIncludeDeliveryWindows() : ?bool
    {
        return $this->container['include_delivery_windows'];
    }

    /**
     * Sets include_delivery_windows.
     *
     * @param null|bool $include_delivery_windows Specifies whether to return the ScheduledDeliveryInfo response object, which contains the available delivery windows for a Scheduled Delivery. The ScheduledDeliveryInfo response object can only be returned for fulfillment order previews with ShippingSpeedCategories = ScheduledDelivery.
     */
    public function setIncludeDeliveryWindows(?bool $include_delivery_windows) : self
    {
        $this->container['include_delivery_windows'] = $include_delivery_windows;

        return $this;
    }

    /**
     * Gets feature_constraints.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]
     */
    public function getFeatureConstraints() : ?array
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[] $feature_constraints a list of features and their fulfillment policies to apply to the order
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

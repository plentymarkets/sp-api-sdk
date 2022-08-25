<?php declare(strict_types=1);
/**
 * LabelData.
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
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping;

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
class LabelData implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'LabelData';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'package_identifier' => 'string',
        'tracking_number' => 'string',
        'ship_method' => 'string',
        'ship_method_name' => 'string',
        'content' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'package_identifier' => null,
        'tracking_number' => null,
        'ship_method' => null,
        'ship_method_name' => null,
        'content' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'package_identifier' => 'packageIdentifier',
        'tracking_number' => 'trackingNumber',
        'ship_method' => 'shipMethod',
        'ship_method_name' => 'shipMethodName',
        'content' => 'content',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'package_identifier' => 'setPackageIdentifier',
        'tracking_number' => 'setTrackingNumber',
        'ship_method' => 'setShipMethod',
        'ship_method_name' => 'setShipMethodName',
        'content' => 'setContent',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'package_identifier' => 'getPackageIdentifier',
        'tracking_number' => 'getTrackingNumber',
        'ship_method' => 'getShipMethod',
        'ship_method_name' => 'getShipMethodName',
        'content' => 'getContent',
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
        $this->container['package_identifier'] = $data['package_identifier'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['ship_method'] = $data['ship_method'] ?? null;
        $this->container['ship_method_name'] = $data['ship_method_name'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
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

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
     * Gets package_identifier.
     */
    public function getPackageIdentifier() : ?string
    {
        return $this->container['package_identifier'];
    }

    /**
     * Sets package_identifier.
     *
     * @param null|string $package_identifier Identifier for the package. The first package will be 001, the second 002, and so on. This number is used as a reference to refer to this package from the pallet level.
     */
    public function setPackageIdentifier(?string $package_identifier) : self
    {
        $this->container['package_identifier'] = $package_identifier;

        return $this;
    }

    /**
     * Gets tracking_number.
     */
    public function getTrackingNumber() : ?string
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param null|string $tracking_number package tracking identifier from the shipping carrier
     */
    public function setTrackingNumber(?string $tracking_number) : self
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets ship_method.
     */
    public function getShipMethod() : ?string
    {
        return $this->container['ship_method'];
    }

    /**
     * Sets ship_method.
     *
     * @param null|string $ship_method Ship method to be used for shipping the order. Amazon defines Ship Method Codes indicating shipping carrier and shipment service level. Ship Method Codes are case and format sensitive. The same ship method code should returned on the shipment confirmation. Note that the Ship Method Codes are vendor specific and will be provided to each vendor during the implementation.
     */
    public function setShipMethod(?string $ship_method) : self
    {
        $this->container['ship_method'] = $ship_method;

        return $this;
    }

    /**
     * Gets ship_method_name.
     */
    public function getShipMethodName() : ?string
    {
        return $this->container['ship_method_name'];
    }

    /**
     * Sets ship_method_name.
     *
     * @param null|string $ship_method_name shipping method name for internal reference
     */
    public function setShipMethodName(?string $ship_method_name) : self
    {
        $this->container['ship_method_name'] = $ship_method_name;

        return $this;
    }

    /**
     * Gets content.
     */
    public function getContent() : string
    {
        return $this->container['content'];
    }

    /**
     * Sets content.
     *
     * @param string $content this field will contain the Base64encoded string of the shipment label content
     */
    public function setContent(string $content) : self
    {
        $this->container['content'] = $content;

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

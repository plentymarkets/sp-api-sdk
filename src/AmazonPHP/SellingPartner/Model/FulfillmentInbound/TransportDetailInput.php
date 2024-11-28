<?php declare(strict_types=1);
/**
 * TransportDetailInput.
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
class TransportDetailInput implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'TransportDetailInput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'partnered_small_parcel_data' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelDataInput',
        'non_partnered_small_parcel_data' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\NonPartneredSmallParcelDataInput',
        'partnered_ltl_data' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredLtlDataInput',
        'non_partnered_ltl_data' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\NonPartneredLtlDataInput',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'partnered_small_parcel_data' => null,
        'non_partnered_small_parcel_data' => null,
        'partnered_ltl_data' => null,
        'non_partnered_ltl_data' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'partnered_small_parcel_data' => 'PartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'NonPartneredSmallParcelData',
        'partnered_ltl_data' => 'PartneredLtlData',
        'non_partnered_ltl_data' => 'NonPartneredLtlData',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'partnered_small_parcel_data' => 'setPartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'setNonPartneredSmallParcelData',
        'partnered_ltl_data' => 'setPartneredLtlData',
        'non_partnered_ltl_data' => 'setNonPartneredLtlData',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'partnered_small_parcel_data' => 'getPartneredSmallParcelData',
        'non_partnered_small_parcel_data' => 'getNonPartneredSmallParcelData',
        'partnered_ltl_data' => 'getPartneredLtlData',
        'non_partnered_ltl_data' => 'getNonPartneredLtlData',
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
        $this->container['partnered_small_parcel_data'] = $data['partnered_small_parcel_data'] ?? null;
        $this->container['non_partnered_small_parcel_data'] = $data['non_partnered_small_parcel_data'] ?? null;
        $this->container['partnered_ltl_data'] = $data['partnered_ltl_data'] ?? null;
        $this->container['non_partnered_ltl_data'] = $data['non_partnered_ltl_data'] ?? null;
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
     * Gets partnered_small_parcel_data.
     */
    public function getPartneredSmallParcelData() : ?PartneredSmallParcelDataInput
    {
        return $this->container['partnered_small_parcel_data'];
    }

    /**
     * Sets partnered_small_parcel_data.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelDataInput $partnered_small_parcel_data partnered_small_parcel_data
     */
    public function setPartneredSmallParcelData(?PartneredSmallParcelDataInput $partnered_small_parcel_data) : self
    {
        $this->container['partnered_small_parcel_data'] = $partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets non_partnered_small_parcel_data.
     */
    public function getNonPartneredSmallParcelData() : ?NonPartneredSmallParcelDataInput
    {
        return $this->container['non_partnered_small_parcel_data'];
    }

    /**
     * Sets non_partnered_small_parcel_data.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\NonPartneredSmallParcelDataInput $non_partnered_small_parcel_data non_partnered_small_parcel_data
     */
    public function setNonPartneredSmallParcelData(?NonPartneredSmallParcelDataInput $non_partnered_small_parcel_data) : self
    {
        $this->container['non_partnered_small_parcel_data'] = $non_partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets partnered_ltl_data.
     */
    public function getPartneredLtlData() : ?PartneredLtlDataInput
    {
        return $this->container['partnered_ltl_data'];
    }

    /**
     * Sets partnered_ltl_data.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredLtlDataInput $partnered_ltl_data partnered_ltl_data
     */
    public function setPartneredLtlData(?PartneredLtlDataInput $partnered_ltl_data) : self
    {
        $this->container['partnered_ltl_data'] = $partnered_ltl_data;

        return $this;
    }

    /**
     * Gets non_partnered_ltl_data.
     */
    public function getNonPartneredLtlData() : ?NonPartneredLtlDataInput
    {
        return $this->container['non_partnered_ltl_data'];
    }

    /**
     * Sets non_partnered_ltl_data.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\NonPartneredLtlDataInput $non_partnered_ltl_data non_partnered_ltl_data
     */
    public function setNonPartneredLtlData(?NonPartneredLtlDataInput $non_partnered_ltl_data) : self
    {
        $this->container['non_partnered_ltl_data'] = $non_partnered_ltl_data;

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

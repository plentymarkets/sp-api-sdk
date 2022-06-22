<?php declare(strict_types=1);
/**
 * FeesEstimateResult.
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
 * Selling Partner API for Product Fees.
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
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

namespace AmazonPHP\SellingPartner\Model\ProductFees;

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
class FeesEstimateResult implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'FeesEstimateResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'status' => 'string',
        'fees_estimate_identifier' => '\AmazonPHP\SellingPartner\Model\ProductFees\FeesEstimateIdentifier',
        'fees_estimate' => '\AmazonPHP\SellingPartner\Model\ProductFees\FeesEstimate',
        'error' => '\AmazonPHP\SellingPartner\Model\ProductFees\FeesEstimateError',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'status' => null,
        'fees_estimate_identifier' => null,
        'fees_estimate' => null,
        'error' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'status' => 'Status',
        'fees_estimate_identifier' => 'FeesEstimateIdentifier',
        'fees_estimate' => 'FeesEstimate',
        'error' => 'Error',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'status' => 'setStatus',
        'fees_estimate_identifier' => 'setFeesEstimateIdentifier',
        'fees_estimate' => 'setFeesEstimate',
        'error' => 'setError',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'status' => 'getStatus',
        'fees_estimate_identifier' => 'getFeesEstimateIdentifier',
        'fees_estimate' => 'getFeesEstimate',
        'error' => 'getError',
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['fees_estimate_identifier'] = $data['fees_estimate_identifier'] ?? null;
        $this->container['fees_estimate'] = $data['fees_estimate'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
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
     * Gets status.
     */
    public function getStatus() : ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param null|string $status The status of the fee request. Possible values: Success, ClientError, ServiceError.
     */
    public function setStatus(?string $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fees_estimate_identifier.
     */
    public function getFeesEstimateIdentifier() : ?FeesEstimateIdentifier
    {
        return $this->container['fees_estimate_identifier'];
    }

    /**
     * Sets fees_estimate_identifier.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\FeesEstimateIdentifier $fees_estimate_identifier fees_estimate_identifier
     */
    public function setFeesEstimateIdentifier(?FeesEstimateIdentifier $fees_estimate_identifier) : self
    {
        $this->container['fees_estimate_identifier'] = $fees_estimate_identifier;

        return $this;
    }

    /**
     * Gets fees_estimate.
     */
    public function getFeesEstimate() : ?FeesEstimate
    {
        return $this->container['fees_estimate'];
    }

    /**
     * Sets fees_estimate.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\FeesEstimate $fees_estimate fees_estimate
     */
    public function setFeesEstimate(?FeesEstimate $fees_estimate) : self
    {
        $this->container['fees_estimate'] = $fees_estimate;

        return $this;
    }

    /**
     * Gets error.
     */
    public function getError() : ?FeesEstimateError
    {
        return $this->container['error'];
    }

    /**
     * Sets error.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\FeesEstimateError $error error
     */
    public function setError(?FeesEstimateError $error) : self
    {
        $this->container['error'] = $error;

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

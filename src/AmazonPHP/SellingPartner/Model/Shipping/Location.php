<?php declare(strict_types=1);
/**
 * Location.
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
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\Shipping;

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
class Location implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'Location';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'state_or_region' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'postal_code' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'state_or_region' => null,
        'city' => null,
        'country_code' => null,
        'postal_code' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'state_or_region' => 'stateOrRegion',
        'city' => 'city',
        'country_code' => 'countryCode',
        'postal_code' => 'postalCode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'state_or_region' => 'setStateOrRegion',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'state_or_region' => 'getStateOrRegion',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode',
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
        $this->container['state_or_region'] = $data['state_or_region'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
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

        if (null !== $this->container['city'] && (\mb_strlen($this->container['city']) > 50)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 50.";
        }

        if (null !== $this->container['city'] && (\mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (null !== $this->container['country_code'] && (\mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (null !== $this->container['country_code'] && (\mb_strlen($this->container['country_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 2.";
        }

        if (null !== $this->container['postal_code'] && (\mb_strlen($this->container['postal_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 20.";
        }

        if (null !== $this->container['postal_code'] && (\mb_strlen($this->container['postal_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 1.";
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
     * Gets state_or_region.
     */
    public function getStateOrRegion() : ?string
    {
        return $this->container['state_or_region'];
    }

    /**
     * Sets state_or_region.
     *
     * @param null|string $state_or_region the state or region where the person, business or institution is located
     */
    public function setStateOrRegion(?string $state_or_region) : self
    {
        $this->container['state_or_region'] = $state_or_region;

        return $this;
    }

    /**
     * Gets city.
     */
    public function getCity() : ?string
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param null|string $city the city where the person, business or institution is located
     */
    public function setCity(?string $city) : self
    {
        if (null !== $city && (\mb_strlen($city) > 50)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Location., must be smaller than or equal to 50.');
        }

        if (null !== $city && (\mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Location., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code.
     */
    public function getCountryCode() : ?string
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param null|string $country_code The two digit country code. In ISO 3166-1 alpha-2 format.
     */
    public function setCountryCode(?string $country_code) : self
    {
        if (null !== $country_code && (\mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Location., must be smaller than or equal to 2.');
        }

        if (null !== $country_code && (\mb_strlen($country_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Location., must be bigger than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_code.
     */
    public function getPostalCode() : ?string
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param null|string $postal_code The postal code of that address. It contains a series of letters or digits or both, sometimes including spaces or punctuation.
     */
    public function setPostalCode(?string $postal_code) : self
    {
        if (null !== $postal_code && (\mb_strlen($postal_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Location., must be smaller than or equal to 20.');
        }

        if (null !== $postal_code && (\mb_strlen($postal_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Location., must be bigger than or equal to 1.');
        }

        $this->container['postal_code'] = $postal_code;

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

<?php declare(strict_types=1);
/**
 * Marketplace.
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
 * Selling Partner API for Sellers.
 *
 * The Selling Partner API for Sellers lets you retrieve information on behalf of sellers about their seller account, such as the marketplaces they participate in. Along with listing the marketplaces that a seller can sell in, the API also provides additional information about the marketplace such as the default language and the default currency. The API also provides seller-specific information such as whether the seller has suspended listings in that marketplace.
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

namespace AmazonPHP\SellingPartner\Model\Sellers;

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
class Marketplace implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'Marketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'country_code' => 'string',
        'default_currency_code' => 'string',
        'default_language_code' => 'string',
        'domain_name' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'id' => null,
        'name' => null,
        'country_code' => null,
        'default_currency_code' => null,
        'default_language_code' => null,
        'domain_name' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'country_code' => 'countryCode',
        'default_currency_code' => 'defaultCurrencyCode',
        'default_language_code' => 'defaultLanguageCode',
        'domain_name' => 'domainName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'country_code' => 'setCountryCode',
        'default_currency_code' => 'setDefaultCurrencyCode',
        'default_language_code' => 'setDefaultLanguageCode',
        'domain_name' => 'setDomainName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'country_code' => 'getCountryCode',
        'default_currency_code' => 'getDefaultCurrencyCode',
        'default_language_code' => 'getDefaultLanguageCode',
        'domain_name' => 'getDomainName',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['default_currency_code'] = $data['default_currency_code'] ?? null;
        $this->container['default_language_code'] = $data['default_language_code'] ?? null;
        $this->container['domain_name'] = $data['domain_name'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }

        if (!\preg_match('/^([A-Z]{2})$/', $this->container['country_code'])) {
            $invalidProperties[] = "invalid value for 'country_code', must be conform to the pattern /^([A-Z]{2})$/.";
        }

        if ($this->container['default_currency_code'] === null) {
            $invalidProperties[] = "'default_currency_code' can't be null";
        }

        if ($this->container['default_language_code'] === null) {
            $invalidProperties[] = "'default_language_code' can't be null";
        }

        if ($this->container['domain_name'] === null) {
            $invalidProperties[] = "'domain_name' can't be null";
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
     * Gets id.
     */
    public function getId() : string
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string $id the encrypted marketplace value
     */
    public function setId(string $id) : self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name.
     */
    public function getName() : string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name marketplace name
     */
    public function setName(string $name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets country_code.
     */
    public function getCountryCode() : string
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param string $country_code the ISO 3166-1 alpha-2 format country code of the marketplace
     */
    public function setCountryCode(string $country_code) : self
    {
        if ((!\preg_match('/^([A-Z]{2})$/', $country_code))) {
            throw new \InvalidArgumentException("invalid value for {$country_code} when calling Marketplace., must conform to the pattern /^([A-Z]{2})$/.");
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets default_currency_code.
     */
    public function getDefaultCurrencyCode() : string
    {
        return $this->container['default_currency_code'];
    }

    /**
     * Sets default_currency_code.
     *
     * @param string $default_currency_code the ISO 4217 format currency code of the marketplace
     */
    public function setDefaultCurrencyCode(string $default_currency_code) : self
    {
        $this->container['default_currency_code'] = $default_currency_code;

        return $this;
    }

    /**
     * Gets default_language_code.
     */
    public function getDefaultLanguageCode() : string
    {
        return $this->container['default_language_code'];
    }

    /**
     * Sets default_language_code.
     *
     * @param string $default_language_code the ISO 639-1 format language code of the marketplace
     */
    public function setDefaultLanguageCode(string $default_language_code) : self
    {
        $this->container['default_language_code'] = $default_language_code;

        return $this;
    }

    /**
     * Gets domain_name.
     */
    public function getDomainName() : string
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name.
     *
     * @param string $domain_name the domain name of the marketplace
     */
    public function setDomainName(string $domain_name) : self
    {
        $this->container['domain_name'] = $domain_name;

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

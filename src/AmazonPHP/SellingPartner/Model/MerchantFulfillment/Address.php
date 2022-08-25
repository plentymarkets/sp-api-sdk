<?php declare(strict_types=1);
/**
 * Address.
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
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class Address implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'Address';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'district_or_county' => 'string',
        'email' => 'string',
        'city' => 'string',
        'state_or_province_code' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string',
        'phone' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'district_or_county' => null,
        'email' => null,
        'city' => null,
        'state_or_province_code' => null,
        'postal_code' => null,
        'country_code' => null,
        'phone' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'name' => 'Name',
        'address_line1' => 'AddressLine1',
        'address_line2' => 'AddressLine2',
        'address_line3' => 'AddressLine3',
        'district_or_county' => 'DistrictOrCounty',
        'email' => 'Email',
        'city' => 'City',
        'state_or_province_code' => 'StateOrProvinceCode',
        'postal_code' => 'PostalCode',
        'country_code' => 'CountryCode',
        'phone' => 'Phone',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'district_or_county' => 'setDistrictOrCounty',
        'email' => 'setEmail',
        'city' => 'setCity',
        'state_or_province_code' => 'setStateOrProvinceCode',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'phone' => 'setPhone',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'district_or_county' => 'getDistrictOrCounty',
        'email' => 'getEmail',
        'city' => 'getCity',
        'state_or_province_code' => 'getStateOrProvinceCode',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'phone' => 'getPhone',
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['address_line3'] = $data['address_line3'] ?? null;
        $this->container['district_or_county'] = $data['district_or_county'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state_or_province_code'] = $data['state_or_province_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }

//        if ((\mb_strlen($this->container['name']) > 30)) {
//            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
//        }

        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }

        if ((\mb_strlen($this->container['address_line1']) > 180)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 180.";
        }

        if (null !== $this->container['address_line2'] && (\mb_strlen($this->container['address_line2']) > 60)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 60.";
        }

        if (null !== $this->container['address_line3'] && (\mb_strlen($this->container['address_line3']) > 60)) {
            $invalidProperties[] = "invalid value for 'address_line3', the character length must be smaller than or equal to 60.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }

//        if ((\mb_strlen($this->container['city']) > 30)) {
//            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 30.";
//        }

//        if (null !== $this->container['state_or_province_code'] && (\mb_strlen($this->container['state_or_province_code']) > 30)) {
//            $invalidProperties[] = "invalid value for 'state_or_province_code', the character length must be smaller than or equal to 30.";
//        }

        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }

        if ((\mb_strlen($this->container['postal_code']) > 30)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }

        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }

        if ((\mb_strlen($this->container['phone']) > 30)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 30.";
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
     * Gets name.
     */
    public function getName() : string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name the name of the addressee, or business name
     */
    public function setName(string $name) : self
    {
//        if ((\mb_strlen($name) > 30)) {
//            throw new \InvalidArgumentException('invalid length for $name when calling Address., must be smaller than or equal to 30.');
//        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1.
     */
    public function getAddressLine1() : string
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1.
     *
     * @param string $address_line1 the street address information
     */
    public function setAddressLine1(string $address_line1) : self
    {
        if ((\mb_strlen($address_line1) > 180)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling Address., must be smaller than or equal to 180.');
        }

        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2.
     */
    public function getAddressLine2() : ?string
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2.
     *
     * @param null|string $address_line2 additional street address information
     */
    public function setAddressLine2(?string $address_line2) : self
    {
        if (null !== $address_line2 && (\mb_strlen($address_line2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling Address., must be smaller than or equal to 60.');
        }

        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3.
     */
    public function getAddressLine3() : ?string
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3.
     *
     * @param null|string $address_line3 additional street address information
     */
    public function setAddressLine3(?string $address_line3) : self
    {
        if (null !== $address_line3 && (\mb_strlen($address_line3) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address_line3 when calling Address., must be smaller than or equal to 60.');
        }

        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets district_or_county.
     */
    public function getDistrictOrCounty() : ?string
    {
        return $this->container['district_or_county'];
    }

    /**
     * Sets district_or_county.
     *
     * @param null|string $district_or_county the district or county
     */
    public function setDistrictOrCounty(?string $district_or_county) : self
    {
        $this->container['district_or_county'] = $district_or_county;

        return $this;
    }

    /**
     * Gets email.
     */
    public function getEmail() : string
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param string $email the email address
     */
    public function setEmail(string $email) : self
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets city.
     */
    public function getCity() : string
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param string $city the city
     */
    public function setCity(string $city) : self
    {
//        if ((\mb_strlen($city) > 30)) {
//            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 30.');
//        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_or_province_code.
     */
    public function getStateOrProvinceCode() : ?string
    {
        return $this->container['state_or_province_code'];
    }

    /**
     * Sets state_or_province_code.
     *
     * @param null|string $state_or_province_code The state or province code. **Note.** Required in the Canada, US, and UK marketplaces. Also required for shipments originating from China.
     */
    public function setStateOrProvinceCode(?string $state_or_province_code) : self
    {
//        if (null !== $state_or_province_code && (\mb_strlen($state_or_province_code) > 30)) {
//            throw new \InvalidArgumentException('invalid length for $state_or_province_code when calling Address., must be smaller than or equal to 30.');
//        }

        $this->container['state_or_province_code'] = $state_or_province_code;

        return $this;
    }

    /**
     * Gets postal_code.
     */
    public function getPostalCode() : string
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param string $postal_code the zip code or postal code
     */
    public function setPostalCode(string $postal_code) : self
    {
        if ((\mb_strlen($postal_code) > 30)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be smaller than or equal to 30.');
        }

        $this->container['postal_code'] = $postal_code;

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
     * @param string $country_code The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
     */
    public function setCountryCode(string $country_code) : self
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone.
     */
    public function getPhone() : string
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone.
     *
     * @param string $phone the phone number
     */
    public function setPhone(string $phone) : self
    {
        if ((\mb_strlen($phone) > 30)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Address., must be smaller than or equal to 30.');
        }

        $this->container['phone'] = $phone;

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

<?php declare(strict_types=1);
/**
 * SetAppointmentResponse.
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
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\Services;

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
class SetAppointmentResponse implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'SetAppointmentResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'appointment_id' => 'string',
        'warnings' => '\Plenty\AmazonPHP\SellingPartner\Model\Services\Warning[]',
        'errors' => '\Plenty\AmazonPHP\SellingPartner\Model\Services\Error[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'appointment_id' => null,
        'warnings' => null,
        'errors' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'appointment_id' => 'appointmentId',
        'warnings' => 'warnings',
        'errors' => 'errors',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'appointment_id' => 'setAppointmentId',
        'warnings' => 'setWarnings',
        'errors' => 'setErrors',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'appointment_id' => 'getAppointmentId',
        'warnings' => 'getWarnings',
        'errors' => 'getErrors',
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
        $this->container['appointment_id'] = $data['appointment_id'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
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

        if (null !== $this->container['appointment_id'] && (\mb_strlen($this->container['appointment_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'appointment_id', the character length must be smaller than or equal to 100.";
        }

        if (null !== $this->container['appointment_id'] && (\mb_strlen($this->container['appointment_id']) < 5)) {
            $invalidProperties[] = "invalid value for 'appointment_id', the character length must be bigger than or equal to 5.";
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
     * Gets appointment_id.
     */
    public function getAppointmentId() : ?string
    {
        return $this->container['appointment_id'];
    }

    /**
     * Sets appointment_id.
     *
     * @param null|string $appointment_id the appointment identifier
     */
    public function setAppointmentId(?string $appointment_id) : self
    {
        if (null !== $appointment_id && (\mb_strlen($appointment_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $appointment_id when calling SetAppointmentResponse., must be smaller than or equal to 100.');
        }

        if (null !== $appointment_id && (\mb_strlen($appointment_id) < 5)) {
            throw new \InvalidArgumentException('invalid length for $appointment_id when calling SetAppointmentResponse., must be bigger than or equal to 5.');
        }

        $this->container['appointment_id'] = $appointment_id;

        return $this;
    }

    /**
     * Gets warnings.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\Services\Warning[]
     */
    public function getWarnings() : ?array
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\Services\Warning[] $warnings a list of warnings returned in the sucessful execution response of an API request
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets errors.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\Services\Error[]
     */
    public function getErrors() : ?array
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\Services\Error[] $errors a list of error responses returned when a request is unsuccessful
     */
    public function setErrors(?array $errors) : self
    {
        $this->container['errors'] = $errors;

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

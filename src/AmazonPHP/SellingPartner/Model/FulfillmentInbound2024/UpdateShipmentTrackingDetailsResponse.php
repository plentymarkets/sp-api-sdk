<?php
/**
 * UpdateShipmentTrackingDetailsResponse
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024;

use \ArrayAccess;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer2024;

/**
 * UpdateShipmentTrackingDetailsResponse Class Doc Comment
 *
 * @category Class
 * @description The &#x60;updateShipmentTrackingDetails&#x60; response.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateShipmentTrackingDetailsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'UpdateShipmentTrackingDetailsResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'operation_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'operation_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'operation_id' => 'operationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operation_id' => 'setOperationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operation_id' => 'getOperationId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['operation_id'] = $data['operation_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['operation_id'] === null) {
            $invalidProperties[] = "'operation_id' can't be null";
        }
        if ((mb_strlen($this->container['operation_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'operation_id', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['operation_id']) < 36)) {
            $invalidProperties[] = "invalid value for 'operation_id', the character length must be bigger than or equal to 36.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['operation_id'])) {
            $invalidProperties[] = "invalid value for 'operation_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets operation_id
     *
     * @return string
     */
    public function getOperationId(): string
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param string $operation_id UUID for the given operation.
     *
     * @return self
     */
    public function setOperationId($operation_id): static
    {
        if ((mb_strlen($operation_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $operation_id when calling UpdateShipmentTrackingDetailsResponse., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($operation_id) < 36)) {
            throw new \InvalidArgumentException(
                'invalid length for $operation_id when calling UpdateShipmentTrackingDetailsResponse., must be bigger than or equal to 36.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $operation_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $operation_id when calling UpdateShipmentTrackingDetailsResponse., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer2024::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer2024::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer2024::sanitizeForSerialization($this));
    }
}



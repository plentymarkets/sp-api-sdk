<?php declare(strict_types=1);
/**
 * Subscription.
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
 * Selling Partner API for Notifications.
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more.  For more information, see the [Notifications Use Case Guide](doc:notifications-api-v1-use-case-guide).
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

namespace Plenty\AmazonPHP\SellingPartner\Model\Notifications;

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
class Subscription implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'Subscription';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'subscription_id' => 'string',
        'payload_version' => 'string',
        'destination_id' => 'string',
        'processing_directive' => '\Plenty\AmazonPHP\SellingPartner\Model\Notifications\ProcessingDirective',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'subscription_id' => null,
        'payload_version' => null,
        'destination_id' => null,
        'processing_directive' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'subscription_id' => 'subscriptionId',
        'payload_version' => 'payloadVersion',
        'destination_id' => 'destinationId',
        'processing_directive' => 'processingDirective',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'subscription_id' => 'setSubscriptionId',
        'payload_version' => 'setPayloadVersion',
        'destination_id' => 'setDestinationId',
        'processing_directive' => 'setProcessingDirective',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'subscription_id' => 'getSubscriptionId',
        'payload_version' => 'getPayloadVersion',
        'destination_id' => 'getDestinationId',
        'processing_directive' => 'getProcessingDirective',
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
        $this->container['subscription_id'] = $data['subscription_id'] ?? null;
        $this->container['payload_version'] = $data['payload_version'] ?? null;
        $this->container['destination_id'] = $data['destination_id'] ?? null;
        $this->container['processing_directive'] = $data['processing_directive'] ?? null;
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

        if ($this->container['subscription_id'] === null) {
            $invalidProperties[] = "'subscription_id' can't be null";
        }

        if ($this->container['payload_version'] === null) {
            $invalidProperties[] = "'payload_version' can't be null";
        }

        if ($this->container['destination_id'] === null) {
            $invalidProperties[] = "'destination_id' can't be null";
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
     * Gets subscription_id.
     */
    public function getSubscriptionId() : string
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id.
     *
     * @param string $subscription_id the subscription identifier generated when the subscription is created
     */
    public function setSubscriptionId(string $subscription_id) : self
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets payload_version.
     */
    public function getPayloadVersion() : string
    {
        return $this->container['payload_version'];
    }

    /**
     * Sets payload_version.
     *
     * @param string $payload_version the version of the payload object to be used in the notification
     */
    public function setPayloadVersion(string $payload_version) : self
    {
        $this->container['payload_version'] = $payload_version;

        return $this;
    }

    /**
     * Gets destination_id.
     */
    public function getDestinationId() : string
    {
        return $this->container['destination_id'];
    }

    /**
     * Sets destination_id.
     *
     * @param string $destination_id the identifier for the destination where notifications will be delivered
     */
    public function setDestinationId(string $destination_id) : self
    {
        $this->container['destination_id'] = $destination_id;

        return $this;
    }

    /**
     * Gets processing_directive.
     */
    public function getProcessingDirective() : ?ProcessingDirective
    {
        return $this->container['processing_directive'];
    }

    /**
     * Sets processing_directive.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\Notifications\ProcessingDirective $processing_directive processing_directive
     */
    public function setProcessingDirective(?ProcessingDirective $processing_directive) : self
    {
        $this->container['processing_directive'] = $processing_directive;

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

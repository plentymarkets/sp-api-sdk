<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024;

use Plenty\AmazonPHP\SellingPartner\Exception\AssertionException;
use Plenty\AmazonPHP\SellingPartner\FulfillmentInboundModelInterface;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContentUpdatePreview implements \ArrayAccess, \JsonSerializable, \Stringable, FulfillmentInboundModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ContentUpdatePreview';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'content_update_preview_id' => 'string',
        'expiration' => 'string',
        'requested_updates' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\\RequestedUpdates',
        'transportation_option' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\\TransportationOption',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'content_update_preview_id' => null,
        'expiration' => null,
        'requested_updates' => null,
        'transportation_option' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'content_update_preview_id' => 'contentUpdatePreviewId',
        'expiration' => 'expiration',
        'requested_updates' => 'requestedUpdates',
        'transportation_option' => 'transportationOption',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'content_update_preview_id' => 'setContentUpdatePreviewId',
        'expiration' => 'setExpiration',
        'requested_updates' => 'setRequestedUpdates',
        'transportation_option' => 'setTransportationOption',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'content_update_preview_id' => 'getContentUpdatePreviewId',
        'expiration' => 'getExpiration',
        'requested_updates' => 'getRequestedUpdates',
        'transportation_option' => 'getTransportationOption',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['content_update_preview_id'] = $data['content_update_preview_id'] ?? null;
        $this->container['expiration'] = $data['expiration'] ?? null;
        $this->container['requested_updates'] = $data['requested_updates'] ?? null;
        $this->container['transportation_option'] = $data['transportation_option'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
        return (string) \json_encode(
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['content_update_preview_id'] === null) {
            throw new AssertionException("'content_update_preview_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['content_update_preview_id']) > 38)) {
            throw new AssertionException("invalid value for 'content_update_preview_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['content_update_preview_id']) < 38)) {
            throw new AssertionException("invalid value for 'content_update_preview_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['content_update_preview_id'])) {
            throw new AssertionException("invalid value for 'content_update_preview_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['expiration'] === null) {
            throw new AssertionException("'expiration' can't be null");
        }

        if (!\preg_match('/^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', (string) $this->container['expiration'])) {
            throw new AssertionException("invalid value for 'expiration', must be conform to the pattern /^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.");
        }

        if ($this->container['requested_updates'] === null) {
            throw new AssertionException("'requested_updates' can't be null");
        }

        $this->container['requested_updates']->validate();

        if ($this->container['transportation_option'] === null) {
            throw new AssertionException("'transportation_option' can't be null");
        }

        $this->container['transportation_option']->validate();
    }

    /**
     * Gets content_update_preview_id.
     */
    public function getContentUpdatePreviewId() : string
    {
        return $this->container['content_update_preview_id'];
    }

    /**
     * Sets content_update_preview_id.
     *
     * @param string $content_update_preview_id identifier of a content update preview
     */
    public function setContentUpdatePreviewId(string $content_update_preview_id) : self
    {
        $this->container['content_update_preview_id'] = $content_update_preview_id;

        return $this;
    }

    /**
     * Gets expiration.
     */
    public function getExpiration() : string
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration.
     *
     * @param string $expiration the date in ISO 8601 format for when the content update expires
     */
    public function setExpiration(string $expiration) : self
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets requested_updates.
     */
    public function getRequestedUpdates() : RequestedUpdates
    {
        return $this->container['requested_updates'];
    }

    /**
     * Sets requested_updates.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\RequestedUpdates $requested_updates requested_updates
     */
    public function setRequestedUpdates(RequestedUpdates $requested_updates) : self
    {
        $this->container['requested_updates'] = $requested_updates;

        return $this;
    }

    /**
     * Gets transportation_option.
     */
    public function getTransportationOption() : TransportationOption
    {
        return $this->container['transportation_option'];
    }

    /**
     * Sets transportation_option.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\TransportationOption $transportation_option transportation_option
     */
    public function setTransportationOption(TransportationOption $transportation_option) : self
    {
        $this->container['transportation_option'] = $transportation_option;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
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
    #[\ReturnTypeWillChange]
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

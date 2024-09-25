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
class PlacementOption implements \ArrayAccess, \JsonSerializable, \Stringable, FulfillmentInboundModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PlacementOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'discounts' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\\Incentive[]',
        'expiration' => '\DateTimeInterface',
        'fees' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\\Incentive[]',
        'placement_option_id' => 'string',
        'shipment_ids' => 'string[]',
        'status' => 'string',
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
        'discounts' => null,
        'expiration' => 'date-time',
        'fees' => null,
        'placement_option_id' => null,
        'shipment_ids' => null,
        'status' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'discounts' => 'discounts',
        'expiration' => 'expiration',
        'fees' => 'fees',
        'placement_option_id' => 'placementOptionId',
        'shipment_ids' => 'shipmentIds',
        'status' => 'status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'discounts' => 'setDiscounts',
        'expiration' => 'setExpiration',
        'fees' => 'setFees',
        'placement_option_id' => 'setPlacementOptionId',
        'shipment_ids' => 'setShipmentIds',
        'status' => 'setStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'discounts' => 'getDiscounts',
        'expiration' => 'getExpiration',
        'fees' => 'getFees',
        'placement_option_id' => 'getPlacementOptionId',
        'shipment_ids' => 'getShipmentIds',
        'status' => 'getStatus',
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
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['expiration'] = $data['expiration'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['placement_option_id'] = $data['placement_option_id'] ?? null;
        $this->container['shipment_ids'] = $data['shipment_ids'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
        if ($this->container['discounts'] === null) {
            throw new AssertionException("'discounts' can't be null");
        }

        if ($this->container['fees'] === null) {
            throw new AssertionException("'fees' can't be null");
        }

        if ($this->container['placement_option_id'] === null) {
            throw new AssertionException("'placement_option_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['placement_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'placement_option_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['placement_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'placement_option_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['placement_option_id'])) {
            throw new AssertionException("invalid value for 'placement_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['shipment_ids'] === null) {
            throw new AssertionException("'shipment_ids' can't be null");
        }

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ((\mb_strlen((string) $this->container['status']) > 1024)) {
            throw new AssertionException("invalid value for 'status', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['status']) < 1)) {
            throw new AssertionException("invalid value for 'status', the character length must be bigger than or equal to 1.");
        }
    }

    /**
     * Gets discounts.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[]
     */
    public function getDiscounts() : array
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[] $discounts discount for the offered option
     */
    public function setDiscounts(array $discounts) : self
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets expiration.
     */
    public function getExpiration() : ?\DateTimeInterface
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration.
     *
     * @param null|\DateTimeInterface $expiration The expiration date of the placement option. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     */
    public function setExpiration(?\DateTimeInterface $expiration) : self
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets fees.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[]
     */
    public function getFees() : array
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\Incentive[] $fees fee for the offered option
     */
    public function setFees(array $fees) : self
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets placement_option_id.
     */
    public function getPlacementOptionId() : string
    {
        return $this->container['placement_option_id'];
    }

    /**
     * Sets placement_option_id.
     *
     * @param string $placement_option_id The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs.
     */
    public function setPlacementOptionId(string $placement_option_id) : self
    {
        $this->container['placement_option_id'] = $placement_option_id;

        return $this;
    }

    /**
     * Gets shipment_ids.
     *
     * @return string[]
     */
    public function getShipmentIds() : array
    {
        return $this->container['shipment_ids'];
    }

    /**
     * Sets shipment_ids.
     *
     * @param string[] $shipment_ids shipment ids
     */
    public function setShipmentIds(array $shipment_ids) : self
    {
        $this->container['shipment_ids'] = $shipment_ids;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : string
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status The status of a placement option. Can be: `OFFERED`, `ACCEPTED`, or `EXPIRED`.
     */
    public function setStatus(string $status) : self
    {
        $this->container['status'] = $status;

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

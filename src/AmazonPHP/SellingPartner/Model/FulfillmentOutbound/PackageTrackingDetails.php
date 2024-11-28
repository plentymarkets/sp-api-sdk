<?php declare(strict_types=1);
/**
 * PackageTrackingDetails.
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
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class PackageTrackingDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'PackageTrackingDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'package_number' => 'int',
        'tracking_number' => 'string',
        'customer_tracking_link' => 'string',
        'carrier_code' => 'string',
        'carrier_phone_number' => 'string',
        'carrier_url' => 'string',
        'ship_date' => '\DateTime',
        'estimated_arrival_date' => '\DateTime',
        'ship_to_address' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingAddress',
        'current_status' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CurrentStatus',
        'current_status_description' => 'string',
        'signed_for_by' => 'string',
        'additional_location_info' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\AdditionalLocationInfo',
        'tracking_events' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingEvent[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'package_number' => 'int32',
        'tracking_number' => null,
        'customer_tracking_link' => null,
        'carrier_code' => null,
        'carrier_phone_number' => null,
        'carrier_url' => null,
        'ship_date' => 'date-time',
        'estimated_arrival_date' => 'date-time',
        'ship_to_address' => null,
        'current_status' => null,
        'current_status_description' => null,
        'signed_for_by' => null,
        'additional_location_info' => null,
        'tracking_events' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'package_number' => 'packageNumber',
        'tracking_number' => 'trackingNumber',
        'customer_tracking_link' => 'customerTrackingLink',
        'carrier_code' => 'carrierCode',
        'carrier_phone_number' => 'carrierPhoneNumber',
        'carrier_url' => 'carrierURL',
        'ship_date' => 'shipDate',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'ship_to_address' => 'shipToAddress',
        'current_status' => 'currentStatus',
        'current_status_description' => 'currentStatusDescription',
        'signed_for_by' => 'signedForBy',
        'additional_location_info' => 'additionalLocationInfo',
        'tracking_events' => 'trackingEvents',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'package_number' => 'setPackageNumber',
        'tracking_number' => 'setTrackingNumber',
        'customer_tracking_link' => 'setCustomerTrackingLink',
        'carrier_code' => 'setCarrierCode',
        'carrier_phone_number' => 'setCarrierPhoneNumber',
        'carrier_url' => 'setCarrierUrl',
        'ship_date' => 'setShipDate',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'ship_to_address' => 'setShipToAddress',
        'current_status' => 'setCurrentStatus',
        'current_status_description' => 'setCurrentStatusDescription',
        'signed_for_by' => 'setSignedForBy',
        'additional_location_info' => 'setAdditionalLocationInfo',
        'tracking_events' => 'setTrackingEvents',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'package_number' => 'getPackageNumber',
        'tracking_number' => 'getTrackingNumber',
        'customer_tracking_link' => 'getCustomerTrackingLink',
        'carrier_code' => 'getCarrierCode',
        'carrier_phone_number' => 'getCarrierPhoneNumber',
        'carrier_url' => 'getCarrierUrl',
        'ship_date' => 'getShipDate',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'ship_to_address' => 'getShipToAddress',
        'current_status' => 'getCurrentStatus',
        'current_status_description' => 'getCurrentStatusDescription',
        'signed_for_by' => 'getSignedForBy',
        'additional_location_info' => 'getAdditionalLocationInfo',
        'tracking_events' => 'getTrackingEvents',
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
        $this->container['package_number'] = $data['package_number'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['customer_tracking_link'] = $data['customer_tracking_link'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['carrier_phone_number'] = $data['carrier_phone_number'] ?? null;
        $this->container['carrier_url'] = $data['carrier_url'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
        $this->container['ship_to_address'] = $data['ship_to_address'] ?? null;
        $this->container['current_status'] = $data['current_status'] ?? null;
        $this->container['current_status_description'] = $data['current_status_description'] ?? null;
        $this->container['signed_for_by'] = $data['signed_for_by'] ?? null;
        $this->container['additional_location_info'] = $data['additional_location_info'] ?? null;
        $this->container['tracking_events'] = $data['tracking_events'] ?? null;
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

        if ($this->container['package_number'] === null) {
            $invalidProperties[] = "'package_number' can't be null";
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
     * Gets package_number.
     */
    public function getPackageNumber() : int
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number.
     *
     * @param int $package_number the package identifier
     */
    public function setPackageNumber(int $package_number) : self
    {
        $this->container['package_number'] = $package_number;

        return $this;
    }

    /**
     * Gets tracking_number.
     */
    public function getTrackingNumber() : ?string
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param null|string $tracking_number the tracking number for the package
     */
    public function setTrackingNumber(?string $tracking_number) : self
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets customer_tracking_link.
     */
    public function getCustomerTrackingLink() : ?string
    {
        return $this->container['customer_tracking_link'];
    }

    /**
     * Sets customer_tracking_link.
     *
     * @param null|string $customer_tracking_link Link on swiship.com that allows customers to track the package.
     */
    public function setCustomerTrackingLink(?string $customer_tracking_link) : self
    {
        $this->container['customer_tracking_link'] = $customer_tracking_link;

        return $this;
    }

    /**
     * Gets carrier_code.
     */
    public function getCarrierCode() : ?string
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code.
     *
     * @param null|string $carrier_code the name of the carrier
     */
    public function setCarrierCode(?string $carrier_code) : self
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets carrier_phone_number.
     */
    public function getCarrierPhoneNumber() : ?string
    {
        return $this->container['carrier_phone_number'];
    }

    /**
     * Sets carrier_phone_number.
     *
     * @param null|string $carrier_phone_number the phone number of the carrier
     */
    public function setCarrierPhoneNumber(?string $carrier_phone_number) : self
    {
        $this->container['carrier_phone_number'] = $carrier_phone_number;

        return $this;
    }

    /**
     * Gets carrier_url.
     */
    public function getCarrierUrl() : ?string
    {
        return $this->container['carrier_url'];
    }

    /**
     * Sets carrier_url.
     *
     * @param null|string $carrier_url the URL of the carrier’s website
     */
    public function setCarrierUrl(?string $carrier_url) : self
    {
        $this->container['carrier_url'] = $carrier_url;

        return $this;
    }

    /**
     * Gets ship_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getShipDate() : ?\DateTimeInterface
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date.
     *
     * @param \DateTime|\DateTimeImmutable $ship_date ship_date
     */
    public function setShipDate(\DateTimeInterface $ship_date) : self
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets estimated_arrival_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getEstimatedArrivalDate() : ?\DateTimeInterface
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date.
     *
     * @param \DateTime|\DateTimeImmutable $estimated_arrival_date estimated_arrival_date
     */
    public function setEstimatedArrivalDate(\DateTimeInterface $estimated_arrival_date) : self
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }

    /**
     * Gets ship_to_address.
     */
    public function getShipToAddress() : ?TrackingAddress
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingAddress $ship_to_address ship_to_address
     */
    public function setShipToAddress(?TrackingAddress $ship_to_address) : self
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets current_status.
     */
    public function getCurrentStatus() : ?CurrentStatus
    {
        return $this->container['current_status'];
    }

    /**
     * Sets current_status.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CurrentStatus $current_status current_status
     */
    public function setCurrentStatus(?CurrentStatus $current_status) : self
    {
        $this->container['current_status'] = $current_status;

        return $this;
    }

    /**
     * Gets current_status_description.
     */
    public function getCurrentStatusDescription() : ?string
    {
        return $this->container['current_status_description'];
    }

    /**
     * Sets current_status_description.
     *
     * @param null|string $current_status_description description corresponding to the CurrentStatus value
     */
    public function setCurrentStatusDescription(?string $current_status_description) : self
    {
        $this->container['current_status_description'] = $current_status_description;

        return $this;
    }

    /**
     * Gets signed_for_by.
     */
    public function getSignedForBy() : ?string
    {
        return $this->container['signed_for_by'];
    }

    /**
     * Sets signed_for_by.
     *
     * @param null|string $signed_for_by the name of the person who signed for the package
     */
    public function setSignedForBy(?string $signed_for_by) : self
    {
        $this->container['signed_for_by'] = $signed_for_by;

        return $this;
    }

    /**
     * Gets additional_location_info.
     */
    public function getAdditionalLocationInfo() : ?AdditionalLocationInfo
    {
        return $this->container['additional_location_info'];
    }

    /**
     * Sets additional_location_info.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\AdditionalLocationInfo $additional_location_info additional_location_info
     */
    public function setAdditionalLocationInfo(?AdditionalLocationInfo $additional_location_info) : self
    {
        $this->container['additional_location_info'] = $additional_location_info;

        return $this;
    }

    /**
     * Gets tracking_events.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingEvent[]
     */
    public function getTrackingEvents() : ?array
    {
        return $this->container['tracking_events'];
    }

    /**
     * Sets tracking_events.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingEvent[] $tracking_events an array of tracking event information
     */
    public function setTrackingEvents(?array $tracking_events) : self
    {
        $this->container['tracking_events'] = $tracking_events;

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

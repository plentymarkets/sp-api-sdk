<?php declare(strict_types=1);
/**
 * CreateInboundShipmentPlanRequest.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class CreateInboundShipmentPlanRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'CreateInboundShipmentPlanRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'ship_from_address' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address',
        'label_prep_preference' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepPreference',
        'ship_to_country_code' => 'string',
        'ship_to_country_subdivision_code' => 'string',
        'inbound_shipment_plan_request_items' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentPlanRequestItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'ship_from_address' => null,
        'label_prep_preference' => null,
        'ship_to_country_code' => null,
        'ship_to_country_subdivision_code' => null,
        'inbound_shipment_plan_request_items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'ship_from_address' => 'ShipFromAddress',
        'label_prep_preference' => 'LabelPrepPreference',
        'ship_to_country_code' => 'ShipToCountryCode',
        'ship_to_country_subdivision_code' => 'ShipToCountrySubdivisionCode',
        'inbound_shipment_plan_request_items' => 'InboundShipmentPlanRequestItems',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'ship_from_address' => 'setShipFromAddress',
        'label_prep_preference' => 'setLabelPrepPreference',
        'ship_to_country_code' => 'setShipToCountryCode',
        'ship_to_country_subdivision_code' => 'setShipToCountrySubdivisionCode',
        'inbound_shipment_plan_request_items' => 'setInboundShipmentPlanRequestItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'ship_from_address' => 'getShipFromAddress',
        'label_prep_preference' => 'getLabelPrepPreference',
        'ship_to_country_code' => 'getShipToCountryCode',
        'ship_to_country_subdivision_code' => 'getShipToCountrySubdivisionCode',
        'inbound_shipment_plan_request_items' => 'getInboundShipmentPlanRequestItems',
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
        $this->container['ship_from_address'] = $data['ship_from_address'] ?? null;
        $this->container['label_prep_preference'] = $data['label_prep_preference'] ?? null;
        $this->container['ship_to_country_code'] = $data['ship_to_country_code'] ?? null;
        $this->container['ship_to_country_subdivision_code'] = $data['ship_to_country_subdivision_code'] ?? null;
        $this->container['inbound_shipment_plan_request_items'] = $data['inbound_shipment_plan_request_items'] ?? null;
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

        if ($this->container['ship_from_address'] === null) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }

        if ($this->container['label_prep_preference'] === null) {
            $invalidProperties[] = "'label_prep_preference' can't be null";
        }

        if ($this->container['inbound_shipment_plan_request_items'] === null) {
            $invalidProperties[] = "'inbound_shipment_plan_request_items' can't be null";
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
     * Gets ship_from_address.
     */
    public function getShipFromAddress() : Address
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address $ship_from_address ship_from_address
     */
    public function setShipFromAddress(Address $ship_from_address) : self
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets label_prep_preference.
     */
    public function getLabelPrepPreference() : LabelPrepPreference
    {
        return $this->container['label_prep_preference'];
    }

    /**
     * Sets label_prep_preference.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepPreference $label_prep_preference label_prep_preference
     */
    public function setLabelPrepPreference(LabelPrepPreference $label_prep_preference) : self
    {
        $this->container['label_prep_preference'] = $label_prep_preference;

        return $this;
    }

    /**
     * Gets ship_to_country_code.
     */
    public function getShipToCountryCode() : ?string
    {
        return $this->container['ship_to_country_code'];
    }

    /**
     * Sets ship_to_country_code.
     *
     * @param null|string $ship_to_country_code The two-character country code for the country where the inbound shipment is to be sent.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.   Values:   ShipToCountryCode values for North America:  * CA – Canada  * MX - Mexico  * US - United States  ShipToCountryCode values for MCI sellers in Europe:  * DE – Germany  * ES – Spain  * FR – France  * GB – United Kingdom  * IT – Italy  Default: The country code for the seller's home marketplace.
     */
    public function setShipToCountryCode(?string $ship_to_country_code) : self
    {
        $this->container['ship_to_country_code'] = $ship_to_country_code;

        return $this;
    }

    /**
     * Gets ship_to_country_subdivision_code.
     */
    public function getShipToCountrySubdivisionCode() : ?string
    {
        return $this->container['ship_to_country_subdivision_code'];
    }

    /**
     * Sets ship_to_country_subdivision_code.
     *
     * @param null|string $ship_to_country_subdivision_code The two-character country code, followed by a dash and then up to three characters that represent the subdivision of the country where the inbound shipment is to be sent. For example, \"IN-MH\". In full ISO 3166-2 format.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.
     */
    public function setShipToCountrySubdivisionCode(?string $ship_to_country_subdivision_code) : self
    {
        $this->container['ship_to_country_subdivision_code'] = $ship_to_country_subdivision_code;

        return $this;
    }

    /**
     * Gets inbound_shipment_plan_request_items.
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentPlanRequestItem[]
     */
    public function getInboundShipmentPlanRequestItems() : array
    {
        return $this->container['inbound_shipment_plan_request_items'];
    }

    /**
     * Sets inbound_shipment_plan_request_items.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentPlanRequestItem[] $inbound_shipment_plan_request_items inbound_shipment_plan_request_items
     */
    public function setInboundShipmentPlanRequestItems(array $inbound_shipment_plan_request_items) : self
    {
        $this->container['inbound_shipment_plan_request_items'] = $inbound_shipment_plan_request_items;

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

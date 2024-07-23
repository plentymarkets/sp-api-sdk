<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024;

use Plenty\AmazonPHP\SellingPartner\Exception\AssertionException;
use Plenty\AmazonPHP\SellingPartner\ModelInterface;
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
class TransportationOption implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'TransportationOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'carrier' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Carrier',
        'carrier_appointment' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\CarrierAppointment',
        'preconditions' => 'string[]',
        'quote' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Quote',
        'shipment_id' => 'string',
        'shipping_mode' => 'string',
        'shipping_solution' => 'string',
        'transportation_option_id' => 'string',
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
        'carrier' => null,
        'carrier_appointment' => null,
        'preconditions' => null,
        'quote' => null,
        'shipment_id' => null,
        'shipping_mode' => null,
        'shipping_solution' => null,
        'transportation_option_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'carrier' => 'carrier',
        'carrier_appointment' => 'carrierAppointment',
        'preconditions' => 'preconditions',
        'quote' => 'quote',
        'shipment_id' => 'shipmentId',
        'shipping_mode' => 'shippingMode',
        'shipping_solution' => 'shippingSolution',
        'transportation_option_id' => 'transportationOptionId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'carrier' => 'setCarrier',
        'carrier_appointment' => 'setCarrierAppointment',
        'preconditions' => 'setPreconditions',
        'quote' => 'setQuote',
        'shipment_id' => 'setShipmentId',
        'shipping_mode' => 'setShippingMode',
        'shipping_solution' => 'setShippingSolution',
        'transportation_option_id' => 'setTransportationOptionId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'carrier' => 'getCarrier',
        'carrier_appointment' => 'getCarrierAppointment',
        'preconditions' => 'getPreconditions',
        'quote' => 'getQuote',
        'shipment_id' => 'getShipmentId',
        'shipping_mode' => 'getShippingMode',
        'shipping_solution' => 'getShippingSolution',
        'transportation_option_id' => 'getTransportationOptionId',
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
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['carrier_appointment'] = $data['carrier_appointment'] ?? null;
        $this->container['preconditions'] = $data['preconditions'] ?? null;
        $this->container['quote'] = $data['quote'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['shipping_mode'] = $data['shipping_mode'] ?? null;
        $this->container['shipping_solution'] = $data['shipping_solution'] ?? null;
        $this->container['transportation_option_id'] = $data['transportation_option_id'] ?? null;
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
        if ($this->container['carrier'] === null) {
            throw new AssertionException("'carrier' can't be null");
        }

        $this->container['carrier']->validate();

        if ($this->container['carrier_appointment'] !== null) {
            $this->container['carrier_appointment']->validate();
        }

        if ($this->container['preconditions'] === null) {
            throw new AssertionException("'preconditions' can't be null");
        }

        if ($this->container['quote'] !== null) {
            $this->container['quote']->validate();
        }

        if ($this->container['shipment_id'] === null) {
            throw new AssertionException("'shipment_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['shipment_id']) > 38)) {
            throw new AssertionException("invalid value for 'shipment_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['shipment_id']) < 38)) {
            throw new AssertionException("invalid value for 'shipment_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['shipment_id'])) {
            throw new AssertionException("invalid value for 'shipment_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['shipping_mode'] === null) {
            throw new AssertionException("'shipping_mode' can't be null");
        }

        if ((\mb_strlen((string) $this->container['shipping_mode']) > 1024)) {
            throw new AssertionException("invalid value for 'shipping_mode', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['shipping_mode']) < 1)) {
            throw new AssertionException("invalid value for 'shipping_mode', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['shipping_solution'] === null) {
            throw new AssertionException("'shipping_solution' can't be null");
        }

        if ((\mb_strlen((string) $this->container['shipping_solution']) > 1024)) {
            throw new AssertionException("invalid value for 'shipping_solution', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['shipping_solution']) < 1)) {
            throw new AssertionException("invalid value for 'shipping_solution', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['transportation_option_id'] === null) {
            throw new AssertionException("'transportation_option_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['transportation_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'transportation_option_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['transportation_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'transportation_option_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['transportation_option_id'])) {
            throw new AssertionException("invalid value for 'transportation_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }
    }

    /**
     * Gets carrier.
     */
    public function getCarrier() : Carrier
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Carrier $carrier carrier
     */
    public function setCarrier(Carrier $carrier) : self
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets carrier_appointment.
     */
    public function getCarrierAppointment() : ?CarrierAppointment
    {
        return $this->container['carrier_appointment'];
    }

    /**
     * Sets carrier_appointment.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\CarrierAppointment $carrier_appointment carrier_appointment
     */
    public function setCarrierAppointment(?CarrierAppointment $carrier_appointment) : self
    {
        $this->container['carrier_appointment'] = $carrier_appointment;

        return $this;
    }

    /**
     * Gets preconditions.
     *
     * @return string[]
     */
    public function getPreconditions() : array
    {
        return $this->container['preconditions'];
    }

    /**
     * Sets preconditions.
     *
     * @param string[] $preconditions identifies a list of preconditions for confirming the transportation option
     */
    public function setPreconditions(array $preconditions) : self
    {
        $this->container['preconditions'] = $preconditions;

        return $this;
    }

    /**
     * Gets quote.
     */
    public function getQuote() : ?Quote
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Quote $quote quote
     */
    public function setQuote(?Quote $quote) : self
    {
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets shipment_id.
     */
    public function getShipmentId() : string
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param string $shipment_id Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     */
    public function setShipmentId(string $shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipping_mode.
     */
    public function getShippingMode() : string
    {
        return $this->container['shipping_mode'];
    }

    /**
     * Sets shipping_mode.
     *
     * @param string $shipping_mode Mode of shipment transportation that this option will provide. Can be: `GROUND_SMALL_PARCEL`, `FREIGHT_LTL`, `FREIGHT_FTL_PALLET`, `FREIGHT_FTL_NONPALLET`, `OCEAN_LCL`, `OCEAN_FCL`, `AIR_SMALL_PARCEL`, `AIR_SMALL_PARCEL_EXPRESS`.
     */
    public function setShippingMode(string $shipping_mode) : self
    {
        $this->container['shipping_mode'] = $shipping_mode;

        return $this;
    }

    /**
     * Gets shipping_solution.
     */
    public function getShippingSolution() : string
    {
        return $this->container['shipping_solution'];
    }

    /**
     * Sets shipping_solution.
     *
     * @param string $shipping_solution Shipping program for the option. Can be: `AMAZON_PARTNERED_CARRIER`, `USE_YOUR_OWN_CARRIER`.
     */
    public function setShippingSolution(string $shipping_solution) : self
    {
        $this->container['shipping_solution'] = $shipping_solution;

        return $this;
    }

    /**
     * Gets transportation_option_id.
     */
    public function getTransportationOptionId() : string
    {
        return $this->container['transportation_option_id'];
    }

    /**
     * Sets transportation_option_id.
     *
     * @param string $transportation_option_id Identifier of a transportation option. A transportation option represent one option for how to send a shipment.
     */
    public function setTransportationOptionId(string $transportation_option_id) : self
    {
        $this->container['transportation_option_id'] = $transportation_option_id;

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

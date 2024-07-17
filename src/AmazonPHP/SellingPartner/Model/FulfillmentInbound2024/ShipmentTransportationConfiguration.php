<?php
/**
 * ShipmentTransportationConfiguration
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
 * ShipmentTransportationConfiguration Class Doc Comment
 *
 * @category Class
 * @description Details needed to generate the transportation options.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentTransportationConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ShipmentTransportationConfiguration';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'contact_information' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\ContactInformation',
        'freight_information' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\FreightInformation',
        'pallets' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\PalletInput[]',
        'ready_to_ship_window' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\WindowInput',
        'shipment_id' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'contact_information' => null,
        'freight_information' => null,
        'pallets' => null,
        'ready_to_ship_window' => null,
        'shipment_id' => null
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
        'contact_information' => 'contactInformation',
        'freight_information' => 'freightInformation',
        'pallets' => 'pallets',
        'ready_to_ship_window' => 'readyToShipWindow',
        'shipment_id' => 'shipmentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_information' => 'setContactInformation',
        'freight_information' => 'setFreightInformation',
        'pallets' => 'setPallets',
        'ready_to_ship_window' => 'setReadyToShipWindow',
        'shipment_id' => 'setShipmentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_information' => 'getContactInformation',
        'freight_information' => 'getFreightInformation',
        'pallets' => 'getPallets',
        'ready_to_ship_window' => 'getReadyToShipWindow',
        'shipment_id' => 'getShipmentId'
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
        $this->container['contact_information'] = $data['contact_information'] ?? null;
        $this->container['freight_information'] = $data['freight_information'] ?? null;
        $this->container['pallets'] = $data['pallets'] ?? null;
        $this->container['ready_to_ship_window'] = $data['ready_to_ship_window'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['ready_to_ship_window'] === null) {
            $invalidProperties[] = "'ready_to_ship_window' can't be null";
        }
        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if ((mb_strlen($this->container['shipment_id']) > 38)) {
            $invalidProperties[] = "invalid value for 'shipment_id', the character length must be smaller than or equal to 38.";
        }

        if ((mb_strlen($this->container['shipment_id']) < 38)) {
            $invalidProperties[] = "invalid value for 'shipment_id', the character length must be bigger than or equal to 38.";
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['shipment_id'])) {
            $invalidProperties[] = "invalid value for 'shipment_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.";
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
     * Gets contact_information
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\ContactInformation|null
     */
    public function getContactInformation(): ?ContactInformation
    {
        return $this->container['contact_information'];
    }

    /**
     * Sets contact_information
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\ContactInformation|null $contact_information contact_information
     *
     * @return self
     */
    public function setContactInformation($contact_information): static
    {
        $this->container['contact_information'] = $contact_information;

        return $this;
    }

    /**
     * Gets freight_information
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\FreightInformation|null
     */
    public function getFreightInformation(): ?FreightInformation
    {
        return $this->container['freight_information'];
    }

    /**
     * Sets freight_information
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\FreightInformation|null $freight_information freight_information
     *
     * @return self
     */
    public function setFreightInformation($freight_information): static
    {
        $this->container['freight_information'] = $freight_information;

        return $this;
    }

    /**
     * Gets pallets
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\PalletInput[]|null
     */
    public function getPallets(): ?array
    {
        return $this->container['pallets'];
    }

    /**
     * Sets pallets
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\PalletInput[]|null $pallets List of pallet configuration inputs.
     *
     * @return self
     */
    public function setPallets($pallets): static
    {
        $this->container['pallets'] = $pallets;

        return $this;
    }

    /**
     * Gets ready_to_ship_window
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\WindowInput
     */
    public function getReadyToShipWindow(): WindowInput
    {
        return $this->container['ready_to_ship_window'];
    }

    /**
     * Sets ready_to_ship_window
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\WindowInput $ready_to_ship_window ready_to_ship_window
     *
     * @return self
     */
    public function setReadyToShipWindow($ready_to_ship_window): static
    {
        $this->container['ready_to_ship_window'] = $ready_to_ship_window;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId(): string
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     *
     * @return self
     */
    public function setShipmentId($shipment_id): static
    {
        if ((mb_strlen($shipment_id) > 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $shipment_id when calling ShipmentTransportationConfiguration., must be smaller than or equal to 38.'
            );
        }
        if ((mb_strlen($shipment_id) < 38)) {
            throw new \InvalidArgumentException(
                'invalid length for $shipment_id when calling ShipmentTransportationConfiguration., must be bigger than or equal to 38.'
            );
        }
        if ((!preg_match("/^[a-zA-Z0-9-]*$/", $shipment_id))) {
            throw new \InvalidArgumentException(
                "invalid value for $shipment_id when calling ShipmentTransportationConfiguration., must conform to the pattern /^[a-zA-Z0-9-]*$/."
            );
        }

        $this->container['shipment_id'] = $shipment_id;

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



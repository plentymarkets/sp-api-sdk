<?php declare(strict_types=1);
/**
 * CODSettings.
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

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CODSettings implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'CODSettings';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'is_cod_required' => 'bool',
        'cod_charge' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'cod_charge_tax' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'shipping_charge' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'shipping_charge_tax' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'is_cod_required' => null,
        'cod_charge' => null,
        'cod_charge_tax' => null,
        'shipping_charge' => null,
        'shipping_charge_tax' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'is_cod_required' => 'isCodRequired',
        'cod_charge' => 'codCharge',
        'cod_charge_tax' => 'codChargeTax',
        'shipping_charge' => 'shippingCharge',
        'shipping_charge_tax' => 'shippingChargeTax',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'is_cod_required' => 'setIsCodRequired',
        'cod_charge' => 'setCodCharge',
        'cod_charge_tax' => 'setCodChargeTax',
        'shipping_charge' => 'setShippingCharge',
        'shipping_charge_tax' => 'setShippingChargeTax',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'is_cod_required' => 'getIsCodRequired',
        'cod_charge' => 'getCodCharge',
        'cod_charge_tax' => 'getCodChargeTax',
        'shipping_charge' => 'getShippingCharge',
        'shipping_charge_tax' => 'getShippingChargeTax',
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
        $this->container['is_cod_required'] = $data['is_cod_required'] ?? null;
        $this->container['cod_charge'] = $data['cod_charge'] ?? null;
        $this->container['cod_charge_tax'] = $data['cod_charge_tax'] ?? null;
        $this->container['shipping_charge'] = $data['shipping_charge'] ?? null;
        $this->container['shipping_charge_tax'] = $data['shipping_charge_tax'] ?? null;
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

        if ($this->container['is_cod_required'] === null) {
            $invalidProperties[] = "'is_cod_required' can't be null";
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
     * Gets is_cod_required.
     */
    public function getIsCodRequired() : bool
    {
        return $this->container['is_cod_required'];
    }

    /**
     * Sets is_cod_required.
     *
     * @param bool $is_cod_required when true, this fulfillment order requires a COD (Cash On Delivery) payment
     */
    public function setIsCodRequired(bool $is_cod_required) : self
    {
        $this->container['is_cod_required'] = $is_cod_required;

        return $this;
    }

    /**
     * Gets cod_charge.
     */
    public function getCodCharge() : ?Money
    {
        return $this->container['cod_charge'];
    }

    /**
     * Sets cod_charge.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $cod_charge cod_charge
     */
    public function setCodCharge(?Money $cod_charge) : self
    {
        $this->container['cod_charge'] = $cod_charge;

        return $this;
    }

    /**
     * Gets cod_charge_tax.
     */
    public function getCodChargeTax() : ?Money
    {
        return $this->container['cod_charge_tax'];
    }

    /**
     * Sets cod_charge_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $cod_charge_tax cod_charge_tax
     */
    public function setCodChargeTax(?Money $cod_charge_tax) : self
    {
        $this->container['cod_charge_tax'] = $cod_charge_tax;

        return $this;
    }

    /**
     * Gets shipping_charge.
     */
    public function getShippingCharge() : ?Money
    {
        return $this->container['shipping_charge'];
    }

    /**
     * Sets shipping_charge.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $shipping_charge shipping_charge
     */
    public function setShippingCharge(?Money $shipping_charge) : self
    {
        $this->container['shipping_charge'] = $shipping_charge;

        return $this;
    }

    /**
     * Gets shipping_charge_tax.
     */
    public function getShippingChargeTax() : ?Money
    {
        return $this->container['shipping_charge_tax'];
    }

    /**
     * Sets shipping_charge_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $shipping_charge_tax shipping_charge_tax
     */
    public function setShippingChargeTax(?Money $shipping_charge_tax) : self
    {
        $this->container['shipping_charge_tax'] = $shipping_charge_tax;

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

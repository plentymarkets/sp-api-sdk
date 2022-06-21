<?php declare(strict_types=1);
/**
 * ShippingServiceOptions.
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
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class ShippingServiceOptions implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'ShippingServiceOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'delivery_experience' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\DeliveryExperienceType',
        'declared_value' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount',
        'carrier_will_pick_up' => 'bool',
        'carrier_will_pick_up_option' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\CarrierWillPickUpOption',
        'label_format' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormat',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'delivery_experience' => null,
        'declared_value' => null,
        'carrier_will_pick_up' => null,
        'carrier_will_pick_up_option' => null,
        'label_format' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'delivery_experience' => 'DeliveryExperience',
        'declared_value' => 'DeclaredValue',
        'carrier_will_pick_up' => 'CarrierWillPickUp',
        'carrier_will_pick_up_option' => 'CarrierWillPickUpOption',
        'label_format' => 'LabelFormat',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'delivery_experience' => 'setDeliveryExperience',
        'declared_value' => 'setDeclaredValue',
        'carrier_will_pick_up' => 'setCarrierWillPickUp',
        'carrier_will_pick_up_option' => 'setCarrierWillPickUpOption',
        'label_format' => 'setLabelFormat',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'delivery_experience' => 'getDeliveryExperience',
        'declared_value' => 'getDeclaredValue',
        'carrier_will_pick_up' => 'getCarrierWillPickUp',
        'carrier_will_pick_up_option' => 'getCarrierWillPickUpOption',
        'label_format' => 'getLabelFormat',
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
        $this->container['delivery_experience'] = $data['delivery_experience'] ?? null;
        $this->container['declared_value'] = $data['declared_value'] ?? null;
        $this->container['carrier_will_pick_up'] = $data['carrier_will_pick_up'] ?? null;
        $this->container['carrier_will_pick_up_option'] = $data['carrier_will_pick_up_option'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
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

        if ($this->container['delivery_experience'] === null) {
            $invalidProperties[] = "'delivery_experience' can't be null";
        }

        if ($this->container['carrier_will_pick_up'] === null) {
            $invalidProperties[] = "'carrier_will_pick_up' can't be null";
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
     * Gets delivery_experience.
     */
    public function getDeliveryExperience() : DeliveryExperienceType
    {
        return $this->container['delivery_experience'];
    }

    /**
     * Sets delivery_experience.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\MerchantFulfillment\DeliveryExperienceType $delivery_experience delivery_experience
     */
    public function setDeliveryExperience(DeliveryExperienceType $delivery_experience) : self
    {
        $this->container['delivery_experience'] = $delivery_experience;

        return $this;
    }

    /**
     * Gets declared_value.
     */
    public function getDeclaredValue() : ?CurrencyAmount
    {
        return $this->container['declared_value'];
    }

    /**
     * Sets declared_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount $declared_value declared_value
     */
    public function setDeclaredValue(?CurrencyAmount $declared_value) : self
    {
        $this->container['declared_value'] = $declared_value;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up.
     */
    public function getCarrierWillPickUp() : bool
    {
        return $this->container['carrier_will_pick_up'];
    }

    /**
     * Sets carrier_will_pick_up.
     *
     * @param bool $carrier_will_pick_up When true, the carrier will pick up the package.  Note: Scheduled carrier pickup is available only using Dynamex (US), DPD (UK), and Royal Mail (UK).
     */
    public function setCarrierWillPickUp(bool $carrier_will_pick_up) : self
    {
        $this->container['carrier_will_pick_up'] = $carrier_will_pick_up;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up_option.
     */
    public function getCarrierWillPickUpOption() : ?CarrierWillPickUpOption
    {
        return $this->container['carrier_will_pick_up_option'];
    }

    /**
     * Sets carrier_will_pick_up_option.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\CarrierWillPickUpOption $carrier_will_pick_up_option carrier_will_pick_up_option
     */
    public function setCarrierWillPickUpOption(?CarrierWillPickUpOption $carrier_will_pick_up_option) : self
    {
        $this->container['carrier_will_pick_up_option'] = $carrier_will_pick_up_option;

        return $this;
    }

    /**
     * Gets label_format.
     */
    public function getLabelFormat() : ?LabelFormat
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormat $label_format label_format
     */
    public function setLabelFormat(?LabelFormat $label_format) : self
    {
        $this->container['label_format'] = $label_format;

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

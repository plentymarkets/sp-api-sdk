<?php declare(strict_types=1);
/**
 * CompetitivePricingType.
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
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\ProductPricing;

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
class CompetitivePricingType implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'CompetitivePricingType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'competitive_prices' => '\Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\CompetitivePriceType[]',
        'number_of_offer_listings' => '\Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\OfferListingCountType[]',
        'trade_in_value' => '\Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'competitive_prices' => null,
        'number_of_offer_listings' => null,
        'trade_in_value' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'competitive_prices' => 'CompetitivePrices',
        'number_of_offer_listings' => 'NumberOfOfferListings',
        'trade_in_value' => 'TradeInValue',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'competitive_prices' => 'setCompetitivePrices',
        'number_of_offer_listings' => 'setNumberOfOfferListings',
        'trade_in_value' => 'setTradeInValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'competitive_prices' => 'getCompetitivePrices',
        'number_of_offer_listings' => 'getNumberOfOfferListings',
        'trade_in_value' => 'getTradeInValue',
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
        $this->container['competitive_prices'] = $data['competitive_prices'] ?? null;
        $this->container['number_of_offer_listings'] = $data['number_of_offer_listings'] ?? null;
        $this->container['trade_in_value'] = $data['trade_in_value'] ?? null;
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

        if ($this->container['competitive_prices'] === null) {
            $invalidProperties[] = "'competitive_prices' can't be null";
        }

        if ($this->container['number_of_offer_listings'] === null) {
            $invalidProperties[] = "'number_of_offer_listings' can't be null";
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
     * Gets competitive_prices.
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\CompetitivePriceType[]
     */
    public function getCompetitivePrices() : array
    {
        return $this->container['competitive_prices'];
    }

    /**
     * Sets competitive_prices.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\CompetitivePriceType[] $competitive_prices a list of competitive pricing information
     */
    public function setCompetitivePrices(array $competitive_prices) : self
    {
        $this->container['competitive_prices'] = $competitive_prices;

        return $this;
    }

    /**
     * Gets number_of_offer_listings.
     *
     * @return \Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\OfferListingCountType[]
     */
    public function getNumberOfOfferListings() : array
    {
        return $this->container['number_of_offer_listings'];
    }

    /**
     * Sets number_of_offer_listings.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\OfferListingCountType[] $number_of_offer_listings The number of active offer listings for the item that was submitted. The listing count is returned by condition, one for each listing condition value that is returned.
     */
    public function setNumberOfOfferListings(array $number_of_offer_listings) : self
    {
        $this->container['number_of_offer_listings'] = $number_of_offer_listings;

        return $this;
    }

    /**
     * Gets trade_in_value.
     */
    public function getTradeInValue() : ?MoneyType
    {
        return $this->container['trade_in_value'];
    }

    /**
     * Sets trade_in_value.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $trade_in_value trade_in_value
     */
    public function setTradeInValue(?MoneyType $trade_in_value) : self
    {
        $this->container['trade_in_value'] = $trade_in_value;

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

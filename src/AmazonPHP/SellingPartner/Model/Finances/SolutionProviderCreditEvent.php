<?php declare(strict_types=1);
/**
 * SolutionProviderCreditEvent.
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
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace Plenty\AmazonPHP\SellingPartner\Model\Finances;

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
class SolutionProviderCreditEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'SolutionProviderCreditEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'provider_transaction_type' => 'string',
        'seller_order_id' => 'string',
        'marketplace_id' => 'string',
        'marketplace_country_code' => 'string',
        'seller_id' => 'string',
        'seller_store_name' => 'string',
        'provider_id' => 'string',
        'provider_store_name' => 'string',
        'transaction_amount' => '\Plenty\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'transaction_creation_date' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'provider_transaction_type' => null,
        'seller_order_id' => null,
        'marketplace_id' => null,
        'marketplace_country_code' => null,
        'seller_id' => null,
        'seller_store_name' => null,
        'provider_id' => null,
        'provider_store_name' => null,
        'transaction_amount' => null,
        'transaction_creation_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'provider_transaction_type' => 'ProviderTransactionType',
        'seller_order_id' => 'SellerOrderId',
        'marketplace_id' => 'MarketplaceId',
        'marketplace_country_code' => 'MarketplaceCountryCode',
        'seller_id' => 'SellerId',
        'seller_store_name' => 'SellerStoreName',
        'provider_id' => 'ProviderId',
        'provider_store_name' => 'ProviderStoreName',
        'transaction_amount' => 'TransactionAmount',
        'transaction_creation_date' => 'TransactionCreationDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'provider_transaction_type' => 'setProviderTransactionType',
        'seller_order_id' => 'setSellerOrderId',
        'marketplace_id' => 'setMarketplaceId',
        'marketplace_country_code' => 'setMarketplaceCountryCode',
        'seller_id' => 'setSellerId',
        'seller_store_name' => 'setSellerStoreName',
        'provider_id' => 'setProviderId',
        'provider_store_name' => 'setProviderStoreName',
        'transaction_amount' => 'setTransactionAmount',
        'transaction_creation_date' => 'setTransactionCreationDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'provider_transaction_type' => 'getProviderTransactionType',
        'seller_order_id' => 'getSellerOrderId',
        'marketplace_id' => 'getMarketplaceId',
        'marketplace_country_code' => 'getMarketplaceCountryCode',
        'seller_id' => 'getSellerId',
        'seller_store_name' => 'getSellerStoreName',
        'provider_id' => 'getProviderId',
        'provider_store_name' => 'getProviderStoreName',
        'transaction_amount' => 'getTransactionAmount',
        'transaction_creation_date' => 'getTransactionCreationDate',
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
        $this->container['provider_transaction_type'] = $data['provider_transaction_type'] ?? null;
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['marketplace_country_code'] = $data['marketplace_country_code'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['seller_store_name'] = $data['seller_store_name'] ?? null;
        $this->container['provider_id'] = $data['provider_id'] ?? null;
        $this->container['provider_store_name'] = $data['provider_store_name'] ?? null;
        $this->container['transaction_amount'] = $data['transaction_amount'] ?? null;
        $this->container['transaction_creation_date'] = $data['transaction_creation_date'] ?? null;
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
        return [];
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
     * Gets provider_transaction_type.
     */
    public function getProviderTransactionType() : ?string
    {
        return $this->container['provider_transaction_type'];
    }

    /**
     * Sets provider_transaction_type.
     *
     * @param null|string $provider_transaction_type the transaction type
     */
    public function setProviderTransactionType(?string $provider_transaction_type) : self
    {
        $this->container['provider_transaction_type'] = $provider_transaction_type;

        return $this;
    }

    /**
     * Gets seller_order_id.
     */
    public function getSellerOrderId() : ?string
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param null|string $seller_order_id a seller-defined identifier for an order
     */
    public function setSellerOrderId(?string $seller_order_id) : self
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param null|string $marketplace_id the identifier of the marketplace where the order was placed
     */
    public function setMarketplaceId(?string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets marketplace_country_code.
     */
    public function getMarketplaceCountryCode() : ?string
    {
        return $this->container['marketplace_country_code'];
    }

    /**
     * Sets marketplace_country_code.
     *
     * @param null|string $marketplace_country_code the two-letter country code of the country associated with the marketplace where the order was placed
     */
    public function setMarketplaceCountryCode(?string $marketplace_country_code) : self
    {
        $this->container['marketplace_country_code'] = $marketplace_country_code;

        return $this;
    }

    /**
     * Gets seller_id.
     */
    public function getSellerId() : ?string
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param null|string $seller_id the Amazon-defined identifier of the seller
     */
    public function setSellerId(?string $seller_id) : self
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets seller_store_name.
     */
    public function getSellerStoreName() : ?string
    {
        return $this->container['seller_store_name'];
    }

    /**
     * Sets seller_store_name.
     *
     * @param null|string $seller_store_name the store name where the payment event occurred
     */
    public function setSellerStoreName(?string $seller_store_name) : self
    {
        $this->container['seller_store_name'] = $seller_store_name;

        return $this;
    }

    /**
     * Gets provider_id.
     */
    public function getProviderId() : ?string
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id.
     *
     * @param null|string $provider_id the Amazon-defined identifier of the solution provider
     */
    public function setProviderId(?string $provider_id) : self
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets provider_store_name.
     */
    public function getProviderStoreName() : ?string
    {
        return $this->container['provider_store_name'];
    }

    /**
     * Sets provider_store_name.
     *
     * @param null|string $provider_store_name the store name where the payment event occurred
     */
    public function setProviderStoreName(?string $provider_store_name) : self
    {
        $this->container['provider_store_name'] = $provider_store_name;

        return $this;
    }

    /**
     * Gets transaction_amount.
     */
    public function getTransactionAmount() : ?Currency
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\Finances\Currency $transaction_amount transaction_amount
     */
    public function setTransactionAmount(?Currency $transaction_amount) : self
    {
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }

    /**
     * Gets transaction_creation_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getTransactionCreationDate() : ?\DateTimeInterface
    {
        return $this->container['transaction_creation_date'];
    }

    /**
     * Sets transaction_creation_date.
     *
     * @param \DateTime|\DateTimeImmutable $transaction_creation_date transaction_creation_date
     */
    public function setTransactionCreationDate(\DateTimeInterface $transaction_creation_date) : self
    {
        $this->container['transaction_creation_date'] = $transaction_creation_date;

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

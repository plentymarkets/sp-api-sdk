<?php declare(strict_types=1);
/**
 * NetworkComminglingTransactionEvent.
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

namespace AmazonPHP\SellingPartner\Model\Finances;

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
class NetworkComminglingTransactionEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'NetworkComminglingTransactionEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'transaction_type' => 'string',
        'posted_date' => '\DateTime',
        'net_co_transaction_id' => 'string',
        'swap_reason' => 'string',
        'asin' => 'string',
        'marketplace_id' => 'string',
        'tax_exclusive_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'transaction_type' => null,
        'posted_date' => 'date-time',
        'net_co_transaction_id' => null,
        'swap_reason' => null,
        'asin' => null,
        'marketplace_id' => null,
        'tax_exclusive_amount' => null,
        'tax_amount' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'transaction_type' => 'TransactionType',
        'posted_date' => 'PostedDate',
        'net_co_transaction_id' => 'NetCoTransactionID',
        'swap_reason' => 'SwapReason',
        'asin' => 'ASIN',
        'marketplace_id' => 'MarketplaceId',
        'tax_exclusive_amount' => 'TaxExclusiveAmount',
        'tax_amount' => 'TaxAmount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'transaction_type' => 'setTransactionType',
        'posted_date' => 'setPostedDate',
        'net_co_transaction_id' => 'setNetCoTransactionId',
        'swap_reason' => 'setSwapReason',
        'asin' => 'setAsin',
        'marketplace_id' => 'setMarketplaceId',
        'tax_exclusive_amount' => 'setTaxExclusiveAmount',
        'tax_amount' => 'setTaxAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'transaction_type' => 'getTransactionType',
        'posted_date' => 'getPostedDate',
        'net_co_transaction_id' => 'getNetCoTransactionId',
        'swap_reason' => 'getSwapReason',
        'asin' => 'getAsin',
        'marketplace_id' => 'getMarketplaceId',
        'tax_exclusive_amount' => 'getTaxExclusiveAmount',
        'tax_amount' => 'getTaxAmount',
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
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['net_co_transaction_id'] = $data['net_co_transaction_id'] ?? null;
        $this->container['swap_reason'] = $data['swap_reason'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['tax_exclusive_amount'] = $data['tax_exclusive_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
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
     * Gets transaction_type.
     */
    public function getTransactionType() : ?string
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param null|string $transaction_type The type of network item swap.  Possible values:  * NetCo - A Fulfillment by Amazon inventory pooling transaction. Available only in the India marketplace.  * ComminglingVAT - A commingling VAT transaction. Available only in the UK, Spain, France, Germany, and Italy marketplaces.
     */
    public function setTransactionType(?string $transaction_type) : self
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets posted_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param \DateTime|\DateTimeImmutable $posted_date posted_date
     */
    public function setPostedDate(\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets net_co_transaction_id.
     */
    public function getNetCoTransactionId() : ?string
    {
        return $this->container['net_co_transaction_id'];
    }

    /**
     * Sets net_co_transaction_id.
     *
     * @param null|string $net_co_transaction_id the identifier for the network item swap
     */
    public function setNetCoTransactionId(?string $net_co_transaction_id) : self
    {
        $this->container['net_co_transaction_id'] = $net_co_transaction_id;

        return $this;
    }

    /**
     * Gets swap_reason.
     */
    public function getSwapReason() : ?string
    {
        return $this->container['swap_reason'];
    }

    /**
     * Sets swap_reason.
     *
     * @param null|string $swap_reason the reason for the network item swap
     */
    public function setSwapReason(?string $swap_reason) : self
    {
        $this->container['swap_reason'] = $swap_reason;

        return $this;
    }

    /**
     * Gets asin.
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number (ASIN) of the swapped item
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

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
     * @param null|string $marketplace_id the marketplace in which the event took place
     */
    public function setMarketplaceId(?string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets tax_exclusive_amount.
     */
    public function getTaxExclusiveAmount() : ?Currency
    {
        return $this->container['tax_exclusive_amount'];
    }

    /**
     * Sets tax_exclusive_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $tax_exclusive_amount tax_exclusive_amount
     */
    public function setTaxExclusiveAmount(?Currency $tax_exclusive_amount) : self
    {
        $this->container['tax_exclusive_amount'] = $tax_exclusive_amount;

        return $this;
    }

    /**
     * Gets tax_amount.
     */
    public function getTaxAmount() : ?Currency
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $tax_amount tax_amount
     */
    public function setTaxAmount(?Currency $tax_amount) : self
    {
        $this->container['tax_amount'] = $tax_amount;

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

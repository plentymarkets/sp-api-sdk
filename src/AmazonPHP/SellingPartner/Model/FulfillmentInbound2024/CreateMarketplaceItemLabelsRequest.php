<?php
/**
 * CreateMarketplaceItemLabelsRequest
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
 * CreateMarketplaceItemLabelsRequest Class Doc Comment
 *
 * @category Class
 * @description The &#x60;createMarketplaceItemLabels&#x60; request.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateMarketplaceItemLabelsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CreateMarketplaceItemLabelsRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'height' => 'float',
        'label_type' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\LabelPrintType',
        'locale_code' => 'string',
        'marketplace_id' => 'string',
        'msku_quantities' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\MskuQuantity[]',
        'page_type' => '\Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024\ItemLabelPageType',
        'width' => 'float'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'height' => null,
        'label_type' => null,
        'locale_code' => null,
        'marketplace_id' => null,
        'msku_quantities' => null,
        'page_type' => null,
        'width' => null
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
        'height' => 'height',
        'label_type' => 'labelType',
        'locale_code' => 'localeCode',
        'marketplace_id' => 'marketplaceId',
        'msku_quantities' => 'mskuQuantities',
        'page_type' => 'pageType',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height' => 'setHeight',
        'label_type' => 'setLabelType',
        'locale_code' => 'setLocaleCode',
        'marketplace_id' => 'setMarketplaceId',
        'msku_quantities' => 'setMskuQuantities',
        'page_type' => 'setPageType',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height' => 'getHeight',
        'label_type' => 'getLabelType',
        'locale_code' => 'getLocaleCode',
        'marketplace_id' => 'getMarketplaceId',
        'msku_quantities' => 'getMskuQuantities',
        'page_type' => 'getPageType',
        'width' => 'getWidth'
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
        $this->container['height'] = $data['height'] ?? null;
        $this->container['label_type'] = $data['label_type'] ?? null;
        $this->container['locale_code'] = $data['locale_code'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['msku_quantities'] = $data['msku_quantities'] ?? null;
        $this->container['page_type'] = $data['page_type'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (!is_null($this->container['height']) && ($this->container['height'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['height']) && ($this->container['height'] < 25)) {
            $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 25.";
        }

        if ($this->container['label_type'] === null) {
            $invalidProperties[] = "'label_type' can't be null";
        }
        if (!is_null($this->container['locale_code']) && !preg_match(
                "/^[a-z]{2}_[A-Z]{2}$/",
                $this->container['locale_code']
            )) {
            $invalidProperties[] = "invalid value for 'locale_code', must be conform to the pattern /^[a-z]{2}_[A-Z]{2}$/.";
        }

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ((mb_strlen($this->container['marketplace_id']) > 256)) {
            $invalidProperties[] = "invalid value for 'marketplace_id', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['marketplace_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'marketplace_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['msku_quantities'] === null) {
            $invalidProperties[] = "'msku_quantities' can't be null";
        }
        if ((count($this->container['msku_quantities']) > 100)) {
            $invalidProperties[] = "invalid value for 'msku_quantities', number of items must be less than or equal to 100.";
        }

        if ((count($this->container['msku_quantities']) < 1)) {
            $invalidProperties[] = "invalid value for 'msku_quantities', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['width']) && ($this->container['width'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['width']) && ($this->container['width'] < 25)) {
            $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 25.";
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
     * Gets height
     *
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float|null $height The height of the item label.
     *
     * @return self
     */
    public function setHeight($height): static
    {
        if (!is_null($height) && ($height > 1E+2)) {
            throw new \InvalidArgumentException(
                'invalid value for $height when calling CreateMarketplaceItemLabelsRequest., must be smaller than or equal to 1E+2.'
            );
        }
        if (!is_null($height) && ($height < 25)) {
            throw new \InvalidArgumentException(
                'invalid value for $height when calling CreateMarketplaceItemLabelsRequest., must be bigger than or equal to 25.'
            );
        }

        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets label_type
     *
     * @return LabelPrintType
     */
    public function getLabelType(): LabelPrintType
    {
        return $this->container['label_type'];
    }

    /**
     * Sets label_type
     *
     * @param LabelPrintType $label_type label_type
     *
     * @return self
     */
    public function setLabelType($label_type): static
    {
        $this->container['label_type'] = $label_type;

        return $this;
    }

    /**
     * Gets locale_code
     *
     * @return string|null
     */
    public function getLocaleCode(): ?string
    {
        return $this->container['locale_code'];
    }

    /**
     * Sets locale_code
     *
     * @param string|null $locale_code The locale code constructed from ISO 639 language code and ISO 3166-1 alpha-2 standard of country codes separated by an underscore character.
     *
     * @return self
     */
    public function setLocaleCode($locale_code): static
    {
        if (!is_null($locale_code) && (!preg_match("/^[a-z]{2}_[A-Z]{2}$/", $locale_code))) {
            throw new \InvalidArgumentException(
                "invalid value for $locale_code when calling CreateMarketplaceItemLabelsRequest., must conform to the pattern /^[a-z]{2}_[A-Z]{2}$/."
            );
        }

        $this->container['locale_code'] = $locale_code;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId(): string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The Marketplace ID. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a list of possible values.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id): static
    {
        if ((mb_strlen($marketplace_id) > 256)) {
            throw new \InvalidArgumentException(
                'invalid length for $marketplace_id when calling CreateMarketplaceItemLabelsRequest., must be smaller than or equal to 256.'
            );
        }
        if ((mb_strlen($marketplace_id) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $marketplace_id when calling CreateMarketplaceItemLabelsRequest., must be bigger than or equal to 1.'
            );
        }

        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets msku_quantities
     *
     * @return MskuQuantity[]
     */
    public function getMskuQuantities(): array
    {
        return $this->container['msku_quantities'];
    }

    /**
     * Sets msku_quantities
     *
     * @param MskuQuantity[] $msku_quantities Represents the quantity of an msku to print item labels for.
     *
     * @return self
     */
    public function setMskuQuantities($msku_quantities): static
    {
        if ((count($msku_quantities) > 100)) {
            throw new \InvalidArgumentException(
                'invalid value for $msku_quantities when calling CreateMarketplaceItemLabelsRequest., number of items must be less than or equal to 100.'
            );
        }
        if ((count($msku_quantities) < 1)) {
            throw new \InvalidArgumentException(
                'invalid length for $msku_quantities when calling CreateMarketplaceItemLabelsRequest., number of items must be greater than or equal to 1.'
            );
        }
        $this->container['msku_quantities'] = $msku_quantities;

        return $this;
    }

    /**
     * Gets page_type
     *
     * @return ItemLabelPageType|null
     */
    public function getPageType(): ?ItemLabelPageType
    {
        return $this->container['page_type'];
    }

    /**
     * Sets page_type
     *
     * @param ItemLabelPageType|null $page_type page_type
     *
     * @return self
     */
    public function setPageType($page_type): static
    {
        $this->container['page_type'] = $page_type;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float|null $width The width of the item label.
     *
     * @return self
     */
    public function setWidth($width): static
    {
        if (!is_null($width) && ($width > 1E+2)) {
            throw new \InvalidArgumentException(
                'invalid value for $width when calling CreateMarketplaceItemLabelsRequest., must be smaller than or equal to 1E+2.'
            );
        }
        if (!is_null($width) && ($width < 25)) {
            throw new \InvalidArgumentException(
                'invalid value for $width when calling CreateMarketplaceItemLabelsRequest., must be bigger than or equal to 25.'
            );
        }

        $this->container['width'] = $width;

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



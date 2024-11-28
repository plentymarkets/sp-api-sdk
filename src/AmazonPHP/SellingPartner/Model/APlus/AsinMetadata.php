<?php declare(strict_types=1);
/**
 * AsinMetadata.
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
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\APlus;

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
class AsinMetadata implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'AsinMetadata';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'asin' => 'string',
        'badge_set' => '\Plenty\AmazonPHP\SellingPartner\Model\APlus\AsinBadge[]',
        'parent' => 'string',
        'title' => 'string',
        'image_url' => 'string',
        'content_reference_key_set' => 'string[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'asin' => null,
        'badge_set' => null,
        'parent' => null,
        'title' => null,
        'image_url' => null,
        'content_reference_key_set' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'asin' => 'asin',
        'badge_set' => 'badgeSet',
        'parent' => 'parent',
        'title' => 'title',
        'image_url' => 'imageUrl',
        'content_reference_key_set' => 'contentReferenceKeySet',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'asin' => 'setAsin',
        'badge_set' => 'setBadgeSet',
        'parent' => 'setParent',
        'title' => 'setTitle',
        'image_url' => 'setImageUrl',
        'content_reference_key_set' => 'setContentReferenceKeySet',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'asin' => 'getAsin',
        'badge_set' => 'getBadgeSet',
        'parent' => 'getParent',
        'title' => 'getTitle',
        'image_url' => 'getImageUrl',
        'content_reference_key_set' => 'getContentReferenceKeySet',
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['badge_set'] = $data['badge_set'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['image_url'] = $data['image_url'] ?? null;
        $this->container['content_reference_key_set'] = $data['content_reference_key_set'] ?? null;
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

        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }

        if ((\mb_strlen($this->container['asin']) < 10)) {
            $invalidProperties[] = "invalid value for 'asin', the character length must be bigger than or equal to 10.";
        }

        if (null !== $this->container['parent'] && (\mb_strlen($this->container['parent']) < 10)) {
            $invalidProperties[] = "invalid value for 'parent', the character length must be bigger than or equal to 10.";
        }

        if (null !== $this->container['title'] && (\mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (null !== $this->container['image_url'] && (\mb_strlen($this->container['image_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be bigger than or equal to 1.";
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
     * Gets asin.
     */
    public function getAsin() : string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN)
     */
    public function setAsin(string $asin) : self
    {
        if ((\mb_strlen($asin) < 10)) {
            throw new \InvalidArgumentException('invalid length for $asin when calling AsinMetadata., must be bigger than or equal to 10.');
        }

        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets badge_set.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\APlus\AsinBadge[]
     */
    public function getBadgeSet() : ?array
    {
        return $this->container['badge_set'];
    }

    /**
     * Sets badge_set.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\APlus\AsinBadge[] $badge_set the set of ASIN badges
     */
    public function setBadgeSet(?array $badge_set) : self
    {
        $this->container['badge_set'] = $badge_set;

        return $this;
    }

    /**
     * Gets parent.
     */
    public function getParent() : ?string
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent.
     *
     * @param null|string $parent the Amazon Standard Identification Number (ASIN)
     */
    public function setParent(?string $parent) : self
    {
        if (null !== $parent && (\mb_strlen($parent) < 10)) {
            throw new \InvalidArgumentException('invalid length for $parent when calling AsinMetadata., must be bigger than or equal to 10.');
        }

        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets title.
     */
    public function getTitle() : ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param null|string $title the title for the ASIN in the Amazon catalog
     */
    public function setTitle(?string $title) : self
    {
        if (null !== $title && (\mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling AsinMetadata., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets image_url.
     */
    public function getImageUrl() : ?string
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url.
     *
     * @param null|string $image_url the default image for the ASIN in the Amazon catalog
     */
    public function setImageUrl(?string $image_url) : self
    {
        if (null !== $image_url && (\mb_strlen($image_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling AsinMetadata., must be bigger than or equal to 1.');
        }

        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets content_reference_key_set.
     *
     * @return null|string[]
     */
    public function getContentReferenceKeySet() : ?array
    {
        return $this->container['content_reference_key_set'];
    }

    /**
     * Sets content_reference_key_set.
     *
     * @param null|string[] $content_reference_key_set a set of content reference keys
     */
    public function setContentReferenceKeySet(?array $content_reference_key_set) : self
    {
        $this->container['content_reference_key_set'] = $content_reference_key_set;

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

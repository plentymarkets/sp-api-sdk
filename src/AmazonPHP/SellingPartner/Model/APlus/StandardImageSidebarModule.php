<?php declare(strict_types=1);
/**
 * StandardImageSidebarModule.
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

namespace AmazonPHP\SellingPartner\Model\APlus;

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
class StandardImageSidebarModule implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'StandardImageSidebarModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'headline' => '\AmazonPHP\SellingPartner\Model\APlus\TextComponent',
        'image_caption_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageCaptionBlock',
        'description_text_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'description_list_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock',
        'sidebar_image_text_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock',
        'sidebar_list_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'headline' => null,
        'image_caption_block' => null,
        'description_text_block' => null,
        'description_list_block' => null,
        'sidebar_image_text_block' => null,
        'sidebar_list_block' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'headline' => 'headline',
        'image_caption_block' => 'imageCaptionBlock',
        'description_text_block' => 'descriptionTextBlock',
        'description_list_block' => 'descriptionListBlock',
        'sidebar_image_text_block' => 'sidebarImageTextBlock',
        'sidebar_list_block' => 'sidebarListBlock',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'headline' => 'setHeadline',
        'image_caption_block' => 'setImageCaptionBlock',
        'description_text_block' => 'setDescriptionTextBlock',
        'description_list_block' => 'setDescriptionListBlock',
        'sidebar_image_text_block' => 'setSidebarImageTextBlock',
        'sidebar_list_block' => 'setSidebarListBlock',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'headline' => 'getHeadline',
        'image_caption_block' => 'getImageCaptionBlock',
        'description_text_block' => 'getDescriptionTextBlock',
        'description_list_block' => 'getDescriptionListBlock',
        'sidebar_image_text_block' => 'getSidebarImageTextBlock',
        'sidebar_list_block' => 'getSidebarListBlock',
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
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['image_caption_block'] = $data['image_caption_block'] ?? null;
        $this->container['description_text_block'] = $data['description_text_block'] ?? null;
        $this->container['description_list_block'] = $data['description_list_block'] ?? null;
        $this->container['sidebar_image_text_block'] = $data['sidebar_image_text_block'] ?? null;
        $this->container['sidebar_list_block'] = $data['sidebar_list_block'] ?? null;
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
     * Gets headline.
     */
    public function getHeadline() : ?TextComponent
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\TextComponent $headline headline
     */
    public function setHeadline(?TextComponent $headline) : self
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets image_caption_block.
     */
    public function getImageCaptionBlock() : ?StandardImageCaptionBlock
    {
        return $this->container['image_caption_block'];
    }

    /**
     * Sets image_caption_block.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardImageCaptionBlock $image_caption_block image_caption_block
     */
    public function setImageCaptionBlock(?StandardImageCaptionBlock $image_caption_block) : self
    {
        $this->container['image_caption_block'] = $image_caption_block;

        return $this;
    }

    /**
     * Gets description_text_block.
     */
    public function getDescriptionTextBlock() : ?StandardTextBlock
    {
        return $this->container['description_text_block'];
    }

    /**
     * Sets description_text_block.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $description_text_block description_text_block
     */
    public function setDescriptionTextBlock(?StandardTextBlock $description_text_block) : self
    {
        $this->container['description_text_block'] = $description_text_block;

        return $this;
    }

    /**
     * Gets description_list_block.
     */
    public function getDescriptionListBlock() : ?StandardTextListBlock
    {
        return $this->container['description_list_block'];
    }

    /**
     * Sets description_list_block.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock $description_list_block description_list_block
     */
    public function setDescriptionListBlock(?StandardTextListBlock $description_list_block) : self
    {
        $this->container['description_list_block'] = $description_list_block;

        return $this;
    }

    /**
     * Gets sidebar_image_text_block.
     */
    public function getSidebarImageTextBlock() : ?StandardImageTextBlock
    {
        return $this->container['sidebar_image_text_block'];
    }

    /**
     * Sets sidebar_image_text_block.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock $sidebar_image_text_block sidebar_image_text_block
     */
    public function setSidebarImageTextBlock(?StandardImageTextBlock $sidebar_image_text_block) : self
    {
        $this->container['sidebar_image_text_block'] = $sidebar_image_text_block;

        return $this;
    }

    /**
     * Gets sidebar_list_block.
     */
    public function getSidebarListBlock() : ?StandardTextListBlock
    {
        return $this->container['sidebar_list_block'];
    }

    /**
     * Sets sidebar_list_block.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock $sidebar_list_block sidebar_list_block
     */
    public function setSidebarListBlock(?StandardTextListBlock $sidebar_list_block) : self
    {
        $this->container['sidebar_list_block'] = $sidebar_list_block;

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

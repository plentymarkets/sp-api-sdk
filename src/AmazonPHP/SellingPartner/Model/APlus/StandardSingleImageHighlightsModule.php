<?php declare(strict_types=1);
/**
 * StandardSingleImageHighlightsModule.
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
class StandardSingleImageHighlightsModule implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'StandardSingleImageHighlightsModule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'image' => '\AmazonPHP\SellingPartner\Model\APlus\ImageComponent',
        'headline' => '\AmazonPHP\SellingPartner\Model\APlus\TextComponent',
        'text_block1' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'text_block2' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'text_block3' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'bulleted_list_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderTextListBlock',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'image' => null,
        'headline' => null,
        'text_block1' => null,
        'text_block2' => null,
        'text_block3' => null,
        'bulleted_list_block' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'image' => 'image',
        'headline' => 'headline',
        'text_block1' => 'textBlock1',
        'text_block2' => 'textBlock2',
        'text_block3' => 'textBlock3',
        'bulleted_list_block' => 'bulletedListBlock',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'image' => 'setImage',
        'headline' => 'setHeadline',
        'text_block1' => 'setTextBlock1',
        'text_block2' => 'setTextBlock2',
        'text_block3' => 'setTextBlock3',
        'bulleted_list_block' => 'setBulletedListBlock',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'image' => 'getImage',
        'headline' => 'getHeadline',
        'text_block1' => 'getTextBlock1',
        'text_block2' => 'getTextBlock2',
        'text_block3' => 'getTextBlock3',
        'bulleted_list_block' => 'getBulletedListBlock',
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
        $this->container['image'] = $data['image'] ?? null;
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['text_block1'] = $data['text_block1'] ?? null;
        $this->container['text_block2'] = $data['text_block2'] ?? null;
        $this->container['text_block3'] = $data['text_block3'] ?? null;
        $this->container['bulleted_list_block'] = $data['bulleted_list_block'] ?? null;
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
     * Gets image.
     */
    public function getImage() : ?ImageComponent
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\ImageComponent $image image
     */
    public function setImage(?ImageComponent $image) : self
    {
        $this->container['image'] = $image;

        return $this;
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
     * Gets text_block1.
     */
    public function getTextBlock1() : ?StandardTextBlock
    {
        return $this->container['text_block1'];
    }

    /**
     * Sets text_block1.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $text_block1 text_block1
     */
    public function setTextBlock1(?StandardTextBlock $text_block1) : self
    {
        $this->container['text_block1'] = $text_block1;

        return $this;
    }

    /**
     * Gets text_block2.
     */
    public function getTextBlock2() : ?StandardTextBlock
    {
        return $this->container['text_block2'];
    }

    /**
     * Sets text_block2.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $text_block2 text_block2
     */
    public function setTextBlock2(?StandardTextBlock $text_block2) : self
    {
        $this->container['text_block2'] = $text_block2;

        return $this;
    }

    /**
     * Gets text_block3.
     */
    public function getTextBlock3() : ?StandardTextBlock
    {
        return $this->container['text_block3'];
    }

    /**
     * Sets text_block3.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock $text_block3 text_block3
     */
    public function setTextBlock3(?StandardTextBlock $text_block3) : self
    {
        $this->container['text_block3'] = $text_block3;

        return $this;
    }

    /**
     * Gets bulleted_list_block.
     */
    public function getBulletedListBlock() : ?StandardHeaderTextListBlock
    {
        return $this->container['bulleted_list_block'];
    }

    /**
     * Sets bulleted_list_block.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderTextListBlock $bulleted_list_block bulleted_list_block
     */
    public function setBulletedListBlock(?StandardHeaderTextListBlock $bulleted_list_block) : self
    {
        $this->container['bulleted_list_block'] = $bulleted_list_block;

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

<?php declare(strict_types=1);
/**
 * ImageComponent.
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
class ImageComponent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'ImageComponent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'upload_destination_id' => 'string',
        'image_crop_specification' => '\AmazonPHP\SellingPartner\Model\APlus\ImageCropSpecification',
        'alt_text' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'upload_destination_id' => null,
        'image_crop_specification' => null,
        'alt_text' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'upload_destination_id' => 'uploadDestinationId',
        'image_crop_specification' => 'imageCropSpecification',
        'alt_text' => 'altText',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'upload_destination_id' => 'setUploadDestinationId',
        'image_crop_specification' => 'setImageCropSpecification',
        'alt_text' => 'setAltText',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'upload_destination_id' => 'getUploadDestinationId',
        'image_crop_specification' => 'getImageCropSpecification',
        'alt_text' => 'getAltText',
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
        $this->container['upload_destination_id'] = $data['upload_destination_id'] ?? null;
        $this->container['image_crop_specification'] = $data['image_crop_specification'] ?? null;
        $this->container['alt_text'] = $data['alt_text'] ?? null;
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

        if ($this->container['upload_destination_id'] === null) {
            $invalidProperties[] = "'upload_destination_id' can't be null";
        }

        if ((\mb_strlen($this->container['upload_destination_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'upload_destination_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['image_crop_specification'] === null) {
            $invalidProperties[] = "'image_crop_specification' can't be null";
        }

        if ($this->container['alt_text'] === null) {
            $invalidProperties[] = "'alt_text' can't be null";
        }

        if ((\mb_strlen($this->container['alt_text']) > 100)) {
            $invalidProperties[] = "invalid value for 'alt_text', the character length must be smaller than or equal to 100.";
        }

        if ((\mb_strlen($this->container['alt_text']) < 1)) {
            $invalidProperties[] = "invalid value for 'alt_text', the character length must be bigger than or equal to 1.";
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
     * Gets upload_destination_id.
     */
    public function getUploadDestinationId() : string
    {
        return $this->container['upload_destination_id'];
    }

    /**
     * Sets upload_destination_id.
     *
     * @param string $upload_destination_id this identifier is provided by the Selling Partner API for Uploads
     */
    public function setUploadDestinationId(string $upload_destination_id) : self
    {
        if ((\mb_strlen($upload_destination_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $upload_destination_id when calling ImageComponent., must be bigger than or equal to 1.');
        }

        $this->container['upload_destination_id'] = $upload_destination_id;

        return $this;
    }

    /**
     * Gets image_crop_specification.
     */
    public function getImageCropSpecification() : ImageCropSpecification
    {
        return $this->container['image_crop_specification'];
    }

    /**
     * Sets image_crop_specification.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\APlus\ImageCropSpecification $image_crop_specification image_crop_specification
     */
    public function setImageCropSpecification(ImageCropSpecification $image_crop_specification) : self
    {
        $this->container['image_crop_specification'] = $image_crop_specification;

        return $this;
    }

    /**
     * Gets alt_text.
     */
    public function getAltText() : string
    {
        return $this->container['alt_text'];
    }

    /**
     * Sets alt_text.
     *
     * @param string $alt_text the alternative text for the image
     */
    public function setAltText(string $alt_text) : self
    {
        if ((\mb_strlen($alt_text) > 100)) {
            throw new \InvalidArgumentException('invalid length for $alt_text when calling ImageComponent., must be smaller than or equal to 100.');
        }

        if ((\mb_strlen($alt_text) < 1)) {
            throw new \InvalidArgumentException('invalid length for $alt_text when calling ImageComponent., must be bigger than or equal to 1.');
        }

        $this->container['alt_text'] = $alt_text;

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

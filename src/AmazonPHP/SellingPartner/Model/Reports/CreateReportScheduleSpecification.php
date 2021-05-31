<?php declare(strict_types=1);
/**
 * CreateReportScheduleSpecification.
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
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2020-09-04
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\Reports;

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
class CreateReportScheduleSpecification implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const PERIOD_PT5_M = 'PT5M';

    public const PERIOD_PT15_M = 'PT15M';

    public const PERIOD_PT30_M = 'PT30M';

    public const PERIOD_PT1_H = 'PT1H';

    public const PERIOD_PT2_H = 'PT2H';

    public const PERIOD_PT4_H = 'PT4H';

    public const PERIOD_PT8_H = 'PT8H';

    public const PERIOD_PT12_H = 'PT12H';

    public const PERIOD_P1_D = 'P1D';

    public const PERIOD_P2_D = 'P2D';

    public const PERIOD_P3_D = 'P3D';

    public const PERIOD_PT84_H = 'PT84H';

    public const PERIOD_P7_D = 'P7D';

    public const PERIOD_P14_D = 'P14D';

    public const PERIOD_P15_D = 'P15D';

    public const PERIOD_P18_D = 'P18D';

    public const PERIOD_P30_D = 'P30D';

    public const PERIOD_P1_M = 'P1M';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateReportScheduleSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'reportType' => 'string',
        'marketplaceIds' => 'string[]',
        'reportOptions' => 'array<string,string>',
        'period' => 'string',
        'nextReportCreationTime' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'reportType' => null,
        'marketplaceIds' => null,
        'reportOptions' => null,
        'period' => null,
        'nextReportCreationTime' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'reportType' => 'reportType',
        'marketplaceIds' => 'marketplaceIds',
        'reportOptions' => 'reportOptions',
        'period' => 'period',
        'nextReportCreationTime' => 'nextReportCreationTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'reportType' => 'setReportType',
        'marketplaceIds' => 'setMarketplaceIds',
        'reportOptions' => 'setReportOptions',
        'period' => 'setPeriod',
        'nextReportCreationTime' => 'setNextReportCreationTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'reportType' => 'getReportType',
        'marketplaceIds' => 'getMarketplaceIds',
        'reportOptions' => 'getReportOptions',
        'period' => 'getPeriod',
        'nextReportCreationTime' => 'getNextReportCreationTime',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['reportType'] = $data['reportType'] ?? null;
        $this->container['marketplaceIds'] = $data['marketplaceIds'] ?? null;
        $this->container['reportOptions'] = $data['reportOptions'] ?? null;
        $this->container['period'] = $data['period'] ?? null;
        $this->container['nextReportCreationTime'] = $data['nextReportCreationTime'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPeriodAllowableValues() : array
    {
        return [
            self::PERIOD_PT5_M,
            self::PERIOD_PT15_M,
            self::PERIOD_PT30_M,
            self::PERIOD_PT1_H,
            self::PERIOD_PT2_H,
            self::PERIOD_PT4_H,
            self::PERIOD_PT8_H,
            self::PERIOD_PT12_H,
            self::PERIOD_P1_D,
            self::PERIOD_P2_D,
            self::PERIOD_P3_D,
            self::PERIOD_PT84_H,
            self::PERIOD_P7_D,
            self::PERIOD_P14_D,
            self::PERIOD_P15_D,
            self::PERIOD_P18_D,
            self::PERIOD_P30_D,
            self::PERIOD_P1_M,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['reportType'] === null) {
            $invalidProperties[] = "'reportType' can't be null";
        }

        if ($this->container['marketplaceIds'] === null) {
            $invalidProperties[] = "'marketplaceIds' can't be null";
        }

        if ((\count($this->container['marketplaceIds']) > 25)) {
            $invalidProperties[] = "invalid value for 'marketplaceIds', number of items must be less than or equal to 25.";
        }

        if ((\count($this->container['marketplaceIds']) < 1)) {
            $invalidProperties[] = "invalid value for 'marketplaceIds', number of items must be greater than or equal to 1.";
        }

        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        $allowedValues = $this->getPeriodAllowableValues();

        if (null !== $this->container['period'] && !\in_array($this->container['period'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'period', must be one of '%s'",
                $this->container['period'],
                \implode("', '", $allowedValues)
            );
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
     * Gets reportType.
     */
    public function getReportType() : string
    {
        return $this->container['reportType'];
    }

    /**
     * Sets reportType.
     *
     * @param string $reportType the report type
     */
    public function setReportType(string $reportType) : self
    {
        $this->container['reportType'] = $reportType;

        return $this;
    }

    /**
     * Gets marketplaceIds.
     *
     * @return string[]
     */
    public function getMarketplaceIds() : array
    {
        return $this->container['marketplaceIds'];
    }

    /**
     * Sets marketplaceIds.
     *
     * @param string[] $marketplaceIds a list of marketplace identifiers for the report schedule
     */
    public function setMarketplaceIds(array $marketplaceIds) : self
    {
        if ((\count($marketplaceIds) > 25)) {
            throw new \InvalidArgumentException('invalid value for $marketplaceIds when calling CreateReportScheduleSpecification., number of items must be less than or equal to 25.');
        }

        if ((\count($marketplaceIds) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marketplaceIds when calling CreateReportScheduleSpecification., number of items must be greater than or equal to 1.');
        }
        $this->container['marketplaceIds'] = $marketplaceIds;

        return $this;
    }

    /**
     * Gets reportOptions.
     *
     * @return null|array<string,string>
     */
    public function getReportOptions() : ?array
    {
        return $this->container['reportOptions'];
    }

    /**
     * Sets reportOptions.
     *
     * @param null|array<string,string> $reportOptions Additional information passed to reports. This varies by report type.
     */
    public function setReportOptions(?array $reportOptions) : self
    {
        $this->container['reportOptions'] = $reportOptions;

        return $this;
    }

    /**
     * Gets period.
     */
    public function getPeriod() : string
    {
        return $this->container['period'];
    }

    /**
     * Sets period.
     *
     * @param string $period one of a set of predefined ISO 8601 periods that specifies how often a report should be created
     */
    public function setPeriod(string $period) : self
    {
        $allowedValues = $this->getPeriodAllowableValues();

        if (!\in_array($period, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'period', must be one of '%s'",
                    $period,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets nextReportCreationTime.
     */
    public function getNextReportCreationTime() : ?\DateTime
    {
        return $this->container['nextReportCreationTime'];
    }

    /**
     * Sets nextReportCreationTime.
     *
     * @param null|\DateTime $nextReportCreationTime the date and time when the schedule will create its next report, in ISO 8601 date time format
     */
    public function setNextReportCreationTime(?\DateTime $nextReportCreationTime) : self
    {
        $this->container['nextReportCreationTime'] = $nextReportCreationTime;

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
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}

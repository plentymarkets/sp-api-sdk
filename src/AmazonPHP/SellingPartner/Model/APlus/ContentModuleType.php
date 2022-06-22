<?php declare(strict_types=1);
/**
 * ContentModuleType.
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

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
class ContentModuleType
{
    /**
     * Possible values of this enum.
     */
    public const COMPANY_LOGO = 'STANDARD_COMPANY_LOGO';

    public const COMPARISON_TABLE = 'STANDARD_COMPARISON_TABLE';

    public const FOUR_IMAGE_TEXT = 'STANDARD_FOUR_IMAGE_TEXT';

    public const FOUR_IMAGE_TEXT_QUADRANT = 'STANDARD_FOUR_IMAGE_TEXT_QUADRANT';

    public const HEADER_IMAGE_TEXT = 'STANDARD_HEADER_IMAGE_TEXT';

    public const IMAGE_SIDEBAR = 'STANDARD_IMAGE_SIDEBAR';

    public const IMAGE_TEXT_OVERLAY = 'STANDARD_IMAGE_TEXT_OVERLAY';

    public const MULTIPLE_IMAGE_TEXT = 'STANDARD_MULTIPLE_IMAGE_TEXT';

    public const PRODUCT_DESCRIPTION = 'STANDARD_PRODUCT_DESCRIPTION';

    public const SINGLE_IMAGE_HIGHLIGHTS = 'STANDARD_SINGLE_IMAGE_HIGHLIGHTS';

    public const SINGLE_IMAGE_SPECS_DETAIL = 'STANDARD_SINGLE_IMAGE_SPECS_DETAIL';

    public const SINGLE_SIDE_IMAGE = 'STANDARD_SINGLE_SIDE_IMAGE';

    public const TECH_SPECS = 'STANDARD_TECH_SPECS';

    public const TEXT = 'STANDARD_TEXT';

    public const THREE_IMAGE_TEXT = 'STANDARD_THREE_IMAGE_TEXT';

    private /** [COMPAT] string */ $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::COMPANY_LOGO,
            self::COMPARISON_TABLE,
            self::FOUR_IMAGE_TEXT,
            self::FOUR_IMAGE_TEXT_QUADRANT,
            self::HEADER_IMAGE_TEXT,
            self::IMAGE_SIDEBAR,
            self::IMAGE_TEXT_OVERLAY,
            self::MULTIPLE_IMAGE_TEXT,
            self::PRODUCT_DESCRIPTION,
            self::SINGLE_IMAGE_HIGHLIGHTS,
            self::SINGLE_IMAGE_SPECS_DETAIL,
            self::SINGLE_SIDE_IMAGE,
            self::TECH_SPECS,
            self::TEXT,
            self::THREE_IMAGE_TEXT,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}

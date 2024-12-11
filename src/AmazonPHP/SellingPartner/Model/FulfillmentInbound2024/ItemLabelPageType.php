<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Model\FulfillmentInbound2024;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ItemLabelPageType
{
    private string $value;
    /**
     * Possible values of this enum.
     */
     public const A4_21 = 'A4_21';

     public const A4_24 = 'A4_24';

     public const A4_24_64X33 = 'A4_24_64x33';

     public const A4_24_66X35 = 'A4_24_66x35';

     public const A4_24_70X36 = 'A4_24_70x36';

     public const A4_24_70X37 = 'A4_24_70x37';

     public const A4_24I = 'A4_24i';

     public const A4_27 = 'A4_27';

     public const A4_40_52X29 = 'A4_40_52x29';

     public const A4_44_48X25 = 'A4_44_48x25';

     public const LETTER_30 = 'Letter_30';

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::A4_21,
            self::A4_24,
            self::A4_24_64X33,
            self::A4_24_66X35,
            self::A4_24_70X36,
            self::A4_24_70X37,
            self::A4_24I,
            self::A4_27,
            self::A4_40_52X29,
            self::A4_44_48X25,
            self::LETTER_30,
        ];
    }

    public function toString(): string
    {
        return $this->value;
    }
}

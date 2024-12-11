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
class OperationStatus
{
    private string $status;
    /**
     * Possible values of this enum.
     */
    final public const SUCCESS = 'SUCCESS';

    final public const FAILED = 'FAILED';

    final public const IN_PROGRESS = 'IN_PROGRESS';

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
            self::SUCCESS,
            self::FAILED,
            self::IN_PROGRESS,
        ];
    }

    public function toString(): string
    {
        return $this->value;
    }
}

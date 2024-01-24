<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ShipmentApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API supports orders that are two years old or less. Orders more than two years old will not show in the API response.  _Note:_ The Orders API supports orders from 2016 and after for the JP, AU, and SG marketplaces.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface OrdersSDKInterface
{
    public const API_NAME = 'Orders';

    public const OPERATION_UPDATESHIPMENTSTATUS = 'updateShipmentStatus';

    public const OPERATION_UPDATESHIPMENTSTATUS_PATH = '/orders/v0/orders/{orderId}/shipment';

    /**
     * Operation updateShipmentStatus.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param \AmazonPHP\SellingPartner\Model\Orders\UpdateShipmentStatusRequest $payload The request body for the updateShipmentStatus operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function updateShipmentStatus(AccessToken $accessToken, string $region, string $order_id, \AmazonPHP\SellingPartner\Model\Orders\UpdateShipmentStatusRequest $payload);
}

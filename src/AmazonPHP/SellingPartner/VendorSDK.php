<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner;

use Plenty\AmazonPHP\SellingPartner\Api\UpdateInventoryApi\VendorDirectFulfillmentInventorySDK;
use Plenty\AmazonPHP\SellingPartner\Api\VendorInvoiceApi\VendorDirectFulfillmentPaymentsSDK;
use Plenty\AmazonPHP\SellingPartner\Api\VendorOrdersApi\VendorDirectFulfillmentOrdersSDK;
use Plenty\AmazonPHP\SellingPartner\Api\VendorPaymentsApi\VendorInvoicesSDK;
use Plenty\AmazonPHP\SellingPartner\Api\VendorShippingApi\VendorShipmentsSDK;
use Plenty\AmazonPHP\SellingPartner\Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDK;
use Plenty\AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorDirectFulfillmentTransactionsSDK;
use Plenty\AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorTransactionStatusSDK;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;

final class VendorSDK
{
    /**
     * @var array<class-string>
     */
    private /** [COMPAT] array */ $instances;

    private /** [COMPAT] ClientInterface */ $httpClient;

    private /** [COMPAT] Configuration */ $configuration;

    private /** [COMPAT] LoggerInterface */ $logger;

    private /** [COMPAT] HttpFactory */ $httpFactory;

    public function __construct(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        Configuration $configuration,
        LoggerInterface $logger
    ) {
        $this->instances = [];

        $this->httpClient     = $httpClient;
        $this->configuration  = $configuration;
        $this->logger         = $logger;

        $this->httpFactory = new HttpFactory($requestFactory, $streamFactory);
    }

    public static function create(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        Configuration $configuration,
        LoggerInterface $logger
    ) : self {
        return new self($httpClient, $requestFactory, $streamFactory, $configuration, $logger);
    }

    public function ordersSDK() : VendorDirectFulfillmentOrdersSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentOrdersSDK::class);
    }

    public function invoicesSDK() : VendorInvoicesSDK
    {
        return $this->instantiateSDK(VendorInvoicesSDK::class);
    }

    public function shipmentsSDK() : VendorShipmentsSDK
    {
        return $this->instantiateSDK(VendorShipmentsSDK::class);
    }

    public function transactionStatusSDK() : VendorTransactionStatusSDK
    {
        return $this->instantiateSDK(VendorTransactionStatusSDK::class);
    }

    public function directFulfillmentPaymentsSDK() : VendorDirectFulfillmentPaymentsSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentPaymentsSDK::class);
    }

    public function directFulfillmentOrdersSDK() : VendorDirectFulfillmentOrdersSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentOrdersSDK::class);
    }

    public function directFulfillmentShippingSDK() : VendorDirectFulfillmentShippingSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentShippingSDK::class);
    }

    public function directFulfillmentTransactionsSDK() : VendorDirectFulfillmentTransactionsSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentTransactionsSDK::class);
    }

    public function directFulfillmentInventorySDK() : VendorDirectFulfillmentInventorySDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentInventorySDK::class);
    }

    /**
     * @param class-string $sdkClass
     */
    private function instantiateSDK(string $sdkClass) : object
    {
        if (isset($this->instances[$sdkClass])) {
            return $this->instances[$sdkClass];
        }

        $this->instances[$sdkClass] = new $sdkClass(
            $this->httpClient,
            $this->httpFactory,
            $this->configuration,
            $this->logger
        );

        return $this->instances[$sdkClass];
    }
}

<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

use Plenty\AmazonPHP\SellingPartner\Api\AplusContentApi\APlusSDK;
use Plenty\AmazonPHP\SellingPartner\Api\AuthorizationApi\AuthorizationSDK;
use Plenty\AmazonPHP\SellingPartner\Api\CatalogApi\CatalogItemSDK;
use Plenty\AmazonPHP\SellingPartner\Api\DefaultApi\FinancesSDK;
use Plenty\AmazonPHP\SellingPartner\Api\DefinitionsApi\ProductTypesDefinitionsSDK;
use Plenty\AmazonPHP\SellingPartner\Api\FbaInboundApi\FBAInboundSDK;
use Plenty\AmazonPHP\SellingPartner\Api\FbaInboundApi\FulfillmentInboundSDK;
use Plenty\AmazonPHP\SellingPartner\Api\FbaInventoryApi\FBAInventorySDK;
use Plenty\AmazonPHP\SellingPartner\Api\FbaOutboundApi\FulfillmentOutboundSDK;
use Plenty\AmazonPHP\SellingPartner\Api\FeedsApi\FeedsSDK;
use Plenty\AmazonPHP\SellingPartner\Api\FeesApi\ProductFeesSDK;
use Plenty\AmazonPHP\SellingPartner\Api\ListingsApi\ListingsItemsSDK;
use Plenty\AmazonPHP\SellingPartner\Api\MerchantFulfillmentApi\MerchantFulfillmentSDK;
use Plenty\AmazonPHP\SellingPartner\Api\MessagingApi\MessagingSDK;
use Plenty\AmazonPHP\SellingPartner\Api\NotificationsApi\NotificationsSDK;
use Plenty\AmazonPHP\SellingPartner\Api\OrdersV0Api;
use Plenty\AmazonPHP\SellingPartner\Api\ProductPricingApi\ProductPricingSDK;
use Plenty\AmazonPHP\SellingPartner\Api\ReportsApi\ReportsSDK;
use Plenty\AmazonPHP\SellingPartner\Api\SalesApi\SalesSDK;
use Plenty\AmazonPHP\SellingPartner\Api\SellersApi\SellersSDK;
use Plenty\AmazonPHP\SellingPartner\Api\ServiceApi\ServicesSDK;
use Plenty\AmazonPHP\SellingPartner\Api\ShipmentApi;
use Plenty\AmazonPHP\SellingPartner\Api\ShipmentInvoiceApi\ShipmentInvoicingSDK;
use Plenty\AmazonPHP\SellingPartner\Api\ShippingApi\ShippingSDK;
use Plenty\AmazonPHP\SellingPartner\Api\SmallAndLightApi\FBASmallAndLightSDK;
use Plenty\AmazonPHP\SellingPartner\Api\SolicitationsApi\SolicitationsSDK;
use Plenty\AmazonPHP\SellingPartner\Api\TokensApi\TokensSDK;
use Plenty\AmazonPHP\SellingPartner\Api\UploadsApi\UploadsSDK;
use Plenty\AmazonPHP\SellingPartner\Configuration;
use Plenty\AmazonPHP\SellingPartner\OAuth;
use Plenty\AmazonPHP\SellingPartner\SellingPartnerSDK;
use Plenty\AmazonPHP\SellingPartner\VendorSDK;
use Buzz\Client\Curl;
use Monolog\Logger;
use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;

final class SellingPartnerSDKTest extends TestCase
{
    private /** [COMPAT] ?RequestFactoryInterface */ $requestFactory;

    private /** [COMPAT] ?StreamFactoryInterface */ $streamFactory;

    private /** [COMPAT] ?ClientInterface */ $httpClient;

    private /** [COMPAT] ?Configuration */ $configuration;

    private /** [COMPAT] ?LoggerInterface */ $logger;

    private /** [COMPAT] array */ $sdkMap = [
        'oAuth'                   => OAuth::class,
        'aPlus'                   => APlusSDK::class,
        'authorization'           => AuthorizationSDK::class,
        'catalogItem'             => CatalogItemSDK::class,
        'fbaInbound'              => FBAInboundSDK::class,
        'fbaInventory'            => FBAInventorySDK::class,
        'fbaSmallAndLight'        => FBASmallAndLightSDK::class,
        'feeds'                   => FeedsSDK::class,
        'finances'                => FinancesSDK::class,
        'fulfillmentInbound'      => FulfillmentInboundSDK::class,
        'fulfillmentOutbound'     => FulfillmentOutboundSDK::class,
        'listingsItems'           => ListingsItemsSDK::class,
        'merchantFulfillment'     => MerchantFulfillmentSDK::class,
        'messaging'               => MessagingSDK::class,
        'notifications'           => NotificationsSDK::class,
        'orders'                  => OrdersV0Api\OrdersSDK::class,
        'orderShipment'           => ShipmentApi\OrdersSDK::class,
        'productFees'             => ProductFeesSDK::class,
        'productPricing'          => ProductPricingSDK::class,
        'productTypesDefinitions' => ProductTypesDefinitionsSDK::class,
        'reports'                 => ReportsSDK::class,
        'sales'                   => SalesSDK::class,
        'sellers'                 => SellersSDK::class,
        'services'                => ServicesSDK::class,
        'shipmentInvoicing'       => ShipmentInvoicingSDK::class,
        'shipping'                => ShippingSDK::class,
        'solicitations'           => SolicitationsSDK::class,
        'tokens'                  => TokensSDK::class,
        'uploads'                 => UploadsSDK::class,
        'vendor'                  => VendorSDK::class,
    ];

    protected function setUp() : void
    {
        $this->requestFactory = new Psr17Factory();
        $this->streamFactory  = new Psr17Factory();
        $this->httpClient     = new Curl($this->requestFactory);
        $this->configuration  = Configuration::forIAMUser('testId', 'testSecret', 'testAccessKey', 'testSecretKey');
        $this->logger         = new Logger('testLogger');
    }

    protected function tearDown() : void
    {
        $this->requestFactory = null;
        $this->streamFactory  = null;
        $this->httpClient     = null;
        $this->configuration  = null;
        $this->logger         = null;
    }

    public function test_initialization_from_constructor() : void
    {
        $this->assertInstanceOf(
            SellingPartnerSDK::class,
            new SellingPartnerSDK(
                $this->httpClient,
                $this->requestFactory,
                $this->streamFactory,
                $this->configuration,
                $this->logger
            )
        );
    }

    public function test_initialization_from_create_method() : void
    {
        $this->assertInstanceOf(
            SellingPartnerSDK::class,
            $this->getSellingPartnerSDKByCreate()
        );
    }

    public function test_initialization_of_child_sdks() : void
    {
        $sellingPartnerSDK = $this->getSellingPartnerSDKByCreate();

        foreach ($this->sdkMap as $method => $class) {
            $this->assertInstanceOf($class, $sellingPartnerSDK->{$method}());
        }
    }

    public function test_child_sdks_are_properly_cached() : void
    {
        $sellingPartnerSDK = $this->getSellingPartnerSDKByCreate();

        foreach ($this->sdkMap as $method => $class) {
            $childSDKOne = $sellingPartnerSDK->{$method}();
            $childSDKTwo = $sellingPartnerSDK->{$method}();

            $this->assertSame(
                $childSDKOne,
                $childSDKTwo,
                'Failed asserting that two variables reference the same ' . $class . ' object.'
            );
        }
    }

    private function getSellingPartnerSDKByCreate() : SellingPartnerSDK
    {
        return SellingPartnerSDK::create(
            $this->httpClient,
            $this->requestFactory,
            $this->streamFactory,
            $this->configuration,
            $this->logger
        );
    }
}

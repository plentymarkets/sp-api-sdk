<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner;

use Plenty\AmazonPHP\SellingPartner\Api\AuthorizationApi\AuthorizationSDK;
use Plenty\AmazonPHP\SellingPartner\Api\FbaInboundApi\FulfillmentInboundSDK2024;
use Psr\Http\Client\ClientInterface;

class SellingPartnerSDK2024
{
    /**
     * @var array<class-string>
     */
    private /** [COMPAT] array */ $instances;

    private /** [COMPAT] ClientInterface */ $httpClient;

    private /** [COMPAT] Configuration */ $configuration;

    public function __construct(
        ClientInterface $httpClient = null,
        Configuration2024 $configuration = null,
        HeaderSelector2024 $headerSelector = null
    ) {
        $this->instances = [];
        $this->httpClient     = $httpClient;
        $this->configuration  = $configuration;
        $this->headerSelector = $headerSelector;
    }

    public static function create(
        ClientInterface $httpClient,
        Configuration2024 $configuration,
    ): self {
        return new self($httpClient, $configuration, $headerSelector);
    }

    public function configuration(): Configuration2024
    {
        return $this->configuration;
    }

    public function oAuth(): OAuth
    {
        return $this->instantiateSDK(OAuth::class);
    }

    public function fulfillmentInbound2024(): FulfillmentInboundSDK2024
    {
        return $this->instantiateSDK(FulfillmentInboundSDK2024::class);
    }

    /**
     * @param class-string $sdkClass
     */
    private function instantiateSDK(string $sdkClass): object
    {
        if (isset($this->instances[$sdkClass])) {
            return $this->instances[$sdkClass];
        }

        $this->instances[$sdkClass] = new $sdkClass(
            $this->httpClient,
            $this->configuration,
            $this->headerSelector
        );

        return $this->instances[$sdkClass];
    }
}

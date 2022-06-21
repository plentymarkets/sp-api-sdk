<?php declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Api\SalesApi;

use Plenty\AmazonPHP\SellingPartner\AccessToken;
use Plenty\AmazonPHP\SellingPartner\Configuration;
use Plenty\AmazonPHP\SellingPartner\Exception\ApiException;
use Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Plenty\AmazonPHP\SellingPartner\HttpFactory;
use Plenty\AmazonPHP\SellingPartner\HttpSignatureHeaders;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class SalesSDK
{
    public const API_NAME = 'Sales';

    public const OPERATION_GETORDERMETRICS = 'getOrderMetrics';

    public const OPERATION_GETORDERMETRICS_PATH = '/sales/v1/orderMetrics';

    private /** [COMPAT] ClientInterface */ $client;

    private /** [COMPAT] HttpFactory */ $httpFactory;

    private /** [COMPAT] Configuration */ $configuration;

    private /** [COMPAT] LoggerInterface */ $logger;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * Operation getOrderMetrics.
     *
     * @param AccessToken $accessToken
     * @param string[] $marketplace_ids A list of marketplace identifiers. Example: ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param string $granularity_time_zone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param string $buyer_type Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to 'All')
     * @param string $fulfillment_network Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param string $first_day_of_week Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to 'Monday')
     * @param string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getOrderMetrics(AccessToken $accessToken, string $region, array $marketplace_ids, string $interval, string $granularity, string $granularity_time_zone = null, string $buyer_type = 'All', string $fulfillment_network = null, string $first_day_of_week = 'Monday', string $asin = null, string $sku = null) : \Plenty\AmazonPHP\SellingPartner\Model\Sales\GetOrderMetricsResponse
    {
        $request = $this->getOrderMetricsRequest($accessToken, $region, $marketplace_ids, $interval, $granularity, $granularity_time_zone, $buyer_type, $fulfillment_network, $first_day_of_week, $asin, $sku);

        $this->configuration->extensions()->preRequest('Sales', 'getOrderMetrics', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('Sales', 'getOrderMetrics')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Sales', 'getOrderMetrics'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'Sales',
                        'operation' => 'getOrderMetrics',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('Sales', 'getOrderMetrics', $request, $response);

            if ($this->configuration->loggingEnabled('Sales', 'getOrderMetrics')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Sales', 'getOrderMetrics'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'Sales',
                        'operation' => 'getOrderMetrics',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\Sales\GetOrderMetricsResponse',
            []
        );
    }

    /**
     * Create request for operation 'getOrderMetrics'.
     *
     * @param AccessToken $accessToken
     * @param string[] $marketplace_ids A list of marketplace identifiers. Example: ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param string $granularity_time_zone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param string $buyer_type Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to 'All')
     * @param string $fulfillment_network Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param string $first_day_of_week Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to 'Monday')
     * @param string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getOrderMetricsRequest(AccessToken $accessToken, string $region, array $marketplace_ids, string $interval, string $granularity, string $granularity_time_zone = null, string $buyer_type = 'All', string $fulfillment_network = null, string $first_day_of_week = 'Monday', string $asin = null, string $sku = null) : RequestInterface
    {
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getOrderMetrics'
            );
        }
        // verify the required parameter 'interval' is set
        if ($interval === null || (\is_array($interval) && \count($interval) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $interval when calling getOrderMetrics'
            );
        }
        // verify the required parameter 'granularity' is set
        if ($granularity === null || (\is_array($granularity) && \count($granularity) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $granularity when calling getOrderMetrics'
            );
        }

        $resourcePath = '/sales/v1/orderMetrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toString($marketplace_ids);
        }
        // query params
        if (\is_array($interval)) {
            $interval = ObjectSerializer::serializeCollection($interval, '', true);
        }

        if ($interval !== null) {
            $queryParams['interval'] = ObjectSerializer::toString($interval);
        }
        // query params
        if (\is_array($granularity_time_zone)) {
            $granularity_time_zone = ObjectSerializer::serializeCollection($granularity_time_zone, '', true);
        }

        if ($granularity_time_zone !== null) {
            $queryParams['granularityTimeZone'] = ObjectSerializer::toString($granularity_time_zone);
        }
        // query params
        if (\is_array($granularity)) {
            $granularity = ObjectSerializer::serializeCollection($granularity, '', true);
        }

        if ($granularity !== null) {
            $queryParams['granularity'] = ObjectSerializer::toString($granularity);
        }
        // query params
        if (\is_array($buyer_type)) {
            $buyer_type = ObjectSerializer::serializeCollection($buyer_type, '', true);
        }

        if ($buyer_type !== null) {
            $queryParams['buyerType'] = ObjectSerializer::toString($buyer_type);
        }
        // query params
        if (\is_array($fulfillment_network)) {
            $fulfillment_network = ObjectSerializer::serializeCollection($fulfillment_network, '', true);
        }

        if ($fulfillment_network !== null) {
            $queryParams['fulfillmentNetwork'] = ObjectSerializer::toString($fulfillment_network);
        }
        // query params
        if (\is_array($first_day_of_week)) {
            $first_day_of_week = ObjectSerializer::serializeCollection($first_day_of_week, '', true);
        }

        if ($first_day_of_week !== null) {
            $queryParams['firstDayOfWeek'] = ObjectSerializer::toString($first_day_of_week);
        }
        // query params
        if (\is_array($asin)) {
            $asin = ObjectSerializer::serializeCollection($asin, '', true);
        }

        if ($asin !== null) {
            $queryParams['asin'] = ObjectSerializer::toString($asin);
        }
        // query params
        if (\is_array($sku)) {
            $sku = ObjectSerializer::serializeCollection($sku, '', true);
        }

        if ($sku !== null) {
            $queryParams['sku'] = ObjectSerializer::toString($sku);
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }
}

<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\FbaInventoryApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class FBAInventorySDK
{
    public const API_NAME = 'FBAInventory';

    public const OPERATION_GETINVENTORYSUMMARIES = 'getInventorySummaries';

    public const OPERATION_GETINVENTORYSUMMARIES_PATH = '/fba/inventory/v1/summaries';

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
     * Operation getInventorySummaries.
     *
     * @param AccessToken $accessToken
     * @param string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param string[] $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[] $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getInventorySummaries(AccessToken $accessToken, string $region, string $granularity_type, string $granularity_id, array $marketplace_ids, bool $details = false, \DateTimeInterface $start_date_time = null, array $seller_skus = null, string $next_token = null) : \AmazonPHP\SellingPartner\Model\FBAInventory\GetInventorySummariesResponse
    {
        $request = $this->getInventorySummariesRequest($accessToken, $region, $granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

        $this->configuration->extensions()->preRequest('FBAInventory', 'getInventorySummaries', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('FBAInventory', 'getInventorySummaries')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('FBAInventory', 'getInventorySummaries'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'FBAInventory',
                        'operation' => 'getInventorySummaries',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('FBAInventory', 'getInventorySummaries', $request, $response);

            if ($this->configuration->loggingEnabled('FBAInventory', 'getInventorySummaries')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('FBAInventory', 'getInventorySummaries'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'FBAInventory',
                        'operation' => 'getInventorySummaries',
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
            '\AmazonPHP\SellingPartner\Model\FBAInventory\GetInventorySummariesResponse',
            []
        );
    }

    /**
     * Create request for operation 'getInventorySummaries'.
     *
     * @param AccessToken $accessToken
     * @param string $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string $granularity_id The granularity ID for the inventory aggregation level. (required)
     * @param string[] $marketplace_ids The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[] $seller_skus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string $next_token String token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getInventorySummariesRequest(AccessToken $accessToken, string $region, string $granularity_type, string $granularity_id, array $marketplace_ids, bool $details = false, \DateTimeInterface $start_date_time = null, array $seller_skus = null, string $next_token = null) : RequestInterface
    {
        // verify the required parameter 'granularity_type' is set
        if ($granularity_type === null || (\is_array($granularity_type) && \count($granularity_type) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $granularity_type when calling getInventorySummaries'
            );
        }
        // verify the required parameter 'granularity_id' is set
        if ($granularity_id === null || (\is_array($granularity_id) && \count($granularity_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $granularity_id when calling getInventorySummaries'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getInventorySummaries'
            );
        }

        if (\count($marketplace_ids) > 1) {
            throw new InvalidArgumentException('invalid value for "$marketplace_ids" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 1.');
        }

        if ($seller_skus !== null && \count($seller_skus) > 50) {
            throw new InvalidArgumentException('invalid value for "$seller_skus" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 50.');
        }

        $resourcePath = '/fba/inventory/v1/summaries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($details)) {
            $details = ObjectSerializer::serializeCollection($details, '', true);
        }

        if ($details !== null) {
            $queryParams['details'] = ObjectSerializer::toString($details);
        }
        // query params
        if (\is_array($granularity_type)) {
            $granularity_type = ObjectSerializer::serializeCollection($granularity_type, '', true);
        }

        if ($granularity_type !== null) {
            $queryParams['granularityType'] = ObjectSerializer::toString($granularity_type);
        }
        // query params
        if (\is_array($granularity_id)) {
            $granularity_id = ObjectSerializer::serializeCollection($granularity_id, '', true);
        }

        if ($granularity_id !== null) {
            $queryParams['granularityId'] = ObjectSerializer::toString($granularity_id);
        }
        // query params
        if (\is_array($start_date_time)) {
            $start_date_time = ObjectSerializer::serializeCollection($start_date_time, '', true);
        }

        if ($start_date_time !== null) {
            $queryParams['startDateTime'] = ObjectSerializer::toString($start_date_time);
        }
        // query params
        if (\is_array($seller_skus)) {
            $seller_skus = ObjectSerializer::serializeCollection($seller_skus, 'form', true);
        }

        if ($seller_skus !== null) {
            $queryParams['sellerSkus'] = ObjectSerializer::toString($seller_skus);
        }
        // query params
        if (\is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }

        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toString($next_token);
        }
        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toString($marketplace_ids);
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

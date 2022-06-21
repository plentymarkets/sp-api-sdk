<?php declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Api\ShipmentInvoiceApi;

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
final class ShipmentInvoicingSDK
{
    public const API_NAME = 'ShipmentInvoicing';

    public const OPERATION_GETINVOICESTATUS = 'getInvoiceStatus';

    public const OPERATION_GETINVOICESTATUS_PATH = '/fba/outbound/brazil/v0/shipments/{shipmentId}/invoice/status';

    public const OPERATION_GETSHIPMENTDETAILS = 'getShipmentDetails';

    public const OPERATION_GETSHIPMENTDETAILS_PATH = '/fba/outbound/brazil/v0/shipments/{shipmentId}';

    public const OPERATION_SUBMITINVOICE = 'submitInvoice';

    public const OPERATION_SUBMITINVOICE_PATH = '/fba/outbound/brazil/v0/shipments/{shipmentId}/invoice';

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
     * Operation getInvoiceStatus.
     *
     * @param AccessToken $accessToken
     * @param string $shipment_id The shipment identifier for the shipment. (required)
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getInvoiceStatus(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\GetInvoiceStatusResponse
    {
        $request = $this->getInvoiceStatusRequest($accessToken, $region, $shipment_id);

        $this->configuration->extensions()->preRequest('ShipmentInvoicing', 'getInvoiceStatus', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('ShipmentInvoicing', 'getInvoiceStatus')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ShipmentInvoicing', 'getInvoiceStatus'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'ShipmentInvoicing',
                        'operation' => 'getInvoiceStatus',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('ShipmentInvoicing', 'getInvoiceStatus', $request, $response);

            if ($this->configuration->loggingEnabled('ShipmentInvoicing', 'getInvoiceStatus')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ShipmentInvoicing', 'getInvoiceStatus'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'ShipmentInvoicing',
                        'operation' => 'getInvoiceStatus',
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
            '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\GetInvoiceStatusResponse',
            []
        );
    }

    /**
     * Create request for operation 'getInvoiceStatus'.
     *
     * @param AccessToken $accessToken
     * @param string $shipment_id The shipment identifier for the shipment. (required)
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getInvoiceStatusRequest(AccessToken $accessToken, string $region, string $shipment_id) : RequestInterface
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (\is_array($shipment_id) && \count($shipment_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling getInvoiceStatus'
            );
        }

        $resourcePath = '/fba/outbound/brazil/v0/shipments/{shipmentId}/invoice/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($shipment_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
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

    /**
     * Operation getShipmentDetails.
     *
     * @param AccessToken $accessToken
     * @param string $shipment_id The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getShipmentDetails(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\GetShipmentDetailsResponse
    {
        $request = $this->getShipmentDetailsRequest($accessToken, $region, $shipment_id);

        $this->configuration->extensions()->preRequest('ShipmentInvoicing', 'getShipmentDetails', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('ShipmentInvoicing', 'getShipmentDetails')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ShipmentInvoicing', 'getShipmentDetails'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'ShipmentInvoicing',
                        'operation' => 'getShipmentDetails',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('ShipmentInvoicing', 'getShipmentDetails', $request, $response);

            if ($this->configuration->loggingEnabled('ShipmentInvoicing', 'getShipmentDetails')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ShipmentInvoicing', 'getShipmentDetails'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'ShipmentInvoicing',
                        'operation' => 'getShipmentDetails',
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
            '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\GetShipmentDetailsResponse',
            []
        );
    }

    /**
     * Create request for operation 'getShipmentDetails'.
     *
     * @param AccessToken $accessToken
     * @param string $shipment_id The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getShipmentDetailsRequest(AccessToken $accessToken, string $region, string $shipment_id) : RequestInterface
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (\is_array($shipment_id) && \count($shipment_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling getShipmentDetails'
            );
        }

        $resourcePath = '/fba/outbound/brazil/v0/shipments/{shipmentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($shipment_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
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

    /**
     * Operation submitInvoice.
     *
     * @param AccessToken $accessToken
     * @param string $shipment_id The identifier for the shipment. (required)
     * @param \Plenty\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceRequest $body body (required)
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function submitInvoice(AccessToken $accessToken, string $region, string $shipment_id, \Plenty\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceRequest $body) : \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceResponse
    {
        $request = $this->submitInvoiceRequest($accessToken, $region, $shipment_id, $body);

        $this->configuration->extensions()->preRequest('ShipmentInvoicing', 'submitInvoice', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('ShipmentInvoicing', 'submitInvoice')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ShipmentInvoicing', 'submitInvoice'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'ShipmentInvoicing',
                        'operation' => 'submitInvoice',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('ShipmentInvoicing', 'submitInvoice', $request, $response);

            if ($this->configuration->loggingEnabled('ShipmentInvoicing', 'submitInvoice')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ShipmentInvoicing', 'submitInvoice'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'ShipmentInvoicing',
                        'operation' => 'submitInvoice',
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
            '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceResponse',
            []
        );
    }

    /**
     * Create request for operation 'submitInvoice'.
     *
     * @param AccessToken $accessToken
     * @param string $shipment_id The identifier for the shipment. (required)
     * @param \Plenty\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceRequest $body (required)
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function submitInvoiceRequest(AccessToken $accessToken, string $region, string $shipment_id, \Plenty\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceRequest $body) : RequestInterface
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (\is_array($shipment_id) && \count($shipment_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling submitInvoice'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (\is_array($body) && \count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling submitInvoice'
            );
        }

        $resourcePath = '/fba/outbound/brazil/v0/shipments/{shipmentId}/invoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($shipment_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
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
            'POST',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['content-type'] === ['application/json']) {
                $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($body), JSON_THROW_ON_ERROR);
            } else {
                $httpBody = $body;
            }

            $request = $request->withBody($this->httpFactory->createStreamFromString($httpBody));
        } elseif (\count($formParams) > 0) {
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

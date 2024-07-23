<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner;

use Plenty\AmazonPHP\SellingPartner\IdGenerator;
use Plenty\AmazonPHP\SellingPartner\IdGenerator\UniqidGenerator;
use Plenty\AmazonPHP\SellingPartner\Configuration\LoggerConfiguration;
use Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Plenty\AmazonPHP\SellingPartner\STSClient\Credentials;

class Configuration
{
    /** @var CredentialsHandler  */
    private CredentialsHandler $credentialsHandler;
    private string $userAgent;
    private string $tmpFolderPath;
    private LoggerConfiguration $loggerConfiguration;
    private Extensions $extensions;
    private string $lwaClientSecret;
    private string $lwaClientID;
    
    public function __construct(
        string $lwaClientID,
        string $lwaClientSecret,
        CredentialsHandler $credentialsHandler,
        Extensions $extensions = null,
        LoggerConfiguration $loggerConfiguration = null
    ) {
        $this->credentialsHandler = $credentialsHandler;

        $this->lwaClientID = $lwaClientID;
        $this->lwaClientSecret = $lwaClientSecret;

        // https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md#include-a-user-agent-header-in-all-requests
        $this->userAgent = 'Library amazon-php/sp-api-php (language=PHP ' . \phpversion() . '; Platform=' . \php_uname('s') . ' ' . \php_uname('r') . ' ' . \php_uname('m') . ')';
        $this->tmpFolderPath = \sys_get_temp_dir();
        $this->loggerConfiguration = $loggerConfiguration ? $loggerConfiguration : new LoggerConfiguration();
        $this->extensions = $extensions ? $extensions : new Extensions();
        $this->idGenerator = new UniqidGenerator();
    }

    public static function forIAMUser(string $clientId, string $clientSecret, string $accessKey, string $secretKey) : self
    {
        return new self($clientId, $clientSecret, $accessKey, $secretKey, null);
    }

    public static function forIAMRole(array $secrets, STSClient $stsClient, string $roleArn) : self
    {
        $credentialsHandler = new CredentialsHandler($stsClient, $secrets['accessKeyID'], $secrets['secretAccessKey'], $roleArn);
        return new self($secrets['clientId'], $secrets['clientSecret'], $credentialsHandler);
    }

    public function updateIAMRoleCredentials(Credentials $credentials) : self
    {
        $this->accessKey = $credentials->accessKeyId();
        $this->secretKey = $credentials->secretAccessKey();
        $this->securityToken = $credentials->sessionToken();

        return $this;
    }

    public function lwaClientID() : string
    {
        return $this->lwaClientID;
    }

    public function lwaClientSecret() : string
    {
        return $this->lwaClientSecret;
    }

    public function securityToken() : ?string
    {
        return $this->credentialsHandler->getSecurityToken();
    }

    public function apiURL(string $awsRegion) : string
    {
        if (!Regions::isValid($awsRegion)) {
            throw new InvalidArgumentException("Invalid region {$awsRegion}");
        }

        switch ($awsRegion) {
            case Regions::EUROPE:
                return Regions::EUROPE_URL;
            case Regions::FAR_EAST:
                return Regions::FAR_EAST_URL;
            case Regions::NORTH_AMERICA:
                return Regions::NORTH_AMERICA_URL;

            default:
                throw new \RuntimeException('unknown region');
        }
    }

    public function apiHost(string $awsRegion) : string
    {
        if (!Regions::isValid($awsRegion)) {
            throw new InvalidArgumentException("Invalid region {$awsRegion}");
        }

        switch ($awsRegion) {
            case Regions::EUROPE:
                return Regions::EUROPE_HOST;
            case Regions::FAR_EAST:
                return Regions::FAR_EAST_HOST;
            case Regions::NORTH_AMERICA:
                return Regions::NORTH_AMERICA_HOST;

            default:
                throw new \RuntimeException('unknown region');
        }
    }

    public function accessKey() : string
    {
        return $this->credentialsHandler->getAccessKey();
    }

    public function secretKey() : string
    {
        return $this->credentialsHandler->getSecretKey();
    }

    public function userAgent() : string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent) : self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * SDK's that are receiving files will use this path to write the file there.
     */
    public function setTmpFolderPath(string $path) : self
    {
        $this->tmpFolderPath = $path;

        return $this;
    }

    public function tmpFolderPath() : string
    {
        return $this->tmpFolderPath;
    }

    public function logLevel(string $api, string $operation) : string
    {
        return $this->loggerConfiguration->logLevel($api, $operation);
    }

    public function setDefaultLogLevel(string $logLevel) : self
    {
        $this->loggerConfiguration->setDefaultLogLevel($logLevel);

        return $this;
    }

    public function setLogLevel(string $api, string $operationMethod, string $logLevel) : self
    {
        $this->loggerConfiguration->setLogLevel($api, $operationMethod, $logLevel);

        return $this;
    }

    public function setSkipLogging(string $api, string $operation = null) : self
    {
        if ($operation !== null) {
            $this->loggerConfiguration->skipAPIOperation($api, $operation);

            return $this;
        }

        $this->loggerConfiguration->skipAPI($api);

        return $this;
    }

    public function setEnableLogging(string $api, string $operation = null) : self
    {
        if ($operation !== null) {
            $this->loggerConfiguration->enableAPIOperation($api, $operation);

            return $this;
        }

        $this->loggerConfiguration->enableAPI($api);

        return $this;
    }

    public function loggingEnabled(string $api, string $operation = null) : bool
    {
        return !$this->loggerConfiguration->isSkipped($api, $operation);
    }

    public function loggingAddSkippedHeader(string $headerName) : self
    {
        $this->loggerConfiguration->addSkippedHeader($headerName);

        return $this;
    }

    public function loggingRemoveSkippedHeader(string $headerName) : self
    {
        $this->loggerConfiguration->removeSkippedHeader($headerName);

        return $this;
    }

    /**
     * @return string[]
     */
    public function loggingSkipHeaders() : array
    {
        return $this->loggerConfiguration->skipHeaders();
    }

    public function registerExtension(Extension $extension) : void
    {
        $this->extensions->register($extension);
    }

    public function extensions() : Extensions
    {
        return $this->extensions;
    }

    public function idGenerator() : IdGenerator
    {
        return $this->idGenerator;
    }
}

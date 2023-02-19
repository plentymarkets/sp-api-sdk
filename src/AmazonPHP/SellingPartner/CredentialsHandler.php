<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner;


use Plenty\AmazonPHP\SellingPartner\STSClient\Credentials;

class CredentialsHandler {
    /** @var Credentials  */
    private Credentials $credentials;

    /** @var array  */
    private array $secrets;

    /** @var STSClient  */
    private STSClient $sts;

    /** @var string  */
    private string $roleArn;

    public function __construct(STSClient $sts, array $secrets, string $roleArn)
    {
        $this->sts = $sts;
        $this->secrets = $secrets;
        $this->roleArn = $roleArn;
    }

    /**
     * @return string
     */
    public function getAccessKey(): string
    {
        $this->refreshCredentials();
        return $this->credentials->accessKeyId();
    }

    /**
     * @param string $accessKey
     * @return CredentialsHandler
     */
    public function setAccessKey(string $accessKey): CredentialsHandler
    {
        $this->accessKey = $accessKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecretKey(): string
    {
        $this->refreshCredentials();
        return $this->credentials->secretAccessKey();
    }

    /**
     * @param string $secretKey
     * @return CredentialsHandler
     */
    public function setSecretKey(string $secretKey): CredentialsHandler
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecurityToken(): string
    {
        $this->refreshCredentials();
        return $this->credentials->sessionToken();
    }

    /**
     * @param string $securityToken
     * @return CredentialsHandler
     */
    public function setSecurityToken(string $securityToken): CredentialsHandler
    {
        $this->securityToken = $securityToken;
        return $this;
    }

    /**
     * @return void
     * @throws Exception\ApiException
     * @throws \JsonException
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    private function refreshCredentials(): void {
        if($this->validCredentials()) {
            return;
        }

        $this->credentials = $this->sts->assumeRole(
            $this->secrets['accessKeyID'],
            $this->secrets['secretAccessKey'],
            $this->roleArn
        );
    }

    private function validCredentials(): bool {
        if(empty($this->credentials)) {
            return false;
        }
        return time() < $this->credentials->expiration() - 120; //don't go to the end of life span
    }
}

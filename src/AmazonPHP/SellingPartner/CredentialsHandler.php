<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner;


use Plenty\AmazonPHP\SellingPartner\STSClient\Credentials;

class CredentialsHandler {
    /** @var Credentials  */
    private Credentials $credentials;

    /** @var string  */
    private string $accessKeyId;

    /** @var string  */
    private string $secretAccessKey;

    /** @var STSClient  */
    private STSClient $sts;

    /** @var string  */
    private string $roleArn;

    /**
     * @param STSClient $sts
     * @param string $accessKeyId
     * @param string $secretAccessKey
     * @param string $roleArn
     */
    public function __construct(STSClient $sts, string $accessKeyId, string $secretAccessKey, string $roleArn)
    {
        $this->sts = $sts;
        $this->accessKeyId = $accessKeyId;
        $this->secretAccessKey = $secretAccessKey;
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
     * @return string
     */
    public function getSecretKey(): string
    {
        $this->refreshCredentials();
        return $this->credentials->secretAccessKey();
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
     * @return void
     * @throws Exception\ApiException
     * @throws \JsonException
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    private function refreshCredentials(): void {
        if($this->areCredentialsValid()) {
            return;
        }

        $this->credentials = $this->sts->assumeRole(
            $this->accessKeyId,
            $this->secretAccessKey,
            $this->roleArn
        );
    }

    private function areCredentialsValid(): bool {
        if(empty($this->credentials)) {
            return false;
        }
        return time() < $this->credentials->expiration() - 120; //don't go to the end of life span
    }
}

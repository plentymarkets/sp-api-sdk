<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\STSClient;

final class Credentials
{
    private /** [COMPAT] string */ $accessKeyId;

    private /** [COMPAT] string */ $secretAccessKey;

    private /** [COMPAT] string */ $sessionToken;

    private /** [COMPAT] int */ $expiration;

    public function __construct(string $accessKeyId, string $secretAccessKey, string $sessionToken, int $expiration)
    {
        $this->accessKeyId = $accessKeyId;
        $this->secretAccessKey = $secretAccessKey;
        $this->sessionToken = $sessionToken;
        $this->expiration = $expiration;
    }

    public static function fromJSON(string $tokenString) : self
    {
        $data = \json_decode($tokenString, true, 512, JSON_THROW_ON_ERROR);

        $credentialsData = $data['AssumeRoleResponse']['AssumeRoleResult']['Credentials'];

        return new self(
            $credentialsData['AccessKeyId'],
            $credentialsData['SecretAccessKey'],
            $credentialsData['SessionToken'],
            (int) $credentialsData['Expiration'],
        );
    }

    public function accessKeyId() : string
    {
        return $this->accessKeyId;
    }

    public function secretAccessKey() : string
    {
        return $this->secretAccessKey;
    }

    public function sessionToken() : string
    {
        return $this->sessionToken;
    }

    public function expiration() : int
    {
        return $this->expiration;
    }
}

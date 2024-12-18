<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\IdGenerator;

use Plenty\AmazonPHP\SellingPartner\IdGenerator;

final class UniqidGenerator implements IdGenerator
{
    public function generate(): string
    {
        return \uniqid('correlation_id_', true);
    }
}

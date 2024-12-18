<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner;

interface IdGenerator
{
    public function generate(): string;
}

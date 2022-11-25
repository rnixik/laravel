<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class DemoService
{
    public function __construct(private readonly LoggerInterface $logger)
    {
    }

    public function demo(): void
    {
        $this->logger->debug('any');
    }
}

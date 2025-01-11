<?php

declare(strict_types=1);

namespace App\Utils;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

final class LoggerFactory
{
    public function createLogger(): LoggerInterface
    {
        $logger = new Logger('console.quote');

        $logger->pushHandler(new StreamHandler(__DIR__.'/../../var/logs/console_quote.log', Level::Debug));

        return $logger;
    }
}

<?php

declare(strict_types=1);

namespace App\Utils;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

final class LoggerFactory
{
    public function createLogger(): LoggerInterface
    {
        $dateFormat = "Y n j, g:i a";
        $output = "[%datetime%] / %channel%.%level_name%: %message% %context% %extra%\n";

        $formatter = new LineFormatter($output, $dateFormat);
        $handler = new StreamHandler(__DIR__.'/../../var/logs/console_quote.log', Level::Debug);
        $handler->setFormatter($formatter);

        $logger = new Logger('console.quote');
        $logger->pushHandler($handler);

        return $logger;
    }
}

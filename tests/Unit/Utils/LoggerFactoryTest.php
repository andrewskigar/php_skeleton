<?php

declare(strict_types=1);

use App\Utils\LoggerFactory;
use Psr\Log\LoggerInterface;

it('can create logger instance', function (): void {
    $loggerFactory = new LoggerFactory();

    expect($loggerFactory->createLogger())->toBeInstanceOf(LoggerInterface::class);
});

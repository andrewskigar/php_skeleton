<?php

declare(strict_types=1);

use App\Console\Commands\QuoteCommand;
use App\Utils\QuoteGenerators\ArrayQuoteGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

it('prints quote', function (): void {
    $application = new Application();

    $logger = Mockery::mock(LoggerInterface::class);
    $logger->shouldReceive('info')->once();

    $application->add(new QuoteCommand(new ArrayQuoteGenerator(), $logger));

    $command = $application->find('quote');

    $commandTester = new CommandTester($command);

    $commandTester->execute([]);

    $output = $commandTester->getDisplay();

    expect(trim($output))->toContain('Quote by');
});

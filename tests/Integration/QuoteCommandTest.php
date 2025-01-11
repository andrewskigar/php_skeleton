<?php

declare(strict_types=1);

use App\Console\Commands\QuoteCommand;
use App\Utils\QuoteGenerator;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

it('prints quote', function (): void {
    $application = new Application();

    $application->add(new QuoteCommand(new QuoteGenerator()));

    $command = $application->find('quote');

    $commandTester = new CommandTester($command);

    $commandTester->execute([]);

    $output = $commandTester->getDisplay();

    expect(trim($output))->toContain('Quote by');
});

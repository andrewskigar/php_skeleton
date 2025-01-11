<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Utils\QuoteGenerators\QuoteGeneratorInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'quote', description: 'Get famous random Quote.')]
final class QuoteCommand extends Command
{
    public function __construct(private readonly QuoteGeneratorInterface $quoteGenerator, private readonly LoggerInterface $logger, ?string $name = null)
    {
        parent::__construct($name);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $startTime = hrtime(true);

        $output->writeln(sprintf('<info>%s</info>', $this->quoteGenerator->generate()));

        $this->logger->info(sprintf("Execution time: %s", $this->getExecutionTime($startTime)));

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Get famous random Quote.')
            ->setHelp('This command allows you print famous quote.')
        ;
    }

    private function getExecutionTime(float $startTime): string
    {
        return number_format((hrtime(true) - $startTime) / 1e6, 3) . ' ms';
    }
}

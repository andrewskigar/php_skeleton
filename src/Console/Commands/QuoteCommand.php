<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Utils\QuoteGeneratorInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'quote', description: 'Get famous random Quote')]
final class QuoteCommand extends Command
{
    public function __construct(private readonly QuoteGeneratorInterface $quoteGenerator, ?string $name = null)
    {
        parent::__construct($name);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(sprintf('<info>%s</info>', $this->quoteGenerator->generate()));

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Get famous random Quote.')
            ->setHelp('This command allows you print famous quote.')
        ;
    }
}

<?php

declare(strict_types=1);

namespace App\Utils\QuoteGenerators;

interface QuoteGeneratorInterface
{
    public function generate(): string;
}

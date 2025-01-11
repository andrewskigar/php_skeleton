<?php

declare(strict_types=1);

namespace App\Utils;

interface QuoteGeneratorInterface
{
    public function generate(): string;
}

<?php

declare(strict_types=1);

use App\Utils\QuoteGenerators\ArrayQuoteGenerator;

it('can get random quote', function (): void {
    $quoteGenerator = new ArrayQuoteGenerator();

    expect($quoteGenerator->generate())->not->toBeEmpty();
});

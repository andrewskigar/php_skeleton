<?php

declare(strict_types=1);

use App\Utils\QuoteGenerator;

it('can get random quote', function () {
    $quoteGenerator = new QuoteGenerator();

    expect($quoteGenerator->generate())->not->toBeEmpty();
});

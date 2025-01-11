<?php

declare(strict_types=1);

namespace App\Utils;

final class QuoteGenerator implements QuoteGeneratorInterface
{
    /**
     * @var array<string, string>
     */
    private array $quotes = [
        "Albert Einstein" => "Life is like riding a bicycle. To keep your balance, you must keep moving.",
        "Mahatma Gandhi" => "Be the change that you wish to see in the world.",
        "Winston Churchill" => "Success is not final, failure is not fatal: It is the courage to continue that counts.",
        "Theodore Roosevelt" => "Believe you can and you're halfway there.",
        "Oscar Wilde" => "Be yourself; everyone else is already taken.",
        "Mark Twain" => "The secret of getting ahead is getting started.",
        "Confucius" => "It does not matter how slowly you go as long as you do not stop.",
        "Helen Keller" => "The only thing worse than being blind is having sight but no vision.",
        "Martin Luther King Jr." => "The time is always right to do what is right.",
        "John F. Kennedy" => "Ask not what your country can do for you – ask what you can do for your country."
    ];
    public function generate(): string
    {
        $randomAuthor = array_rand($this->quotes);

        return "Quote by $randomAuthor: \"" . $this->quotes[$randomAuthor] . "\"";
    }
}

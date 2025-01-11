<?php

declare(strict_types=1);

namespace App\Utils\QuoteGenerators;

final class ArrayQuoteGenerator implements QuoteGeneratorInterface
{
    /**
     * @var array<string, string>
     */
    private array $quotes = [
        "Franklin D. Roosevelt" => "The only limit to our realization of tomorrow is our doubts of today.",
        "Albert Einstein" => "In the middle of every difficulty lies opportunity.",
        "Winston Churchill" => "Success is not final, failure is not fatal: It is the courage to continue that counts.",
        "Ralph Waldo Emerson" => "What lies behind us and what lies before us are tiny matters compared to what lies within us.",
        "Alan Kay" => "The best way to predict the future is to invent it.",
        "Lao Tzu" => "The journey of a thousand miles begins with one step.",
        "Aristotle" => "Happiness depends upon ourselves.",
        "Henry David Thoreau" => "Go confidently in the direction of your dreams. Live the life you have imagined.",
        "Theodore Roosevelt" => "Do what you can, with what you have, where you are.",
        "William Shakespeare" => "All the world’s a stage, and all the men and women merely players.",
        "Confucius" => "It does not matter how slowly you go as long as you do not stop.",
        "Benjamin Franklin" => "An investment in knowledge always pays the best interest.",
        "Nelson Mandela" => "It always seems impossible until it’s done.",
        "Mahatma Gandhi" => "Be the change that you wish to see in the world.",
        "Mark Twain" => "The secret of getting ahead is getting started.",
        "Helen Keller" => "Alone we can do so little; together we can do so much.",
        "John F. Kennedy" => "Ask not what your country can do for you – ask what you can do for your country.",
        "Abraham Lincoln" => "The best way to predict the future is to create it.",
        "Steve Jobs" => "Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work.",
        "Socrates" => "The unexamined life is not worth living.",
        "Albert Schweitzer" => "Success is not the key to happiness. Happiness is the key to success.",
        "Babe Ruth" => "Never let the fear of striking out keep you from playing the game.",
        "Vince Lombardi" => "Winners never quit, and quitters never win.",
        "Yoda" => "Do or do not. There is no try.",
        "Mother Teresa" => "Spread love everywhere you go. Let no one ever come to you without leaving happier.",
        "Henry Ford" => "Whether you think you can or you think you can’t, you’re right.",
        "Napoleon Hill" => "Whatever the mind of man can conceive and believe, it can achieve.",
        "Eleanor Roosevelt" => "No one can make you feel inferior without your consent.",
        "Walt Disney" => "The way to get started is to quit talking and begin doing.",
        "Voltaire" => "I may not agree with what you say, but I will defend to the death your right to say it.",
        "George Eliot" => "It is never too late to be what you might have been.",
        "Oscar Wilde" => "Be yourself; everyone else is already taken.",
        "H. Jackson Brown Jr." => "The best preparation for tomorrow is doing your best today.",
        "Robert Frost" => "In three words I can sum up everything I’ve learned about life: It goes on.",
        "Henry Wadsworth Longfellow" => "The heights by great men reached and kept were not attained by sudden flight, but they, while their companions slept, were toiling upward in the night.",
        "Bruce Lee" => "The successful warrior is the average man, with laser-like focus.",
        "Thomas Edison" => "Genius is one percent inspiration and ninety-nine percent perspiration.",
        "Zig Ziglar" => "Your attitude, not your aptitude, will determine your altitude.",
        "J.K. Rowling" => "It does not do to dwell on dreams and forget to live.",
        "Jim Rohn" => "Discipline is the bridge between goals and accomplishment.",
        "Stephen R. Covey" => "The key is not to prioritize what’s on your schedule but to schedule your priorities.",
        "Dr. Seuss" => "You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose.",
        "Martin Luther King Jr." => "The time is always right to do what is right.",
        "Charles Dickens" => "It was the best of times, it was the worst of times.",
        "Friedrich Nietzsche" => "He who has a why to live can bear almost any how.",
        "Leonardo da Vinci" => "Learning never exhausts the mind.",
        "Marie Curie" => "Nothing in life is to be feared; it is only to be understood.",
        "Sun Tzu" => "The supreme art of war is to subdue the enemy without fighting."
    ];
    public function generate(): string
    {
        $randomAuthor = array_rand($this->quotes);

        return "Quote by $randomAuthor: \"" . $this->quotes[$randomAuthor] . "\"";
    }
}

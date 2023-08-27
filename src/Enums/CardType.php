<?php
declare(strict_types=1);

namespace Lenkowski\Shorts\Enums;

enum CardType
{
    case HEARTS;
    case DIAMONDS;
    case CLUBS;
    case SPADES;

    public function verbose(): string
    {
        return match ($this) {
            self::HEARTS => 'Hearts',
            self::DIAMONDS => 'Diamonds',
            self::CLUBS => 'Clubs',
            self::SPADES => 'Spades',
        };
    }

    public function emoji(): string
    {
        return match ($this) {
            self::HEARTS => '♥️',
            self::DIAMONDS => '♦️',
            self::CLUBS => '♣️',
            self::SPADES => '♠️',
        };
    }
}
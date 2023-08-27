<?php
declare(strict_types=1);

namespace Lenkowski\Shorts\Enums;

enum CardValue
{
    case ONE;
    case TWO;
    case THREE;
    case FOUR;
    case FIVE;
    case SIX;
    case SEVEN;
    case EIGHT;
    case NINE;
    case TEN;
    case JACK;
    case QUEEN;
    case KING;
    case ACE;

    public function verbose(): string
    {
        return match($this) {
            self::ONE => 'One',
            self::TWO => 'Two',
            self::THREE => 'Three',
            self::FOUR => 'Four',
            self::FIVE => 'Five',
            self::SIX => 'Six',
            self::SEVEN => 'Seven',
            self::EIGHT => 'Eight',
            self::NINE => 'Nine',
            self::TEN => 'Ten',
            self::JACK => 'Jack',
            self::QUEEN => 'Queen',
            self::KING => 'King',
            self::ACE => 'Ace',
        };
    }
}
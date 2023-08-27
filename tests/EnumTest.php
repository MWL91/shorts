<?php
declare(strict_types=1);

namespace Lenkowski\Shorts\Tests;

use Lenkowski\Shorts\Enums\Card;
use Lenkowski\Shorts\Enums\CardType;
use Lenkowski\Shorts\Enums\CardValue;
use PHPUnit\Framework\TestCase;

final class EnumTest extends TestCase
{
    public function testItShouldCreateEnum(): void
    {
        // Given:
        $heart = CardType::HEARTS;

        // When:
        $imNumber = (int) $heart;
        $imText = $heart->verbose();
        $imEmoji = $heart->emoji();

        // Then:
        $this->assertSame(1, $imNumber);
        $this->assertSame('Hearts', $imText);
        $this->assertSame('♥️', $imEmoji);
    }

    public function testItShouldHveCard(): void
    {
        // Given:
        $type = CardType::HEARTS;
        $value = CardValue::ACE;

        // When:
        $card = new Card($type, $value);

        // Then:
        $this->assertSame('Ace of Hearts', $card->verbose());
    }
}
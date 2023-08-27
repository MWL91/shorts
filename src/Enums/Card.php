<?php
declare(strict_types=1);

namespace Lenkowski\Shorts\Enums;

final class Card
{
    private CardType $type;
    private CardValue $value;

    public function __construct(
        CardType $type,
        CardValue $value
    )
    {
        $this->type = $type;
        $this->value = $value;
    }

    public function verbose(): string
    {
        return sprintf(
            '%s of %s',
            $this->value->verbose(),
            $this->type->verbose()
        );
    }
}
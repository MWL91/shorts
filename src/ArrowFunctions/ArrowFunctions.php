<?php
declare(strict_types=1);

function nonAnonymous(int $param1, int $param2): int
{
    return $param1 <=> $param2;
}

$anonymous = function(int $param1, int $param2): int {
    return $param1 <=> $param2;
};

$anonymousArrow = fn(int $param1, int $param2): int => $param1 <=> $param2;

$anonymousArrowShort = fn($param1, $param2) => $param1 <=> $param2;

$numbersToSort = [1, 3, 2, 5, 4];

usort($numbersToSort, 'nonAnonymous');
echo(implode(', ', $numbersToSort));
echo "\n";
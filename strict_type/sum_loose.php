<?php

// If declare is in a file, front controller will repespect the local definition ?
declare(strict_types=0);

function sum_loose(int $a, int $b): int {
    return $a + $b;
}
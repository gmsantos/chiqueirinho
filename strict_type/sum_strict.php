<?php

// If declare is in a file, front controller will repespect the local definition ?
declare(strict_types=1);

function sum_strict(int $a, int $b): int {
    return $a + $b;
}
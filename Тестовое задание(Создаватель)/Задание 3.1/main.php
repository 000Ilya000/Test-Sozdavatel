<?php

$deposit = $argv[1];
$term = $argv[2];
$percent =  $argv[3];

echo calculate_deposit_after($deposit, $term, $percent);

function calculate_deposit_after($deposit, $term, $percent) {
    return $deposit + ($deposit * $percent * $term)/(365 * 100);
}
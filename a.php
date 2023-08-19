<?php

$array = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];

$letters = [];
$numbers = [];

foreach ($array as $item) {
    if (is_string($item)) {
        $letters[] = $item;
    } elseif (is_numeric($item)) {
        $numbers[] = $item;
    }
}

sort($letters);
sort($numbers);

$result = array_merge($letters, $numbers);

print_r($result);
?>
<?php

function count_and_sort_letters($input) {
    $letterCount = [];

    foreach (str_split($input) as $letter) {
        if (ctype_alpha($letter)) {
            if (!isset($letterCount[$letter])) {
                $letterCount[$letter] = 1;
            } else {
                $letterCount[$letter]++;
            }
        }
    }

    ksort($letterCount, SORT_NATURAL | SORT_FLAG_CASE);

    $result = [];
    foreach ($letterCount as $letter => $count) {
        if ($count > 0) {
            $result[] = '"'.$letter . '":' . $count;
        }
    }

    return $result;
}

$userInput = "Bismillah";
$result = count_and_sort_letters($userInput);
echo implode(', ', $result);
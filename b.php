<?php

function pattern_count($text, $pattern) {
    $text_length = strlen($text);
    $pattern_length = strlen($pattern);
    $count = 0;

    if ($pattern_length != 0) {
        for ($i = 0; $i <= $text_length - $pattern_length; $i++) {
            $matched = true;
            for ($j = 0; $j < $pattern_length; $j++) {
                if ($text[$i + $j] != $pattern[$j]) {
                    $matched = false;
                    break;
                }
            }
            if ($matched) {
                $count++;
            }
        }
    }

    return $count;
}

$text = "hell";
$pattern = "hello";
$result = pattern_count($text, $pattern);
echo $result;
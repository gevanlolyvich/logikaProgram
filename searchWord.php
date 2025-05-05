<?php

$words = ["apel", "jeruk", "semangka", "kiwi"];
$search = "e";

function searchWords($words, $search) {
    $result = [];
    foreach ($words as $word) {
        if (strpos($word, $search) !== false) {
            $result[] = $word;
        }
    }
    return $result;
}

print_r(searchWords($words, $search));

?>

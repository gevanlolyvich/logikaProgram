<?php

    $words = ["apel", "jeruk", "semangka", "kiwi"];
    $n = 5;

    function filterWord($katas, $num) {
        $result = [];

        foreach($katas as $kata) {
            if(strlen($kata) >= $num) {
                $result[] = $kata;
            }
        }
        return $result;
    }

    var_dump(filterWord($words, $n))

?>
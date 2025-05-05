<?php

$words = ["apel", "jeruk", "apel", "kiwi", "jeruk", "semangka", "apel"];

    function wordFound($datas) {

        $result = [];
        foreach($datas as $data) {
            if (!isset($result[$data])) {
                $result[$data] = 1;
            } else {
                $result[$data]++;
            }
        }
        return $result;
    }

    var_dump(wordFound($words));

?>
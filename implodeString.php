<?php

    $words = ["saya", "sedang", "belajar", "PHP"];

    function kalimat($datas) {
        return implode(" ", $datas);
    }

    echo kalimat($words);

?>
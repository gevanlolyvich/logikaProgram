<?php
    $numbers = [1, 2, 3, 4, 5, 6];

    function sum ($numbers) {
        $result = 0;
        foreach($numbers as $number) {
            if ($number % 2 == 0) {
                $result += $number;
            }
        }
        return $result;
    }

    echo sum($numbers);


?>
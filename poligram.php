<?php
    // penggunaan strrev() 
    function poligram($str) {
        $reverse = strrev($str);
        var_dump($reverse);
        return $reverse === $str;
    }

    var_dump(poligram("katak"));
    var_dump(poligram("hello"));
?>
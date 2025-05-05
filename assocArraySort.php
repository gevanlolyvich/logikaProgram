<?php
    $products = [
        ["id" => 1, "name" => "Product A", "price" => 20000],
        ["id" => 2, "name" => "Product B", "price" => 15000],
        ["id" => 3, "name" => "Product C", "price" => 18000],
    ];

    function sortData($data) {
        usort($data, function($a, $b) {
            return $a["price"] - $b["price"];
        });

        return $data;
    }
    
    var_dump(sortData($products));

?>
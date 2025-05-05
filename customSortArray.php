<?php

    $products = [
        ["id" => 1, "name" => "Product A", "price" => 20000],
        ["id" => 2, "name" => "Product B", "price" => 15000],
        ["id" => 3, "name" => "Product C", "price" => 18000],
    ];

    usort($products, function($a, $b) {
        return $a["price"] - $b["price"]; //asc
    });

    var_dump($products);

    // uasort key
    $products = [
        "a" => ["price" => 20000],
        "b" => ["price" => 10000],
        "c" => ["price" => 30000],
    ];
    
    uasort($products, function($a, $b) {
        return $a['price'] - $b['price'];
    });
    
    print_r($products);

?>
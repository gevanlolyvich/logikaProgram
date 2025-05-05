<?php

    $products = [
        ["id" => 1, "name" => "Product A", "category" => "Food"],
        ["id" => 2, "name" => "Product B", "category" => "Drink"],
        ["id" => 3, "name" => "Product C", "category" => "Food"],
    ];

    function groupArray($datas) {
        $result = [];
        
        foreach($datas as $data) {
            $category = $data["category"]; // food dan drink
            if (!isset($result[$category])) {
                $result[$category] = [];
            }

            $result[$category][] = $data;
        }
        return $result;
    }

    var_dump(groupArray($products));


?>
<?php

    $input = [1, [2, 3], [4, [5, 6]], 7];

    function recursif($datas) {
        $result = [];

        foreach($datas as $data) {
            if (is_array($data)) {
                $result = array_merge($result, recursif($data));
            } else {
                $result[] = $data;
            }
        }

        return $result;
    }

    var_dump(recursif($input));

?>
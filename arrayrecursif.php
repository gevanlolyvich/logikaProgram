<?php
    function flattenArray ($items) {
        $data = [];

        foreach($items as $item) {
            if (is_array($item)) {
                $data = array_merge($data, flattenArray($item));
            } else {
                $data[] = $item;
            }
        }

        return $data;
    }

    $input = [1, [2, 3], [4, [5, 6]], 7];
    $output = flattenArray($input);
    var_dump($output);
    
?>


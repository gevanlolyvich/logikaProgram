<?php

function secondLargest($arr) {
    // Pastikan array minimal ada 2 angka
    if (count($arr) < 2) return null;

    // Urutkan dari besar ke kecil
    rsort($arr);

    $max = $arr[0];
    // var_dump($max);

    // Cari angka terbesar kedua yang berbeda dari max
    foreach ($arr as $num) {
        // var_dump($num);
        if ($num < $max) {
            return $num;
        }
    }

    // Jika tidak ditemukan (semua angka sama)
    return null;
}

// Test case
echo secondLargest([10, 5, 20, 8]); // 10
echo "<br>";
echo secondLargest([1, 2, 3, 4, 5]); // 4
echo "<br>";
echo secondLargest([5, 5, 5]); // null
?>

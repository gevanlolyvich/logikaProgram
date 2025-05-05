<?php
function fibonacci($n) {
    if ($n < 0) {
        return "Input harus bilangan positif";
    }

    $ans = [0, 1]; // Inisialisasi dua angka pertama Fibonacci

    for ($i = 2; $i <= $n; $i++) {  // Perulangan dari 2 sampai i
        $ans[] = $ans[$i - 1] + $ans[$i - 2];  // Menjumlahkan dua angka sebelumnya
    }

    return $ans[$n];  // Mengembalikan angka Fibonacci ke-i
}

// Contoh pemanggilan fungsi
echo fibonacci(5);  // Output: 5
echo "<br>";
echo fibonacci(10); // Output: 55
?>

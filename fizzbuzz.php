<!-- <?php
    for ($i=1; $i <= 100; $i++) { 
        // jika angka habis dibagi 3 cetak fizz
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "fizzbuzz<br>";  
        } elseif ($i % 3 == 0) {
            echo "fizz<br>";
        } elseif ($i % 5 == 0) {
            echo "buzz<br>";
        } else {
            echo $i . '<br>';
        }
    }
?> -->

<?php

for ($i = 1; $i <= 100; $i++) {
    $output = '';

    if ($i % 3 == 0) $output .= 'Fizz';
    if ($i % 5 == 0) $output .= 'Buzz';

    echo ($output ? : $i) . "<br>";
}

?>

<?php

    $words = ["apel", "jeruk", "semangka", "kiwi"];

    function wordLenght($datas) {
        rsort($datas);
        // var_dump($datas);
        foreach($datas as $data) {
            return strlen($data);
        }
    }
    echo wordLenght($words);

    var_dump(wordLenght($words));

?>

<?php

$words = ["apel", "jeruk", "semangka", "kiwi"];

function findLongestWord($words) {
    $longest = ""; // Variabel untuk menyimpan kata terpanjang

    foreach ($words as $word) {
        // Jika panjang kata sekarang lebih besar dari panjang kata sebelumnya
        if (strlen($word) > strlen($longest)) {
            $longest = $word; // Update kata terpanjang
        }
    }

    return $longest;
}

// Tes fungsi
echo findLongestWord($words); // Output: semangka

?>

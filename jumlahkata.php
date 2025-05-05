<?php
    // countWords("Saya belajar PHP"); // 3  
    // countWords("Ini contoh soal live coding"); // 5
    
    function countWords($kata) {
        $kata = str_word_count($kata);
        return $kata;
    }

    echo countWords("saya belajar PHP");
?>

<?php
    function countWord($kata) {
        // menghilangkan spasi di depan belakang
        $trimmed = trim($kata);

        // memecah menjadi per kata
        $word = explode(' ', $trimmed);

        // hilangkan spasi double
        $word = array_filter($word);
        
        return count($word);
    }

    echo countWord(" saya belajar  php ");
?>
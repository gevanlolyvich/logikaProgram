<?php

$products = [
    ["id" => 1, "name" => "Product A", "category" => "Food"],
    ["id" => 2, "name" => "Product B", "category" => "Drink"],
    ["id" => 3, "name" => "Product C", "category" => "Food"],
];

function groupByCategory($products) {
    $result = [];

    foreach ($products as $product) {
        $category = $product['category']; // Ambil nama kategori

        // Jika kategori belum ada di array hasil, buatkan array kosong
        if (!isset($result[$category])) {
            $result[$category] = [];
        }

        // Masukkan produk ke kategori yang sesuai
        $result[$category][] = $product;
    }

    return $result;
}

// 🔹 Hasilnya:
$groupedProducts = groupByCategory($products);

// Cetak hasilnya
echo "<pre>";
print_r($groupedProducts);
echo "</pre>";
?>

<?php

// Data Produk awal
$products = [
    ["id" => 1, "name" => "Product A", "price" => 10000],
    ["id" => 2, "name" => "Product B", "price" => 15000],
];

// 1. Menampilkan seluruh produk (Read)
function showProducts($products) {
    echo "=== Daftar Produk ===<br>";
    foreach ($products as $product) {
        echo "ID: {$product['id']}, Nama: {$product['name']}, Harga: Rp " . number_format($product['price'], 0, ',', '.') . "<br>";
    }
    echo "<br>";
}

// 2. Menambah produk baru (Create)
function addProduct(&$products, $name, $price) {
    // Cari ID terakhir, lalu tambah 1
    $lastId = end($products)['id'] ?? 0;
    $products[] = [
        "id" => $lastId + 1,
        "name" => $name,
        "price" => $price
    ];
    return $products;
}

// 3. Mengedit produk berdasarkan ID (Update)
function editProduct(&$products, $id, $newName, $newPrice) {
    foreach ($products as &$product) {
        if ($product['id'] == $id) {
            $product['name'] = $newName;
            $product['price'] = $newPrice;
            return true; // Berhasil di-edit
        }
    }
    return false; // Tidak ditemukan
}

// 4. Menghapus produk berdasarkan ID (Delete)
function deleteProduct(&$products, $id) {
    foreach ($products as $key => $product) {
        var_dump($products);
        // var_dump($product);
        if ($product['id'] == $id) {
            unset($products[$key]);
            // Re-index array biar rapih
            $products = array_values($products); // merapikan index $key
            return true; // Berhasil dihapus
        }
    }
    return false; // Tidak ditemukan
}

///////////////////////
// Contoh Penggunaan //
///////////////////////

// Tampilkan produk awal
showProducts($products);

// Tambah produk baru
addProduct($products, "Product C", 20000);
showProducts($products);

// Edit produk ID 2
if (editProduct($products, 2, "Product B - Edited", 18000)) {
    echo "Produk ID 2 berhasil diedit.<br>";
} else {
    echo "Produk ID 2 tidak ditemukan.<br>";
}
showProducts($products);

// Hapus produk ID 1
if (deleteProduct($products, 1)) {
    echo "Produk ID 1 berhasil dihapus.<br>";
} else {
    echo "Produk ID 1 tidak ditemukan.<br>";
}
showProducts($products);

?>

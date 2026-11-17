<?php

require_once 'koneksidatabase.php';


$_SERVER['REQUEST_METHOD'] === 'POST'; 

$namabarang = htmlspecialchars($_POST['nama_barang']);
$hargabarang = htmlspecialchars($_POST['harga_barang']);
$stokbarang = htmlspecialchars($_POST['stok_barang']);

$sql = "INSERT INTO barang (nama_barang, harga_barang, stok_barang)
        VALUES (:nama_barang, :harga_barang, :stok_barang)";

$stmt = $koneksi->prepare($sql);

$simpan = $stmt->execute([
    ':nama_barang' => $namabarang,
    ':harga_barang' =>$hargabarang,
    ':stok_barang' =>$stokbarang
]);

if($simpan) {
    echo "data kamu berhasil disimpan";
}
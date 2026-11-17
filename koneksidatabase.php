<?php

$host = "localhost";
$db_name = "inventaris_toko";
$username = "root";
$password = "";


try {

$koneksi = new PDO("mysql:host=$host;db_name=$db_name" , $username, $password);

$koneksi-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "YEYY KONEKSI KAMU BERHASIL STENYY!!!`";

} catch (PDOException $e) {
    die("koneksi gagal :" . $e->getMessage());
}
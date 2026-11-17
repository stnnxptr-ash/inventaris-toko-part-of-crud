<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventaris toko</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eef4ff, #dfeaff);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            background: #ffffff;
            padding: 30px 25px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: #32d08c;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 6px;
            font-weight: bold;
            color:  #32d08c;
        }

        input,
        select,
        textarea,
        button {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #c9d6ea;
            font-size: 15px;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #228b23;
            box-shadow: 0 0 0 3px rgba(77, 124, 255, 0.15);
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        button {
            background: #4dffa0;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s ease;
        }

        button:hover {
            background: #38eb95;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2> FORM PENGISIAN INVENTARIS TOKO </h2>
<div class="form">
   <form method="post" action="proses.php" name="form_inventaris_toko">

        <div class="form-group">
        <label for="namabarang">Nama Barang</label>
        <input type="text" id="namabarang" name="nama_barang" placeholder="Masukkan nama lengkap kamu ya!" require>
        </div>

        <div class="form-group">
            <label for="hargabarang">Harga Barang</label>
            <input type="number" id="hargabarang" name="harga_barang" placeholder="Masukkan harga barangnya ya!!" requirer>
        </div>

        <div class="form-group">
            <label for="stokbarang">Stok Barang</label>
            <input type="number" id="stokbarang" name="stok_barang" placeholder="Masukkan stok barangnya ya!!" require> 
        </div>

        <button type="submit">Daftar</button>
        <a href="">Batal</a>
   </form>
</div>
    </div>
</body>
</html>
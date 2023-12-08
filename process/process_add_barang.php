<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$tanggal = $_POST['tanggal'];
$stock = $_POST['stock'];


// Pengecekan kelengkapan data
if (empty($id_barang) || empty($nama_barang) || empty($stock) || empty($tanggal)) {
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO barang(id_barang, nama_barang, stock, tanggal) VALUES ('$id_barang', '$nama_barang', '$stock', '$tanggal')");
    header("location: " . BASE_URL . 'dashboard.php?page=home_barang&process=success');
}

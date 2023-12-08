<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$id_supplier = $_POST['id_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];
$no_rekening = $_POST['no_rekening'];


// Pengecekan kelengkapan data
if (empty($id_supplier) || empty($nama_supplier) || empty($alamat) || empty($no_telpon) || empty($no_rekening)) {
    header("location: " . BASE_URL . 'dashboard.php?page=create&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO supplier(id_supplier, nama_supplier, alamat, no_telpon, no_rekening) VALUES ('$id_supplier', '$nama_supplier', '$alamat', '$no_telpon', '$no_rekening')");
    header("location: " . BASE_URL . 'dashboard.php?page=home_supplier&process=success');
}

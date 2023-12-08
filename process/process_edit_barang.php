<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$tanggal = $_POST['tanggal'];
$stock = $_POST['stock'];
$no = $_POST['no'];

if (empty($id_barang) || empty($nama_barang) || empty($tanggal) || empty($stock)) {
    header("location: " . BASE_URL . 'dashboard.php?page=edit_barang&id=' . $no . '&emptyform=true');
} else {
    mysqli_query($koneksi, "UPDATE barang SET id_barang='$id_barang', nama_barang = '$nama_barang', tanggal='$tanggal', stock = '$stock' WHERE no='$no'");
    header("location: " . BASE_URL . 'dashboard.php?page=home_barang&status=success');
}

<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$id_supplier = $_POST['id_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];
$no_rekening = $_POST['no_rekening'];
$no = $_POST['no'];

if (empty($id_supplier) || empty($nama_supplier) || empty($alamat) || empty($no_telpon) || empty($no_rekening)) {
    header("location: " . BASE_URL . 'dashboard.php?page=edit_supplier&id=' . $no . '&emptyform=true');
} else {
    mysqli_query($koneksi, "UPDATE supplier SET id_supplier='$id_supplier', nama_supplier = '$nama_supplier', alamat='$alamat', no_telpon = '$no_telpon', no_rekening = '$no_rekening' WHERE no='$no'");
    header("location: " . BASE_URL . 'dashboard.php?page=home_supplier&status=success');
}

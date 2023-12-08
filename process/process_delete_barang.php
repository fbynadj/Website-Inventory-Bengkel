<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$no = $_GET['no'];

mysqli_query($koneksi, "DELETE FROM barang WHERE no = $no");
header("location:" . BASE_URL . 'dashboard.php?page=home_barang&status=success');

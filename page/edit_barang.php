<?php

require_once('function/helper.php');
require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
if ($_SESSION["id"] == null) {
    header("location: " . BASE_URL);
    exit();
}

$no = isset($_GET['no']) ? ($_GET['no']) : false;

$barang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM barang WHERE no = $no"));

$error =  isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;

?>


<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <?php
                if ($error == "true") : ?>
                    <div class="alert alert-danger" role="alert">
                        Proses gagal, pastikan semuar formulir terisi
                    </div>
                <?php endif; ?>
                <div class="row">
                    <h1 style="text-align: center; color: #185ADB;">Form Edit Barang</h1>
                </div>
                <form method="POST" action="<?= BASE_URL . 'process/process_edit_barang.php' ?>">
                    <input name="no" value="<?= $barang['no'] ?>" type="hidden">
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">Id Barang</label>
                        <input type="number" class="form-control" id="id_barang" name="id_barang" value="<?= $barang['id_barang'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $barang['tanggal'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="<?= $barang['stock'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
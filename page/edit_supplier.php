<?php

require_once('function/helper.php');
require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
if ($_SESSION["id"] == null) {
    header("location: " . BASE_URL);
    exit();
}

$no = isset($_GET['no']) ? ($_GET['no']) : false;

$supplier = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM supplier WHERE no = $no"));

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
                    <h1 style="text-align: center; color: #185ADB;">Form Edit Supplier</h1>
                </div>
                <form method="POST" action="<?= BASE_URL . 'process/process_edit_supplier.php' ?>">
                    <input name="no" value="<?= $supplier['no'] ?>" type="hidden">
                    <div class="mb-3">
                        <label for="id_supplier" class="form-label">Id Supplier</label>
                        <input type="number" class="form-control" id="id_supplier" name="id_supplier" value="<?= $supplier['id_supplier'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_supplier" class="form-label">Nama Supplier</label>
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="<?= $supplier['nama_supplier'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $supplier['alamat'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_telpon" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="no_telpon" name="no_telpon" value="<?= $supplier['no_telpon'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_rekening" class="form-label">Nomor Rekening</label>
                        <input type="number" class="form-control" id="no_rekening" name="no_rekening" value="<?= $supplier['no_rekening'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
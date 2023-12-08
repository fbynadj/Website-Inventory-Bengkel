<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if ($process == 'failed') : ?>
    <div class="alert alert-danger" role="alert">
        Semua formulir harus diisi
    </div>
<?php endif; ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h1 style="text-align: center; color: #1E90FF;">Form Tambah Supplier</h1>
                </div>
                <form method="POST" action="<?= BASE_URL . 'process/process_add_supplier.php' ?>">
                    <div class="mb-3">
                        <label for="id_supplier" class="form-label">Id Supplier</label>
                        <input type="number" class="form-control" id="id_supplier" name="id_supplier">
                    </div>
                    <div class="mb-3">
                        <label for="nama_supplier" class="form-label">Nama Supplier</label>
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="no_telpon" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="no_telpon" name="no_telpon">
                    </div>
                    <div class="mb-3">
                        <label for="no_rekening" class="form-label">Nomor Rekening</label>
                        <input type="number" class="form-control" id="no_rekening" name="no_rekening">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
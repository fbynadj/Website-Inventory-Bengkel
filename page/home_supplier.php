<?php

require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
$status = isset($_GET['status']) ? ($_GET['status']) : false;
?>


<?php if ($process == 'success') : ?>
    <div class="alert alert-success" role="alert">
        Data behasil dimasukan
    </div>

<?php endif; ?>
<?php if ($status == 'success') : ?>
    <div class="alert alert-success" role="alert">
        Berhasil
    </div>

<?php endif; ?>

<!-- mengambil data dari database -->
<?php
$supplier = mysqli_query($koneksi, "SELECT * FROM supplier ORDER BY no DESC");
?>
<h1 style= "color: #1E90FF">Supplier Part</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Supplier</th>
                            <th scope="col">Nama Supplier</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Nomor Rekening</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($supplier as $p) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $p['id_supplier'] ?></td>
                                <td><?= $p['nama_supplier'] ?></td>
                                <td><?= $p['alamat'] ?></td>
                                <td><?= $p['no_telpon'] ?></td>
                                <td><?= $p['no_rekening'] ?></td>
                                <td>
                                    <a class="btn btn-danger badge" href="<?= BASE_URL . 'process/process_delete_supplier.php?no=' . $p['no'] ?>">Delete</a>
                                    <a class="btn btn-info badge" href="<?= BASE_URL . 'dashboard.php?page=edit_supplier&no=' . $p['no'] ?>">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
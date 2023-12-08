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
$barang = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY no DESC");
?>
<h1 style= "color: #1E90FF ">Stock Barang</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Barang</th>
                            <th scope="col">Nama barang</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($barang as $p) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $p['id_barang'] ?></td>
                                <td><?= $p['nama_barang'] ?></td>
                                <td><?= $p['tanggal'] ?></td>
                                <td><?= $p['stock'] ?></td>
                                <td>
                                    <a class="btn btn-danger badge" href="<?= BASE_URL . 'process/process_delete_barang.php?no=' . $p['no'] ?>">Delete</a>
                                    <a class="btn btn-info badge" href="<?= BASE_URL . 'dashboard.php?page=edit_barang&no=' . $p['no'] ?>">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
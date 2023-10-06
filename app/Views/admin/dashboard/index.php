<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('admin/layout/fungsi') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0" style="color: red;"><i class="fas fa-exclamation-circle"></i> Notifikasi Pengingat Barang (>= <?= $web['min_stok'] ?>)</h5>
            </div>
            <div class="card-body">
                <?php if (empty($minimal)) { ?>
                    Nothing to worry!
                <?php } else { ?>
                    <table id="dataTable1" class="table table-hover table-striped">
                        <thead align="center">
                            <td style="width: 120px; font-size: 18px; color: black;">ID</td>
                            <td style="font-size: 18px; color: black;">Nama Barang</td>
                            <td style="width: 150px; font-size: 18px; color: black;">Stok</td>
                        </thead>
                        <tbody>
                            <?php foreach ($minimal as $data) : ?>
                                <tr align="center">
                                    <td><?= $data['id_barang'] ?></td>
                                    <td align="left"><?= $data['nm_barang'] ?></td>
                                    <td><?= $data['stok'] . ' ' . $data['satuan'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <body> <button onclick="printPage()"><i class="fas fa-print print-icon"></i> Cetak Halaman</button>
                                <script>
                                function printPage() {
                                window.print(); // Panggil fungsi print bawaan browser
                                }
                                </script> 
                        </body>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
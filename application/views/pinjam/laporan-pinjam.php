<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('laporan/cetak_laporan_pinjam'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print </a>
            <a href="<?= base_url('laporan/laporan_pinjam_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download PDF</a>
            <a href="<?= base_url('laporan/export_excel_pinjam'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"> Export ke Excel</i> </a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID MEMBER</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama Console</th>
                        <th scope="col">Harga Sewa Console</th>
                        <th scope="col">Tanggal Sewa</th>
                        <th scope="col">Tanggal Kembali </th>
                        <th scope="col">Tanggal Dikembalikan</th>
                        <th scope="col">Total Denda</th>
                        <th scope="col">Status</th>

                    </tr>

                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($laporan as $l) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $l['id']; ?></td>
                            <td><?= $l['nama']; ?></td>
                            <td><?= $l['nama_console']; ?></td>
                            <td><?= $l['harga_sewa']; ?></td>
                            <td><?= $l['tgl_pinjam']; ?></td>
                            <td><?= $l['tgl_kembali']; ?></td>
                            <td><?= $l['tgl_pengembalian']; ?></td>
                            <td><?= $l['total_denda']; ?></td>
                            <td><?= $l['status']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
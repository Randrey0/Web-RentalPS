<div class="container">
    <center>
        <table>
            <tr>
                <td>
                    <div class="table-responsive full-width">
                        <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th class="text-center text-light">No.</th>
                                <th class="text-center text-light">Console</th>
                                <th class="text-center text-light">Nama Console</th>
                                <th class="text-center text-light">Harga Sewa</th>
                                <th class="text-center text-light">BISA MELAKUKAN PEMBAYARAN MELALUI-QRIS</th>
                                <th class="text-center text-light">Pilihan</th>
                            </tr>
                            <?php
                            $no = 1;
                            foreach ($temp as $t) {
                            ?>
                                <tr>
                                    <td class="text-center text-light"><?= $no; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" class="rounded" alt="No Picture" width="100%">
                                    </td>
                                    <td class="text-center text-light"><?= $t['nama_console']; ?></td>
                                    <td class="text-center text-light"><?= $t['harga_sewa']; ?></td>
                                    <td class="text-center">
                                        <img src="<?= base_url('assets/img/upload/' . $t['qris']); ?>" class="rounded" alt="No Picture" width="50%">
                                    </td>
                                    <td nowrap class="text-center">
                                        <a href="<?= base_url('booking/hapusbooking/' . $t['id_console']); ?>" onclick="return_konfirm('Yakin tidak Jadi Booking '.$t['nama_console'])"><i class="btn btn-sm btn-outline-danger fas fw fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <a class="btn btn-sm btn-outline-primary" href="<?php echo base_url(); ?>"><span class="fas fw fa-play"></span> Lanjutkan Sewa Console</a>
                    <a class="btn btn-sm btn-outline-success" href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>"><span class="fas fw fa-stop"></span> Selesaikan Sewa</a>
                </td>
            </tr>
        </table>
    </center>
</div>
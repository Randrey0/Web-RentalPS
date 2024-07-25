<section class="jumbotron text-center">
    <p class="display-4 text-light">WELCOME</p>
    <img src="assets/img/renta.jpg" alt="story games" width="190" class="rounded-circle" />
    <p class="display-4 text-light">Rental PS</p>
    <p class="lead text-light">Sewa PS Mudah dari Rumah Aja !!</p>
</section>
<?= $this->session->flashdata('pesan'); ?>

<div style="padding: 25px;">
    <div class="x_panel">
        <div class="x_content">
            <!-- Tampilkan semua produk -->
            <div class="row">
                <!-- looping products -->
                <?php foreach ($console as $console) { ?>
                    <div class="col-md-2 col-md-3">
                        <div class="thumbnail" style="height: 370px;">
                            <img src="<?php echo base_url(); ?>assets/img
                /upload/<?= $console->image; ?>" style="max-width:100%; max-height: 100%; height: 200px; width: 180px" class="rounded">
                            <div class="caption text-light">
                                <h5 style="min-height:30px;"><?= $console->nama_console ?></h5>
                                <h5 style="min-height:30px;"><?= $console->harga_sewa ?></h5>
                                <p>
                                    <?php
                                    if ($console->stok < 1) {
                                        echo "<i class='btn btn-outline-primary fas fa-gamepad'> Maaf Stok Console&nbsp;&nbspHabis</i>";
                                    } else {
                                        echo "<a class='btn btn-outline-primary fas fa-gamepad' href='" . base_url('booking/tambahBooking/' . $console->id) . "'> Sewa</a>";
                                    }
                                    ?>
                                    <a class="btn btn-outline-danger fab fa-searchengin" href="<?= base_url('home/detailConsole/' . $console->id); ?>"> Detail</a>
                                </p>
                            </div>
                        </div>
                    </div> <?php } ?>
                <!-- end looping -->
            </div>
        </div>
    </div>
</div>
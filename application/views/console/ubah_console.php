<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <?php foreach ($console as $b) { ?>
                <form action="<?= base_url('console/ubahConsole'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        Nama Console
                        <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                        <input type="text" class="form-control form-control-user" id="nama_console" name="nama_console" placeholder="Masukkan Nama Console" value="<?= $b['nama_console']; ?>">
                    </div>
                    <div class="form-group">
                        Kategori Console
                        <select name="id_kategori" class="form-control form-control-user">
                            <option value="<?= $id; ?>" selected="selected"><?= $k; ?></option>
                            <?php
                            foreach ($kategori as $k) { ?>
                                <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        Stok
                        <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok" value="<?= $b['stok']; ?>">
                    </div>
                    <div class="form-group">
                        Harga Sewa
                        <input type="text" class="form-control form-control-user" id="harga_sewa" name="harga_sewa" placeholder="Masukkan nominal harga sewa" value="<?= $b['harga_sewa']; ?>">
                    </div>
                    <div class="form-group">
                        Game Tersedia
                        <input type="text" class="form-control form-control-user" id="game" name="game" placeholder="Masukkan game yang Tersedia" value="<?= $b['game']; ?>">
                    </div>
                    <div class="form-group">
                        <?php
                        if (isset($b['image'])) { ?>

                            <input type="hidden" name="old_pict" id="old_pict" value="<?= $b['image']; ?>">

                            <picture>
                                <source srcset="" type="image/svg+xml">
                                <img src="<?= base_url('assets/img/upload/') . $b['image']; ?>" class="rounded mx-auto mb-3 d-blok" width="50%" alt="...">
                            </picture>

                        <?php } ?>

                        <input type="file" class="form-control form-control-user" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <?php
                        if (isset($b['qris'])) { ?>

                            <input type="hidden" name="old_pict" id="old_pict" value="<?= $b['qris']; ?>">

                            <picture>
                                <source srcset="" type="image/svg+xml">
                                <img src="<?= base_url('assets/img/upload/') . $b['qris']; ?>" class="rounded mx-auto mb-3 d-blok" width="50%" alt="...">
                            </picture>

                        <?php } ?>
                        <input type="file" class="form-control form-control-user" id="qris" name="qris">
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#consoleBaruModal"><i class="fas fa-file-alt"></i> Console Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Console</th>
                        <th scope="col">Game Tersedia</th>
                        <th scope="col">Stok</th>
                        <th scope="col">DiPinjam</th>
                        <th scope="col">DiSewa</th>
                         <th scope="col">Harga Sewa</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">QRIS</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $a = 1;
                        foreach ($console as $b) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $b['nama_console']; ?></td>
                        <td><?= $b['game']; ?></td>
                        <td><?= $b['stok']; ?></td>
                        <td><?= $b['dipinjam']; ?></td>
                        <td><?= $b['dibooking']; ?></td>
                               <td><?= $b['harga_sewa']; ?></td>
                        <td>
                            <picture>
                                <source srcset="" type="image/svg+xml">
                                <img src="<?= base_url('assets/img/upload/') . $b['image'];?>" class="img-fluid img-thumbnail" width="100%" alt="...">
                            </picture></td>
                        <td>
                            <picture>
                                <source srcset="" type="image/svg+xml">
                                <img src="<?= base_url('assets/img/upload/') . $b['qris'];?>" class="img-fluid img-thumbnail" width="50%" alt="...">
                            </picture></td>
                        <td>


                            <a href="<?= base_url('console/ubahConsole/').$b['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('console/hapusconsole/').$b['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$b['nama_console'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
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

<!-- Modal Tambah console baru-->
<div class="modal fade" id="consoleBaruModal" tabindex="-1" role="dialog" aria-labelledby="consoleBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="consoleBaruModalLabel">Tambah Console</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('console'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_console" name="nama_console" placeholder="Masukkan Nama Console">
                    </div>
                    <div class="form-group">
                        <select name="id_kategori" class="form-control form-control-user">
                            <option value="">Pilih Kategori</option>
                            <?php
                            foreach ($kategori as $k) { ?>
                                <option value="<?= $k['id'];?>"><?= $k['kategori'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok">
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="harga_sewa" name="harga_sewa" placeholder="Masukkan nominal harga sewa">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="game" name="game" placeholder="Masukkan Game Yang Tersedia">
                    </div>

                    <div class="form-group">
                        Tambahkan Gambar Console
                        <input type="file" class="form-control form-control-user" id="image" name="image">
                    </div>

                     <div class="form-group">
                        Tambahkan Q-RIS 
                        <input type="file" class="form-control form-control-user" id="qris" name="qris">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Mneu -->
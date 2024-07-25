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
                 <a href="<?= base_url('laporan/cetak_laporan_console'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
                 <a href="<?= base_url('laporan/laporan_console_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
                 <a href="<?= base_url('laporan/export_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
             <table class="table table-hover">
                 <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nama Console</th>
                     <th scope="col">Harga Sewa</th>
                     <th scope="col">Stok</th>
                 </tr>
                 </thead>
                 <tbody>
                 <?php
                 $a = 1;
                 foreach ($console as $b) { ?>
                 <tr>
                     <th scope="row"><?= $a++; ?></th>
                     <td><?= $b['nama_console']; ?></td>
                     <td><?= $b['harga_sewa']; ?></td> 
                     <td><?= $b['stok']; ?></td> 
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
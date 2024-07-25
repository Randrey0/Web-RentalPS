<div class="container">
     <center>
         <table>
             <?php
             foreach ($useraktif as $u) {
             ?>
             <tr>
                 <td nowrap>Terima Kasih <b><?= $u->nama; ?></b> Console Akan Dikirim Ke Alamat Anda : <b><?= $u->alamat; ?></b>
                 </td>

             </tr>
             <tr>
                <a class=""><b>Anda akan diHubungi Nomor Berikut: 08917271731 | <a class="text-danger">untuk melengkapi data penyewaan anda!!</a></b></a>
                 <td>Console Yang ingin Anda Sewa Adalah Sebagai berikut:</td>

             </tr>
             <?php } ?>
             <tr>
                 <td>
                     <div class="table-responsive">
                         <table class="table table-bordered table-striped table-hover" id="table-datatable">
                         <tr>
                             <th>No.</th>
                             <th>Console</th>
                             <th>Nama Console</th>
                             <th>Harga Sewa</th>
                         </tr>
                        <?php
                        $no = 1;
                         foreach ($items as $i) {
                         ?>
                         <tr>
                             <td><?= $no; ?></td>
                             <td>
                             <img src="<?= base_url('assets/img/upload/' . $i['image']); ?>" class="rounded" alt="No Picture" width="10%">
                             </td>
                            <td nowrap><?= $i['nama_console']; ?></td>
                             <td nowrap><?= $i['harga_sewa']; ?></td>
                         </tr>
                         <?php $no++;
                        } ?>
                       
                         </table>
                     </div>
                 </td>

             </tr>

             <tr>
                 <td>
                    <hr>
                 </td>
             </tr>
             <tr>
                
                 <td>
                     <a class="btn btn-sm btn-outline-danger" onclick="information('Waktu Pengambilan Console 1x24 jam dari Booking!!!')"href="<?php echo base_url() . 'booking/exportToPdf/' . $this->session->userdata('id_user'); ?>"><span class="far fa-lg fa-fw fa-file-pdf"></span> Pdf</a>
                     <a class="btn btn-sm btn-outline-primary" onclick="information('Waktu Pengambilan Console 1x24 jam dari Booking!!!')"href="<?php echo base_url() . 'booking/cetak/' . $this->session->userdata('id_user'); ?>"><span class="fas fa-lg fa-fw fa-print"></span> Print</a>
                 </td>
             </tr>
         </table>
     </center>
</div>

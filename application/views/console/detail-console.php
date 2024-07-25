	<div class="x_panel" align="center">
     <div class="x_content">
         <div class="row">
             <div class="col-sm-3 col-md-3">
                 <div class="thumbnail" style="height: auto; position: relative; left: 100%; width: 200%;">
                 <img src="<?php echo base_url(); ?>assets/img/upload/<?= $gambar; ?>"style="max-width:100%; max-height: 100%; height: 150px; width: 120px" class="rounded">
                     <div class="caption">
                     
                         <center>
                             <table class="table table-stripped">
                                 <tr>
                                     <th nowrap>Nama Console: </th>
                                         <td nowrap><?= $judul; ?></td>
                                         <td>&nbsp;</td>
                                     <th>Kategori: </th>
                                        <td><?= $kategori ?></td>
                                 </tr>
                                 <tr>
                                      <th>Harga Sewa: </th>
                                         <td><?= $harga_sewa ?></td>
                                 </tr>
                            <!--      <tr>
                                     <th>Dipinjam: </th>
                                         <td><?= $dipinjam ?></td>
                                 </tr>
                                 <tr>
                                     <th>Disewa: </th>
                                         <td><?= $dibooking ?></td> -->
                             </tr>
                             <tr>
                                 <th>Tersedia: </th>
                                    <td><?= $stok ?></td>
                             </tr>

                             <tr>
                                 <th>Game Tersedia: </th>
                                    <td><?= $game ?></td>
                             </tr>
                             </table>
                         </center>
                    <p>
                     <a class="btn btn-outline-primary fas fa-gamepad" href="<?= base_url('booking/tambahBooking/' . $id); ?>"> Sewa</a>
                     <span class="btn btn-outline-danger fas fw fa-
                     reply" onclick="window.history.go(-1)"> Kembali</span>
                     </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

<?php
header("Content-type: application/vnd-ms-excel"); 
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
 <h3><center>Laporan Data Console Rental PS</center></h3>
        <br/>
        <table class="table-data">
             <thead>
             <tr>
                 <th>No</th>
                 <th>Nama Console</th>
                 <th>Stok</th>
             </tr>
             </thead>
             <tbody>
             <?php
             $no = 1;
             foreach($console as $b){
             ?>
             <tr>
                 <th scope="row"><?= $no++; ?></th> 
                     <td><?= $b['nama_console']; ?></td>
                     <td><?= $b['stok']; ?></td> 
             </tr>
             <?php
             }
             ?>
            </tbody>
        </table>
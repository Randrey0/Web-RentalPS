<table border=1>
     <?php
     foreach ($useraktif as $u) {
     ?>
    <tr>
        <th>Nama Anggota : <?= $u->nama; ?></th>
     </tr>
     <tr>
         <th>Console Yang disewa:</th>
     </tr>
     <?php } ?>
     <tr>
         <td>
             <div class="table-responsive">
                 <table border=1>
                 <tr>
                     <th>No.</th>
                     <th>Console</th>
                     <th>Harga Sewa</th>
                 </tr>
                <?php
                $no = 1;
                 foreach ($items as $i) {
                 ?>
                 <tr>
                     <td><?= $no; ?></td>
                     <td>
                     <?= $i['nama_console']; ?>
                     </td>
                     <td>
                     <?= $i['harga_sewa']; ?>
                     </td>
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
     <td align="center">
         <?= md5(date('d M Y H:i:s')); ?>
     </td>
     </tr>
</table>
<!DOCTYPE html>
<html>
    <head>
     <title></title>
    </head>
    <body>
        <style type="text/css">
            .table-data{
             width: 100%;
             border-collapse: collapse;
             }
             .table-data tr th,
             .table-data tr td{
             border:1px solid black;
             font-size: 11pt;
             font-family:Verdana;
             padding: 10px 10px 10px 10px;
             }
             h3{
             font-family:Verdana;
             }
        </style>
        <h3><center>Laporan Data Console Rental PS</center></h3>
        <br/>
        <table class="table-data">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Member</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col" nowrap>Member Sejak</th>
                
                    </tr>
                </thead>    
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($member as $a) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $a['id']; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= date('d F Y', $a['tanggal_input']); ?></td>
                            </tr>
             <?php
             }
             ?>
            </tbody>
        </table>
       
    </body>
</html>

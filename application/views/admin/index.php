<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- row ux-->
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2 bg-primary">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Member</div>
              <div class="h1 mb-0 font-weight-bold text-white"><?= $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user/member'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2 bg-warning">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Stok Console Terdaftar</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?php
                $where = ['stok != 0'];
                $totalstok = $this->ModelConsole->total('stok', $where);
                echo $totalstok;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('console'); ?>"><i class="fas fa-gamepad fa-3x text-primary"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2 bg-danger">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Console yang diSewa</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?php
                $where = ['dipinjam != 0'];
                $totaldipinjam = $this->ModelConsole->total('dipinjam', $where);
                echo $totaldipinjam;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('pinjam'); ?>"><i class="fas fa-hand-holding-usd fa-3x text-success"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

     <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2 bg-success">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Permintaan sewa console</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?php
                $where = ['dibooking != 0'];
                $totaldibooking = $this->ModelConsole->total('dibooking', $where);
                echo $totaldibooking;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('pinjam/daftarbooking'); ?>"><i class="fas fa-hand-holding fa-3x text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
  <!-- end row ux-->

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- row table-->
  <div class="row">
    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fas fa-users text-primary mt-2 "> Data User</span>
        <a class="text-danger" href="<?php echo base_url('user/member'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
      </div>
      <table class="table mt-3">
        <thead>
          <tr>
            <th>#</th>
            <th>ID</th>
            <th>Nama Member</th>
            <th>Email</th>
            <th>Role ID</th>
            <th>Aktif</th>
            <th>Member Sejak</th>
            <th>Alamat</th>
            <th>No Telpon</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($member as $a) { ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $a['id']; ?></td>
              <td><?= $a['nama']; ?></td>
              <td><?= $a['email']; ?></td>
              <td><?= $a['role_id']; ?></td>
              <td><?= $a['is_active']; ?></td>
              <td><?= date('Y', $a['tanggal_input']); ?></td>
              <td><?= $a['alamat']; ?></td>
              <td><?= $a['no_telpon']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>


    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fas fa-book text-warning mt-2"> Data Console</span>
        <a href="<?= base_url('console'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
      </div>
      <div class="table-responsive">
        <table class="table mt-3" id="table-datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Console</th>
              <th>Harga Sewa</th>
              <th>Stok</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($console as $b) { ?>
              <tr>
                <td><?= $i++; ?></td>
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
  <!-- end of row table-->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
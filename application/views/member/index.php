<!-- Begin Page Content -->
<div class="container-fluid">
 <div class="row">
 <div class="col-lg-6 justify-content-x">

 </div>
 </div>
 <div class="card mb-3" style="max-width: 540px;">
 <div class="row no-gutters">
 <div class="col-md-4">
 <img src="<?= base_url('assets/img/profile/') . $image; ?>" class
="card-img" alt="...">
 </div>
 <div class="col-md-8">
 <div class="card-body">
 <h5 class="card-title">Nama: <?= $user; ?></h5>
 <p class="card-text"><small class="text-muted">Email Anda: <br><b><?= $email; ?></b></small></p>
  <p class="card-text"><small class="text-muted">No Telepon: <br><b><?= $no_telpon; ?></b></small></p>
 <p class="card-text"><small class="text-muted">Alamat Anda: <br><b><?= $alamat; ?></b></small></p>
 <p class="card-text"><small class="text-muted">Jadi member sejak: <br><b><?= date('d F Y', $tanggal_input); ?></b></small
></p>
 </div>
 <div class="btn btn-info ml-3 my-3">
 <a href="<?= base_url('member/ubahprofil'); ?>" class="text text-white"><i class="fas fa-user-edit"></i> Ubah Profil</a>
 </div>
 </div>
 </div>
 </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content --

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental-PS</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/css/bootstrap.css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
    <style>
        section.jumbotron {

            background-color: grey;
            animation-name: example;
            animation-duration: 4s;
        }

        @keyframes example {
            0% {
                background-color: grey;
            }

            25% {
                background-color: red;
            }

            50% {
                background-color: yellow;
            }

            100% {
                background-color: blue;
            }
        }
    </style>
</head>

<body style="background: url(assets/img/rental.jpg); background-size:100% 1500px; background-repeat: no-repeat;">
    <nav class="navbar navbar-expand-lg text-white bg-dark">
        <div class="container">
            <a href="home">
                <img class="img-profile rounded-circle" src="assets/img/renta.jpg" width=50px; height=50px;>
            </a>
            <a class="navbar-brand text-white" href="<?= base_url(); ?>">&nbsp Rental PS </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active text-white" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
                    <?php
                    if (!empty($this->session->userdata('email'))) { ?>
                        <a class="nav-item nav-link text-white" href="<?= base_url('booking'); ?>">Keranjang Sewa <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Console</a>

                        <a class="nav-item nav-link text-white" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a>
                        <a class="nav-item nav-link text-white" href="<?= base_url('home/aboutus'); ?>">About & Contact US</a>
                        <a class="nav-item nav-link text-white" href="<?= base_url('member/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a>
                    <?php } else { ?>
                        <a class="nav-item nav-link text-white" data-toggle="modal" data-target="#daftarModal" href="#"><i class="fas fw fa-login"></i> Daftar</a>
                        <a class="nav-item nav-link text-white" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fw fa-login"></i> Log in</a>
                    <?php } ?>
                    <span class="nav-item nav-link nav-right" style="display:block; margin-left:20px;">Selamat Datang <b><?= $user; ?></b></span>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
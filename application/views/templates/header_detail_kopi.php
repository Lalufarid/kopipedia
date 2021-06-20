<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>jquery.nice-number.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>detail_kopi.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/')  ?>fontawesome-free/css/all.min.css">

    <link rel="icon" href="<?php echo base_url('assets/img/') ?>bulat.png">
    <title>Detail Kopi</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?php echo base_url('assets/img/') ?>logo fix.png" width="160px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
           <span class="navbar-toggler-icon "></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('') ?>dashboard/kopi" id="nav">KOPI <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('') ?>dashboard/tulisan"id="nav" > ARTIKEL <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('') ?>dashboard/panduan" id="nav" >PANDUAN <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item">
            <?php $isi = $this->cart->total_items() ?>
            <?php $keranjang = '<div class="nav-link" href="#" id="nav"><i class="fas fa-shopping-cart"> </i></div>'?>
            <?php echo anchor('belanja/detail_keranjang', $keranjang) ;?>
               <!-- <a class="nav-link" href="#" id="nav"><i class="fas fa-shopping-cart"></i></a> -->
          </li>
      </ul>
      <ul class="navbar-nav pb-3">
        <li class="nav-item">
            <?php  if($this->session->userdata('username')) { ?>
              <a class="nav-link" id="nav"><?php echo anchor('auth/logout', '<div class="nav-link" id="nav">KELUAR <span class="sr-only">(current)</span></div>' ) ?></a>
              <?php }else{ ?> 
              <a class="nav-link" id="nav"><?php echo anchor('auth/login', '<div class="nav-link" id="nav">MASUK <span class="sr-only">(current)</span></div>')   ?><span class="sr-only">(current)</span></a>
            <?php } ?>
          </li>
      </ul>
   </div>
   </div>
</nav>
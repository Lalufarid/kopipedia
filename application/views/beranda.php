





<div class="jumbotron" id="jumbotron">
  <div class="container">
    <h1 class="display-4">TEMUKAN KOPI PILIHAN <br> DARI ROASTER <br> TERBAIK</h1>
    <a class="btn btn-primary btn-md" href="<?php echo base_url('') ?>dashboard/kopi" role="button">CARI KOPI</a>
  </div>
</div>

<section class="roaster">
  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-12 text-center">
        <img class="mt-4" width="30" src="<?php echo base_url('assets/img/roaster.png') ?>">
        <h4 class="mt-4">TEMUKAN BERBAGAI ROASTER DI KOPIPEDIA</h4>
        <p id="tulisan_roaster">Kamu dapat membeli biji kopi dari roaster terbaik beli sekarang dan<br> dapatkan kopi yang anda inginkan</p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-1 col-1">
        </div>
      <div class="col-sm-2 col-2">
        <a href="">
          <img src="<?php echo base_url('assets/img/logo/anomalia.jpg')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-2 col-2">
        <a href="">
          <img src="<?php echo base_url('assets/img/logo/dua-coffee.png')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-2 col-2">
        <a href="" >
          <img src="<?php echo base_url('assets/img/logo/halokoffi.jpg')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-2 col-2">
        <a href="">
          <img src="<?php echo base_url('assets/img/logo/hungry-bird-logo.png')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-2 col-2">
        <a href="">
          <img src="<?php echo base_url('assets/img/logo/northsider.png')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-1 col-1">
        </div>
    </div>

    <div class="row">
      <div class="col-sm-1 col-1">
        </div>
      <div class="col-sm-2 col-2">
        <a href="">
          <img src="<?php echo base_url('assets/img/logo/otten.png')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-2 col-2">
        <a href="">
          <img src="<?php echo base_url('assets/img/logo/sentra-kopi.png')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-2 col-2">
        <a href="" >
          <img src="<?php echo base_url('assets/img/logo/summerfield.jpg')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-2 col-2">
        <a href="">
          <img src="<?php echo base_url('assets/img/logo/sunset-lotus-coffee.png')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-2 col-2">
        <a href="">
          <img src="<?php echo base_url('assets/img/logo/thf.png')?>" class="img-thumbnail mt-3">
        </a>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>
  <center><a class="btn btn-primary btn-sm " href="<?php base_url('') ?>dashboard/roaster" role="button" id="tombol_roaster">LIHAT SEMUA ROASTER</a></center>   
</section>

<section class="tulisan mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <a href="<?php base_url('') ?>dashboard/tulisan"><h4>TULISAN KAMI</h4></a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <img src="<?php echo base_url('assets/img/artikel/artikel4.jpg')?>" class="img-thumbnail">
        <section class="materi">
          <h5 id="judulartikel"><?php echo $artikel['0']['judul_artikel'];?></h5>
          <p id="tulisan_p"><?php echo $limited_word = word_limiter($artikel['0']['isi_artikel'],25);
          echo $limited_word;?></p>
        </section>
      </div>
      <div class="col-sm-4">
        <img src="<?php echo base_url('assets/img/artikel/artikel2.jpg')?>" class="img-thumbnail">
        <section class="materi"> 
          <h5 id="judulartikel"><?php echo $artikel['1']['judul_artikel'];?></h5>
          <p id="tulisan_p"><?php echo $limited_word = word_limiter($artikel['1']['isi_artikel'],25);
          echo $limited_word;?></p>
        </section>
      </div>
      <div class="col-sm-4">
        <img src="<?php echo base_url('assets/img/artikel/artikel5.jpg')?>" class="img-thumbnail">
        <section class="materi"> 
          <h5 id="judulartikel"><?php echo $artikel['2']['judul_artikel'];?></h5>
          <p id="tulisan_p"><?php echo $limited_word = word_limiter($artikel['2']['isi_artikel'],25);
          echo $limited_word;?></p>
        </section>
      </div>
    </div>
  </div>
</section>

<section class="panduan">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <img src="<?php echo base_url('assets/img/panduan/kalita wave.jpg')?>" class="img-thumbnail">
      </div>
      <div class="col-sm-6 col-12">
        <h4>Panduan <?php echo $panduan['0']['judul_panduan'] ?></h4>
        <p id="tulisan_panduan"><?php echo $limited_word = word_limiter($panduan['0']['isi_panduan'],20);
          echo $limited_word;?></p>
        <a class="btn btn-primary btn-md" href="<?= base_url('') ?>dashboard/panduan" role="button" id="tombol_panduan">LIHAT SEMUA PANDUAN</a>
      </div>
    </div>
  </div>
</section>





  </body>
</html>
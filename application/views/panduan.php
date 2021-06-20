<!-- background -->
<div class="jumbotron">
  <div class="container">
  </div>
</div>

<!-- Panduan -->
<section class="tulis">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h4 class="text-center">PANDUAN</h4>
        <P>Menyeduh kopi dirumah tidak sesulit itu. Apakah kamu pemula dalam hal menyeduh kopi atau kamu seorang yang ingin mencoba alat seduh baru? Halaman ini  cocok untuk kamu yang ingin memahami lebih lanjut tentang cara menyeduh dan mencicipi kopi dirumah</P>
      </div>
    </div>
  </div>
  <hr>
</section>

<section class="cari">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <form action="<?php echo base_url('') ?>dashboard/panduan" method="post">
          <div class="input-group mb-3">
          <input type="text" class="form-control" name="keyword_panduan" placeholder=" Cari Panduan" autocomplete="off" autofocus>
          <input class="btn btn-primary" type="submit" name="submit_panduan" id="btn">
           </div>
      </form>
      </div>
    </div>
  </div>
</section>

<section class="panduan">
  <div class="container">
     <?php if( empty($panduan)) : ?>
    <div class="alert alert-danger" role="alert">
      Data Yang Anda Cari Tidak Ada!
    </div>
    </div>

    <?php endif; ?>
  <div class="container">
    <div class="row">
      <?php foreach ($panduan as $p ) :?> 
      <div class="col-sm-6">
        <div class="card mb-5">
          <img src="<?php echo base_url('assets/img/panduan/') .$p['gambar_panduan']?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $p['judul_panduan'] ?></h5>
              <p class="card-text"> <?php $limited_word = word_limiter($p['isi_panduan'],30);
               echo $limited_word; ?></p>
              <?php echo anchor('dashboard/detail_panduan/'.$p['id_panduan'], '<div class="btn btn-primary">Lihat Panduan</div> ') ?> 
            </div>
        </div>

      </div>
      <?php endforeach; ?>
  </div>
</section>

<?php echo $this->pagination->create_links(); ?>
</section>
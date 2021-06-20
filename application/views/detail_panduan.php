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
        <h4 class="text-center"><?php echo $detail_panduan->judul_panduan; ?></h4>
        <hr class="mb-5">
        <center><img width="512" src="<?php echo base_url('assets/img/panduan/').$detail_panduan->gambar_panduan ?>"></center>
        <p class="text-justify"><?php echo $detail_panduan->isi_panduan; ?></p>
      </div>
    </div>
  </div>
</section>
<section class="panduan">
  <div class="container">
  </div>
</section>
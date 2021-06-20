


<div class="jumbotron">
  <div class="container">
  </div>
</div>

<section class="tulis">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-12">
        <h4 class="text-center">TULISAN KAMI</h4>
        <P id="isi"> Ingin menikmati kopi dengan berbagai tips dan trick yang dapat dilakukan disaat - saat tertentu?. Halaman ini cocok untuk kamu yang ingin mendapatkan berbagai tips menikmati kopi dimana saja dan dengan apa saja ? .</P>
      </div>
    </div>
  </div>
  <hr>
</section>

<section class="cari">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      	<form action="<?php echo base_url('') ?>dashboard/tulisan" method="post">
          <div class="input-group mb-3">
          <input type="text" class="form-control" name="keyword_artikel" placeholder=" Cari Artikel" autocomplete="off" autofocus>
          <input class="btn btn-primary" type="submit" name="submit_artikel" id="btn">
           </div>
     	</form>
      </div>
    </div>
  </div>
</section>

  <section class="artikel">
  <div class="container">
     <?php if( empty($artikel)) : ?>
    <div class="alert alert-danger" role="alert">
      Data Yang Anda Cari Tidak Ada!
    </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <?php foreach ($artikel as $a ) :?> 
      <div class="col-sm-4">
        <img src="<?php echo base_url('assets/img/artikel/') .$a['gambar_artikel']?>" class="img-thumbnail">
          <section class="isi">
            <h5><?php echo $a['judul_artikel'] ?></h5>
            <p id="isi"><?php 
            $limited_word = word_limiter($a['isi_artikel'],25);
            echo $limited_word;?></p>
            <?php echo anchor('dashboard/detail_artikel/'.$a['id_artikel'], '<div class="btn btn-primary btn-sm ">Selengkapnya</div> ') ?> 
            </section>
            
      </div>
      <?php endforeach; ?>
  </div>


  </div>
</section>

<?php echo $this->pagination->create_links(); ?>

  </body>
</html>
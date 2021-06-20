


<section class="roaster">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>dashboard/roaster">Roaster</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $detail_roaster->nama_brand; ?></li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <p><?php echo $detail_roaster->deskripsi_brand ;?></p>
      </div>
      <div class="col-sm-4">
        <center><img src="<?php echo base_url('assets/img/logo/').$detail_roaster->gambar_brand; ?>" class="img-thumbnail"></center>
      </div>
    </div>
    <hr>
  </div>
</section>



<!-- SLIDER PRODUK -->

<!-- Wrapper -->
<div class="page-wrapper">
  
  <!-- Post Slider -->
  <div class="post-slider">
    <h1 class="slider-title">PRODUK</h1>
    <i class="fas fa-chevron-left prev"></i>
    <i class="fas fa-chevron-right next"></i>
    
    <div class="post-wrapper">

  <?php foreach ($kopi as $kopi) : ?>
      <div class="post">
        <center><img src="<?php echo base_url('assets/img/kopi/'). $kopi->gambar_kopi ?>" alt="" class="slider-image"></center>
        <div class="post-info">
          <h6><?php echo anchor('dashboard/detail_kopi/'.$kopi->id_kopi, ''.$kopi->nama_kopi) ?></h6>
          <p><?php echo 'Rp.'. $kopi->harga_kopi ?></p>
        </div>
      </div>
<?php endforeach ; ?>
      

    </div>
  </div>

</div>



    
    
  </body>
</html>
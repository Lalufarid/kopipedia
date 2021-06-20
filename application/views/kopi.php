<section class="kopi">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3>Kopi</h3>
          <hr>
        </div>
      </div>
      <!-- FILTER -->
      <div class="row">
        <div class="col-sm-3">
          <div class="row filter">
          
            <div class="col-sm-12 ">
              <button class="accordion">HARGA</button>
                <div class="panel">
                  <p><a href="<?php echo base_url('') ?>kategori/u50">Bawah Rp.50.000</a></p>
                  <p><a href="<?php echo base_url('') ?>kategori/kopi_50_100">Rp.50.000 - Rp.100.000</a></p>
                  <p><a href="<?php echo base_url('') ?>kategori/a100">Atas Rp.100.000</a></p>
                </div>
            </div>

            <div class="col-sm-12">
              <button class="accordion">ROASTER</button>
              <div class="panel">
                <p><a href="<?php echo base_url('') ?>kategori/b1">Anomali Coffee</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/b2">Dua Coffee</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/b3">HaloKoffi</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/b4">Hungry Bird</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/b5">Northsider Coffee</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/b6">Otten Coffee</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/b7">Sentra Kopi</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/b9">Summerfield Coffee</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/b10">Sunset Lotus Coffee</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/b11">Two Hand Full</a></p>
              </div>
            </div>

            <div class="col-sm-12">
              <button class="accordion">TASTING NOTES</button>
              <div class="panel">
                <p><a href="<?php echo base_url('') ?>kategori/caramel">Caramel</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/chocolate">Chocolate</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/floral">Floral</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/fruity">Fruity</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/lemon">Lemon</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/blacktea">Black Tea</a></p>
                <p><a href="<?php echo base_url('') ?>kategori/blueberry">Blueberry</a></p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Card Kopi -->
        <div class="col-sm-9">
          <div class="row">

    <?php foreach ($kopi as $k): ?>
      
            <div class="col-sm-4 text-center">
              <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/kopi/').$k->gambar_kopi; ?>">
                <div class="card-body">
                  <h6 class="card-text"><?php echo anchor('dashboard/detail_kopi/'.$k->id_kopi, ''.$k->nama_kopi) ?></h6>
                   <!-- <p><?php echo $k->nama_brand; ?></p> -->
                  <p><strong>Rp <?php echo number_format($k->harga_kopi, 0,',','.'); ?></strong></p>
                </div>
              </div>
            </div>

     
    <?php endforeach ; ?>

          </div>
        </div>
      </div>
     </div>
     <?php echo $this->pagination->create_links(); ?>
  </section>
    </body>
</html>
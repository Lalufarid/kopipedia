<section class="kopi1">
  <div class="container">
    <div class="row">
      <?php foreach($kopi as $k) : ?>
      <!-- Gambar Kopi -->
      <div class="col-sm-6">
        <img src="<?php echo base_url('assets/img/kopi/').$k->gambar_kopi; ?>" class="img-thumbnail">
      </div>

      <!-- Deskripsi Kopi -->
      <div class="col-sm-6">
        <div class="row">
          <!-- Brand Kopi -->
          <div class="col-sm-12 jarak">
             <p><?php echo $k->nama_brand; ?></p>
             <h4 style="text-transform: uppercase;"><?php echo $k->nama_kopi; ?></h4>
             <p><strong>Rp <?php echo number_format($k->harga_kopi, 0,',','.'); ?></strong></p>
          </div>
          <!-- Brand Kopi -->
          
          <!-- Detail -->
          <div class="row text-center">
            <div class="col-1"></div>
            <div class="col-sm-3 roasting">
              <img src="<?php echo base_url('assets/img/') ?>roaster1.png" class="img-thumbnail" width="35">
              <h6>Rekomendasi Seduh</h6>
              <p><?php echo $k->rekomendasi_seduh; ?></p>
            </div>
            <div class="col-sm-3 roasting">
              <img src="<?php echo base_url('assets/img/') ?>biji kopi.png" class="img-thumbnail" width="35">
              <h6>Karakter Rasa</h6>
              <p><?php echo $k->karakter_rasa; ?></p>
            </div>
            <div class="col-sm-3 roasting">
              <img src="<?php echo base_url('assets/img/') ?>tingkatkematangan.png" class="img-thumbnail" width="35">
              <h6>Tingkat Roasting</h6>
              <p><?php echo $k->tingkat_roasting; ?></p>
            </div>
          </div>
        </div>
        <!-- Detail -->

        <!-- Berat Kopi -->
        <div class="row">
          <div class="col-sm-3 harga judul">
            <h6>Berat Kopi</h6>
          </div>
          <div class="col-sm-9 harga">
            <p><?php echo $k->berat_kopi.'gr'; ?></p>
          </div>
        </div>
        <!-- Berat Kopi -->
        
        <!-- Variasi  -->
        <div class="row">
          <div class="col-sm-3 judul">
            <h6>Variasi</h6>
          </div>
          <div class="col-sm-9 judul">
            <form>
              <div class="form-group">
                <select class="form-control">
                  <option value="<?php echo $k->variasi_kopi; ?>"><?php echo $k->variasi_kopi; ?></option>
                </select>
              </div>
            </form>
          </div>
        </div>
        <!-- Variasi  -->

        <!-- Jumlah -->
        <div class="row">
          <div class="col-sm-3 judul">
              <label>Jumlah</label>
              <div class="form-group">
                <select class="form-control">
                  <option value="1">1</option>
                  <!-- <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option> -->
                </select>
              </div>
            </form>
          </div>
          <!-- Tombol Keranjang -->
          <div class="col-sm-9">
              <?php echo anchor('belanja/tambah_keranjang/'.$k->id_kopi, '<div class="btn btn-primary"> Tambah ke Keranjang </div>') ?>
          </div>
        </div>
        <!-- Jumlah -->


        <!-- Ongkos Kirim -->
        <div class="row ongkir">
          <div class="col-sm-2">
            <img src="<?php echo base_url('assets/img/') ?>truk.png" width="46">
          </div>
          <div class="col-sm-10">
             <p><strong>Ongkos kirim akan ditanggung oleh pelanggan</strong></p>
             <p class="estimasi">Untuk estimasi pengiriman ada di link berikut</p>
             <p><a href="https://cektarif.com/" target="_blank">Cek Lama Pengiriman</a></p> 
          </div>
        </div>
        <!-- Ongkos Kirim -->

        </div>
      </div>
    </div> 
  </div>
</section>

<!-- HTML TENTANG BRAND -->
<section class="detail">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h4 class="text-center">Tentang roaster</h4>
        <hr>
        <p><?php echo $k->deskripsi_brand; ?></p>
      </div>
      <div class="col-sm-6 text-center">
        <img src="<?php echo base_url('assets/img/logo/').$k->gambar_brand; ?>" class="img-thumbnail bg-transparent border-none" width="400px">
      </div>
    </div>
  </div>
</section>
<?php endforeach ;  ?>
<!-- Wrapper -->
<div class="page-wrapper">
<!-- Slide -->
<div class="post-slider">
  <h1 class="slider-title">Kamu Mungkin Juga Suka Ini</h1>
  <i class="fas fa-chevron-left prev"></i>
  <i class="fas fa-chevron-right next"></i>

    <div class="post-wrapper">
      <?php foreach ($detail_kopi as $kopi) : ?>
      <div class="post">
        <center><img src="<?php echo base_url('assets/img/kopi/'). $kopi->gambar_kopi ?>" alt="" class="slider-image"></center>
        <div class="post-info">
          <h6 class="card-text"><?php echo anchor('dashboard/detail_kopi/'.$kopi->id_kopi, ''.$kopi->nama_kopi) ?></h6>
          <p><strong>Rp <?php echo number_format($kopi->harga_kopi, 0,',','.'); ?></strong></p>
        </div>
      </div>
<?php endforeach ; ?>


      
    </div>
</div>
<!-- Slide -->
</div>
<!-- Wrapper -->


<!-- KERANJANG -->
<section class="cart mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-5">
        <h3 class="mt-5">Keranjang Belanja</h3>
         <hr>
      </div>
    </div>

<!-- tabel pesanan -->

<section class="pesanan">
    <table class="table">
      <thead>
        <tr class="text-center">
          <th colspan="1">No</th>
          <th colspan="1">Nama Kopi</th>
          <th colspan="1">Gambar</th>
          <th colspan="1">Kuantitas</th>
          <th colspan="1">Berat</th>
          <th colspan="1">Harga</th>
          <th colspan="1">Sub Total</th>
        </tr>
      </thead>
     <?php 
     $no = 1;
     foreach ($this->cart->contents() as $items) : ?>
      <tbody>
        <tr class="text-center">
          <td> <?php echo $no++;?></td>
          <td> <a href="<?php echo base_url('') ?>dashboard/kopi"><?php echo $items['name']; ?></a></p></td>
          <td> <img width="70px" src="<?php echo base_url('assets/img/kopi/'). $items['gambar']; ?>" class="img-thumbnail"></td>
          <td ><?php echo $items['qty']; ?></td>
          <td><?php echo $items['berat']; ?></td>
          <td align="right"> Rp <?php echo number_format($items['price'], 0,',','.'); ?></td>
          <td align="right">Rp <?php echo number_format($items['subtotal'], 0,',','.'); ?></td>
            <td>
            </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
      <tr>
        <td colspan="6"> Total </td>
        <td align="right">Rp <?php echo number_format($this->cart->total(), 0,',','.'); ?></td>
      </tr>
    </table>
  </div>
</section>
         <section class="keranjang">
          <div class="container" align="right">
            <a href="<?php echo base_url('') ?>belanja/informasi"><div class="btn btn-sm col-sm-2">Pembayaran </div></a>
           <a href="<?php echo base_url('') ?>dashboard/kopi"><div class="btn btn-sm col-sm-2"> Lanjutkan Belanja </div></a>
          <a href="<?php echo base_url('') ?>belanja/hapus_keranjang"><div class="btn btn-sm col-sm-2"> Hapus Keranjang </div></a>
          </div>
         </section>
  </div>
</section>

  </body>
</html>
   <!--  <section class="keranjang">
      <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-12">
              <h5 class="produk">Produk</h5>
            </div>
            <?php foreach ($this->cart->contents() as $items) : ?>
            <div class="col-sm-6 jarak">
           <img src="<?php echo base_url('assets/img/kopi/'). $items['gambar']; ?>" class="img-thumbnail">
            </div>
            <div class="col-sm-6 jarak">
              <p><a href="<?php echo base_url('') ?>dashboard/kopi"><?php echo $items['name']; ?></a></p>
              <p><?php echo $items['berat']; ?></p>
              <p><?php echo $items['variasi']; ?></p>
              <p> Rp <?php echo number_format($items['price'], 0,',','.'); ?></p>
              <p><strong>Kuantitas</strong> : <?php echo $items['qty']; ?></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <h5>Subtotal</h5>
          <section class="jarak">
            <p><strong>Rp <?php echo number_format($items['subtotal'], 0,',','.'); ?></p>
              <p><strong>Kuantitas</strong> : <?php echo $items['qty']; ?></strong><br>
            <em>Belum Termasuk Ongkos Kirim</em>
            <br><br>
          </section>
        <?php endforeach; ?>
        <section class="jarak">
            <h5>Total</h5>
            <p><strong>Rp <?php echo number_format($this->cart->total(), 0,',','.'); ?></p>
          </section>
          <form>
            <div class="form-group">
              <label><h6>Catatan Pesanan</h6></label>
              <textarea class="form-control col-9"></textarea>
            </div>
          </form>
          <a class="btn btn-primary" href="info2.php">CHECKOUT</a>
          <p class="lanjut"><a href="<?php base_url('') ?>dashboard/kopi">Lanjutkan Belanja</a></p>
          <a href="<?php echo base_url('') ?>dashboard/hapus_keranjang"><div class="btn btn-sm"> hapus keranjang </div></a>
      
        </div>
      </div>
    </section>
  </div>
</section> -->
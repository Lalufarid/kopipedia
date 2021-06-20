

<section class="judul">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3>Detail Pemesanan <?php echo $transaksi->id_transaksi; ?></h3>
        <hr>
      </div>
    </div>
  </div>
</section>




<!-- tabel pesanan -->

<section class="pesanan">
  <div class="container">
    <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">Id Produk</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Jumlah Pesanan</th>
          <th scope="col">Harga Satuan</th>
          <th scope="col">Sub-Total</th>
        </tr>
      </thead>
      <?php 
      $total = 0;
          foreach ($pesanan as $p) :
      $subtotal = $p->jumlah * $p->harga_kopi;
      $total += $subtotal;
            ?>
      <tbody>
        <tr class="text-center">
          <td> <?php echo $p->id_kopi;?></td>
          <td><?php echo $p->nama_kopi; ?></td>
          <td> <?php echo $p->jumlah;?></td>
          <td> Rp <?php echo number_format($p->harga_kopi, 0,',','.'); ?></td>
          <td>Rp <?php echo number_format($subtotal, 0,',','.'); ?></td>
          <td> </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
      <tr>
        <td colspan="1" class="text-center" >Total </td>
        <td colspan="4" align="right">Rp <?php echo number_format($total, 0,',','.'); ?></td>
      </tr>
    </table>

    <br><br>
    <a href="<?php echo base_url('') ?>admin/admin_pemesanan" > <div class="btn btn-sm btn-primary"> Kembali</div></a>
    <br><br>
  </div>
</section>



  </body>
</html>


<section class="judul">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3>Pemesanan</h3>
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
          <th scope="col">Id Pesanan</th>
          <th scope="col">Nama Pemesan</th>
          <th scope="col">Alamat Pengiriman</th>
          <th scope="col">Tanggal Pembayaran</th>
          <th scope="col">Batas Pembayaran</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php 
          foreach ($transaksi as $tr) :?>
      <tbody>
        <tr class="text-justify">
          <td> <?php echo $tr->id_transaksi;?></td>
          <td><?php echo $tr->namadepan.' '.$tr->namabelakang; ?></td>
          <td> <?php echo $tr->alamat;?></td>
          <td> <?php echo $tr->tgl_pesan;?></td>
          <td> <?php echo $tr->batas_bayar;?></td>
          <td> <?php echo anchor('admin/detail_pemesanan/'.$tr->id_transaksi, '<div class="btn btn-sm btn-primary">Detail</div>') ?> </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
    <br><br><br><br>
  </div>
</section>



  </body>
</html>
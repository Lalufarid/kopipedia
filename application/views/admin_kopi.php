

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

<!-- INFORMASI -->

<section class="tombol_tambah">
  <div class="container ">
   <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-plus"></i> Tambah Kopi</button>
  </div>
</section>

<!-- AKHIR INFORMASI -->



<!-- tabel pesanan -->

<section class="pesanan">
  <div class="container">
    <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Nama Kopi</th>
          <th scope="col">Berat Kopi</th>
          <th scope="col">Variasi Kopi</th>
          <th scope="col">Stock </th>
          <th scope="col">Harga </th>
          <th scope="col">Gambar </th>
          <th scope="col"> Aksi</th>
        </tr>
      </thead>
      <?php 
      $no=1;
          foreach ($kopi as $k) :?>
      <tbody>
        <tr class="text-center">
          <td><?php echo ++$start; ?></td>
          <td> <?php echo $k->nama_kopi;?></td>
          <td> <?php echo  $k->berat_kopi;?></td>
          <td> <?php echo  $k->variasi_kopi;?></td>
          <td> <?php echo   $k->stock_kopi;?> </td>
          <td> <?php echo   $k->harga_kopi;?> </td>
          <td> <img width="100px" src="<?php echo base_url('assets/img/kopi/') .$k->gambar_kopi?>"></td>
          <td onclick="javascript: return confirm('Anda Yakin Menghapus Kopi Tersebut ?')"> <?php echo anchor('admin/hapus_kopi/'.$k->id_kopi, '<button class="btn btn-danger btn-sm"> <i class="fas fa-times"></i></button> ') ?>
            </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
    <?php echo $this->pagination->create_links(); ?>
    <br><br><br><br>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <?php echo form_open_multipart('admin/tambah_kopi'); ?>
          
          <div class="form_group">
            <label> Nama Kopi </label>
            <input type="text" name="nama_kopi" class="form-control">
          </div>
          <div class="form_group">
            <label> Berat Kopi </label>
            <select name="berat_kopi" class="form-control">
            <option value="">-Pilih Berat-</option>
            <option value="100"> 100gr</option>
            <option value="200"> 200gr</option>
            </select>
          </div>
           <div class="form_group">
            <label> Variasi Kopi </label>
            <select name="variasi_kopi" class="form-control">
            <option value="">-Pilih Variasi-</option>
            <option value="Biji"> Biji</option>
            <option value="Bubuk"> Bubuk</option>
            </select>
          </div>
          <div class="form_group">
            <label> Stock Kopi </label>
            <input type="text" name="stock_kopi" class="form-control">
          </div>
          <div class="form_group">
            <label> Harga Kopi </label>
            <input type="text" name="harga_kopi" class="form-control">
          </div>
          <div class="form_group">
            <label> Tingkat Roasting </label>
            <select name="tingkat_roasting" class="form-control">
            <option value="">-Pilih Tingkatan-</option>
            <option value="Light"> Light</option>
            <option value="Medium"> Medium</option>
            <option value="Dark"> Dark</option>
            </select>
          </div>
          <div class="form_group">
            <label> Karakter Rasa </label>
            <input type="text" name="karakter_rasa" class="form-control">
          </div>
          <div class="form_group">
            <label> Rekomendasi Seduh </label>
            <input type="text" name="rekomendasi_seduh" class="form-control">
          </div>
          <div class="form_group">
            <label> Brand Kopi </label>
            <select name="id_brand" class="form-control">
              <option value=""> -Pilih Brand- </option>
              <?php foreach ($brand as $a) : ?>
              <option value="<?php echo $a->id_brand ?>"> <?php echo $a->nama_brand; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form_group">
            <label> Gambar Kopi </label>
            <input type="file" name="gambar_kopi" class="form-control">
          </div>
         

        <button type="reset" class="btn btn-danger mt-3" data-dismiss="modal"> Reset </button>
        <button type="submit" class="btn btn-primary mt-3">Tambah kopi </button>

        <?php echo form_close(); ?>
      </div>

    </div>
  </div>
</div>


  </body>
</html>
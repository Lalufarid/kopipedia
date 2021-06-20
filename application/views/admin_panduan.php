

<section class="judul">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3>Panduan</h3>
        <hr>
      </div>
    </div>
  </div>
</section>


<!-- INFORMASI -->

<section class="tombol_tambah">
  <div class="container ">
   <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-plus"></i> Tambah Panduan </button>
  </div>
</section>

<!-- AKHIR INFORMASI -->

<!-- tabel pesanan -->

<section class="pesanan">
  <div class="container">
    <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">Judul Panduan</th>
          <th scope="col">Isi Panduan</th>
          <th scope="col">Gambar Panduan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php 
          foreach ($admin_panduan as $ap) :?>
      <tbody>
        <tr class="text-justify">
          <td> <?php $limited_word = word_limiter($ap->judul_panduan,5);
            echo $limited_word;?></td>
          <td> <?php $limited_word = word_limiter($ap->isi_panduan,10);
            echo $limited_word;?></td>
            <td> <img width="100px" src="<?php echo base_url('assets/img/panduan/') .$ap->gambar_panduan?>"></td>
            <td onclick="javascript: return confirm('Anda Yakin Menghapus Panduan Tersebut ?')"> <?php echo anchor('admin/hapus_panduan/'.$ap->id_panduan, '<button class="btn btn-danger btn-sm"> <i class="fas fa-times"></i></button> ') ?>
            </td>
            <td>
              <button class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i></button>
            </td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
    <?php echo $this->pagination->create_links(); ?>
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
       
       <?php echo form_open_multipart('admin/tambah_panduan'); ?>
          
          <div class="form_group">
            <labe> Judul Panduan </label>
            <input type="text" name="judul_panduan" class="form-control">
          </div>
          <div class="form_group">
            <labe> Isi Panduan </label>
            <textarea name="isi_panduan" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="form_group">
            <labe> Admin Penanggung Jawab </label>
            <select name="id_admin" class="form-control">
              <option value=""> -Pilih Admin- </option>
              <?php foreach ($admin as $a) : ?>
              <option value="<?php echo $a->id_admin ?>"> <?php echo $a->nama_admin ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form_group">
            <labe> Gambar Panduan </label>
            <input type="file" name="gambar_panduan" class="form-control">
          </div>
         

        <button type="reset" class="btn btn-danger mt-3" data-dismiss="modal"> Reset </button>
        <button type="submit" class="btn btn-primary mt-3">Tambah Panduan </button>

        <?php echo form_close(); ?>
      </div>

    </div>
  </div>
</div>


  </body>
</html>
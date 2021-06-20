<section class="registrasi">
   <div class="container">
   	<div class="row">
   		<div class="col-sm-12 text-center">
   			<h2>CREATE ACOUNT</h2>
   			<hr>
   		</div>
   	</div>

   	<div class="row">
      <div class="col-sm-2"></div>
   		<div class="col-sm-8">
   			 <?php echo form_open_multipart('auth/registrasi'); ?>
   				<div class="form-group">
	   	 			  <input type="text" name="nama_user" class="form-control" placeholder="Masukkan nama anda">
              <?php echo form_error('nama_user', '<div class="text-danger small">','</div>') ?>
   	 			</div>
   	 			<div class="form-group">
	   	 			  <input type="text" name="alamat_user" class="form-control" placeholder="Masukkan alamat anda">
            <?php echo form_error('alamat_user', '<div class="text-danger small">','</div>') ?>
   	 			</div>
   	 			<div class="form-group">
	   	 			  <input type="text" name="username" class="form-control" placeholder="Masukkan username Anda">
              <?php echo form_error('username', '<div class="text-danger small">','</div>') ?>
   	 			</div>
   	 			<div class="form-group">
			   	 	  <input type="password" name="password_1" class="form-control" placeholder="Masukkan password Anda">
              <?php echo form_error('password_1', '<div class="text-danger small">','</div>') ?>
   	 			</div>
   	 			<div class="form-group">
			   	 	  <input type="password" name="password_2" class="form-control" placeholder="konfirmasi password Anda">
              <?php echo form_error('password_2', '<div class="text-danger small">','</div>') ?>
   	 			</div>
   	 			<div class="form-group">
   	 			<input type="file" name="gambar_user" class="form-control">
   	 			</div>
   	 		
        <section class="daftar">
        <button type="submit" class="btn btn-default">DAFTAR</button>
        <?php echo form_close(); ?>
        <p><a href="<?php echo base_url('') ?>auth/login" class="reg">Sudah Memiliki Akun?</a></p>
        </section>
   		</div>
   	</div>
   </div>
   </section>
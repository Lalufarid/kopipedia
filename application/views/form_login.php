 <section class="login">
   <div class="container">
   	<div class="row">
   		<div class="col-sm-12 text-center">
   			<h2>Login</h2>
   			<hr>
   		</div>
   	</div>

   	<div class="row">
   		<div class="col-sm-2"></div>
   		<div class="col-sm-8">
            <?php echo $this->session->flashdata('pesan'); ?>
   			<form method="post" action="<?php echo base_url('auth/login') ?>">
   	 			<div class="form-group">
	   	 			  <label>USERNAME</label>
	   	 			  <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
                    <?php echo form_error('username', '<div class="text-danger small">','</div>') ?>
   	 			</div>
   	 			<div class="form-group">
			   	 	  <label>PASSWORD <!-- <a class="forgot" href="">forgot your pass ?</a> --></label>
			   	 	  <input type="password" name="password" class="form-control" placeholder="Masukkan password Anda">
                    <?php echo form_error('password', '<div class="text-danger small">','</div>') ?>
   	 			</div>
   	 		
 			<div class="row">
	   	 		<div class="col-sm-6">
	   	 			<button type="submit" class="btn btn-primary logiin form-control">LOGIN</button>
	   	 	 	</div>
            </form> 
	   	 		<div class="col-sm-6">
	   	 	 		 <p class="sign">Tidak Memiliki Akun? <a href="<?php echo base_url('') ?>auth/registrasi">Sign Up</a></p>
	   	 	 	</div>  
   	 		</div>
   		</div>
   	</div>
   </div>
   </section>


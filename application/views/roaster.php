
<!-- background -->
<div class="jumbotron">
  <div class="container">
  	<h1>ROASTERS</h1>
  	<p>Temukan berbagai roaster terbaik di sini.</p>
  </div>
</div>

<section class="roaster">
	<div class="container">
		<div class="row	text-center">
      <?php foreach ($brand as $b ) : ?>
			<div class="col-sm-4">
				<div class="card">
				<center><img class="card-img-top" src="<?php echo base_url('assets/img/logo/').$b->gambar_brand; ?>" alt="Anomali Coffee"></center>
				  <div class="card-body">
				  	<?php echo anchor('dashboard/detail_roaster/'.$b->id_brand, ''.$b->nama_brand) ?>
				  </div> 
				</div>
			</div>
			<?php endforeach ; ?>
			</div>
	</div>
</section>

  </body>
</html>
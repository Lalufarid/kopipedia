<!-- INFORMASI -->

<section class="informasi">
  <div class="container-fluid ">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb" style="background: transparent;">
      	<li class="breadcrumb-item"><a href="<?php echo base_url('') ?>belanja/detail_keranjang">Keranjang</a></li>
      	<li class="breadcrumb-item active" aria-current="page">Informasi</li>
		<li class="breadcrumb-item"><a href="#">Pemesanan</a></li>
      </ol>
    </nav>
  </div>
</section>

<!-- AKHIR INFORMASI -->

<!-- menu informasi -->

<section class="info">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 alamat">
				<div class="row">
					<div class="col-sm-3">
						<img src="../akun/img2.jpg" class="foto">
					</div>
					<div class="col-sm-9 margin2">
						<h6>Lalu Farid</h6>
						<p class="tulis">lalufarid18@gmail.com</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 judul">
						
							<label>Alamat Pengiriman</label>
						
					</div>
					<div class="col-sm-6 margin">
					<form method="post" action="<?php echo base_url ('') ?>belanja/pembayaran">	
							<input type="text" name="namadepan" class="form-control" placeholder="Nama Depan">
						
					</div>
					<div class="col-sm-6 margin">
						
							<input type="text" name="namabelakang" class="form-control" placeholder="Nama Belakang">
						
					</div>
					<div class="col-sm-12 margin">
						
							<input type="text" name="alamat" class="form-control" placeholder="Alamat">
						
					</div>
					<div class="col-sm-12 margin">
						
							<input type="text" name="kota" class="form-control" placeholder="Kota">
						
					</div>
				</div>

				<div class="row margin">
					<div class="col-sm-12 margin">
						
							<input type="text" name="negara" class="form-control" placeholder="Negara/Wilayah">
						
					</div>
					<div class="col-sm-6 margin">
						
							<input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
						
					</div>
					<div class="col-sm-6 margin">
						
							<input type="text" name="kodepos" class="form-control" placeholder="kode Pos">
						
					</div>
					<div class="col-sm-12 margin">
						
							<input type="text" name="telepon" class="form-control" placeholder="Telepon">
						
					</div>
					<div class="col-sm-12 margin">
						<div class="form-group">
			                <select name="jasa" class="form-control">
			                  <option >Jasa Pengiriman</option>
			                  <option value="jne">JNE</option>
			                  <option value="j&t">J&T</option>
			                  <option value="sicepat">SICEPAT</option>
			                  <option value="gojek">GO-Jek (Khusus Wilayah Mataram dan Sekitarnya)</option>
			                </select>
			            </div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
			                <select name="bank" class="form-control">
			                  <option>Pilih Bank</option>
			                  <option value="bri">BRI - XXXXXX</option>
			                  <option value="bni">BNI - XXXXXX</option>
			                  <option value="mandiri">MANDIRI - XXXXXX</option>
			                  <option value="bca">BCA - XXXXXX</option>
			                  <option value="bankntb">BANK NTB - XXXXXX</option>
			                </select>
			            </div>
					</div>
					<div class="col-sm-7 margin">
						<a href="<?php echo base_url('') ?>belanja/detail_keranjang">Kembali Ke Keranjang</a>
					</div>
					<div class="col-sm-5 margin">
						<button type="submit" class="btn btn-primary">Lanjutkan Pemesanan</button>
					</div>
				</form>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="row">
					<?php foreach ($this->cart->contents() as $items) : ?>
					<div class="col-sm-2">
						<img src="<?php echo base_url('assets/img/kopi/'). $items['gambar']; ?>" class="img-thumbnail" width="150">
					</div>
					<div class="col-sm-5 jendela">
						<strong><?php echo $items['name'] ?></strong>
					</div>
					<div class="col-sm-2 jendela">
						<strong><?php echo $items['qty'] ?></strong>
					</div>
					<div class="col-sm-3 jendela">
						<strong>Rp <?php echo number_format($items['price'], 0,',','.'); ?></strong>
					</div>
				<?php endforeach ; ?>
					<div class="col-sm-12"><hr></div>
					<div class="col-sm-9 jendela">
						<p>Total</p>
					</div>
					<div class="col-sm-3">
						<p><strong>Rp <?php echo number_format($this->cart->total(), 0,',','.'); ?></strong></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<!-- akhir menu informasi -->


<br><br><br><br>

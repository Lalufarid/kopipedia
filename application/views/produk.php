<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">

    <title>admin</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  		<a class="navbar-brand" href="../home/home.php"><img src="../img/logo fix.png" width="125px"></a>
  		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   	    	 <span class="navbar-toggler-icon"></span>
  		</button>
 		 <div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav ml-auto">
    	 		<li class="nav-item">
        		 <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
      			</li>
		       <li class="nav-item">
		       		 <a class="nav-link" href="../keranjangg/keranjang.php"><i class="fas fa-dolly-flatbed"></i></a>
		      </li>
		      <li class="nav-item active">
		        	<a class="nav-link" href="../kopi.kopi.php">KOPI <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        	<a class="nav-link" href="../artikel2/artikel2.php">ARTIKEL</a>
		      </li>
		      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          KATEGORI
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admin.php">PESANAN</a>
          <a class="dropdown-item" href="produk.php">PRODUK</a>
          </li>
		       <li class="nav-item">
		        	<a class="nav-link" href="../login/login.php">MASUK</a>
		      </li>
    	</ul>
 	 </div>
</nav>

<section class="judul">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3>PRODUK</h3>
        <hr>
      </div>
    </div>
  </div>
</section>


<!-- INFORMASI -->

<section class="informasi">
  <div class="container ">
    <ul>
      <li><a href="#"><h5>Tambah Data</h5></a></li>
    </ul>
  </div>
</section>

<!-- AKHIR INFORMASI -->

<!-- tabel pesanan -->

<section class="produk">
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">aksi</th>
          <th scope="col">produk</th>
          <th scope="col">stock produk</th>
          <th scope="col">harga produk</th>
          <th scope="col">Brand</th>
         
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">1</td>
          <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
          </td>
          <td>
            <img src="../img/Sunset Lotus/Kopi Arabika Toraja Sapan 250g.jpg" class="img-thumbnail" width="100px">
          </td>
          <td>90</td>
          <td><strong>Rp.100.000</strong></td>
          <td>Sunset Lotus</td>
        </tr>
        <tr>
          <td scope="row">2</td>
          <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
          </td>
          <td>
            <img src="../img/northsider/BIJI KOPI ARABIKA JAVA MALABAR NATURAL - 200GR1.jpg" width="100px">
          </td>
          <td>90</td>
          <td><strong>Rp.100.000</strong></td>
          <td>Sunset Lotus</td>
        </tr>
        <tr>
         <td scope="row">3</td>
          <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
          </td>
          <td>
            <img src="../img/northsider/BIJI KOPI ARABIKA BLUE MANDHELING NATURAL - 200GR1.jpg" width="100px">
          </td>
          <td>90</td>
          <td><strong>Rp.100.000</strong></td>
          <td>Sunset Lotus</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<!-- akhir pesanan -->

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				 <h5>TENTANG KAMI</h5>
				 <a href="#">tentang kami</a>  
			</div>
			<div class="col-sm-2">
				<h5>BANTUAN</h5>
				<a href="">cara pembayaran</a><br>
				<a href="">kontak kami</a>
			</div>
			<div class="col-sm-2">
				 <h5>INFORMASI</h5>
				 <a href="#">artikel</a><br>
				 <a href="#">Panduan Menyeduh</a> 
			</div>
			<div class="col-sm-3"> 
				<p class="fot">Daftar dan dapatkan kopi pilihan dari roster terbaik</p>
				<button type="submit" class="btn btn-default">Daftar</button>
			</div>
			<div class="col-sm-1">
				 <hr class="garis"> 
			</div>
			<div class="col-sm-2">
				 <h5>SOSIAL MEDIA</h5>
				 <a href="#"> <i class="fa-2x fab fa-facebook "></i></a>
				 <a href="#"><i class="fa-2x fab fa-instagram ml-3"></i></a>  
			</div>
		</div>
	</div>
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
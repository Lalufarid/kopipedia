
<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
         <h5>TENTANG KAMI</h5>
         <a href="<?php echo base_url('') ?>dashboard/tentang_kami">Tentang Kami</a>  
      </div>
      <div class="col-sm-3">
        <h5>BANTUAN</h5>
        <a href="<?php echo base_url('') ?>dashboard/hubungi_kami">Kontak Kami</a>
      </div>
      <div class="col-sm-3">
         <h5>INFORMASI</h5>
         <a href="<?php echo base_url('') ?>dashboard/tulisan">Artikel</a><br>
         <a href="<?php echo base_url('') ?>dashboard/panduan">Panduan Menyeduh</a> 
      </div>
      <div class="col-sm-3"> 
        <p class="fot">Daftar dan dapatkan kopi pilihan dari roster terbaik</p>
        <?php echo anchor('auth/registrasi', '<button type="submit" class="btn btn-default">DAFTAR</button>') ?>
      </div>
    </div>

    <!-- Sosisal Media -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><hr></div>
      </div>

      <div class="row">
         <div class="col-sm-12 col-12">
           <h5>SOSIAL MEDIA</h5>
           <center><a href="#"> <i class="fa-2x fab fa-facebook"></i></a>
           <a href="#"><i class="fa-2x fab fa-instagram ml-3"></i></a></center>
        </div>
      </div>
    </div>
  </div>
</footer>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
   <!-- Slick -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        
    <!-- JS Sendiri -->
    <script type="text/javascript" src="<?php echo base_url('assets/') ?>roaster.js"></script>

    <!-- Script Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- JS Sendiri -->
    
<!-- HUBUNGI KAMI -->
<section class="hubungi">
  <div class="container">
    <div class="row">

      <div class="col-sm 12 text-center">
        <h3>Hubungi Kami</h3>
        <hr>
      </div>

      <div class="col-sm-12 text-center nomor">
        <p>Jika Anda memiliki pertanyaan lebih lanjut mengenai layanan kami, hubungi kami dibawah ini:</p>
        <p>Telepon/Whatsapp</p>
        <p>Agil  : 0877-6505-4613</p>
        <p>Farid : 0877-5067-0082</p>
        <p>Cani  : 0853-3315-4642</p>
      </div>

      <div class="col-sm-12 text-center ">
        <p>Atau, kirimkan pertanyaan Anda di bawah ini:</p>
      </div>
      
      <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <form method="post" action="<?php echo base_url().'dashboard/tambah_saran';?>">
          <div class="form-row">
        
            <div class="form-group col-md-6">
              <label>Email</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>
          
             <div class="form-group col-md-6">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" id="nama">
              </div>
            </div>

            <div class="form-group">
            <label>Saran atau Pertanyaan </label>
            <input type="text" name="pertanyaan" class="form-control" id="pertanyaan">
          </div>
          <button type="submit" class="btn btn-primary">KIRIM</button>
        </form>
        </div>
        <div class="col-sm-2"></div>

    </div>
  </div>  
</section>

</body>
</html>
 <?php 
require 'koneksi.php';
?>
 <div>
   <h3 align="center">Lokasi MCD Summarecon (On The Spot)</h3>
</div>
<marquee>Selamat Datang di Website ikids Service</marquee>
    <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.25348478941!2d106.51903031436062!3d-6.230275662748071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4200ac6f64ec7d%3A0xd721dc44a27acb99!2sMcDonald&#39;s%20Citra%20Raya%20Cikupa!5e0!3m2!1sid!2sid!4v1630507515153!5m2!1sid!2sid" width="1150" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </a>
<section class="content">
    <div class="container">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-solid">
            <div class="box-body">
            
                <h3 align="center"><b>Ketentuan Service COD</b></h3>
              
            </div>
            <form method="post" target="blank">
            <div class="form-group">
              <div class="row">
                <div class="col-xs-2">
                </div>
                <div class="col-xs-8">
                  <div class="form-group">
                    <p align="left"><b>Prosedur Service di tempat</b></p>
                    <p> ikids service menyediakan jasa pelayanan service hp iphone secara langsung di tempat sesuai dengan lokasi yang anda pilih dan selama service berlangsung customer dapat menunggu proses perbaikan berlangsung selama kurang lebih 45 menit.</p>
                  </div>

                </div>
              </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-solid">
            <div class="box-body">
                <h3 align="center"><b>Prosedur Service di tinggal</b></h3>
                <p align="left"><b>Prosedur Service</b></p>
                 <p>Namun jika keadaan iphone dengan kerusakaan yang parah kemungkinaan berlangsung selama 1 harian maka iphone akan di perbaiki di toko ikids service, dan customer mendapatkan nomor kode service agar dapat mengetahui status perbaikan iphonenya dan kode tersebut dapat di cek statusnya di menu halaman awal website </p>
            </div>

                </div>
              </div>
              </div>
            </form>
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      </div>
    </section>
    <div class="col-xl-8 col-lg-7">
             <button type="button" class="btn btn-success" style="margin:5px" data-toggle="modal" data-target="#myModalTambah"><i class="fa fa-plus">booking Jasa Pelayanan Service COD</i></button><br>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php 
$query = mysqli_query($koneksi,"SELECT * FROM booking_jasa ");
while ($data = mysqli_fetch_assoc($query)) 
/*$no = $data['id_pemasukan'];
if ($no==null){
  $no=1;
}else{
  $no = $no + 1;
}*/
{
?>
  <div id="myModalTambah" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title">Konfirmasi data Donasi Anda</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  <h4 class="modal-title">Harap Isi Form Bioadata</h4>
        <form action="index.php?halaman=simpan_booking" method="post" enctype="multipart/form-data">
        <div class="modal-body">
    <!-- Id Pemasukan: 
         <input type="text" class="form-control" name="id_pemasukan"> -->
    Nama Customer: 
         <input type="text" class="form-control" name="nama_customer">
    Type HP : 
         <select class="form-control" name="type_iphone">
     <option value="iphone 6g" >iphone 6s</option>
     </select>
     Kerusakan : 
         <select class="form-control" name="kerusakan">
     <option value=" Glass (Kaca), touchscreen (Layar Sentuh), LCD.">1. Glass (Kaca), touchscreen (Layar Sentuh), LCD.</option>
     <option value=" Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). " >2.  Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker).</option>
     <option value=" Back Camera (Kamera Belang) ">3.  Back Camera (Kamera Belang) </option>
     <option value=" Buzzer (Speaker Music). " > 4.Buzzer (Speaker Music).</option>
     <option value="  Batre." >5.  Batre. </option>
     <option value=" Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.  "> 6.  Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM. </option>
     <option value=" Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang," >7.  Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang,</option>
     <option value=" Antena Wifi (Lemah)" >8.  Antena Wifi (Lemah).</option>
     <option value=" Vibrator (Getar)" >9.  Vibrator (Getar).</option>
     <option value=" Mati Total " >10.  Mati Total.</option>
     <option value=" Stuck itunes (Recovery – DFU)" >11.  Stuck itunes (Recovery – DFU).
     </option>
     </select>
     Keluhan Kerusakan : 
     <input type="text" class="form-control" name="keluhan_kerusakan">
     Alamat Customer : 
     <input type="text" class="form-control" name="alamat_customer">
     Pilih Lokasi COD : 
     <select class="form-control" name="pilih_lokasi_cod">
     <option value="MCD Citra Raya" >          1.MCD Citra Raya</option>
     <option value="MCD Summarecon" >          2.MCD Summarecon</option>
     <option value="MCD SuperMall Karawaci" > 3.MCD Supermall Karawaci</option>
   </select>
     Tanggal Booking Jasa: 
     <input type="date" class="form-control" name="tgl_booking">
       Upload Bukti Transfer :
         <input type="file" class="form-control" name="gambar_buktitf">
        <div class="modal-footer">
    <button type="submit" class="btn btn-success" name="input" >Tambah</button>
    </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
</div>
</div>
</table>
</div>
</div>
</div>
</div>
      <?php
      }
      ?>
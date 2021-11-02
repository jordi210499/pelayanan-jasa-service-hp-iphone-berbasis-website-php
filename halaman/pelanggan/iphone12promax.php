<div>
   <h2 align="center">Jenis HP iphone 12 Promax</h2>
</div>
   <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class=malasngoding-slider>
    <div class=isi-slider>
      <img src="gambar/hp/12mini.jpg"      alt="Gambar 1">
      <img src="gambar/hp/12pro.jpg"       alt="Gambar 2">
      <img src="gambar/hp/12promax.jpg"    alt="Gambar 3">
    </div>
  </div>
<p><h3>Detail Jenis Kerusakan dan harga</h3></p>
<?php
include('koneksi.php');
$q=mysqli_query($koneksi,"SELECT * FROM iphone12promax");
while ($row=mysqli_fetch_array($q)){
  $id_kerusakan         = $row['id_kerusakan'];
  $jenis_kerusakan      = $row['jenis_kerusakan'];
  $harga                = $row['harga'];
  ?>
  <div class="row">
  <div class="col-md-50">
  <div class="thumbnail" align="center">
  <div align="center">
  <div class="caption">
   <h4>
    <P>Jenis Kerusakan    : <?php echo ($jenis_kerusakan); ?></P>
    <P>Harga              : <?php echo ($harga); ?></P>
  </h4> 
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<?php
}
mysqli_fetch_array($q);
?>
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
          <h4 class="modal-title">Konfirmasi Booking Anda</h4>
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
        <select class="form-control" name="kerusakan">
     <option value=" Glass (Kaca), touchscreen (Layar Sentuh), LCD.">1. Glass (Kaca), touchscreen (Layar Sentuh), LCD.Rp.550.000</option>
     <option value=" Back Glass(Kaca Belakang)" >2.Back Glass(Kaca Belakang).Rp.350.000</option>
     <option value=" Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). " >3.  Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker).Rp.370.000</option>
     <option value=" Back Camera (Kamera Belang) ">4.  Back Camera (Kamera Belang).Rp.950.000</option>
     <option value=" Buzzer (Speaker Music). " > 5.Buzzer (Speaker Music).Rp.220.000</option>
     <option value="  Batre." >6.  Batre.Rp.450.000 </option>
     <option value=" Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.  "> 7.  Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.Rp.250.000 </option>
     <option value=" Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang," >8.  Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang.Rp.250.000</option>
     <option value=" Antena Wifi (Lemah)" >9.  Antena Wifi (Lemah).Rp.230.000</option>
     <option value=" Vibrator (Getar)" >10.  Vibrator (Getar).Rp.150.000</option>
     <option value=" Mati Total " >11.  Mati Total.Rp.350.000-Rp.550.000</option>
     <option value=" Stuck itunes (Recovery – DFU)" >12.  Stuck itunes (Recovery – DFU).
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
       Upload Bukti Transfer : (dp booking jasa Rp.50.000)
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
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</table>
      <?php
      }
      ?>

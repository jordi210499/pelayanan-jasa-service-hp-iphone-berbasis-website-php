<?php 
require 'koneksi.php';
?>
<div>
   <h2 align="center">Jenis HP iphone 5 type 5c, 5g, 5s</h2>
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
      <img src="gambar/hp/5c.jpg"    alt="Gambar 1">
      <img src="gambar/hp/5s.jpg"    alt="Gambar 2">
      <img src="gambar/hp/5g.jpg"    alt="Gambar 3">
    </div>
  </div>
<p><h3>Detail Jenis Kerusakan</h3></p>
<?php
include('koneksi.php');
$q=mysqli_query($koneksi,"SELECT * FROM iphone5");
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
     <option value="iphone 5 c" >      2. iphone 5c</option>
     <option value="iphone 5g" >       3. iphone 5g</option>
     <option value="iphone 5s" >       4. iphone 5s</option>
     </select>
     Kerusakan : 
         <select class="form-control" name="kerusakan">
     <option value=" Glass (Kaca), touchscreen (Layar Sentuh), LCD." >1. Glass (Kaca), touchscreen (Layar Sentuh), LCD. Rp.300.000</option>
     <option value=" Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). " >2. Earpiece (Speaker Kuping), Sensor Proximity, Front Camera (Kamera Depan) Mic Vidio Depan (LoadSpeaker). Rp.300.000</option>
     <option value=" Back Camera (Kamera Belang) ">3.Back Camera (Kamera Belang).Rp.300.000</option>
     <option value=" Buzzer (Speaker Music). " > 4.Buzzer (Speaker Music).Rp.300.000</option>
     <option value="  Batre." >5.  Batre. Rp.300.000</option>
     <option value=" Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.  "> 6.Connector Charger (Lobang Casaan), Jack phone (Lobang Headset AUK), Mic Telpon, Antena GSM.Rp.300.000</option>
     <option value=" Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang," >7.Volume Up Down, Silent-Ring, On off, Mic Kamera Belakang. Rp.300.000</option>
     <option value=" Antena Wifi (Lemah)" >8.Antena Wifi (Lemah).Rp.300.000</option>
     <option value=" Vibrator (Getar)" >9.Vibrator (Getar). 350.000</option>
     <option value=" Mati Total " >10.  Mati Total.Rp.300.000</option>
     <option value=" Stuck itunes (Recovery – DFU)" >11.Stuck itunes (Recovery – DFU).Rp.300.000</option>
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
         <input type="file" class="form-control" name="bukti_transfer">
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

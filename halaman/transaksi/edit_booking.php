<?php
include ('../../koneksi.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = mysqli_query($koneksi,"SELECT * from booking_jasa WHERE id_booking =  '$id'");
	$prod = mysqli_fetch_array($query);
}
else $id = "";

if (isset($_POST['update'])){
	$nama_customer     = $_POST['nama_customer'];
	$type_iphone 	   = $_POST['type_iphone'];
	$kerusakan 		   = $_POST['kerusakan'];
	$keluhan_kerusakan = $_POST['keluhan_kerusakan'];
	$alamat_customer   = $_POST['alamat_customer'];
	$pilih_lokasi_cod  = $_POST['pilih_lokasi_cod'];
	$tgl_booking 	   = $_POST['tgl_booking'];
if($nama_customer == "" or $type_iphone==""or $kerusakan==""or $keluhan_kerusakan==""or $alamat_customer==""or $pilih_lokasi_cod==""or $tgl_booking==""){
	echo "<script>alert('masih ada data yang kosong .');
	document.location = 'index.php?halaman=riwayat_booking';</script>";
} else {
	if (isset($_FILES["gambar_buktitf"]["tmp_name"]))
	{
		$gambar_buktitf = $_FILES["gambar_buktitf"]["name"];
		$gambar_buktitf = stripcslashes($gambar_buktitf);
		$gambar_buktitf = str_replace("'","",$gambar_buktitf);
		$gambar_buktitf = str_replace(" ","-",$gambar_buktitf);
		$gambar_buktitf = substr($gambar_buktitf, -20);
		$gambar_buktitf = rand(100,999).$gambar_buktitf;
		move_uploaded_file($_FILES["gambar_buktitf"]["tmp_name"], "../gambar/bukti_tf/$gambar_buktitf");	
		$update = mysqli_query($koneksi,"UPDATE booking_jasa SET
			nama_customer = '$nama_customer',
			type_iphone = '$type_iphone',
			gambar_buktitf = '$gambar_buktitf' WHERE id_booking = '$id'") or die (mysqli_error());
	} else {
		$update= mysqli_query($koneksi,"UPDATE booking_jasa SET
			nama_customer 	  = '$nama_customer',
			type_iphone       = '$type_iphone',
			kerusakan         = '$kerusakan',
			keluhan_kerusakan = '$keluhan_kerusakan',
			alamat_customer   = '$alamat_customer',
			pilih_lokasi_cod  = '$pilih_lokasi_cod',
			tgl_booking       = '$tgl_booking',
			gambar_buktitf    = '$_POST[gambartxt]'
			where id_booking  = '$id'") or die (mysqli_error());
	}
	if($update){
		echo "<script>alert('data berhasil di update !');
		document.location = 'index.php?halaman=riwayat_booking';</script>";
	} else {
		echo "<script>alert<'gagal mas bro !');
		document.location = 'index.php?halaman=riwayat_booking';</script>";
		}
	}
}
?>
<div>
	<h2> Input booking </h2>
	<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama Customer</td>
			<td>:</td>
			<td><input type="text" name="nama_customer" placeholder="nama_customer" value="<?php echo "$prod[nama_customer]";?>"></td>
		</tr>
		<tr>
			<td>Type iphone</td>
			<td>:</td>
			<td><input type="text" name="type_iphone" placeholder="type_iphone" value="<?php echo "$prod[type_iphone]";?>"></td>
		</tr>
		<tr>
			<td>Kerusakan</td>
			<td>:</td>
			<td><input type="text" name="kerusakan" placeholder="kerusakan" value="<?php echo "$prod[kerusakan]";?>"></td>
		</tr>
		<tr>
			<td>Keluhan Kerusakan</td>
			<td>:</td>
			<td><input type="text" name="keluhan_kerusakan" placeholder="keluhan_kerusakan" value="<?php echo "$prod[keluhan_kerusakan]";?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="date" name="alamat_customer" placeholder="alamat_customer" value="<?php echo "$prod[alamat_customer]";?>"></td>
		</tr>
		<tr>
			<td>Pilih Alamat COD</td>
			<td>:</td>
			<td><input type="text" name="pilih_lokasi_cod" placeholder="pilih_lokasi_cod" value="<?php echo "$prod[pilih_lokasi_cod]";?>"></td>
		</tr>
		<tr>
			<td>Tanggal Booking</td>
			<td>:</td>
			<td><input type="date" name="tgl_booking" placeholder="tgl_booking" value="<?php echo "$prod[tgl_booking]";?>"></td>
		</tr>
		<tr>
			<td>gambar bukti tf</td>
			<td>:</td>
			<td><input type="file" name="gambar_buktitf" size="50" id="lik">
			<input typpe="hidden" name="gambartxt" value="<?php echo "$prod[gambar_buktitf]";?>"><?php echo "$prod[gambar_buktitf]";?></td>
		</tr>
		<tr>
		<td colspan= "3" align="center"><input type="submit" name="update" value="update" id="lik"></td>
		</tr>
	</table>
	</form>
</div>

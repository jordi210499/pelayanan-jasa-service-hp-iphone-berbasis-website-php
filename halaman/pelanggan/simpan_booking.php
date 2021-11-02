<?php
include ('koneksi.php');
if(isset($_POST['input'])){

	$sql = mysqli_query($koneksi,"SELECT RIGHT(id_booking, 2) as kode FROM booking_jasa
	 ORDER BY id_booking DESC LIMIT 2" );
	$hitung = count($sql);
	// echo $hitung;die;
	if ($hitung > 0) {
		$q = mysqli_fetch_assoc($sql);
		$kode = (int)$q['kode'] + 1;
		// print_r($kode);die;
	}else{
		$kode = 2;
	}
	$code = "bkg".str_pad($kode, 3,"0", STR_PAD_LEFT);

/*$id_booking       	 = $_POST['id_booking'];*/
$nama_customer       = $_POST['nama_customer'];
$type_iphone 		 = $_POST['type_iphone'];
$kerusakan   		 = $_POST['kerusakan'];
$keluhan_kerusakan   = $_POST['keluhan_kerusakan'];
$alamat_customer	 = $_POST['alamat_customer'];
$pilih_lokasi_cod    = $_POST['pilih_lokasi_cod'];
$tgl_booking     	 = $_POST['tgl_booking'];
$gambar_buktitf      = $_FILES['gambar_buktitf'];


if ($nama_customer == "" or $type_iphone== "" or $kerusakan == "" or $keluhan_kerusakan == ""or $alamat_customer == "" or $pilih_lokasi_cod == "" or $tgl_booking == "")
{
	echo "<script>alert('masih ada data yang kosong');
			document.location = 'index.php?halaman=booking_jasa';</script>";
}else{

	if (isset($_FILES["gambar_buktitf"]["tmp_name"]))
	{
		$gambar_buktitf = $_FILES["gambar_buktitf"]["name"];
		$gambar_buktitf = stripcslashes($gambar_buktitf);
		$gambar_buktitf = str_replace("'","",$gambar_buktitf);
		$gambar_buktitf = str_replace(" ","-",$gambar_buktitf);
		$gambar_buktitf = substr($gambar_buktitf, -20);
		$gambar_buktitf = rand(200,999).$gambar_buktitf;
		move_uploaded_file($_FILES["gambar_buktitf"]["tmp_name"], "gambar/bukti_tf/gambar_buktitf");
	}else{
		$gambar_buktitf = "";
	}

$query=mysqli_query($koneksi,"INSERT INTO booking_jasa(`id_booking` ,`nama_customer` , `type_iphone` , `kerusakan`,`keluhan_kerusakan`,`alamat_customer`,`pilih_lokasi_cod`,`tgl_booking`,`gambar_buktitf`) VALUES ('$code' ,'$nama_customer' , '$type_iphone' , '$kerusakan', '$keluhan_kerusakan','$alamat_customer', '$pilih_lokasi_cod', '$tgl_booking','$gambar_buktitf')");

if ($query) 
{
	echo"<script>alert('Terimakasih Booking Jasa Service Berhasil dengan atas nama $nama_customer pada tanggal $tgl_booking tempat lokasi $pilih_lokasi_cod');window.location='index.php'</script>";
}else{	
		echo "<script>alert('Data gagal di Input')</script>";
	}
	
}
}
?>

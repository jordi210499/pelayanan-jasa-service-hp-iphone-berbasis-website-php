<?php 
include ('../koneksi.php');
$id = $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM booking_jasa WHERE id_booking='$id'");
if ($hapus)
{
	echo"<script>window.alert('Booking berhasil di hapus');
	document.location='index.php?halaman=riwayat_booking' </script>";
} 
	else
{
echo"gagal";
}
?>
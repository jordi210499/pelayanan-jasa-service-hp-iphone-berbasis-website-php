<?php
require_once('../../koneksi.php');
$query=mysqli_query($koneksi,"SELECT * FROM booking_jasa");


?>
<style type="text/css">
	body{
		background: #;
	}
</style>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h2 class="text-center">Data Riwayat Jasa Booking Customer</h2>
		<div class="table-responsive" style="background: #fff">   
			<!-- datatable style -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<!-- jquery -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<!-- membuat tabel -->
<table id="table_id" border=1 class="display">
				<thead>
                    <tr>
                      <th>ID Booking</th>
                      <th>Nama Customer</th>
                      <th>Type iphone</th>
                      <th>Kerusakan</th>
                      <th>Keluhan Kerusakan</th>
                      <th>Alamat Customer</th>
                      <th>Pilih Lokasi COD</th> 
                      <th>Tanggal Booking</th>
                      <th>Gambar Bukti TF</th>
                      <th>Opsi</th>
					 </tr>
					</thead>
					<?php 
					$query = mysqli_query($koneksi,"SELECT * FROM booking_jasa ");
$no = 1;
while ($data = mysqli_fetch_assoc($query)) 
{
?>
                    <tr>
                      <td><?=$data['id_booking']?></td>
                      <td><?=$data['nama_customer']?></td>
                      <td><?=$data['type_iphone']?></td>
                      <td><?=$data['kerusakan']?></td>
                      <td><?=$data['keluhan_kerusakan']?></td>
                      <td><?=$data['alamat_customer']?></td>
                      <td><?=$data['pilih_lokasi_cod']?></td>
                      <td><?=$data['tgl_booking']?></td>
           			  <td><a href="gambar/bukti_tf/<?php echo $data['gambar_buktitf'];?>">
					  <img src="gambar/bukti_tf/<?php echo $data['gambar_buktitf'];?>" width = "150px"/>
					  </a></td>
<td>
<button><a href="index.php?halaman=edit_booking&id=<?php echo $data['id_booking']; ?>">EDIT</a></button>
<button><a href="index.php?halaman=hapus_booking&id=<?php echo $data['id_booking']; ?>">HAPUS</a></button>
</td>
						</td>
						</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		!-- jquery datatable -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<!-- fungsi datatable -->
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

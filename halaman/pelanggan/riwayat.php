<?php
include ('koneksi.php');
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
		<div class="table-responsive">
           <table id="example1" class="table table-bordered table-hover table-striped">   
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
						</td>
						</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

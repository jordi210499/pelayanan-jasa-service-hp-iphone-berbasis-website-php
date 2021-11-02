 <p><h2 align="center">Pilih Jenis HP</h2></p>
<?php
include('koneksi.php');
$q=mysqli_query($koneksi,"SELECT * FROM hp where id_hp");
while ($row=mysqli_fetch_array($q)){
  $id_hp              = $row['id_hp'];
  $merk_hp            = $row['merk_hp'];
  $gambar_hp          = $row['gambar_hp'];
  ?>

  <div class="row">
  <div class="col-md-50">
    <div class="thumbnail" align="center">
       <img src="gambar/hp/<?php echo $row['gambar_hp'];?>" alt="" style="width: 50%; height: 22vw;">
  <div align="center">
  <div class="caption">
  <strong>
    <label> Pilih Jenis Handphone</label><br/>
  </strong>
    <h5>
    <P>Merk hp              : <?php echo ($merk_hp); ?></P>
  </h5> 
  <p><a href="index.php?halaman=detail_kerusakan&id=<?php echo $id_hp;?>"><button>Pilih Jenis Hp</button></a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
<?php
}
mysqli_fetch_array($q);
?>
 <p><h2 align="center">Pilih Jenis HP</h2></p>
<?php
include('koneksi.php');
$id = $_GET['id']; 
$q=mysqli_query($koneksi,"SELECT * FROM hp where id_hp = '$id'");
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
  <!-- <p><a href="index.php?halaman=detail_kerusakan&id=<?php echo $id_hp;?>"><button>Pilih Jenis Hp</button></a></p> -->

 <div>
   <h3 align="center">Jenis Jenis HP iphone</h3>
</div>
    <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/5c.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp i phone 5 dari type 5c,5g,5s.</a></h4>
              <p>Jenis Hp iphone 5</p>
              <p><a href="index.php?halaman=iphone5"><button>Jenis kerusakan</button></a></p>

            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/6g.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 6g.</a></h4>
              <p>Jenis Hp iphone 6g</p>
              <p><a href="index.php?halaman=iphone6"><button>Jenis kerusakan</button></a></p>

            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/6s.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 6s.</a></h4>
              <p>Jenis Hp iphone 6s</p>
              <p><a href="index.php?halaman=iphone6s"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
           <img class="card-img-top" src="gambar/hp/6plus.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 6 plus.</a></h4>
              <p>Jenis Hp iphone 6 plus</p>
              <p><a href="index.php?halaman=iphone6plus"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/7.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 7g.</a></h4>
              <p>Jenis Hp iphone 7</p>
              <p><a href="index.php?halaman=iphone7"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/7plus.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 7 plus.</a></h4>
              <p>Jenis Hp iphone 7plus</p>
              <p><a href="index.php?halaman=iphone7plus"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/8.jpg" alt="" style="width: 70%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 8g.</a></h4>
              <p>Jenis Hp iphone 8g</p>
              <p><a href="index.php?halaman=iphone8"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/8plus.jpg" alt="" style="width: 70%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 8plus.</a></h4>
              <p>Jenis Hp iphone 8plus</p>
              <p><a href="index.php?halaman=iphone8plus"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/11g.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 11g.</a></h4>
              <p>Jenis Hp iphone 11g</p>
              <p><a href="index.php?halaman=iphone11"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/11pro.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 11 pro.</a></h4>
              <p>Jenis Hp iphone 11 pro</p>
              <p><a href="index.php?halaman=iphone11pro"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/11promax.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 11 promax.</a></h4>
              <p>Jenis Hp iphone 11 promax</p>
              <p><a href="index.php?halaman=iphone11promax"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/12mini.jpg" alt="" style="width: 80%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 12mini.</a></h4>
              <p>Jenis Hp iphone 12 mini</p>
              <p><a href="index.php?halaman=iphone12"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/12pro.jpg" alt="" style="width: 80%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 12 pro.</a></h4>
              <p>Jenis Hp iphone 12 pro</p>
              <p><a href="index.php?halaman=iphone12pro"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/12promax.jpg" alt="" style="width: 80%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone 12 promax.</a></h4>
              <p>Jenis Hp iphone promax</p>
              <p><a href="index.php?halaman=iphone12promax"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/x.jpg" alt="" style="width: 60%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone x.</a></h4>
              <p>Jenis Hp iphone x</p>
              <p><a href="index.php?halaman=iphonex"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/xr.jpg" alt="" style="width: 120%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone xr.</a></h4>
              <p>Jenis Hp iphone xr</p>
              <p><a href="index.php?halaman=iphonexr"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/xs.jpg" alt="" style="width: 80%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone xs.</a></h4>
              <p>Jenis Hp iphone xs</p>
              <p><a href="index.php?halaman=iphonexs"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>

        <div class="portfolio-col">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a class="hover-box" href="#">
              <!-- <div class="dot-full">
                <i class="fas fa-link"></i>
              </div> -->
              <img class="card-img-top" src="gambar/hp/xsmax.jpg" alt="" style="width: 80%; height: 12vw;">
            </a>
            <div class="card-body">
              <h4><a>Jenis Hp iphone xsmax.</a></h4>
              <p>Jenis Hp iphone xsmax</p>
              <p><a href="index.php?halaman=iphonexsmax"><button>Jenis kerusakan</button></a></p>
            </div>
          </div>
        </div>


  </div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>
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
<?php
  require_once 'config.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KImCheers!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="kimcheers.css">
  </head>
  <body>

    <!-- NAVBAR -->
    <?php
    include_once 'header.php';
    ?>    
    

    <!-- SECTION 1 -->


    <div class="container-fluid p-5 py-5 gradient-bg bgcolor">
      <div class="row">
        <div class="col-lg-6 col-md-5 center-content">
        </div>
        <div class="col-lg-6 col-md-5 center-content">
          <h1 class="display-3 fw-bold mt-5 mb-4" style="color:#399FAC;">Let's Learn Korean!</h1>
          <p class="mt-2 text-light">Selamat datang di KimCheers, tempat di mana bahasa Korea menjadi petualangan yang tak terlupakan! Kami menghadirkan platform belajar bahasa Korea yang tidak hanya terstruktur, tetapi juga menyenangkan. Menghadirkan metode self-study yang inovatif yang membuat bahasa Korea menjadi mudah dan menyenangkan.</p>
          <a href="#advantages">
            <button type="button" class="btn buttonG mt-2 p-3">Get Started</button>
          </a>
        </div>
      </div>
    </div>
    

    <!-- SECTION 2 -->
    <div class="container-fluid bgcolor p-5 text-center">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex justify-content-center align-items-center">
              <div class="col-lg-8 col-md-8 col-sm-8 mx-3">
                <img src="assets/manfaat1.png" class="img-fluid d-block mx-auto" style="width: 50%;">
                <h6>Kurikulum sistematis dan mudah diikuti</h6>
                <p>Tersedia berbagai video pembelajaran dan buku yang telah disusun dengan kurikulum online yang sistematis</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center align-items-center">
              <div class="col-lg-8 col-md-8 col-sm-8 mx-3">
                <img src="assets/manfaat2.png" class="img-fluid d-block mx-auto" style="width: 50%;">
                <h6>Topik menarik selalu di update tiap harinya</h6>
                <p>Berbagai artikel mengenai Korea akan menambah pengetahuan dan meningkatkan kemampuan berbahasa Korea-mu</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center align-items-center">
              <div class="col-lg-8 col-md-8 col-sm-8 mx-3">
                <img src="assets/manfaat3.png" class="img-fluid d-block mx-auto" style="width: 50%;">
                <h6>Membangun kemampuan berbicara seperti penutur asli </h6>
                <p>"Talk with Kimcheers" membuatmu seolah-olah melakukan percakapan nyata</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- SECTION 3 -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 ">
          <div class="row justify-content-md-center">
            <div class="p-5 col-sm-5">
              <img src="assets/stress.jpg" class="img-fluid pictSec2">
            </div>
            <div class="m-5 col-sm-5">
              <h3 class="mb-3">Belajar bahasa Korea susah banget? </h3>
              <p>Bagi orang yang baru mengenal bahasa Korea, pastinya merasa bahasa Korea sangat sulit.
                Hal pertama yang membuat terasa sulit pastinya sistem hurufnya, Hangeul. Selain itu, perbedaan pola susunan kata membuat bahasa Korea cukup membingungkan.
                Bahasa Korea memiliki sistem hirarki yang mempengaruhi penggunaan kata dan gaya berbicara tergantung pada hubungan sosial. Pengucapan yang akurat juga bisa menjadi tantangan karena adanya bunyi konsonan dan vokal yang berbeda dengan bahasa lain. Terakhir, kosakata dan frasa dalam bahasa Korea kadang tidak biasa dan berbeda dengan bahasa-bahasa lain. 
                Akan tetapi, sulit menemukan cara yang benar-benar efektif untuk belajar bahasa Korea.
              </p>
            </div>
            <hr>
            <div class="m-5 col-sm-5">
              <h3>Tenang aja, bahasa Korea gak sesusah itu kok!</h3>
              <p>Kimcheers! telah berpengalaman lebih dari 5 tahun menjadi platform pembelajaran bahasa Korea yang paling banyak diminati.
                Melalui Kimcheers! kamu akan menemukan cara belajar bahasa Korea paling efektif. Kurikulum pembelajaran yang telah disusun secara sederhana menyesuaikan level kemampuan Kimchingu.
                Ruang belajar menarik yang dibangun untuk membuat Kimchingu tetap terlibat dan termotivasi sehingga tidak akan bosan untuk belajar tiap harinya. 
                Mari kita terus melanjutkan perjalanan ini untuk menemukan dunia baru dan versi diri yang baru!
              </p>
            </div>
            <div class="p-5 col-sm-5">
              <img src="assets/learn.jpg" class="img-fluid pictSec2">
            </div>
          </div>        
        </div>
      </div>
    </div>

    <!-- SECTION 4 -->

    <div class="container-fluid bgcolor p-5 text-center">
      <div class="row justify-content-md-center justify-content-sm-center">
        <div class="col col-lg-3 col-md-3 col-sm-8 mx-3">
          <img src="assets/videolesson.png" class="card-img-top" alt="...">
          <p>Video lessons and live class</p>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-8 mx-3">
          <img src="assets/talk.png" class="card-img-top" alt="...">
          <p>Practice real-life conversation </p>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-8 mx-3">
          <img src="assets/book.png" class="card-img-top" alt="...">
          <p>100+ books availabel</p>
        </div>
      </div>
      <div class="row justify-content-md-center justify-content-sm-center">
        <div class="col col-lg-3 col-md-3 col-sm-8 mx-3">
          <img src="assets/quiz.png" class="card-img-top" alt="...">
          <p>Quiz Review</p> 
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-8 mx-3">
          <img src="assets/vocap.png" class="card-img-top" alt="...">
          <p>New vocabulary updated everyday</p>
        </div>
      </div>
    </div>

      <div class="col-sm-12 text-center p-5">
        <p>You don’t need much to learn Korean. Here at KImCheers! you will be able to learn Korean on your own with our support and resources. And you’ll find your adventures and growth in the process!</p>
        <button type="button" class="btn buttonG mb-4 px-4 py-2">Take Course</button>
        <p>Still don't know your level? Take a test first to get recommendation.</p>
        <button type="button" class="btn buttonG mb-4 px-5 py-2">Test Level</button>
      </div>

    </div>

    <!-- COURSE -->

    <div class="container-fluid p-5" style="background-color: #399FAC;">
      <h1 class="fw-bold text-center p-5" style="color: #ffffff;">OUR POPULAR COURSES</h1>
      <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
      <div class="row justify-content-center align-items-stretch">
    <?php
      $sql = "SELECT * FROM Course_Package WHERE package_id = 7";
      $all_Course_Package = $conn->query($sql);
      while($row = mysqli_fetch_assoc($all_Course_Package)){
    ?>
    <div class="col-lg-3 col-md-4 mb-4">
      <div class="card text-center course d-flex">
        <div class="card-body">
          <h6 class="card-title package_name"><?php echo $row["package_name"];?></h6>
          <h3 class="card-text level_name"><?php echo $row["level_name"];?></h3>
          <h2 class="card-text price">Rp <?php echo $row["price"];?></h2>
          <a href="checkout.php">
            <button type="button" class="btn buttonY mt-2">Checkout Now</button>
          </a>
          <div>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="justify-content-center text-light infodrp">Info Paket</span>
            <i class="fa-solid fa-caret-down" style="color: #2c2d30;"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-lg-0 py-2">
               <li><hr></li>
                <li><?php echo $row["info"];?> </li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      }
    ?>


<?php
      $sql = "SELECT * FROM Course_Package WHERE package_id = 5";
      $all_Course_Package = $conn->query($sql);
      while($row = mysqli_fetch_assoc($all_Course_Package)){
    ?>
    <div class="col-lg-3 col-md-4 mb-4">
      <div class="card text-center course d-flex">
        <div class="card-body">
          <h6 class="card-title package_name"><?php echo $row["package_name"];?></h6>
          <h3 class="card-text level_name"><?php echo $row["level_name"];?></h3>
          <h2 class="card-text price">Rp <?php echo $row["price"];?></h2>
          <a href="checkout.php">
            <button type="button" class="btn buttonY mt-2">Checkout Now</button>
          </a>
          <div>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="justify-content-center text-light infodrp">Info Paket</span>
            <i class="fa-solid fa-caret-down" style="color: #2c2d30;"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-lg-0 py-2">
               <li><hr></li>
                <li><?php echo $row["info"];?> </li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      }
    ?>
    
              <?php
      $sql = "SELECT * FROM Course_Package WHERE package_id = 3";
      $all_Course_Package = $conn->query($sql);
      while($row = mysqli_fetch_assoc($all_Course_Package)){
    ?>
    <div class="col-lg-3 col-md-4 mb-4">
      <div class="card text-center course d-flex">
        <div class="card-body">
          <h6 class="card-title package_name"><?php echo $row["package_name"];?></h6>
          <h3 class="card-text level_name"><?php echo $row["level_name"];?></h3>
          <h2 class="card-text price">Rp <?php echo $row["price"];?></h2>
          <a href="checkout.php">
            <button type="button" class="btn buttonY mt-2">Checkout Now</button>
          </a>
          <div>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="justify-content-center text-light infodrp">Info Paket</span>
            <i class="fa-solid fa-caret-down" style="color: #2c2d30;"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-lg-0 py-2">
               <li><hr></li>
                <li><?php echo $row["info"];?> </li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      }
    ?>

    </div>
  </div>
</div>


    <!-- SECTION 4 -->
<div class="container-fluid">
  <div class="container p-5 text-center mt-5">
    <h1 class="mb-5 title">WITH OUR BEST TUTORS</h1>
    <div class="row justify-content-center mt-5">
      <?php
      $sql = "SELECT * FROM tutor";
      $all_tutor = $conn->query($sql);
      while ($row = mysqli_fetch_assoc($all_tutor)) {
      ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="<?php echo $row["photo"]; ?>" class="rounded-circle tutorImage mb-3">
        <p><?php echo $row["tutor_name"]; ?></p>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>



          <!-- <div class="col-lg-3 col-md-3 col-sm-4">
            <img src="assets/yjh.jpg" class="rounded-circle tutorImage mb-3">
            <p>Yoon Jeonghan</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4">
            <img src="assets/iu.jpg" class="rounded-circle tutorImage mb-3">
            <p>Lee Jieun</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4">
            <img src="assets/yoona.png" class="rounded-circle tutorImage mb-3">
            <p>Im Yoona</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4">
            <img src="assets/kth.jpg" class="rounded-circle tutorImage mb-3">
            <p>Kim Taehyung</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4">
            <img src="assets/shk.jpg" class="rounded-circle tutorImage mb-3">
            <p>Song Hyekyo</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4">
            <img src="assets/csb.jpg" class="rounded-circle tutorImage mb-3">
            <p>Choi Soobin</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4">
            <img src="assets/ljh.jpg" class="rounded-circle tutorImage mb-3">
            <p>Lee Jehoon</p>
          </div> -->
          
        </div>
      </div>
    </div>
    </div>


    </div>

    <!-- FOOTER -->
    <?php
    include_once 'footer.php';
    ?>    

    

 
    

    
    <script src="https://kit.fontawesome.com/d561393782.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
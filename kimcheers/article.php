<?php
require_once 'config.php';

error_reporting(0);

session_start();

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

    <!-- HEADER -->
    <?php
    include_once 'header.php';
    ?>    

    <!-- SECTION 1 -->
    <div class="container-fluid p-5 text-center" style="background-image: url(assets/gyeongbokgung-palace.jpg) ; background-color:rgb(255, 255, 255); background-size: cover; background-position: center">
        <h1 class="display-3 fw-bold text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center mt-5 mb-4" style="color:#ffffff;">Mau tau lebih benyak tentang Korea?</h1>
        <h4 class="text-light"></h4>
        <div class="row mt-5 mb-2 justify-content-center">
            <div class="col-md-4">
                <form class="d-flex" action="" method="POST" role="subscribe">
                    <input class="form-control me-2 flex-grow-1" type="subscribe" id="emailInput" placeholder="Masukkan emailmu" aria-label="Search">
                    <button class="btn buttonG" type="button" onclick="subscribe()">Subscribe</button>
                </form>
                <h4 class="mt-3 text-light" id="subscribe"></h4>
            </div>
        </div>        
    </div>

      <!-- ARTIKEL -->

      <div class="card border-0 px-5 pb-2 pt-5">
        <a href="#" class="text-decoration-none text-dark border-0">
        <?php
            $sql = "SELECT * FROM article";
            $all_article = $conn->query($sql);
            while($row = mysqli_fetch_assoc($all_article)){
          ?>
          <div class="row justify-content-center mb-2">
            <div class="col-lg-2 col-md-4">
              <img src="<?php echo $row["article_pict"];?>" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $row["title"];?> </h5>
                <p class="card-text"><?php echo $row["preview"];?></p>
              </div>
            </div>
          </div>
          <?php
        }
      ?>
        </a>
      </div>
    


 <!-- FOOTER -->
    <?php
    include_once 'footer.php';
    ?>
<!-- FOOTER -->

<script src="kimcheers.js"></script>
<script src="https://kit.fontawesome.com/d561393782.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
        

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

    <!-- HEADER -->
    <?php
      include_once 'header.php';
    ?>  

    <!-- SECTION 1 -->

    <div class="container-fluid" style="background-color: #ffffff;">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div id="carouselExampleSlidesOnly" class="carousel slide headSlide" data-bs-ride="carousel" style="width: 100%; height: 100%; overflow: hidden;">
              <div class="carousel-item active" style="height: 100%;">
                <img src="assets/bts2.jpg" class="img-fluid " alt="..." style="height: 100%; object-fit: cover;">
              </div>
              <div class="carousel-item" style="height: 100%;">
                <img src="assets/bts2.jpg" class="img-fluid w-100" alt="..." style="height: 100%; object-fit: cover;">
              </div>
              <div class="carousel-item" >
                <img src="assets/bts2.jpg" class="img-fluid" alt="..." style="height: 100%; object-fit: cover;">
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- COURSE -->
  <div class="container-fluid p-5" style="background-color: #ffffff;">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <div>
        <p class="box mb-0">Basic</p>
        <div class="line mt-0 mb-5"></div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center align-items-stretch">
    <?php
      $sql = "SELECT * FROM Course_Package WHERE package_name = 'Basic' LIMIT 3";
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


<div class="container-fluid p-5" style="background-color: #ffffff;">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <div>
        <p class="box mb-0">Standard</p>
        <div class="line mt-0 mb-5"></div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center align-items-stretch">
    <?php
      $sql = "SELECT * FROM Course_Package WHERE package_name = 'Standard' LIMIT 3";
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



<div class="container-fluid p-5" style="background-color: #ffffff;">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <div>
        <p class="box mb-0">Platinum</p>
        <div class="line mt-0 mb-5"></div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center align-items-stretch">
    <?php
      $sql = "SELECT * FROM Course_Package WHERE package_name = 'Platinum' LIMIT 3";
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

<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="checkoutModalLabel">Checkout</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <!-- CHECKOUT FORM      -->
            <div class="container-fluid">
              <h3>Product</h3>
              
              <h3>Personal Information</h3>
              <hr>
              <div class="row">
                <div class="col">
                  First name
                  <input id="firstName" type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                  Last name
                  <input id="lastName" type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
              </div>
              <div class="col">
                Email
                <input id="email" type="text" class="form-control" placeholder="Last name" aria-label="Last name">
              </div>
              
              <h3>Shipping</h3>
              <hr>
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <textarea type="text" rows="5" class="form-control" id="message"></textarea>
                </div>
              </form>
              <h3>Billing</h1>
              <hr>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="checkout(event)">Cancel</button>
            <button type="button" class="btn btn-warning" onclick="orderSummary()">Checkout</button>
          </div>
        </div>
      </div>

        </div>
      </div>
    </div>
  </div>


<!-- FOOTER -->

<?php
  include_once 'footer.php';
?>


<script src="kimcheers.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-paZ+j3Q6jY9S2EkIgBtfsEWsXGGbMvG5of18p3D6iILJibM3BYxq0yQJblL8KzOJ" crossorigin="anonymous"></script>

    </body>
    </html>
<?php
  require 'config.php';

  session_start();


  if(!empty($_SESSION["email"])){
    $email = $_SESSION["email"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
  }
  else{
    header("Location: login.php");
  }
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

    <div class="container-fluid p-5">
        <div class="row justify-content-center">

            <div class="col-lg-2">
                <img src="assets/templatedoang.png" alt="" class="img-fluid rounded-circle profileImage mb-3">
            </div>
            <div class="col-lg-8">
                <h3 class="text-left"> <?php echo $row["username"];?> </h3>
                <p class="text-secondary text-left"> <?php echo $row["email"];?> </p>
                <a href="logout.php">
                    <button type="button" class="btn buttonY mt-2">Log Out</button>
                </a>  
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <hr>
            </div>
        </div>
    </div>

    <!-- MATERIAL COURSE -->
    <div class="container-fluid pb-5 px-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h3>My Courses</h3>
            <?php
            $sql = "SELECT * FROM Material WHERE package_id = 1";
            $all_material = $conn->query($sql);
            while($row = mysqli_fetch_assoc($all_material)){
            ?>
            <a href="#">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexMateri" id="flexMateri">
                    <label class="form-check-label" for="flexMateri" > <?php echo $row["material"];?> </label>
                </div>
            </a>
            <?php
            }
            ?>
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

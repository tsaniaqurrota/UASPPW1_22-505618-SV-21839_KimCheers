<?php
  require 'config.php';

  session_start();

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $address = $_POST['address'];
    $payment = $_POST['payment'];

    $result = mysqli_query($conn, "INSERT INTO checkout (name, email, phone, city, province, zip, address, payment)
    VALUES ('$name','$email','$phone','$city','$province','$zip','$address','$payment')");
    
    if (mysqli_affected_rows($conn) > 0) {
      header("Location: home.php");
      echo "<script>alert('Thanks for Your Order.')</script>"; 
    }
    else {
      echo "<script>alert('Check Your Data.')</script>";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid p-5">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 align-items-center">
          <h1 class="py-5 text-center orderTitle">Order</h1>

          <p>Personal Information</p>
          <hr>
          <form class="" action="" method="POST">
            <div class="row">
              <div class="col">
                Name
                <input id="name" name="name" type="text" class="form-control" value="">
                Email
                <input id="email" name="email" type="text" class="form-control" value="">
                Phone
                <input id="phone" name="phone" type="text" class="form-control" value="">
              </div>
            </div>

            <p class="py-1">Shipping</p>
            <hr>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="inputCity">
              </div>
              <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <input type="text" name="province" class="form-control" id="inputState">
              </div>
              <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip">
              </div>
              <div class="mb-3">
                <label for="specificaddress" class="form-label">Address</label>
                <textarea type="text" rows="5" class="form-control" id="specificaddress" name="address"></textarea>
              </div>
            </div>

            <p>Billing</p>
            <hr>
            <div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="bri" value="bri">
                <label class="form-check-label" for="bri">BRI</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="bca" value="bca">
                <label class="form-check-label" for="bca">BCA</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="bni" value="bni">
                <label class="form-check-label" for="bni">BNI</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="paypal" value="paypal">
                <label class="form-check-label" for="paypal">PayPal</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="linkaja" value="linkaja">
                <label class="form-check-label" for="linkaja">Linkaja</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="gopay" value="gopay">
                <label class="form-check-label" for="gopay">Gopay</label>
              </div>
            </div>

            <div class="d-flex justify-content-end py-3 m-5">
              <button type="button" class="btn btn-secondary p-3 px-5 mx-3" onclick="checkout()">Cancel</button>
              <button type="submit" name="submit" class="btn btn-warning py-3 px-5">Checkout</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="kimcheers.js"></script>
  </body>
</html>

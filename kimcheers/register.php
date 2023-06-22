<?php

require 'config.php';

session_start();

if (!empty($_SESSION['id'])) {
    header("Location: learnCenter.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'" );

  if(mysqli_num_rows($result) > 0) {
    echo "<script>alert('Woops! Username or Email Already Exists.')</script>"; 
  }
  else{
    if($password == $cpassword){
      $query = "INSERT INTO users (username, email, password)
      VALUES ('$username', '$email', '$password')";
      mysqli_query($conn,$query);
      echo "<script>alert('Wow! Registration Completed.')</script>";
    }
    else{
      echo "<script>alert('Password Does Not Match.')</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <style>
    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 40px;
        padding-top: 140px; 
    }
    .button {
        display: block;
        width: 100%;
        padding: 15px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border-radius: 8px;
        background-color: #399FAC;
        color: #ffffff;
    }
    label {
        color :#bfbfbf;
    }

    </style>

    <div class="container">
        <h2 class="text-center mb-5">Sign Up</h2>
        <form action="" method="POST" class="login-email">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="Name" required
            name="username" value="">
            <label for="Nama">Nama</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="Email address" required
            name="email" value="">
            <label for="email">Email addres</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" placeholder="Enter Password" required
            name="password" value="" required>
            <label for="password">Enter password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" required
            name="cpassword" value="">
            <label for="confirm-password">Confirm Password</label>
          </div>
          <button type="submit" name="submit" class="button border-0">Sign Up</button>
        </form>
        <p class="m-5 text-center">Already have an account? <a href="login.php">Login</a></p>
      </div>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
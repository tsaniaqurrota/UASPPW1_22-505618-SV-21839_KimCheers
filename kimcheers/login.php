<?php

require'config.php';

session_start();


if (!empty($_SESSION['id'])) {
  header("Location: learnCenter.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email= '$email'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    if($password == $row["password"]){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: learnCenter.php");
    }
    else{
      echo "<script>alert('Woops! Wrong Password')</script>";
    }
  }
  else{
    echo "<script>alert('Woops! User Not Registered')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

</head>
<body>
  <div class="container" style="max-width: 500px; margin: 0 auto; padding: 40px; padding-top: 140px;">
    <h2 class="text-center mb-5">Log In</h2>
    <form action="" method="POST" class="login-email">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required value="">
            <label style="color : #bfbfbf" for="email">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required value="">
            <label for="password">Password</label>
          </div>
          <button href="home.php" type="submit" name="submit" class="button border-0" style=" display: block; width: 100%; padding: 15px; font-size: 16px; font-weight: bold; text-align: center; text-decoration: none; border-radius: 8px; background-color: #399FAC;color: #ffffff;">Log In</button>
    </form>
    <p class="m-5 text-center">Create an account? <a href="register.php">Sign Up</a></p>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

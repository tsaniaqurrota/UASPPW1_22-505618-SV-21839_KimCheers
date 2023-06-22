<?php
require_once 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['send'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$sql = "SELECT * FROM report WHERE name = '$name' AND email = '$email' AND subject = '$subject' AND message = '$message'";
	$result = mysqli_query($conn, $sql);

	if (!$result || $result->num_rows === 0) {
		$sql = "INSERT INTO report (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo "<script>alert('Pesanmu sudah kami terima. Kami akan segera merespon pesanmu melalui email.')</script>";
			$name = "";
			$email = "";
			$subject = "";
			$message = "";
		}
	} else {
		echo "<script>alert('Mohon periksa kembali.')</script>";
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
  <style>
    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 5px;
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
      color: #000000;
    }
  </style>
</head>
<body>

<?php
    include_once 'header.php';
    ?>    

<div style="background-color: #F5F5F5;">
    <div class="container">
        <h2 class=" mb-5">Contact Us</h2>
        <form action="" method="POST">
            <div class="mt-3 mb-2">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" required name="name">
            </div>
            <div class="mt-3 mb-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" required name="email">
            </div>
            <div class="mt-3 mb-2">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" required name="subject">
            </div>
            <div class="mt-3 mb-2">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" name="message"></textarea>
            </div>
            <button type="submit" class="button border-0" name="send">Submit</button>
        </form>
    </div>
</div>

<?php
    include_once 'footer.php';
    ?>    

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

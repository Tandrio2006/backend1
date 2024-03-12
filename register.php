<?php
require 'function.php';
if(isset($_POST["submit"])){
	if(register($_POST) > 0){
		echo"<script>
					alert('Data Berhasil ditambahkan');
					document.location.href='login.php';
					</script>";
	}else{
		echo"<script>
					alert('Data Gagal ditambahkan');
					document.location.href='register.php';
					</script>";
	}
}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
	<link rel="stylesheet" type="text/css" href="Responsive4.css">
	<title></title>
</head>
<body>
	<div class="center">
		<h1>Register</h1>
		<form method="post">
			<div class="txt_field">
				<input type="text" name="username" required>
				<span></span>
				<label>Username</label>
			</div>
			<div class="txt_field">
				<input type="password" name="password" required>
				<span></span>
				<label>Password</label>
			</div>
			<div class="txt_field">
				<input type="password" name="password2" required>
				<span></span>
				<label>Confirm Password</label>
			</div>
      <br>
			<button type="submit" name="submit">Register</button>
			<div class="signup_link">
				Have a member? <a href="login.php">Signin</a>
			</div>
		</form>
	</div>

</body>
</html>
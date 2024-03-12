<?php
	session_start();

	if(isset($_SESSION["login"])){
		header("Location: websiteuser.php");
	}

	require 'Function.php';

	if(isset($_POST["submit"])){

		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($conn , "SELECT * FROM user WHERE username = '$username'");
		$cek = mysqli_num_rows($result);

		if($cek > 0){
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password, $row["password"])){
				$_SESSION["login"] = true;
				if($row['level']=="Admin"){

					$_SESSION['admin']=true;
					$_SESSION['level']="Admin";

					header("Location:WEBSITETAN.php");

					}else if($row['level']=="Pengguna"){

					$_SESSION['pengguna']=true;
					$_SESSION['level']="Pengguna";

					header("Location:WEBSITETAN.php");

					}else if($row['level']=="user"){

					$_SESSION['user']=true;
					$_SESSION['level']="user";

					header("Location:WEBSITETAN.php");



					}
				}else{
						echo "
								<script>
									alert('Password Salah!');
									document.location.href = 'login.php';
								</script>
							";
					}
			
		}else{
			echo "
						<script>
							alert('Username Salah!');
							document.location.href = 'login.php';
						</script>
					";
		}
	
	}
	


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Stylesheet.css">
</head>
<body>
	<div class="center">
		<h1>Login</h1>
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
			<div class="pass">Forgot Password?</div>
			<button type="submit" name="submit">Login</button>
			<div class="signup_link">
				Not a member? <a href="Register.php">Signup</a>
			</div>
		</form>
	</div>

</body>
</html>
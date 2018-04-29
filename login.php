<?php include('errors.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>Login</h1>
</div>
<form method="post" action="login.php">
	<div class="input">
		<label>Username</label>
		<input type="text" name="username"><br><br>
		<label>Password</label>
		<input type="password" name="password"><br><br>
		<button type="submit" name="login" class="btn">Login</button>
	</div>
	<p>
		Not yet a Member? <a href="register.php">Sign Up</a>
	</p>
</form>
</body>
</html>
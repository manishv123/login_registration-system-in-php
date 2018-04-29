<!DOCTYPE html>
<html>
<head>
	<title>Login Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>Register</h1>
</div>
<form method="post" action="register.php">
	<?php include('errors.php'); ?>
	<div class="input">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>"><br><br>
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>"><br><br>
		<label>Password</label>
		<input type="password" name="password_1"><br><br>
		<label>Confirm Password</label>
		<input type="password" name="password_2"><br><br>
		<button type="submit" name="register" class="btn">Register</button>
	</div>
	<p>
		Already a Member? <a href="login.php">Sign In</a>
	</p>
</form>
</body>
</html>
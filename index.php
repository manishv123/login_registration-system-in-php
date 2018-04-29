<?php include('connect.php'); 
if(empty($_SESSION['username']))
	{
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>Homepage</h1>
</div>
<div class="content">
	<?php if(isset($_SESSION['success'])): ?>
	<div class="error">
		<h3>
			<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			?>
		</h3>
	</div>
<?php endif ?>
<?php if(isset($_SESSION['username'])): ?>
	<p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
	<p><a href="index.php?logout='1'"><b>Logout</b></a></p>
<?php endif ?>
</div>
</body>
</html>
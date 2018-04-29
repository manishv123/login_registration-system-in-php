<?php
session_start();
$username="";
$email="";
$errors=array();
$connection=mysqli_connect('localhost','root','');
if(!$connection)
{
	die("Database connection failed" . mysqli_error($connection));
}
$selectdb=mysqli_select_db($connection,'demo');
if(!$selectdb)
{
	die("Database selection failed" . mysqli_error($selectdb));
} 
if(isset($_POST['register'])){
$username=mysqli_real_escape_string($connection,$_POST['username']);
$email=mysqli_real_escape_string($connection,$_POST['email']);
$password_1=mysqli_real_escape_string($connection,$_POST['password_1']);
$password_2=mysqli_real_escape_string($connection,$_POST['password_2']);
if(empty($username))
{
	array_push($errors, "Username is required");
}
if(empty($email))
{
	array_push($errors, "Email is required");
}
if(empty($password_1))
{
	array_push($errors, "Password is required");
}
if($password_1!=$password_2)
{
	array_push($errors, "Passwords do not match");
}
if(count($errors)==0)
{
	$password=md5($password_1);
	$sql="INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
	mysqli_query($connection,$sql);
	$_SESSION['username']=$username;
	$_SESSION['success']="Logged In";
	header('location:index.php');
}
}
if(isset($_POST['login']))
{
	$username=mysqli_real_escape_string($connection,$_POST['username']);
	$password=mysqli_real_escape_string($connection,$_POST['password']);
if(empty($username))
{
	array_push($errors, "Username is required");
}
if(empty($password))
{
	array_push($errors, "Password is required");
}
if(count($errors)==0)
{
	$password=md5($password);
	$query="SELECT * FROM users WHERE username='$username' AND password='$password' ";
	$result=mysqli_query($connection,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
	$_SESSION['success']="Logged In";
	header('location:index.php');
	}
	else
	{
		array_push($errors,"Wrong Username/Password");
	}
}
}
if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['username']);
	header('location:login.php');
} 
?>
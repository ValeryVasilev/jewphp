<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	} else {
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$connection = mysqli_connect("localhost", "root", "");
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);
		$db = mysqli_select_db($connection, "test");
		$query = mysqli_query($connection, "call up_create ('$password','$username')");
		if ($query === true) {
			header("location: index.php"); 
		} else {
			$error = "query if not true";
		}
		mysqli_close($connection); 
	}
}
echo $error;
?>
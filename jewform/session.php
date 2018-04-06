
<?php

$connection = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($connection, "test");
session_start();


$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($connection, "SELECT * FROM login WHERE username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
	mysqli_close($connection); 
	header('Location: index.php'); 
}
?>
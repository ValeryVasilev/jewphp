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
		$db = mysqli_select_db($connection, "test");
		var_dump("SELECT * FROM login WHERE username='$username' AND password='$password'");
		$query = mysqli_query($connection, "SELECT * FROM login WHERE username='$username' AND password='$password'");
		$rows = mysqli_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$username; 
			header("location: profile.php"); 
		} else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($connection); 
	}
}
?>
<div class="error">
	<?php echo $error;?>
</div>
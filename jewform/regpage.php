<?php
include('register.php'); 

if (isset($_SESSION['login_user'])) {
	header("location: profile.php");
}
?>
<!DOCTYPE html>

<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Register Form in PHP with Session</title>
    <link href="login.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
  <section class="container">
    <div class="login" id='login' style='display:block'>
      <h1>Регистрация</h1>
      <form action="" method="post">
        <p><input id="name" name="username" placeholder="Логин" type="text"></p>
        <p><input id="password" name="password" placeholder="Пароль" type="password"></p>
        <p class="submit"><input name="submit" type="submit" value="Зарегистрироваться"></p>
		<a href="index.php">Авторизация</a> 
		<span><?php echo $error; ?></span>
      </form>
    </div>
  </section>
</body>
</html>
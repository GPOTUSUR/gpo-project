<?php 
require "db.php";
?>
<?php if(isset($_SESSION['logged_user'])) : ?>
Авторизован!<br>
Привет, <?php echo $_SESSION['logged_user']->login; ?><hr>
<meta charset="utf-8">
<a href="logout1.php">Выйти</a>
<?php else : ?>
Вы не авторизованы! <br>
<meta charset="utf-8">
<a href="login.php">Авторизация</a> <br>
<a href="signuprole.php">Регистрация</a>
<?php endif; ?>
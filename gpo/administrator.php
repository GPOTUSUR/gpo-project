<?php
require "db.php";
?>
<?php if(isset($_SESSION['logged_user'])) : ?>
Вы вошли как администратор! <br>
Авторизован!<br>
Привет, <?php echo $_SESSION['logged_user']->login; ?><hr>
<meta charset="utf-8">
<a href="logout1.php">Выйти</a>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <style>
        <?php include "template/CSS/CSS.css"; ?>
    </style>
</head>
<body>
   <div class="div_signup">
       <h1>Авторизация</h1>
        <form action="" method="post">
            <input type="text" name="login" class="input_signup" placeholder="Введите логин"><br>
            <input type="password" name="password" class="input_signup" placeholder="Введите пароль"><br>
            <input type="submit" name="submit_login" class="button_signup" value="Войти">
        </form>
        <a href="signup" class="regis">Зарегестрироваться</a>
    </div>
</body>
</html>
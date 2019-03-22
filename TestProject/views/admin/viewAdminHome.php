<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        <?php include "template/CSS/Admin.css";?>
    </style>
    <style>
        <?php include "template/CSS/home.css";?>
    </style>
     <style>
        <?php include "template/CSS/CSS.css"; ?>
    </style>
</head>
<body>
    <?php if(isset($_SESSION['user'])):?>
        <div class="header">
            <div class="login">Ваш логин <?php echo $login['login'];?></div>
            <div class="exit"><a href="logout"><div>Выйти</div></a></div>
        </div>
        <a href="general"><div class="buttonAdmin">Общий чат</div></a>
        <div class="UsersAdmin">
            <?php foreach($CountUser as $user):?>
                <br><a href="admin/<?php echo $user['login'];?>/"><div class="user"><?php echo $user['login'];?></div></a>
            <?php endforeach;?>
        </div>
    <?php else:?>
        <a href="login">Пожалуйста авторизируйтесь</a>
    <?php endif;?>
</body>
</html>
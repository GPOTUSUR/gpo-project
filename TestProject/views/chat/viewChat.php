<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        <?php include "template/CSS/Home.css"; ?>
    </style>
    <style>
        <?php include "template/CSS/CSS.css"; ?>
    </style>
    
</head>
<body>
    <?php if(isset($_SESSION['user'])):?>
        <div class="header">
        <div class="login">Ваш логин <?php echo $login['login'];?></div>
        <a href="/TestProject/index.php/logout" class="exit">Выйти</a>
        </div>
        <a href="/TestProject/index.php/home" class="exit" style="top:70px;">Home</a>
        <div class="UsersAdmin" style="margin-top:200px;">
            <?php foreach($CountLogin as $user):?>
                <a href="chat/<?php echo $user['login'];?>"><div class="user"><?php echo $user['login'];?></div></a>
            <?php endforeach;?>
       </div>
    <script src="../../template/JS/jquery-3.3.1.min.js"></script>
    <script src="../../template/JS/ajax.js"></script>
    <?php else:?>
        <a href="login">Пожалуйста авторизируйтесь</a>
    <?php endif;?>
</body>
</html>
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
            <?php if($login['id_role'] == 1):?>
                <a href="admin">Войти как администратор</a> 
            <?php endif;?>    
            <div class="exit"><a href="logout"><div>Выйти</div></a></div>
        </div>
        
        <div class="div_signup">
           <h1>Выберите чат</h1>
            <div class="button"><a href="general"><div>Общий чат</div></a></div><br>
            <div class="button"><a href="chat"><div>Чат с пользователем</div></a></div>
        </div>
       
    <?php else:?>
        <a href="login">Пожалуйста авторизируйтесь</a>
    <?php endif;?>
</body>
</html>
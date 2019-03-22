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
    <div class="UsersAdmin">
        <?php foreach($dialogue as $dialog):?>
        <br><a href="<?php echo $dialog?>"><div class="user"><?php echo $dialog;?></div></a>
        <?php endforeach;?>
    </div>
</body>
</html>
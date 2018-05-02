<?php 
require "db.php";
$data = $_POST;
if(isset($data['do_signup']))
{
    $errors = array();
    if(trim($data['login'])== ''){
        $errors[] = 'логин не введен';
    }
     if(trim($data['email'])== ''){
        $errors[] = 'email не введен';
    }
     if($data['password_1']== ''){
        $errors[] = 'пароль не введен';
    }
     if($data['password_2'] != $data['password_1']){
        $errors[] = 'пароли не совпадают';
    } 
    if(R::count('admin', "login = ?", array($data['login'])) > 0)
    {
        $errors[] = 'login существует';
    }
    if(R::count('admin', "email = ?", array($data['email'])) > 0)
    {
        $errors[] = 'email существует';
    }
    
    if(empty($errors)){
        //регестрируем,если всё ОК
        $admin = R::dispense('admin');
        $admin->login = $data['login'];
        $admin->email = $data['email'];
        $admin->password = password_hash($data['password_1'],PASSWORD_DEFAULT);
        R::store($admin);
        echo '<div style="color:green;">.Вы успешно зарегестрированы</div><hr>';
    }else
    {
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
}
?>
<meta charset="utf-8">
<form action="/signupadmin.php" method="post">
    <input type="text" name="login" placeholder="Ваш логин" value="<?php echo $data['login']?>"><br>
    <input type="email" name="email" placeholder="email" value="<?php echo $data['email']?>"><br>
    <input type="password" name="password_1" placeholder="Пароль"><br>
    <input type="password" name="password_2" placeholder="Подтвердите пароль"><br>
    <button type="submit" name="do_signup">Зарегестрироваться</button>
</form>
<a href="index.php">Главная</a>
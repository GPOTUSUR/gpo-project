<?php 
require "db.php";
$data = $_POST;
if(isset($data['do_login'])){
    $errors = array();
    $user = R::findOne('users',"login = ?",array($data['login']));
    $admin = R::findOne('admin',"login = ?",array($data['login']));
    $depar = R::findOne('depar',"login = ?",array($data['login']));
    $load = R::findOne('load',"login = ?",array($data['login']));
    if($user){
        //логин существует
        if(password_verify($data['password_1'], $user->password)){
            $_SESSION['logged_user'] = $user;
            header("Location:Teacher.php");
            exit;
        }else
        {
            $errors[] = "Неверно введен пароль";
        }
    }
    if($admin){
        //логин существует
        if(password_verify($data['password_1'], $admin->password)){
            $_SESSION['logged_user'] = $admin;
            header("Location:administrator.php");
            exit;
        }else
        {
            $errors[] = "Неверно введен пароль";
        }  
    }
     if($depar){
        //логин существует
        if(password_verify($data['password_1'], $depar->password)){
            $_SESSION['logged_user'] = $depar;
            header("Location:headdepartement.php");
            exit;
        }else
        {
            $errors[] = "Неверно введен пароль";
        }
    }
    if($load){
        //логин существует
        if(password_verify($data['password_1'], $load->password)){
            $_SESSION['logged_user'] = $load;
            header("Location:load.php");
            exit;
        }else
        {
            $errors[] = "Неверно введен пароль";
        }
    }else{
        $errors[]="пользователь с таким логином не найден admin";
    }
    if(!empty($errors)){
         echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
}
?>
<meta charset="utf-8">
<form action="login.php" method="post">
    <input type="text" name="login" placeholder="Ваш логин" value="<?php echo $data['login']?>"><br>
    <input type="password" name="password_1" placeholder="Пароль"><br>
    <button type="submit" name="do_login">Войти</button>
</form>
<a href="index.php">Главная</a>
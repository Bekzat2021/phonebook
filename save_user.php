<?php

require_once "database.php";
require_once "header.php";

$emptyValues='';

if(isset($_POST["login"])){
    $login=$_POST["login"];   
    $login=stripslashes($login);
    $login=htmlspecialchars($login);
    $login=trim($login);
}else{
    unset($login);
}

if (empty($login)) {
    $emptyValues=' логин';
}

if (isset($_POST["password"])) {
    $password=$_POST["password"];
    $password=stripslashes($password);
    $password=htmlspecialchars($password);
    $password=trim($password);
}else{
    unset($password);
}

if (empty($password)) {
    $emptyValues.=" пароль";
}

if (!empty($login) && !empty($password)) {
    $db=new Database('localhost', 'root', '', 'phone_book');
    $loginSelect=$db->Query("SELECT user_id FROM users WHERE login='$login';");
    $loginId=mysqli_fetch_array($loginSelect);
    if (!empty($loginId['user_id'])) {
       echo "Введенный вами логин уже существует введите другой логин";
    }else{
        $db->Query("INSERT INTO users(login, password) VALUES('$login', '$password');");
        echo "вы успешно зарегистрировались";
    }
}else{
    echo "Вы не ввели ".$emptyValues.'!';
}

require_once "footer.php"; ?>
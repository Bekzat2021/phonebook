<?php

session_start();
require_once "database.php";


$login=$_POST["login"];
$password=$_POST["password"];

$db=new Database('localhost', 'root', '', 'phone_book');
//$db->MakeConnection();

$row = $db->Query("SELECT * FROM users WHERE login ='$login';");
echo "Q: "."SELECT * FROM users WHERE login ='$login';";
$result=$row->fetch_assoc();

if (empty($result['password'])) {
    echo 'user not found';
}else{
    if ($result['password']==$password) {
        $_SESSION['login']=$result['login'];
        $_SESSION['user_id']=$result['user_id'];
        echo "<br>Вы успешно вошли";
        echo '<a href="test.php">test</a>';
    }else{
        echo 'Введенный пароль или логин не верный';
    }
}

?>
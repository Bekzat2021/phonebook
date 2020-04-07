<?php

require_once "database.php";

$message="";

if((isset($_POST["login"]) && empty($_POST["login"])) && (isset($_POST["password"]) && empty($_POST["password"]))){
    $login=$_POST["login"];
    $password=$_POST["password"];

    $db=new Database('localhost', 'root', '', 'phone_book');

    $db->Query("INSERT INTO users(login, password) VALUES('$login', '$password');");

    echo "INSERT INTO users(login, password) VALUES('$login', '$password');";
}else{
    if (isset($_POST["login"])) {
        $message.=" логин";
    }
    if (isset($_POST["password"])) {
        $message.=" пароль";
    }
    echo "Вы не ввели ".$message.'!';
}



?>
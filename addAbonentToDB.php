<?php

require_once "header.php";
require_once "database.php";
require_once "abonent.php";

$name=$_POST['name'];
$lastname=$_POST['lastname'];

$newAbonent=new Abonent($name, $lastname);

$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();

$db->Query($newAbonent->Save());

echo $newAbonent->Save();

require_once "footer.php";

?>
<?php

require_once "database.php";
require_once "abonent.php";

$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();

$QueryResult = $db->Insert('SELECT * FROM abonents WHERE abonent_id=3;');

$id=$QueryResult->fetch_assoc();

echo $id['abonent_id'].' '.$id['name'].' '.$id['lastname'];

$john=new Abonent("John", "Smith");

$str=$john->save();
echo $str;
$db->Insert($john->save());

?>
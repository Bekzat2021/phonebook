<?php

require_once "database.php";
require_once "abonent.php";

$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();

/*  *** Simple test query for a select from abonents table
$QueryResult = $db->Query('SELECT * FROM abonents WHERE abonent_id=3;');
$id=$QueryResult->fetch_assoc();
echo $id['abonent_id'].' '.$id['name'].' '.$id['lastname'];
*/

$john=new Abonent("John", "Smith");

$db->Query($john->save());

$john->id=$db->GetLastInsertedID();

$john->AddPhone($john->id, "123456");

$john->ShowNum();

$str=$john->AddOnlyNumber();
echo "Query: ".$str;

$db->Query($john->AddOnlyNumber());

$john->ShowNum();

$john->AddAddress("New-York", "5 th avnue", "235");

echo '<br>'.$john->AddOnlyAddress();

$db->Query($john->AddOnlyAddress());

?>
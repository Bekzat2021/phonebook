<?php

require_once "header.php";
require_once "database.php";

$name=$_POST['name'];
$lastname=$_POST['lastname'];

echo $name;
echo '<br>';
echo $lastname;


$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();

/*  *** Simple test query for a select from abonents table */

$str="INSERT INTO abonents(name, lastname) VALUES('$name', '$lastname');";
$db->Query($str);
//$id=$QueryResult->fetch_assoc();
//echo $id['abonent_id'].' '.$id['name'].' '.$id['lastname'];

echo '<br>';
echo $str;



require_once "footer.php";

?>
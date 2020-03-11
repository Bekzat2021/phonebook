<?php 

require_once "abonent.php";
require_once "databaseFactory.php";
require_once "abonentDatabaseCRUD.php";

$abonentBob=new Abonent("Rob", "Johnson", "Jr", 77777, "12 th street", 77);

//Работает
abonentDatabaseCRUD::Insert($abonentBob);

//Работает
//abonentDatabaseCRUD::Delete(3);

//Работает
/*
$arr=array();
$arr=abonentDatabaseCRUD::GetAll();
foreach ($arr as $key => $value) {
    echo $value.'<br>';
}
*/
?>
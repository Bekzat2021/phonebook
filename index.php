<?php 

require_once "abonent.php";
require_once "databaseFactory.php";
require_once "abonentDatabaseCRUD.php";

$abonentJohn=new Abonent("Smithh", "Johnson", "Jr", 87775556699, "5 th street", 152);

abonentDatabaseCRUD::insert($abonentJohn);

?>
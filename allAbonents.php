<?php
require_once "header.php";
require_once "database.php";


echo '<p>Все абоненты</p>';

$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();

/*  *** Simple test query for a select from abonents table*/
$QueryResult = $db->Query('SELECT * FROM abonents;');


foreach ($QueryResult as $value) {
	echo $value['abonent_id'].' '.$value['name'].' '.$value['lastname'];
	echo '<br>';
}
	
	



require_once "footer.php";

?>
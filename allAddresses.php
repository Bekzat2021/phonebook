<?php
require_once "header.php";
require_once "database.php";

echo '<p>Все адреса абонентов</p>';

$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();

/*  *** Simple test query for a select from abonents table*/
$QueryResult = $db->Query('SELECT * FROM abonents INNER JOIN addresses ON abonents.abonent_id=addresses.addresses_abonent_id;');


foreach ($QueryResult as $value) {
	echo $value['abonent_id'].' '.$value['name'].' '.$value['lastname'].' '.$value['city'].' '.$value['street'].' '.$value['house'];
	echo '<br>';
}

require_once "footer.php";

?>
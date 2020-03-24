<?php
require_once "header.php";
require_once "database.php";

echo '<p>Все телефонные номера абонентов</p>';

$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();

/*  *** Simple test query for a select from abonents table*/
$QueryResult = $db->Query('SELECT * FROM abonents INNER JOIN phone ON abonents.abonent_id=phone.phone_abonent_id;');


foreach ($QueryResult as $value) {
	echo $value['abonent_id'].' '.$value['name'].' '.$value['lastname'].' '.$value['phone_number'];
	echo '<br>';
}

require_once "footer.php";

?>
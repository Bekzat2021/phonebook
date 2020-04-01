<?php
require_once "header.php";
require_once "database.php";

$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();

/*  *** Simple test query for a select from abonents table*/

$QueryResult = $db->Query('SELECT abonents.abonent_id, abonents.name, abonents.lastname, phone.phone_number, 
							addresses.city, addresses.street, addresses.house FROM ((abonents INNER JOIN phone 
							ON abonents.abonent_id=phone.phone_abonent_id) INNER JOIN addresses 
							ON abonents.abonent_id=addresses.addresses_abonent_id);');

echo '<div class="container" style="margin-top: 20px;">
		<table class="table table-striped">
		<thead>
  		  <tr>
		    <th scope="col">ID</th>
      		<th scope="col">Имя</th>
      		<th scope="col">Фамилия</th>
      		<th scope="col">Телефон</th>
      		<th scope="col">Город</th>
      		<th scope="col">Улица</th>
			  <th scope="col">Номер дома</th>
			  <th scope="col">Редактирование</th>
    	  </tr>
  		</thead>
  		<tbody>
  </div>';
foreach ($QueryResult as $value) {
	echo '<tr><th scope="row">'.$value['abonent_id'].'</th><td>'.$value['name'].'</td><td>'.$value['lastname'].'</td>
	<td>'.$value['phone_number'].'</td>
	<td>'.$value['city'].'</td><td>'.$value['street'].'</td><td>'.$value['house'].'</td>
	<td><a href="edit.php?id='.$value['abonent_id'].'">Редактировать</a></td>';
}

echo '</tbody>
	</table>';

require_once "footer.php";

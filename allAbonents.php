<?php
require_once "header.php";
require_once "abonent.php";

/*  *** Simple test query for a select from abonents table*/

$QueryResult= Abonent::ReadAll();

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
			<th scope="col">Удаление</th>
    	  </tr>
  		</thead>
  		<tbody>
  </div>';
  
foreach ($QueryResult as $value) {
	echo '<tr><th scope="row">'.$value['abonent_id'].'</th><td>'.$value['name'].'</td><td>'.$value['lastname'].'</td>
	<td>'.$value['phone_number'].'</td>
	<td>'.$value['city'].'</td><td>'.$value['street'].'</td><td>'.$value['house'].'</td>
	<td><a href="edit.php?id='.$value['abonent_id'].'">Редактировать</a></td>
	<td><a href="delete.php?id='.$value['abonent_id'].'">Удалить</a></td>';
}

echo '</tbody>
	</table>';

require_once "footer.php";

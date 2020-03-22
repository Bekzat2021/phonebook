<?php

require_once "database.php";
require_once "abonent.php";

require_once "header.php";

echo '<div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Справочник</h1>
          <p>Телефонный справочник предостовляет возможность находить и просматриваить информацию об абонентах а также добавлять, редактировать и удалять записи.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Добавить абонента &raquo;</a></p>
        </div>
      </div>';

    echo '<div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>';   

/*
$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();
*/
/*  *** Simple test query for a select from abonents table
$QueryResult = $db->Query('SELECT * FROM abonents WHERE abonent_id=3;');
$id=$QueryResult->fetch_assoc();
echo $id['abonent_id'].' '.$id['name'].' '.$id['lastname'];
*/
/*
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
*/
require_once "footer.php";
?>
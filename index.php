<?php 

require_once "header.php";

require_once "abonent.php";
require_once "databaseFactory.php";
require_once "abonentDatabaseCRUD.php";

echo '<div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Справочник</h1>
          <p>Телефонный справочник предостовляет возможность находить и просматриваить информацию об абонентах а также добавлять, редактировать и удалять записи.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Добавить абонента &raquo;</a></p>
        </div>
      </div>';

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

require_once "footer.php";
?>
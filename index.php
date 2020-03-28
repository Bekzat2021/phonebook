<?php

<<<<<<< HEAD
require_once "database.php";

require_once "header.php";
=======
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
>>>>>>> 6cc57ba51c9611cb34a32db0a63c15e92aff5f65

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

<<<<<<< HEAD
=======
//Работает
/*
$arr=array();
$arr=abonentDatabaseCRUD::GetAll();
foreach ($arr as $key => $value) {
    echo $value.'<br>';
}
*/

>>>>>>> 6cc57ba51c9611cb34a32db0a63c15e92aff5f65
require_once "footer.php";
?>
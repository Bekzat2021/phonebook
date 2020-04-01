<?php

require_once "database.php";

require_once "header.php";

echo '<div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Справочник</h1>
          <p>Телефонный справочник предостовляет возможность находить и просматриваить информацию об абонентах а также добавлять, редактировать и удалять записи.</p>
          <p><a class="btn btn-primary btn-lg" href="addAbonent.php" role="button">Добавить абонента &raquo;</a></p>
        </div>
      </div>';

echo '<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Абоненты</h2>
          <p>Информация об абонентах идентификаторы, имена и фамилии. </p>
          <p><a class="btn btn-secondary" href="allAbonents.php" role="button">Показать &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Адреса</h2>
           <p>Сведения об названии городов, улиц и номера домов. </p>
           <p><a class="btn btn-secondary" href="allAbonents.php" role="button">Показать &raquo;</a></p>
         </div>
         <div class="col-md-4">
           <h2>Телефоны</h2>
           <p>Идентификаторы вместе с телефонными номерами.</p>
           <p><a class="btn btn-secondary" href="allAbonents.php" role="button">Показать &raquo;</a></p>
         </div>
       </div>';   

require_once "footer.php";
?>
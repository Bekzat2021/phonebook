<?php
require_once "header.php";

echo '<div class="row">
  <div class="col"></div>
  
  <div class="col">
  <form action="addAbonentToDB.php" method="post" style="width: 300px">
    <div class="form-group">
      <label for="name">Имя абонента</label>
      <input type="text" class="form-control" name="name" placeholder="Введите имя">
      <label for="lastname">Фамилия абонента</label>
      <input type="text" class="form-control" name="lastname" placeholder="Введите фамилию">
      <label for="city">Город проживания</label>
      <input type="text" class="form-control" name="city" placeholder="Введите город">
      <label for="street">Названия улицы</label>
      <input type="text" class="form-control" name="street" placeholder="Введите улицу">
      <label for="house">Номер дома</label>
      <input type="text" class="form-control" name="house" placeholder="Номер дома">
      <label for="phone_number">Телефонный номер</label>
      <input type="text" class="form-control" name="phone_number" placeholder="Телефонный номер">
    </div>
    <button type="submit" class="btn btn-primary">Добавить</button>
  </form>
  </div>

  <div class="col"></div>
  </div>';

require_once "footer.php";

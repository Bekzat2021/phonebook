<?php
require_once "header.php";

echo '<p>Добавить абонента</p>';

echo '<form action="addAbonentToDB.php" method="post" style="width: 300px">
  <div class="form-group">
    <label for="name">Имя абонента</label>
    <input type="text" class="form-control" name="name" placeholder="Введите имя">
    <label for="lastname">Фамилия абонента</label>
    <input type="text" class="form-control" name="lastname" placeholder="Введите фамилию">
    <hr>
    <label for="city">Город проживания</label>
    <input type="text" class="form-control" name="city" placeholder="Введите город">
    <label for="street">Названия улицы</label>
    <input type="text" class="form-control" name="street" placeholder="Введите улицу">
    <label for="house">Номер дома</label>
    <input type="text" class="form-control" name="house" placeholder="Номер дома">
    <hr>
    <label for="phone_number">Телефонный номер</label>
    <input type="text" class="form-control" name="phone_number" placeholder="Телефонный номер">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>';

require_once "footer.php";

?>
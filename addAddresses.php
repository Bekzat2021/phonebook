<?php

require_once "header.php";

echo '<p>Добавить адрес</p>';

echo '<form action="addAddressesToDB.php" method="post" style="width: 300px">
  <div class="form-group">
    <label for="city">Город</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Введите город">
    <label for="street">Улица</label>
    <input type="text" class="form-control" id="street" name="street" placeholder="Введите улицу">
    <label for="house">Номер дома</label>
    <input type="text" class="form-control" id="house" name="house" placeholder="Введите номер">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>';

require_once "footer.php";

?>
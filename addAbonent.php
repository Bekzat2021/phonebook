<?php
require_once "header.php";

echo '<p>Добавить абонента</p>';

echo '<form action="addAbonentToDB.php" method="post" style="width: 300px">
  <div class="form-group">
    <label for="name">Имя абонента</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя">
    <label for="lastname">Фамилия абонента</label>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Введите фамилию">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>';

require_once "footer.php";

?>
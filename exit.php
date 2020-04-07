<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['user_id']);

echo '<a href="test.php">Обратно</a>';

?>
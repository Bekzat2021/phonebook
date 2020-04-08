<?php

require_once "header.php";
//session_start();
echo '<div class="row"><div class="col"></div><div class="col">';
echo '<form action="testreg.php" method="POST">
<p></p>
<label for="login">Login</label>
<input type="text" name="login" id="">
<p></p>
<label for="password">Password</label>
<input type="password" name="password" id="">
<p></p>
<input type="submit" value="Submit">
<p></p>
</form>';

echo "<p>Если у вас нет аккаунта вы можете зарегистривоться </p>";
echo '<a href="registration.php">Зарегистрироваться</a>';

if(empty($_SESSION['login']) || empty($_SESSION['user_id'])){
    echo '<p>Вы не авторизованы</p>';
}else{
    echo '<p>Вы вошли как '.$_SESSION['login'].'</p>';    
    echo '<a href="exit.php">Выйти</a>';
}

echo '</div><div class="col"></div></div>';
require_once "footer.php";
?>
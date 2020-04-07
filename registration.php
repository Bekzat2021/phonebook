<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>

<?php require_once "header.php";
echo '<div class="row"><div class="col"></div><div class="col">'; ?>
<p></p>
    <form action="save_user.php" method="POST">
        <label for="login">Логин</label>
        <input type="text" name="login">
        <p></p>
        <label for="password">Пароль</label>
        <input type="password" name="password">
        <p></p>
        <input type="submit" name="submit" value="Зарегистрироваться">
    </form>

    <p></p>
</body>
</html>

<?php 
echo '</div><div class="col"></div></div>';

 require_once "footer.php"; ?>
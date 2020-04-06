<?php

require_once "header.php";
require_once "abonent.php";

$emptyStrings = null;

echo '<div class="row"><div class="col"></div><div class="col">';

if (empty($_POST['name'])) {
    $emptyStrings .= " имя ";
}else{
    $name=$_POST['name'];
}

if (empty($_POST['lastname'])) {
    $emptyStrings .= " фамилия ";
}else{
    $lastname=$_POST['lastname'];
}

if (empty($_POST['city'])) {
    $emptyStrings .= " город ";
}else{
    $city=$_POST['city'];
}

if (empty($_POST['street'])) {
    $emptyStrings .= " улица ";
}else{
    $street=$_POST['street'];
}

if (empty($_POST['house'])) {
    $emptyStrings .= " улица ";
}else{
    $house=$_POST['house'];
}

if (empty($_POST['phone_number'])) {
    $emptyStrings .= " номер ";
}else{
    $phone_number=$_POST['phone_number'];
}

if ($emptyStrings != null) {
    try {
        throw new Exception('<h2>Поля '.$emptyStrings.' не могут быть пустыми!</h2>');
    } catch (Exception $th) {
        echo $th->getMessage();
    }
}else{
    $newAbonent=new Abonent($name, $lastname, $phone_number, $city, $street, $house);
    $newAbonent->Create();
}

echo '</div><div class="col"></div></div>';

require_once "footer.php";

?>
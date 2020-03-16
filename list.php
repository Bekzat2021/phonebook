<?php

require_once "header.php";
require_once "abonent.php";

require_once "abonentDatabaseCRUD.php";

echo '<hr>';

//var_dump($arr);

$arr=abonentDatabaseCRUD::getAll();

foreach ($arr as $key => $value) {
    ConvertRowToObject($value);
}

echo '-------------------------------------';

echo gettype();

echo '<hr>';



echo '<hr>';


function ConvertRowToObject($row){
    return serialize( new Abonent(
        $row["abonent_id"],
        $row["surname"],
        $row["name"],
        $row["middlename"],
        $row["phone"],
        $row["address"]
    ));
}

require_once "footer.php";

?>
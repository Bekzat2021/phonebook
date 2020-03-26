<?php

require_once "header.php";
require_once "database.php";
require_once "abonent.php";
require_once "address.php";

$name=$_POST['name'];
$lastname=$_POST['lastname'];

$city=$_POST['city'];
$street=$_POST['street'];
$house=$_POST['house'];

$phone_number=$_POST['phone_number'];

$newAbonent=new Abonent($name, $lastname);

$db=new Database('localhost', 'root', '', 'phone_book');

$db->MakeConnection();

$db->Query($newAbonent->Save());

$newAddress=new Address($city, $street, $house);

//$newAddress->Save($db->GetLastInsertedID());

$db->Query($newAddress->Save($db->GetLastInsertedID()));

echo $newAbonent->Save();
echo '<br>';
echo $newAddress->Save($db->GetLastInsertedID());

require_once "footer.php";

?>
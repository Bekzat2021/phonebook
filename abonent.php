<?php

require_once "phone.php";

/**
* abonent class
*/
class Abonent
{
	private $surname;
	private $name;
	private $middleName;

	function __construct($surname, $name, $middleName, $phoneNumber)
	{
		$this->surname=$surname;
		$this->name=$name;
		$this->$middleName;
		$phone=new phone($phoneNumber); //проверить класс внутри обьекта
	}

}
//тест класса 
$aa=new phone(8563254444);
echo $aa->getPhone();

?>
<?php

require_once "phone.php";
require_once "address.php";

/**
* abonent class
*/
class Abonent
{
	public $surname;
	public $name;
	public $middleName;
	public $phone;
	public $address;

	function __construct($surname, $name, $middleName, $phoneNumber=null, $street=null, $houseNumber=null)
	{
		$this->surname=$surname;
		$this->name=$name;
		$this->middleName=$middleName;
		$this->phone=new phone($phoneNumber); 
		$this->address=new Address($street, $houseNumber); //проверить класс внутри обьекта
	}

}

?>
<?php

require_once "phone.php";
require_once "address.php";

/**
* abonent class
*/
class Abonent
{
	private $abonent_id;
	private $surname;
	private $name;
	private $middleName;
	private $phone;
	private $address;

	function __construct($surname, $name, $middleName, $phoneNumber=null, $street=null, $houseNumber=null)
	{
		$this->surname=$surname;
		$this->name=$name;
		$this->middleName=$middleName;
		$this->phone=new phone($phoneNumber); 
		$this->address=new Address($street, $houseNumber); //проверить класс внутри обьекта
	}

	public function SetId($id){
		$abonent_id=$id;
	}

	public function GetId(){
		return $abonent_id;
	}

	public function GetSurname(){
		return $this->surname;
	}

	public function GetName(){
		return $this->name;
	}

	public function GetMiddlename(){
		return $this->middleName;
	}

	public function GetPhone(){
		return $this->phone->getPhone();
	}

}

?>
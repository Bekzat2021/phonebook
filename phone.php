<?php

require_once "Entity.php";
require_once "database.php";

/**
* Class that describe a phone
*/
class Phone extends Entity
{
	private $phone;
	private $abonentID;

	function __construct($phone, $abonentID)
	{
		$this->phone=$phone;
		$this->abonentID=$abonentID;
	}
	
	private static function MakeConnectionToDB()
	{
		$db=new Database('localhost', 'root', '', 'phone_book');
		$db->MakeConnection();
		return $db;
	}

	public function Create()
	{
		$DB=Phone::MakeConnectionToDB();
		$DB->Query("INSERT INTO phone(phone_number, phone_abonent_id) VALUES('$this->phone', '$this->abonentID');");		
	}

	public function Read()
	{
		$DB=Phone::MakeConnectionToDB();
		$DB->Query("SELECT phone.phone_number FROM phone WHERE '$this->abonentID' = phone.phone_abonent_id;");
	}

	public function Update()
	{
		$DB=Phone::MakeConnectionToDB();
		$DB->Query("UPDATE phone SET phone.phone_number = '$this->phone' WHERE '$this->abonentID' = phone.phone_abonent_id;");
	}

	public function Delete()
	{
		$DB=Phone::MakeConnectionToDB();
		$DB->Query("DELETE FROM phone WHERE '$this->abonentID' = phone.phone_abonent_id;");
	}
	
	public function GetNum()
	{
		return $this->phone;
	}
}

?>
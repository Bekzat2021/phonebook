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

	public function Create(){
		$number=$this->GetNum();
		$DB=Phone::MakeConnectionToDB();
		$DB->Query("INSERT INTO phone(phone_number, phone_abonent_id) VALUES('$number', '$this->abonentID');");		
	}

	public function Read()
	{
		# code...
	}

	public function Update()
	{
		# code...
	}

	public function Delete()
	{
		# code...
	}
	
	public function GetNum(){
		return $this->phone;
	}
}

?>
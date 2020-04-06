<?php

require_once "Entity.php";
require_once "database.php";
/**
* Class thar describe a address
*/
class Address extends Entity
{
	private $city;
	private $street;
	private $house;
	private $abonentID;

	function __construct($city, $street, $house, $abonentID)
	{
		$this->city=$city;
		$this->street=$street;
		$this->house=$house;		
		$this->abonentID=$abonentID;
	}

	public function GetCity(){
		return $this->city;
	}

	public function GetStreet(){
		return $this->street;
	}

	public function GetHouse(){
		return $this->house;
	}

	private static function MakeConnectionToDB()
	{
		$db=new Database('localhost', 'root', '', 'phone_book');
		$db->MakeConnection();
		return $db;
	}

	public function Create()
	{
		$DB=Address::MakeConnectionToDB();
		$DB->Query("INSERT INTO addresses(city, street, house, addresses_abonent_id) VALUES('$this->city', '$this->street', '$this->house', '$this->abonentID');");		
	}

	public function Read()
	{
		$DB=Address::MakeConnectionToDB();
		$DB->Query("SELECT addresses.city, addresses.street, addresses.house FROM addresses WHERE '$this->abonentID' = phone.phone_abonent_id;");
	}

	public function Update()
	{
		$DB=Address::MakeConnectionToDB();
		$DB->Query("UPDATE addresses SET addresses.city = '$this->city', addresses.street ='$this->street', addresses.house = '$this->house' 
		WHERE '$this->abonentID' = addresses.addresses_abonent_id;");
	}

	public function Delete()
	{
		$DB=Address::MakeConnectionToDB();
		$DB->Query("DELETE FROM addresses WHERE '$this->abonentID' = addresses.addresses_abonent_id;");
	}
}

?>
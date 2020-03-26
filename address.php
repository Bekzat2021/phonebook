<?php


/**
* Class thar describe a address
*/
class Address
{
	private $city;
	private $street;
	private $house;

	function __construct($city, $street, $house)
	{
		$this->city=$city;
		$this->street=$street;
		$this->house=$house;		
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

	public function Save($abonentID){
		$city=$this->GetCity();
		$street=$this->GetStreet();
		$house=$this->GetHouse();
		return "INSERT INTO addresses(city, street, house, addresses_abonent_id) VALUES('$city', '$street', '$house', '$abonentID');";
	}
}

?>
<?php

/**
* Class that describe a phone
*/
class Phone
{
	private $phone;

	function __construct($phone)
	{
		$this->phone=$phone;
	}

	public function ShowPhoneInfo(){
		echo "Phone: ".$this->phone.'<br>';
	}

	public function GetNum(){
		return $this->phone;
	}

	public function Save($abonentID){
		$number=$this->GetNum();
		return "INSERT INTO phone(phone_number, phone_abonent_id) VALUES('$number', '$abonentID');";
	}
}

?>
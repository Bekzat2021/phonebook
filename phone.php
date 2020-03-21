<?php

/**
* Class that describe a phone
*/
class Phone
{
	private $abonentID;
	private $phone;

	function __construct($abonentID, $phone)
	{
		$this->abonentID=$abonentID;
		$this->phone=$phone;
	}

	public function ShowPhoneInfo(){
		echo "ID: ".$this->abonentID." phone: ".$this->phone.'<br>';
	}

	public function GetNum(){
		return $this->phone;
	}
}

?>
<?php

/**
* phone class used by abonent
*/
class Phone
{
	private $phone;

	function __construct($phone)
	{
		$this->phone=$phone;
	}

	public function SetPhone($phone){
		$this->$phone=$phone;
	}

	public function GetPhone(){
		return $this->phone;
	}
}

?>
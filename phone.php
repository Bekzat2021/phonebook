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

	function getPhone(){
		return $this->phone;
	}
}

?>
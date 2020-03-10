<?php 

class Address  
{
    private $address;
    
    function __construct($address){
        $this->address = $address;
    }

    function GetAddress(){
        return $this->$address;
    }
}


?>
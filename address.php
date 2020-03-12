<?php 

class Address  
{
    private $address;
    
    function __construct($address){
        $this->address = $address;
    }

    public function GetAddress(){
        return $this->$address;
    }

    public function SetAddress($address){
        $this->address=$address;
    }
}


?>
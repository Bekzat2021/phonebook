<?php

require_once "phone.php";
require_once "address.php";

class Abonent  
{
    public $id;
    private $name;
    private $lastname;
    public $phone=null;
    private $address=null;

    public function __construct($name, $lastname){
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function GetName(){
        return $this->name;
    }

    public function GetLastname(){
        return $this->lastname;
    }

    public function AddPhone($id, $phoneNum){
        $this->phone=new Phone($id, $phoneNum);
    }

    public function AddAddress($city, $street, $house){
        $this->address=new Address($city, $street, $house);
    }

    public function ShowNum(){
        if ($this->phone!=null) {
            $this->phone->ShowPhoneInfo();    
        }else{
            echo "Phone is null";
        }
    }

    public function GetPhoneNum(){
        return $this->phone->GetNum();
    }

    public function AddOnlyNumber(){
        $num=$this->phone->GetNum();
        return "INSERT INTO phone(phone_number, phone_abonent_id) VALUES('$num', '$this->id')";
    }

    public function AddOnlyAddress(){
        $city=$this->address->GetCity();
        $street=$this->address->GetStreet();
        $house=$this->address->GetHouse();
        return "INSERT INTO addresses(city, street, house, addresses_abonent_id) VALUES('$city', '$street', '$house', '$this->id')";
    }

    public function Save(){
        return "INSERT INTO abonents(name, lastname) VALUES('$this->name', '$this->lastname')";
    }
}

?>
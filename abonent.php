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

    public function __construct($name=null, $lastname=null){
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function SetName($name){
        $this->name=$name;
    }

    public function GetName(){
        return $this->name;
    }

    public function GetLastname(){
        return $this->lastname;
    }

    public function SetLastName($lastname){
        $this->lastname=$lastname;
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

    public function TakeFromBase($id){
        $this->id=$id;
        return "SELECT * FROM abonents WHERE abonent_id = '$this->id';";
    }

    public function TakeAddress($id1){
        return "SELECT * FROM addresses WHERE addresses_abonent_id = '$id1';";
    }

    public function TakePhone($id2){
        return "SELECT * FROM phone WHERE phone_abonent_id = '$id2';";
    }

    public function Save(){
        return "INSERT INTO abonents(name, lastname) VALUES('$this->name', '$this->lastname')";
    }
}

?>
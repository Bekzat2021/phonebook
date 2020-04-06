<?php

require_once "phone.php";
require_once "address.php";
require_once "Entity.php";
require_once "database.php";

class Abonent extends Entity
{
    public $id;
    private $name;
    private $lastname;
    private $number;
    private $city;
    private $street;
    private $house;
    private $address;
    private $phone;

    public function __construct($name, $lastname, $number, $city, $street, $house){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->number=$number;
        $this->city=$city;
        $this->house=$house;
        $this->street=$street;
    }

    private static function MakeConnectionToDB()
	{
		$db=new Database('localhost', 'root', '', 'phone_book');
		$db->MakeConnection();
		return $db;
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

    public function SetPhone(){
        $this->phone=new Phone($this->number, $this->id);
    }

    public function GetPhone(){
        return $this->phone;
    }

    public function SetAddress()
    {
        $this->address=new Address($this->city, $this->street, $this->house, $this->id);
    }

    public function GetAddress()
    {
        return $this->address;
    }

    public function Create()
	{
		$DB=Abonent::MakeConnectionToDB();
        $DB->Query("INSERT INTO abonents(name, lastname) VALUES('$this->name', '$this->lastname');");
        $this->id = $DB->GetLastInsertedID();
        $this->SetPhone();
        $phone=$this->GetPhone();
        $phone->Create();
        $this->SetAddress();
        $address=$this->GetAddress();
        $address->Create();
    }
    
    public static function ReadAll()
    {
        $DB=Abonent::MakeConnectionToDB();
		$res = $DB->Query("SELECT abonents.abonent_id, abonents.name, abonents.lastname, phone.phone_number, 
        addresses.city, addresses.street, addresses.house FROM ((abonents INNER JOIN phone 
        ON abonents.abonent_id=phone.phone_abonent_id) INNER JOIN addresses 
        ON abonents.abonent_id=addresses.addresses_abonent_id);");
        return $res;
    }

	public function Read()
	{
		$DB=Abonent::MakeConnectionToDB();
		$DB->Query("SELECT abonents.abonent_id, abonents.name, abonents.lastname FROM abonents WHERE '$this->abonentID' = abonents.abonent_id;");
	}

	public function Update()
	{
		$DB=Abonent::MakeConnectionToDB();
		$DB->Query("UPDATE abonents SET abonents.name = '$this->name', abonents.lastname ='$this->lastname' 
		WHERE '$this->abonentID' = abonents.abonent_id;");
	}

	public function Delete()
	{
		$DB=Abonent::MakeConnectionToDB();
		$DB->Query("DELETE FROM addresses WHERE '$this->abonentID' = addresses.addresses_abonent_id;");
    }
    
}

?>
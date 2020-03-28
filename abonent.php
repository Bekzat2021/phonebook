<?php

require_once "phone.php";
require_once "address.php";

class Abonent  
{
<<<<<<< HEAD
    public $id;
    private $name;
    private $lastname;
    public $phone=null;
    private $address=null;

    public function __construct($name, $lastname){
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

    public function Save(){
        return "INSERT INTO abonents(name, lastname) VALUES('$this->name', '$this->lastname')";
    }
=======
	private $abonent_id;
	private $surname;
	private $name;
	private $middleName;
	private $phone;
	private $address;

	function __construct($surname, $name, $middleName, $phoneNumber=null, $street=null, $houseNumber=null)
	{
		$this->surname=$surname;
		$this->name=$name;
		$this->middleName=$middleName;
		$this->phone=new phone($phoneNumber); 
		$this->address=new Address($street, $houseNumber); //проверить класс внутри обьекта
	}

	public function SetId($id){
		$abonent_id=$id;
	}

	public function GetId(){
		return $abonent_id;
	}

	public function GetSurname(){
		return $this->surname;
	}

	public function GetName(){
		return $this->name;
	}

	public function GetMiddlename(){
		return $this->middleName;
	}

	public function GetPhone(){
		return $this->phone->getPhone();
	}

>>>>>>> 6cc57ba51c9611cb34a32db0a63c15e92aff5f65
}

?>
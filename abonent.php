<?php

class Abonent  
{
    private $id;
    private $name;
    private $lastname;

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

    public function Save(){
        return "INSERT INTO abonents(name, lastname) VALUES('$this->name', '$this->lastname')";
    }
}

?>
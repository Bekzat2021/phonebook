<?php 

class Database  
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $mysqli=null;

    function __construct($host, $user, $password, $database){
        $this->host=$host;
        $this->user=$user;
        $this->password=$password;
        $this->database=$database;
    }

    public function MakeConnection(){
        $this->mysqli=new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->mysqli->connect_error) {
            echo "Can't make connection to MySQL".$this->mysqli->connect_error;
        }
        return $this->mysqli;
    }

    public function Query($query){
        if ($this->mysqli==null) {
            $this->MakeConnection();    
        }
        $result = $this->mysqli->query($query);
        $this->GetLastInsertedID();
        return $result;
    }

<<<<<<< HEAD
    public function GetLastInsertedID(){
        return $this->mysqli->insert_id;
=======
    //возвращает id вставленной записи
    public function LastRecordId(){
        echo " // функция LastRecordId ";
        echo $RECORD;
        return 50;
    }
    
    //Защита от SQL иньекции очищает запрос
    public function cleanParameters($parameters){
        echo " // cleanParameters ";
        $result=$this->connection->real_escape_string($parameters);
        return $result;
>>>>>>> 6cc57ba51c9611cb34a32db0a63c15e92aff5f65
    }
}

?>
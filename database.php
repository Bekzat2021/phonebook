<?php
require_once 'abonent.php';

class Database  
{
    private $host;
    private $database;
    private $user;
    private $password;
    private $connection=null;

    function __construct($host, $database, $user, $password){
        $this->host=$host;
        $this->database=$database;
        $this->user=$user;
        $this->password=$password;
    }

    public $user_id;

    public function __desctruct(){
        if ($this->connection != null) {
            $this->closeConnection();
        }
    }

    //Создает обьект mysqli и связывает с базой данных
    public function makeConnection(){
        $this->connection=new mysqli($this->url, $this->user, $this->password, $this->database);
        if ($this->connection->connect_error) {
            echo "Fail ".$this->connection->connect_error;
        }
        $user_id = $this->connection->insert_id;
    }

    public function executeQuery($query, $params=null){
        //Создает соеденение если его нет
        $this->makeConnection();

        if ($params!=null) {
            $queryParts=preg_split("/\?/", $query);
            if (count($queryParts)!=count($params)+1) {
                return false;
            }
            $finalQuery=$queryParts[0];
            for ($i=0; $i < count($params); $i++) { 
                $finalQuery=$finalQuery.$this->cleanParameters($params[$i]).$queryParts[$i+1];
            }
            $query=$finalQuery;
        }

        $result=$this->connection->query($query);
        return $result;
    }
    
    //Защита от SQL иньекции очищает запрос
    public function cleanParameters($parameters){
        $result=$this->connection->real_escape_string($parameters);
        return $result;
    }
}

?>
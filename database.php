<?php
require_once 'abonent.php';

class Database  
{
    private $host;
    private $database;
    private $user;
    private $password;
    private $connection=null;
    private $RECORD=null;

    function __construct($host, $database, $user, $password){
        $this->host=$host;
        $this->database=$database;
        $this->user=$user;
        $this->password=$password;
    }

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

        $result = $this->connection->query($query);
        
        $RECORD = $this->connection->insert_id;
        echo " // функция executeQuery ";
        echo $RECORD;

        return $result;
    }

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
    }
}

?>
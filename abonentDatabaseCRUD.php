<?php 

require_once "abonent.php";
require_once "databaseFactory.php";

//CRUD create, read, update and delete
class abonentDatabaseCRUD  
{
    private static function getConnection(){
        return DatabaseFactory::getDatabase();
    }

    public static function getAll(){
        $query="SELECT * FROM abonent;";
        $connection=self::getConnection();
        $results=$connect->executeQuery($query);

        $resultsArray=array();
        for ($i=0; $i < $results->num_rows; $i++) { 
            $row=$results->fetch_array();

            $abonent=self::ConvertRowToObject($row);

            $resultsArray[$i]=$abonent;
        }
        return $resultsArray;
    }

    private function ConvertRowToObject($row){
        return new Abonent(
            $row["abonent_id"],
            $row["surname"],
            $row["name"],
            $row["middlename"]
        );
    }

    public static function insert($abonent){
        return self::getConnection()->executeQuery("INSERT INTO abonent(surname, name, middlename) VALUES('$abonent->surname', '$abonent->name', '$abonent->middleName')");
    }
}

?>
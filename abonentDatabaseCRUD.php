<?php 

require_once "abonent.php";
require_once "databaseFactory.php";

//CRUD - create, read, update and delete
class abonentDatabaseCRUD  
{
    private static function getConnection(){
        return DatabaseFactory::getDatabase();
    }

    public static function GetAll(){
        $query="SELECT * FROM abonent;";
        $connection=self::getConnection();
        $results=$connection->executeQuery($query);

        $resultsArray=array();
        for ($i=0; $i < $results->num_rows; $i++) { 
            $row=$results->fetch_array();

            $abonent=self::ConvertRowToObject($row);

            $resultsArray[$i]=$abonent;
        }
        return $resultsArray;
    }

    private static function ConvertRowToObject($row){
        return serialize( new Abonent(
            $row["abonent_id"],
            $row["surname"],
            $row["name"],
            $row["middlename"],
            $row["phone"],
            $row["address"]
        ));
    }

    public static function Insert($abonent){
        self::InsertPhone($abonent);
        return self::getConnection()->executeQuery("INSERT INTO abonent(surname, name, middlename) 
                                                    VALUES('$abonent->surname', '$abonent->name', 
                                                    '$abonent->middleName');");
    }

    public static function InsertPhone($abonent){
        echo "asa";
        return self::getConnection()->executeQuery("INSERT INTO phones(phone, abonent_id) VALUES(".$abonent->GetPhone().", ".self::getConnection()->LastRecordId().");");
    }

    public static function Delete($abonent_id){
        return self::getConnection()->executeQuery("DELETE FROM abonent WHERE abonent_id='$abonent_id';");
    }
}

?>
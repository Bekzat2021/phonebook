<?php

require_once("database.php");

class DatabaseFactory  
{
    private static $connection;

    public static function getDatabase(){
        if(self::$connection==null){
            $host="localhaot";
            $database="phonebook";
            $user="root";
            $password="";
            self::$connection=new Database($host, $database, $user, $password);
        }
        return self::$connection;
    }
}

?>
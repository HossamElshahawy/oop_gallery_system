<?php

class Database{

    public $connection ;

    public function __construct()
    {
        $this->open_db_connection();
    }

    function open_db_connection()
    {
        try {
            $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        }catch (Exception $e){
        die('Connection Failed '. $this->connection->connect_error);
        }
    }

    function query($sql)
    {
        try {
            $result = $this->connection->query($sql);
            return $result;
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    private function confirm_query($result)
    {
        if (!$result){
            die("Query Failed".$this->connection->error);
        }
    }

    public function escape_string($string){
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }

}
$database = new Database();

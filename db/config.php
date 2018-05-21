<?php
class  DB_Connection{

    public $connection = null;

    public function __construct()
    {
        $connection = new PDO('mysql:host=masha;dbname=education;charset=utf8', 'root', '');
        $this->connection = $connection;
        return $connection;
    }
    public function execQuery($query){
        $result = $this->connection->query($query);
        return $result;
    }
}
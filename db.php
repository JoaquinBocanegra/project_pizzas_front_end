<?php

class Db
{
private $connection;
public function __construct()
{
    try{

    $dsn = "mysql:dbname=" . DATABASE_NAME . ";host=" . SERVER_NAME;
    $this->connection = new PDO($dsn, USER_NAME, PASSWORD);
    return $this->connection;
    }
    catch(PDOException $e){
        die('Conexión fallida ');
    }
    return $this->connection;
}
}

?>
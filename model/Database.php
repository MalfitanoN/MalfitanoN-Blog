<?php

class Database {

    private $connection;
    private $username;
    private $password;
    private $host;
    private $database;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->host = $host;
        $this->database = $database;
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Error: " . $this->connection->connect_error);
        }
    }

    public function closeConnection() {
        if(isset($this->connection)){
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->openConnection();
        
        $query = $this->connection->query($string);
        
        $this->closeConnection();
        
        return $query;
    }

}

<?php
//This links this page to database.php 
require_once (__DIR__ . "/../model/database.php");

//this connnects the host username and password 
$connection = new mysqli($host, $username, $password);

//if there is an error this message will pop up on screen and 
//it will kill the code so it doesnt run
if ($connection->connect_error) {
    die("Error: " . $connection->connect_error);
}

//Linking the database
$exists = $connection->select_db($database);

//to check if the database exists
if(!$exists){
    $query = $connection->query("CREATE DATABASE $database");
    
    if($query){
        echo "YEA DATABASE CREATED: " . $database;
    }
}

 else {
        echo "DATA BASE ALREADY EXISTS";
    }

//closing the connection
$connection->close();
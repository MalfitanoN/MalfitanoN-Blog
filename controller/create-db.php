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

//has elements to check if database  exists and create the database
if (!$exists) {
    $query = $connection->query("CREATE DATABASE $database");
    //This will create the database and if itts created already it will  go to the else statement 
    if ($query) {
        echo "Database Created: " . $database;
    }
    //If database already exists it will write Database Already Exists on the screen
 } else {
    echo "Database Already Exists";
 }

 //This is for the blog posts only
 $query = $connection->query("CREATE TABLE posts ("
         . "id int(11) NOT NULL AUTO_INCREMENT," 
         . "title varchar(255) NOT NULL,"
         . "post text NOT NULL,"
         . "PRIMARY KEY (id))");
 
    if($query){
        echo " Sucessfully Created Table: Posts";
    }
  else {
        "<p>$connection->error</p>";
 }
//closing the connection
$connection->close();

<?php

//This links this page to database.php 
require_once (__DIR__ . "/../model/config.php");

 //This is for the blog posts only
 $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
         . "id int(11) NOT NULL AUTO_INCREMENT," 
         . "title varchar(255) NOT NULL,"
         . "post text NOT NULL,"
         . "PRIMARY KEY (id))");
 
 //When the table posts is first created
    if($query){
        echo " Sucessfully Created Table: Posts";
    }
    //this tells you the what its connected to which is the Table Posts
  else {
       echo  "<p>" . $_SESSION["connection"]->error . "</p>";
  }


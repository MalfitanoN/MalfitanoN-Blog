<?php

//This connects the confi.php page to this page
require_once(__DIR__ . "/../model/config.php");

function authenticateUser(){
    if(!isset($_SESSION["authenticated"])){
        return false;
    }
    
 else {
        if($_SESSION["authenticated"] != true)  {
            return false;
        }
 else {
            return true;
 }
    }
}
 
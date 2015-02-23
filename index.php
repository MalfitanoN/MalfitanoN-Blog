<?php
//This connects the header.php page to this page
    require_once(__DIR__ . '/controller/login-verify.php');

//This connects the header.php page to this page
    require_once(__DIR__ . '/view/header.php');
    if(authenticateUser()){
//This connects the navigation.php page to this page
    require_once(__DIR__ . '/view/navigation.php');
    }
//This connects the create_db.php page to this page
    require_once(__DIR__ . '../controller/create-db.php');
    
//This connects the footer.php page to this page
    require_once(__DIR__ . '/view/footer.php');
    
//this connects read-posts page to the index page 
    require_once(__DIR__ . "/controller/read-posts.php");
?>
   

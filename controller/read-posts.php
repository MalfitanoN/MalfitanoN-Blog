<?php

//This connects the confi.php page to this page
require_once(__DIR__ . "/../model/config.php");

$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);

if($result){
    while($row = mysqli_fetch_array($result)){
        echo "<div class='post'>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<br />";
        echo "<h3>" . $row['post'] . "</h3>";
        echo "<br />";
        echo "</div";
    }
       
}
<?php

//This connects the confi.php page to this page
require_once(__DIR__ . "/../model/config.php");

//this will post your text
$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);

//if the text post works it will  post whats in this if so you can add styles and things
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='Lele' class='post' style='border: 7px solid #23527c; border-radius: 20px; width: 50%;  margin: auto;'>";
        echo "<h2><u>" . $row['title'] . "</u></h2>";
        echo "<br />";
        echo "<h3 id='Lele' style='border-bottom: 7px solid #23527c'>" . $row['post'] . "</h3>";
        echo "<br />";
        echo "</div";
    }
}
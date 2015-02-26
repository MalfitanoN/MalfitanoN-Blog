<?php

//This connects  to the config page
require_once(__DIR__ . "/../model/config.php");

//this filters the text in it so therecant be innapropriate things
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

//this send the data you put in the title and post to the database
$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

//this if for if you submit it will redirect you to the index page
if ($query) {
    echo "<p>Successfully inserted post = $title</p>";
    header('Location: http://localhost/MalfitanoN-Blog/index.php');

    //If it doesnt post then it will tell you thee error
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}


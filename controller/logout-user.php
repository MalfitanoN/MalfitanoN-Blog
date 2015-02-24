<?php

//This connects the confi.php page to this page
require_once(__DIR__ . "/../model/config.php");

unset($_SESSION["authenticated"]);

session_destroy();

 header("Location: " . $path . "index.php");


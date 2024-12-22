<?php

include_once "config/helpers.php";
include_once "config/db.php";



if (isset($_GET["action"]) && !empty($_GET["action"])) {
    include_once "controllers/" . $_GET["action"] . ".php";
}

if (isset($_GET["view"]) && !empty($_GET["view"])) {
    include_once "views/" . $_GET["view"] . ".php";
} else {
    include_once "views/home.php";
}

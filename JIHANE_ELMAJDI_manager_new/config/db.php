<?php

$HOSTNAME = "localhost";
$ROOT = "root";
$PASSWORD = "";
$DATABASE = "bibliothéque";

$db = mysqli_connect($HOSTNAME, $ROOT, $PASSWORD, $DATABASE);

if (!$db) {
    die("Error of connection");
}

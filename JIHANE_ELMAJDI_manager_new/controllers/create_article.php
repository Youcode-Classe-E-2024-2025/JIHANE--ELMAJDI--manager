<?php

$title = $_POST["title"];
$desc = $_POST["description"];

$query  = "INSERT INTO `books`(`title`,`description`) values ('$title', '$desc')";

$result = mysqli_query($db, $query);

if (!$result) {
    die("Erreur: " . mysqli_error($db));
}

header('Location: http://localhost/JIHANE--ELMAJDI--manager/JIHANE_ELMAJDI_manager_new/index.php?action=list_article&view=article');

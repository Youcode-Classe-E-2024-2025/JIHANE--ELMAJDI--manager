<?php


$nom = $_POST["name"];
$email = $_POST["Email"];
$password = $_POST["Password"];


$query  = "INSERT INTO `actors`(`name`,`Email`,`Password`) values ('$nom', '$email','$password')";

$result = mysqli_query($db, $query);

if (!$result) {
    die("Erreur: " . mysqli_error($db));
}

header('Location: http://localhost/JIHANE--ELMAJDI--manager/JIHANE_ELMAJDI_manager_new/index.php?action=list_user&view=user');

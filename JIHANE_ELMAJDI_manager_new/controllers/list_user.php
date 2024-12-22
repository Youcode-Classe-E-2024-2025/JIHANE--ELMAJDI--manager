<?php

$sql = "SELECT * FROM actors WHERE `status` = 'active'";

$result = mysqli_query($db, $sql);

if (!$result) {
    die("Erreur:" . mysqli_error($db));
}

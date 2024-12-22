
<?php
include("../config/db.php");
$id = $_POST["id"];
$query = "UPDATE books SET `status`='archive' WHERE id=$id";
$result = mysqli_query($db, $query);

header('Location: http://localhost/JIHANE--ELMAJDI--manager/JIHANE_ELMAJDI_manager_new/index.php?action=list_article&view=article');
?>
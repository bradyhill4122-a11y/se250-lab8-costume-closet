<?php
include "db.php";

$id = (int) $_GET["id"];

$sql = "UPDATE loans SET returned = 1 WHERE id = $id";

$conn->query($sql);

header("Location: list.php");

exit;
?>






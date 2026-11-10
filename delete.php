<?php
include "db.php";

$id = (int) $_GET["id"];

$sql = "DELETE FROM loans WHERE id = $id";

$conn->query($sql);

header("Location: list.php");

exit;
?>
<?php
$conn = new mysqli("localhost", "root", "", "costume_closet");

if ($conn->connect_error) {
    die("Connection failed");
}
?>
<?php
$username = "james";
$password = "tetrisgame";
$dbname = "tetris";
// Create connection
$conn = mysqli_connect("localhost", $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
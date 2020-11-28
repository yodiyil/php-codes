<?php

$server = "127.0.0.1";
$user = "root";
$password = "root";
$db = "dbname";

$conn = new mysqli($server, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $connApp->connect_error);
} 
?>

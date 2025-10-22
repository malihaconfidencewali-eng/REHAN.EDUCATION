<?php
$servername = "localhost";
$username = "ueyhm8rqreljw";
$password = "gutn2hie5vxa";
$dbname = "dbm6jcuybvunio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

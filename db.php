<?php
$servername = "localhost";
$username = "uodi2gcmgt5jm";
$password = "49uajvlttbrh";
$dbname = "dblnxqdzrn0grf";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

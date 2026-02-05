<?php declare(strict_types=1); 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "management_restaurant_system";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
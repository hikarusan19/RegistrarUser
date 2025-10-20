<?php
$host = 'localhost';
$port = 3306;
$user = 'root'; // Change if your MySQL username is different
$password = ''; // Change if your MySQL password is set
$database = 'sis_registrar';

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Connection successful
?>
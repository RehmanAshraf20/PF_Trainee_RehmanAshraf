<?php

$hostName = 'localhost';
$userName = 'root';
$password = '';
$database = 'test';

$conn = new mysqli($hostName, $userName, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
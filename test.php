<?php
$servername = "serverwebsite"; // shown in MySQL Databases page
$username   = "username";      // your DB username
$password   = "password";
$dbname     = "something_testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";
?>

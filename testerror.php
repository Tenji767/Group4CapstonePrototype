<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$db = mysqli_connect("sql311.infinityfree.com","if0_40511546","j110seveN7","if0_40511546_testdb");

if(!$db){
    die("Database connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
include "server.php";

echo "Page loaded!";
?>

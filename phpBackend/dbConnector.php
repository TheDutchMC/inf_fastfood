<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "inf_fastfood";

try {
    $handle = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Oops! Something went wrong when trying to connect to the databse. Please try again later!");
}
?>
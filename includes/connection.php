<?php
$servername = "localhost";
$username = "tlo";
$password = "tlo_2018";

try {
    $conn = new PDO("mysql:host=$servername;dbname=tlo_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    die('Connection failed: ' . $e->getMessage());
    }
?>

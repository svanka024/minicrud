<?php
session_start();

$servername = "localhost";
$gebruikersnaam = "root";
$wachtwoord = "";
 
try {
  $conn = new PDO("mysql:host=$servername;dbname=webshop", $gebruikersnaam, $wachtwoord);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
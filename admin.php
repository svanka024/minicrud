<?php

include_once "connection.php";

if(isset($_SESSION['gebruikersnaam'])){

    echo "welcome " . $_SESSION['gebruikersnaam'];

}  else {

    header("location: login.php");

    }
    //$stmt->debugDumpParams();

    $result = $stmt->fetchAll();

    var_dump($result);

?>
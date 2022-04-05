<?php
include_once "includes/connection.php";

if(isset($_SESSION['gebruikersnaam'])){
    echo "welkom" . $_SESSION['gebruikersnaam'];
} else {
    header("locate: login.php");
} ?>

hello svanka
<?php
includes 'includes/connection.php';
if(isset($_SESSION['gebruikersnaam'] == true)){
    //echo "welcome" . $_SESSION['username'];
} esle {
    header("location: adminlogin.php");
}

$sql = "DELETE FROM album WHERE ID=:id;";
$stmt = $conn->prepare($sql);
$stmt->binparam(':id', $_GET)

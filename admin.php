<?php

include_once "connection.php";
if(isset($_SESSION['gebruikersnaam'])){

    echo "welcome " . $_SESSION['gebruikersnaam'];

}  else {

    header("location: login.php");

    }

    // $sql = "SELECT * FROM adminlogin";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $result = $stmt->fetchAll();

    
    // foreach($result as $re){
    //     echo $re['gebruikersnaam'];
    // }
    // //$stmt->debugDumpParams();

    // $result = $stmt->fetchAll();

    // var_dump($result);
?>

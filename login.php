<?php 
include_once "connection.php";
//var_dump($_POST);
if(isset($_POST['gebruikersnaam'])){
    $sql = "SELECT * FROM adminlogin WHERE gebruikersnaam = :gebruikersnaam AND wachtwoord = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":gebruikersnaam", $_POST['gebruikersnaam']);
    $stmt->bindParam(":password", $_POST['wachtwoord']);
    $stmt->execute();
    //$stmt->debugDumpParams();
    $result = $stmt->fetchAll();
    //var_dump($result);
    if(count($result) > 0){
        session_start();
        $_SESSION["gebruikersnaam"] = $_POST['gebruikersnaam'];
        
        header("location: admin.php");
    } else {
        echo "gebruikersnaam niet gevonden";
    }
}

?>
<form action="login.php" method="post">
    gebruikersnaam <input type="text" name="gebruikersnaam" value=""><br />
    wachtwoord <input type="text" name="wachtwoord" value=""><br />
    <input type="submit" value="login" />
</form>
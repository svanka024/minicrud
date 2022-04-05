<?php 
include_once "includes/connection.php";
$sql = "SELECT * FROM admin WHERE gebruikersnaam = :gebruikersnaam AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":gebruikersnaam", $_POST['gebruikersnaam']);
$stmt->bindParam(":wachtwoord", $_POST['password']);
$stmt->execute();
$result = $stmt->fetchAll();
var_dump($result);
if(count($result) > 0){
    $_SESSION["username"] = $_POST['username'];
    header("location: admin.php");
} else {
    echo "username niet gevonden";
}

?>
<form action="login.php" method="post">
    username <input type="text" name="username" value="" /><br />
    password <input type="text" name="password" value=""><br />
    <input type="submit" value="login" />
</form>
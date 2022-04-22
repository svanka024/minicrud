<?php
includes_once "connection.php";
if(isset($_SESSION['gebruikersnaam'])){?>
    <p><?php echo "welkom" . $_SESSION['gebruikersnaam']; ?></p>
    <?php
}  else {
    header("location: login.php");
}

if(isset($_POST["menu"])){
    $sql = "INSERT INTO menu
    (naam, prijs)
    VALUES
    (:naam, :prijs) 
    ";
    $stmt = $CONN->prepare($sql);
    $stmt->bindparam(':naam', $_POST['naam']);
    $stmt->bindparam(':prijs', $_POST['prijs']);
    $stmt->execute();
    header("location: admin.php");
}
?>
<form action="login.php" method="post">
    gebruikersnaam <input type="text" name="gebruikersnaam" value=""><br />
    wachtwoord <input type="text" name="wachtwoord" value=""><br />
    <input type="submit" value="login" />
</form>

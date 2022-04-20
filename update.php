<?php

ver_dump($_GET['id']);
$stmt = $conn->prepare("SELECT * FROM album WHERE ID = :id");
$stmt->execute(['id' => $_GET['id']]);
$data = $stmt->fetch();

if(isset($_POST["toevoegen"])){
    $sql = "UPDATE album SET
    titel = :titel,
    prijs = :prijs,
    WHERE ID = :id
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bindparam(':titel', $_POST['titel']);
    $stmt->bindparam(':prijs', $_POST['prijs']);
    $stmt->execute();
    header("location :admin.php");
}

?>

<form action="" method="post">
    titel<input type="text" name="titel" id="" value="<?php echo $data['titel'];?>"><br />
    prijs<input type="text" name="prijs" id=""><br />
    <input type="submit" value="toevoegen" name="toevoegen">
</form>
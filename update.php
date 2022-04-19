<?php

ver_dump($_GET['id']);
$stmt = $conn->prepare("SELECT * FROM album WHERE ID = :id");
$data - $stmt->fetch();

?>

<form action="" method="post">
    titel<input type="text" name="titel" id=""><br />
    prijs<input type="text" name="titel" id=""><br />
</form>
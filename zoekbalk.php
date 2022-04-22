<?php
if(isset($_GET['search']) && !empty($_GET['search'])){

$sql = "SELECT * FROM `products` WHERE `Name` LIKE CONCAT('%', :Name, '%')";

$stmt = $connect->prepare($sql);

$stmt->bindParam(':Name', $_GET['search']);

}else {

$sql = "SELECT * FROM products";

$stmt = $connect->prepare($sql);

}

$stmt->execute();

$result =$stmt->fetchAll();
?>
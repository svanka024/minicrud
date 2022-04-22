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
$result = $stmt->fetchAll();?>

<table>

<tr>
    <th>naam</th>
    <th>prijs</th>
    <th>acties</th>
    <th>
        <a href="insert.php">toevoegen</a>
    </th>
</tr>

<?php  
foreach($result as $re){?>
    <tr>

        <td><?php echo $res['naam'];?></td>

        <td><?php echo $res['prijs'];?></td>
        <td>
            <a href="edit.php?id=<?php echo $res["ID"];?>">update</a>

            <a href="delete.php?id=<?php echo $res["ID"];?>">delete</a>

        </td>
    </tr>
<?php
}
?>
</table>
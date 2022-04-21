<?php
include 'includes/connection.php';
if(isset($_SESSION['gebruikersnaam'] == true)){
    //echo "welcome" . $_SESSION['username'];
} esle {
    header("location: adminlogin.php")
}

$sql = "DELETE FROM album WHERE ID=:id;";
$stmt = $conn->prepare($sql);
$stmt->binparam(':id', $_GET);
?>

<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>
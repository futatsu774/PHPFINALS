<?php
//including the database connection file
include("connect.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM testdummy WHERE id=$id");

//redirecting to the display page (Dashboard.php in our case)
header("Location:Dashboard.php");
?>


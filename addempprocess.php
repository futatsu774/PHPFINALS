<?php

require_once ('connect.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nid = $_POST['nid'];
$dept = $_POST['dept'];
$degree = $_POST['degree'];
$birthday =$_POST['birthday'];


$sql = "INSERT INTO `testdummy`(`id`, `firstName`, `lastName`, `email`, `birthday`, `gender`, `contact`, `nid`,  `address`, `dept`, `degree`) VALUES ('','$firstname','$lastName','$email', '$birthday','$gender','$contact','$nid','$address','$dept','$degree')";

$result = mysqli_query($conn, $sql);

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='Dashboard.php';
    </SCRIPT>");
    

    //header("Location: ..//aloginwel.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Register')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

?>
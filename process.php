<?php

require_once ('connect.php');

$email = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from `users` WHERE username = '$email' AND password = '$password'";

//echo "$sql";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    session_start();
    $username = htmlentities($_POST["username"]);
    $password = htmlentities($_POST["password"]);

    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
	//echo ("logged in");
	header("Location: Dashboard.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>
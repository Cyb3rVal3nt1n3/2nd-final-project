<?php
session_start();
include("connect.php");
if (isset($_POST["login"])){
    $username = $_POST["userName"]; 
    $password = $_POST["password"];
}

$sql = "SELECT * FROM users WHERE userName='$username' AND password='$password' ";

$result = mysqli_query($conn, $sql);

if(!$result){
	echo "error ".$sql. " ". $conn->connect_error;
}
//get the number of rows that correspond with the students information
$numrows = mysqli_num_rows($result);

if($numrows == 1){
    while($rows = mysqli_fetch_assoc($result)){
        $_SESSION["userName"] = $row["userName"];
        $_SESSION["password"] = $row["password"];
    }
    header("location: homepage.php");
}
else{
    header("location: signup.php");
}
?>
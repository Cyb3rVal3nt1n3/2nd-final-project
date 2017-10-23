
<?php
require_once "constant.php";
 //creating a conection
  $conn=new mysqli($host_name ,$database_user ,$pswd,$dbname);
  //checking if connection works
  if($conn->connect_error){
  	die("Connection failed :". $conn->connect_error);
  }else{
 // echo "Connection successful";
  }

//
  
 





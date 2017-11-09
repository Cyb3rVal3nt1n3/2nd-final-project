<?php
session_start();
// if the user is already logged in he/she should be redirected to the homepage
if (isset($_SESSION['use'])) {
  header("Location: ../homepage.php");
}

 require_once 'connect.php';

            function bcrypt($pass_input){
               $crypt_options = array(
                     'cost' => 10,
                    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
                       );
    return password_hash($pass_input, PASSWORD_BCRYPT, $crypt_options);
         }

if (isset($_POST['login'])) {
    $userName=stripcslashes(htmlspecialchars($_POST['userName']));
    $password = stripcslashes(htmlspecialchars($_POST['password']));
//prevents mysqli injection

 if (!empty($password)){

$sql = "SELECT * FROM users WHERE userName='$userName'";
$result = $conn->query($sql);

$row = mysqli_fetch_array($result);
    
    //checks the value in the row being queried on
if (password_verify($password, $row['password'])) {
  echo "successful login";
   $_SESSION['use'] = $userName;

   header('Location: homepage.php');
}
}else{
  echo  "failed login " . $sql . "<br/>" . $conn->error;
}
}
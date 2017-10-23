<?php
session_start();
 require_once '../connect.php';

if (isset($_POST['login'])) {
  

    $userName= $_POST['userName'];
    $password = sha1($_POST['password']);
//prevents mysqli injection
        $userName = stripcslashes($userName);
        $password = stripcslashes($password);
        //
        $userName = mysqli_real_escape_string($conn,$userName);
        $password = mysqli_real_escape_string($conn,$password);

// function bcrypt($password){
//     $crypt_options = array(
//       'cost' => 10,
//       'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
//     );
//     return password_hash($password, PASSWORD_BCRYPT, $crypt_options);
//   }

$sql = "SELECT * FROM users WHERE userName='$userName' AND password='$password'";
$result = $conn->query($sql);


$row = mysqli_fetch_array($result);
var_dump($row);
echo "<\br>";

if ($row['userName'] == $userName &&  $row['password'] == $password) {
  echo "successful login"; 
   //$_SESSION['user'] = 'UserName';
   header('Location:../homepage.php');

}else{
  echo  "failed login " . $sql . "<br>" . $conn->error;
}

}

?>
<?php
        if(isset($_POST['addUser'])){
            require_once '../connect.php';

            function bcrypt($pass_input){
    $crypt_options = array(
      'cost' => 10,
      'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
    );
    return password_hash($pass_input, PASSWORD_BCRYPT, $crypt_options);
  }

          $user_type= htmlspecialchars($_POST["user_type"]);
          $userId= htmlspecialchars($_POST['Id']);
          $userName= htmlspecialchars($_POST['userName']);
          $phoneNumber= htmlspecialchars($_POST['phone']);
          $password= htmlspecialchars($_POST['password']);
          $conf_pass = $_POST["conf_pass"];
            
            if ($password == $conf_pass){
    
    $hash_pass = bcrypt($conf_pass);
    
         $sql ="INSERT INTO users (user_type,userId,userName,phoneNumber, password)
        VALUES('$user_type','$userId','$userName','$phoneNumber','$hash_pass')";

        $process_sql = $conn->query($sql);
        
        if ($process_sql) {
          echo "new user added successfully";
          header("Location:../homepage.php"); 
            } 
        }else{
            echo "no record inserted";
        }
     }
?>

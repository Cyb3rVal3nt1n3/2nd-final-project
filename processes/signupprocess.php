 <?php
  
      if(isset($_POST['register'])){
            require_once '../connect.php';

            function bcrypt($pass_input){
    $crypt_options = array(
      'cost' => 10,
      'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
    );
    return password_hash($pass_input, PASSWORD_BCRYPT, $crypt_options);
  }

          $firstName= htmlspecialchars($_POST["name1"]);
          $lastName= htmlspecialchars($_POST['name2']);
          $dateOfBirth= htmlspecialchars($_POST['birth']);
          $phoneNumber= htmlspecialchars($_POST['phone']);
          // $patientId= htmlspecialchars($_POST['patientId']);
          $nextOfKin= htmlspecialchars($_POST['Kin']);

          $password1= htmlspecialchars($_POST['password1']);
          $conf_pass = $_POST["conf_pass"];
            
            if ($password1 == $conf_pass){
    
    $hash_pass = bcrypt($conf_pass);
    $image = $_POST['image']['tmp_name'];
     $image = $_FILES['image']['tmp_name'];
          $imgContent = addslashes(file_get_contents($image));
  
         $sql ="INSERT INTO patient(firstName,lastName,dateOfBirth,phoneNumber,patientId,nextOfKin, password,image)
        VALUES('$firstName','$lastName','$dateOfBirth','$phoneNumber','$patientId','$nextOfKin', '$hash_pass' ,'$imageContent')";

        $process_sql = $conn->query($sql);
        
        if ($process_sql) {
          echo "new patient added successfully";
          header("Location:../read.php"); 
            } 
        }else{
            echo "no record inserted";
        }


          // entering the error messages into an array
           if (empty($_POST['name1'])) {
             array_push($error, "FirstName is a mandatory field");
            
            }

            if (empty($_POST['name2'])) {
             array_push($error, "LastName is a mandatory field");
            
            }

            if (empty($_POST['birth'])) {
             array_push($error, "DateOfBirth is a mandatory field");
            
            }

            if (empty($_POST['phone'])) {
             array_push($error, "PhoneNumber is a mandatory field");
            
            }

            if (empty($_POST['patientId'])) {
             array_push($error, "PatientId is a mandatory field");
            
            }

          //   if (empty($_POST['kin'])) {
          //  array_push($error, "Next Of Kin is a mandatory field");
          
          // }

          if (empty($_POST['password1'])) {
           array_push($error, "Password is a mandatory field"); 

          }
      
 }

        //mysqli_close($conn);

 


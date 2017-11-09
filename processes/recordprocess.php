<?php
        if(isset($_POST['record'])){
            require_once '../connect.php';

          $current_appointment= htmlspecialchars($_POST["currentApp"]);
          $illness= htmlspecialchars($_POST["illness"]);
          $treatment= htmlspecialchars($_POST['treatment']);
          $appointment= htmlspecialchars($_POST['appointment']);     
    
  
         $sql ="INSERT INTO records ( currentApp,illness,treatment,appointment)
        VALUES('$current_appointment','$illness','$treatment','$appointment')";

        $process_sql = $conn->query($sql);
        
        if ($process_sql) {
          echo "new record inserted successfully";
          header("Location:../patientProfile.php"); 
            } 
        }else{
            echo "no record inserted";
        }
  
?>

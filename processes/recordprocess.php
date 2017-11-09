<?php
        if(isset($_POST['record'])){
            require_once '../connect.php';
              $patientId = $_POST['patientId'];
          $current_appointment= htmlspecialchars($_POST["currentApp"]);
          $illness= htmlspecialchars($_POST["illness"]);
          $treatment= htmlspecialchars($_POST['treatment']);
          $appointment= htmlspecialchars($_POST['appointment']);     
    
  
         $sql ="INSERT INTO records ( patientId, current_appointment,illness,treatment,futureAppointment)
        VALUES('$patientId', '$current_appointment','$illness','$treatment','$appointment')";

        
        if ($conn->query($sql) == TRUE) {
          echo "new record inserted successfully";

          //header("Location:../patientProfile.php"); 
        }else{
            echo "no record inserted." .$conn->error;
        }
      }
  
?>

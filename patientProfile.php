<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>



<?php
session_start();
include 'connect.php';
//echo $_SESSION["patientId"];
 $patientId=$_SESSION["patientId"];

  // if (isset('use')) {
   $sql="SELECT * FROM patient INNER JOIN records ON records.patientId=patient.patientId WHERE patient.patientId=$patientId";
    
    $result = $conn->query($sql);

if($result->num_rows > 0){
              while ($row=$result->fetch_assoc()) {
// echo   $row['firstName']; 
// echo   $row['lastName'];
// echo  $row['dateOfBirth'];
//  echo   $row['phoneNumber']; 
// echo   $row['nextOfKin'];
// echo   $row['current_appointment']; 
// echo   $row['illness']; 
// echo   $row['treatment']; 

?>  
     <div style="margin-top: 30px;"> </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">

                        <div align="left">

<img class="thumbnail img-responsive" <?php
       $imgContent=$row['image'];
echo '<img src="data:image/jpeg;base64,'.base64_encode($imgContent).'" style="height:300px; width:280px;"/>'; ?>

<a href="editpatient.php?id=<?php echo  $row['patientId']; ?>"> <button type="button" class="btn btn-warning">Edit</button></a>
                        </div>
                        <div class="media-body">

      <!--  Assigning row value with each element -->
                             
                            <h3><strong>patient Id</strong></h3>
                               <p> <?php echo   $row['patientId']; ?></p>

                            <hr> 
                            <h3><strong>first Name</strong></h3>
                              <p> <?php echo   $row['firstName']; ?></p>

                            <hr>
                            <h3><strong>last Name</strong></h3>
                                <p><?php echo   $row['lastName']; ?></p> <br>

                            <hr>
                            <h3><strong>date Of Birth</strong></h3>
                                <p><?php echo  $row['dateOfBirth']; ?></p>

                                <hr>
                            <h3><strong>phone Number</strong></h3>
                                <p><?php echo   $row['phoneNumber']; ?></p>
                             <hr>
                            <h3><strong>Next Of Kin</strong></h3>
                                <p><?php echo   $row['nextOfKin']; ?></p>
                                  <hr>
                            <h3><strong>Current Appointment</strong></h3>
                                <p><?php echo   $row['current_appointment'];  ?></p>
                             <hr>
                               <hr>
                            <h3><strong>Patient Illness</strong></h3>
                                <p><?php echo   $row['illness'];  ?></p>
                             <hr>
                               <hr>
                            <h3><strong>Treatment</strong></h3>
                                <p><?php echo   $row['treatment'];  ?></p>
                             <hr>


                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
}
}
else{
  echo "Error: ".$sql." ".$conn->error;
}

//}
?>



</body>
</html>
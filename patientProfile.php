<?php
require_once 'connect.php';

 
  if (isset('use')) {
   $sql="SELECT  FROM patient WHERE patientId=$patientId,
INNER JOIN records ON records.patientId=patient.patientId";
    
    $result = $conn->query($sql);

//Check query
    if ($result){
      //If the info is available
            if ($result->num_rows > 0 ) {
              //Loop through the row
           while ($row=$result->fetch_assoc()) {
?>
     <div style="margin-top: 30px;"> </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">

                        <div align="center">

                      <img class="thumbnail img-responsive" src="http://lh6.ggpht.com/-E4VP2N_mt5Q/UOqOY8oMrdI/AAAAAAACkxw/Ca_jqLHnhac/malayalam_actress_devayani_cute_photo_thumb%25255B2%25255D.jpg?imgmax=800" width="300px" height="300px">

                        </div>
                        <div class="media-body">

      <!--  Assigning row value with each element -->
                            <hr>
                            <h3><strong>patient Id</strong></h3>
                               <p> <?php echo   $row['patientId']; ?></p>

                            <hr>
                            <h3><strong>first Name</strong></h3>
                               <p><?php echo   $row['firstName']; ?></p>

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


                        </div>
                    </div>
                </div>
            </div>
        </div>
    }
	}

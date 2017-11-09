<?php
require_once "connect.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/signup.css">
    <!-- Website CSS style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="signup.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title></title>

  </head>
  <body>

    <div class="container">
      <div class="row main">
        <div class="main-login main-center">
       
                       <h5>Enter patient record</h5>

            
            <form class="form-signup" method="post" action="processes/recordprocess.php">

              <div class="form-group">
                 <label for="patientId" class="cols-sm-2 control-label">Patient id</label>
                   
                        <!--  <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                         -->
                         <select class="selectpicker" name="patientId" required>
                    <option value="" disabled selected>Patient ID</option>
                     <?php
            include("../connect.php");
            $sql = mysqli_query($conn, "SELECT patientId FROM patient");   
            $row = mysqli_num_rows($sql);
            while ($row = mysqli_fetch_array($sql)){ echo "
            <option value=".$row['patientId'].">" .$row['patientId'] ." </option>" ;
}
?>   
                  </select>


         <div class="form-group">
              <label for="currentApp" class="cols-sm-2 control-label">Current appointment</label>
              <div class="cols-sm-10">
                <div class="input-group">
                 <!--  <span class="input-group-addon"><i class="" aria-hidden="true"></i></span> -->
                  <input type="date" class="form-control" name="currentApp" id="currentApp"  placeholder=" Current appointment" required />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="illness" class="cols-sm-2 control-label">illness</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <!-- <span class="input-group-addon"><i class="" aria-hidden="true"></i></span> -->
                  <input type="text" class="form-control" name="illness" id="illness"  placeholder=" select illness" required />
                </div>
              </div>
            </div>

             <div class="form-group">
                 <label for="treatment" class="cols-sm-2 control-label">treatment</label>
                    <div class="cols-sm-10">
                       <div class="input-group">
                         <!-- <span class="input-group-addon"><i class="" aria-hidden="true"></i></span> -->
                          <input type="text" class="form-control" name="treatment" id="treatment"  placeholder="treatment" required />
                      </div>
                  </div>
              </div>

              <div class="form-group">
                 <label for="appointment" class="cols-sm-2 control-label">Future appointment</label>
                    <div class="cols-sm-10">
                       <div class="input-group">
                        <!--  <span class="input-group-addon"><i class="" aria-hidden="true"></i></span> -->
                          <input type="date" class="form-control" name="appointment" id="appointment"  placeholder="appointment" required />
                      </div>
                  </div>
              </div>

              <!-- <div class="form-group">
                 <label for="recordId" class="cols-sm-2 control-label">Record Id</label>
                    <div class="cols-sm-10">
                       <div class="input-group">
                         <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                          <input type="number" class="form-control" name="recordId" id="recordId"  placeholder="record Id" required />
                      </div>
                  </div>
              </div> -->
              <div class="register button" align="center" style="width: 400px;">
                  <input type="submit"  name="record">
                  <a href="patientprofile.php" class="btn btn-block btn-lg btn-primary"></a> 
                </div>
              </form>        
              </div>
            </div>
        </div> 
  </body>
</html>
<?php
require_once "connect.php";

if (isset($_POST['profile'])){
session_start();
          $_SESSION["patientId"] = $_POST['patientId'];
          header("location:patientProfile.php");
          }

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
       
                      
            
            <form class="form-signup" method="post" action="">

              <div class="form-group">
                 <label for="patientId" class="cols-sm-2 control-label">Patient id</label>
                   
                        
                         <select class="selectpicker" name="patientId" required>
                    <option value="" disabled selected>Patient ID</option>
                     <?php
            include("../connect.php");
            $sql = mysqli_query($conn, "SELECT patientId,firstName FROM patient");   
            $row = mysqli_num_rows($sql);
            while ($row = mysqli_fetch_array($sql)){ echo "
            <option value='".$row['patientId']."'>" .$row['firstName'] ." </option>" ;
          
}

?>   
                  </select>
<div class="register button" align="center" style="width: 400px;">
                  <input type="submit"  name="profile">
                  <a href="patientprofile.php" class="btn btn-block btn-lg btn-primary"></a> 
                </div>
              </form>        
              </div>
            </div>
        </div> 
  </body>
</html>
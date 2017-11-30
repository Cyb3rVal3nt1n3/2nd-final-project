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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


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
<style >
  body{
  background:url(https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg);
  }
</style>

    <div class="container">
      <div class="row main">
        <div class="main-login main-center">
       
          
             <h5>DELETE PATIENT FROM SYSTEM</h5>

            
            
          <form class="form-signup" method="POST" action="">  

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
            </div>
              <div class="delete button" align="center" style="width: 400px;">
                    <a  onclick="return confirm('Are you sure you want to delete')" href="processes/deleteprocess.php?id=<?php echo $row {'patientId'}; ?>"><button type="button" class="btn btn-danger" >Delete</button></a>
                 
                </div>
              </form> 
              <a href="homepage.php"> <button class="btn btn-basic" align="left" style="padding-top: 10px: padding-bottom:10px;">Back</button></a>       
              </div>
            </div>
        </div> 
  </body>
</html>
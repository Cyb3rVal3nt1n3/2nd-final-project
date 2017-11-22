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
 $userId=$_SESSION["use"];

  // if (isset('use')) {
   $sql="SELECT * FROM users WHERE userId= $userId";
    
    $result = $conn->query($sql);

if($result->num_rows > 0){
while ($row=$result->fetch_assoc()) {
// echo   $row['userId']; 
// echo   $row['userName'];
// echo  $row['phoneNumber'];
//  echo   $row['user_type']; 


?>  
     <div style="margin-top: 30px;"> </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">

                        <div align="left">

<img class="thumbnail img-responsive" <?php
       $imgContent=$row['image'];
echo '<img src="data:image/jpeg;base64,'.base64_encode($imgContent).'" style="height:300px; width:280px;"/>';       ?>

                        </div>
                        <div class="media-body">

      <!--  Assigning row value with each element -->
                             <hr>
                            <h3><strong>patient Id</strong></h3>
                               <p> <?php echo   $row['user_type']; ?></p>

                            <hr> 
                            <h3><strong>first Name</strong></h3>
                              <p> <?php echo   $row['userId']; ?></p>

                            <hr>
                            <h3><strong>last Name</strong></h3>
                                <p><?php echo   $row['userName']; ?></p> <br>


                                <hr>
                            <h3><strong>phone Number</strong></h3>
                                <p><?php echo   $row['phoneNumber']; ?></p>
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
<?php
//Getting information on logged in user
if (isset($userName)) {
  require_once 'processes/connect.php';

  $userName = $_GET['userName'];

    $sql = "SELECT * FROM users WHERE userName=$userName";
    $result = $conn->query($sql);

//Check query
    if ($result){
      //If the info is available
            if ($result->num_rows > 0 ) {
              //Loop through the row
           while ($row=$result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html>
<head>
  <title>profile page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
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
                            <h3><strong>User type</strong></h3>
                               <p> <?php echo   $row['user_type']; ?></p>

                            <hr>
                            <h3><strong>UserId</strong></h3>
                               <p><?php echo   $row['userId']; ?></p>

                            <hr>
                            <h3><strong>User Name</strong></h3>
                                <p><?php echo  $row['userName']; ?></p>

                                <hr>
                            <h3><strong>Phone Number</strong></h3>
                                <p><?php echo   $row['phoneNumber']; ?></p>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span>
                        <h1 class="panel-title pull-left" style="font-size:30px;">
                        <?php echo  $row['userName']. "  "; ?><small>
                                 <?php echo   $row['phoneNumber']; ?>
                                 </small>
                        <i class="fa fa-check text-success" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="John Doe is sharing with you"></i></h1>

                        <div class="dropdown pull-right">
                        <a href="update.php?id=<?php echo  $row['userId']; ?>"> <button type="button" class="btn btn-warning">Edit</button></a>

                            
                        </div>
                    </span>
                    <br><br>

                            <p>
                                <u><h1>Info</h1></u>
                                <p> <?php echo  $row['userName']; ?> is an <?php  echo  $row['user_type']; ?></p>
                                <?php

                                if ($row['user_type']== 'Super Administrator'){
                                ?>
                                <p>
                                The  Super Administrator  is allowed to: <br><br>
                                               1. Change his/her personal details including password but NOT the username.<br>
                                               2. Manage Other Users will allow the Super Administrator to: <br>

                                               <div style="margin-left: 30px;">
                                                    a.    Add a new user. <br>
                                                    b.    See a list of all other users.<br>
                                                    c.    Update any user’s details.<br>
                                                    d.    Delete any user.

                                               </div>

                                    </p>

                                   <?php
                                    } elseif ($row['user_type'] == 'Administrator'){
                                ?>

                                 The  Administrator  is allowed to: <br><br>
                                       1. Update profile will allow the administrator to change his/her personal details.<br>
                                       2. Manage  Authors will allow the Administrator to: <br>

                                               <div style="margin-left: 30px;">
                                                    a.    Add a new Author. <br>
                                                    b.    See a list of all Authors.<br>
                                                    c.     Update any Author’s details.<br>
                                                    d.   Delete any Authors.

                                               </div>

                                             <?php
                                                }
                                            }
                                        }else  {
                                             ?>
                                      <div class="alert alert-danger" role="alert" style="margin-left: 20px;margin-right: 20px;">
                                           <?php echo " Not records found"."<br>".$conn->error;
                                                  header( "location: 'homepage.php'" );
                                                  ?>
                                           </div>
                                          <?php
                                        }
                          }else{
                                             ?>
                                      <div class="alert alert-danger" role="alert" style="margin-left: 20px;margin-right: 20px;">
                                           <?php echo " Database Error"."<br>";
                                                  header( "location: 'homepage.php'" );
                                                  ?>
                                           </div>
                                          <?php
                                        }
                                    }       ?>
                                     </p>

                </div>
            </div>
       </div>

</body>
</html>
     


       

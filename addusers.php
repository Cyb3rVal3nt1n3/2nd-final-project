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

    <div class="container">
      <div class="row main">
        <div class="main-login main-center">
       
                       <h5>Add new system user</h5>

            <!--shows where to display error message-->
            
          <form class="form-signup" method="POST" action="processes/adduserprocess.php">  

            <div class="form-group">
              <label for="user_type" class="cols-sm-2 control-label">User Type</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="user_type" placeholder="user_type" required />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="userName" class="cols-sm-2 control-label">Full Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="userName" id="userName"  placeholder="userName" required />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="Id" class="cols-sm-2 control-label">User ID</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="Id" id="Id"  placeholder="User ID" required />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="phone" class="cols-sm-2 control-label">Your Phone Number</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your Phone Number" required />
                </div>
              </div>
            </div>

             <div class="form-group">
                 <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                       <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-family fa-lg" aria-hidden="true"></i></span>
                          <input type="password" class="form-control" name="password" id="password"  placeholder="Password" required />
                      </div>
                  </div>
              </div>

             <div class="form-group">
              <label for="password1" class="cols-sm-2 control-label"> Confirm Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-family fa-lg" aria-hidden="true"></i></span>      <input type="password" name = "conf_pass" placeholder="Confirm Password" /> 
                   </div>
                </div>
            </div>
              <div class="register button" align="center" style="width: 400px;">
                  <input type="submit" name="addUser">
                  
                </div>
              </form>        
              </div>
            </div>
        </div> 
  </body>
</html>
<?
include ('processes/signupprocess.php');
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
  <body


    <div class="container">
      <div class="row main">
        <div class="main-login main-center">
       
          <form class="form-signup" method="POST" >
             <h5>Register for an account</h5>

            <!--shows where to display error message-->
<?php
include ('processes/error.php');

?>
            

            <div class="form-group">
              <label for="name1" class="cols-sm-2 control-label">First Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name1" placeholder="First Name"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="name2" class="cols-sm-2 control-label">Last Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name2" id="name2"  placeholder="Last Name"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="birth" class="cols-sm-2 control-label">Date Of Birth</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="birth" id="birth"  placeholder="Enter Date Of Birth"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="phone" class="cols-sm-2 control-label">Your Phone Number</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your Phone Number"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="PatientId" class="cols-sm-2 control-label">PatientId</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="PatientId" id="PatientId" placeholder="Enter PatientId"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="Age" class="cols-sm-2 control-label">Age</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa- " aria-hidden="true"></i>
                    </span>
                  <input type="text" class="form-control" name="Age" id="Age" placeholder="Enter Age"/>
                               
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="Kin" class="cols-sm-2 control-label">Next Of Kin</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-family fa-lg" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="Kin" id="Kin"  placeholder="Next Of Kin"/>
                </div>
              </div>
            </div>

             <div class="form-group">
              <label for="password1" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-family fa-lg" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="password1" id="password1"  placeholder="Password"/>
                </div>
              </div>
            </div>
        
              <div class="form-group" align="center" style="width: 400px;">
                  <input type="submit" name="register" class="btn btn-lg btn-primary btn-block"/>
                
              </div>
             
            </div>
           
        </div>
        </form>

      </div>
    </div>

    
  </body>
</html>
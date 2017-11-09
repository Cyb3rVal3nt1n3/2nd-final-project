  <?php

  include ("connect.php");
 include ("processes/loginprocess.php");
 
    ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
   
  <!--Latest compiled CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>    
  <form class="form-signin" method="post" >

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Login as user</h1>
        </div>
         <div class="modal-body">
             <div class="form-group">
                 <input type="text"  class="form-control input-lg" placeholder="UserName" name="userName" required />
             </div>
             <!--<div class="form-group">
                 <input type="text" value="UserId" class="form-control input-lg" placeholder="UserId"/>
             </div>-->
             <div class="form-group">
                 <input type="password"  class="form-control input-lg" placeholder="password" name="password" required />
             </div>

             <div class="form-group">

                    <input type="submit" class="btn btn-block btn-lg btn-primary" name="login" value="Login"/>
                      
                </div>
               
             </div>
               
         </div>
    </div>
 </form> 
</body>
</html>


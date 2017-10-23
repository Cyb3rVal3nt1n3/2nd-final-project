

  <div class="content">
   <?php

        include 'connect.php';

        //If the button was pressed
        if (isset($_POST['submit'])) {

                    if ($_SESSION['user_type'] == 'Super Administrator')
                      //Checkiing for super admin
                      //He/She can make new users with username and passwords

                   /*  {
                    $PatientId=$_POST['PatientId'];
                    $FirstName= $_POST['name1'];
                    $LastName=$_POST['name2'];
                    $DateOfBirth=$_POST['birth'];
                    $Age=$_POST['Age'];
                    $phoneNumber=$_POST['phone'];
                    $NextOfKin=$_POST['kin'];
                    $Password=$_POST['password1'];
                   }
*/

                  //Inserting data

                    if ($_SESSION['user_type'] == 'Super Administrator')
                     //Super Admin has the ability for adding administrators
                    {
                       $sql = "INSERT INTO users ()
                          VALUES ('$UserName', '$PhoneNumber ',  '$password' , ' $UserId', 'Administrator')";
                     }

                     //Administrator has the ability for adding authors
                     elseif ($_SESSION['user_type'] == 'Administrator')  {
                       $sql = "INSERT INTO users (full_name,email,phone_number,address, image,user_type)
                          VALUES ('$fullname',' $email' , '$phonenumber ', ' $address', '$Doctor')";
                            }

                      //Check the query
                  if ($conn->query($sql))
                  //if true send me .php
                   {
                    echo "Added succesfully ";;
                  }

                  else
                    //Display error
                  {
                       ?>
                <div class="alert alert-danger" role="alert" style="margin-left: 20px;margin-right: 20px;">
                     <?php echo " Not sucessful"."<br>".$conn->error; ?>
                     </div>

                      <?php
                  }
               }

     else

  //button wasn not pressed
     {
         ?>
      <div class="alert alert-danger" role="alert" style="margin-left: 20px;margin-right: 20px;">
           <?php  echo "No data was submited"; ?>
           </div>
            <?php
     }
  ?>
            <div align="center">

                       <?php    if ($_SESSION['user_type'] == 'Super Administrator'){  ?>
                                  <h2 class="form-signin-heading" style="margin-bottom: 30px;margin-top: 50px">Add User</h2>
                                    <?php    }
                                           elseif ($_SESSION['user_type'] == 'Administrator')  { ?>
                                   <h2 class="form-signin-heading" style="margin-bottom: 30px;margin-top: 50px">Add Author</h2>
                                   <?php   }  ?>

                          <form class="form-signin" method="POST">

                             <div class="form-group" style="width:400px;">
                       <form class="form-signin" method="POST" style="margin-left: 20px;">
                   <?php
                          if ($_SESSION['user_type'] == 'Super Administrator'){
                                 ?>

                                  <div class="form-group" align="center" style="width:400px;">
                                 <h4>Username</h4>
                                <input type="text" class="form-control" placeholder="Username" name="username" required="">
                              </div>

                              <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Password</h4>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="">
                             </div>

                               <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Full Name</h4>
                                <input type="text"  class="form-control" placeholder="Full Name" name="fullname">
                             </div>

                               <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Email</h4>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                             </div>


                               <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Phone Number</h4>
                                <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber">
                             </div>


                               <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Address</h4>
                                <input type="text"  class="form-control" placeholder="Adress" name="address">
                             </div>

                               <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Image</h4>
                                <input type="image"  class="form" placeholder="image" name="image">
                             </div>

                             <div class="form-group" align="center" style="width: 400px;">

                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add User</button>
                                <?php
                              }

                       elseif ($_SESSION['user_type'] == 'Administrator')  {
                                ?>
                               <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Full Name</h4>
                                <input type="text"  class="form-control" placeholder="Full Name" name="fullname">
                             </div>

                               <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Email</h4>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                             </div>


                               <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Phone Number</h4>
                                <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber">
                             </div>


                               <div class="form-group" align="center" style="width: 400px;">
                                 <h4>Address</h4>
                                <input type="text"  class="form-control" placeholder="Adress" name="address">
                             </div>

                             <div class="form-group" align="center" style="width: 400px;">

                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add Authour</button>
                                 <?php
                              }
                              ?>
                                </div>

                              </form>
                              </div>
    </div>
  </div>
  </div>
  <!-- Add User -->

  




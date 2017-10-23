 <?
include 'connect.php';

 $FirstName="";
 $LastName= "";
 $DateOfBirth="";
 $PhoneNumber="";
 $PatientId="";
 $Age="";
 $NextOfKin="";
 $Password=""
 $error= array();


           if(isset($_POST['register'])){
            
          $FirstName= mysqli_real_escape_string($_POST["name1"]);
          $LastName= mysqli_real_escape_string($_POST['name2']);
          $DateOfBirth= mysqli_real_escape_string($_POST['birth']);
          $PhoneNumber= mysqli_real_escape_string($_POST['phone']);
          $PatientId= mysqli_real_escape_string($_POST['PatientId']);
          $Age= mysqli_real_escape_string($_POST['Age']);
          $NextOfKin= mysqli_real_escape_string($_POST['kin']);
          $Password= mysqli_real_escape_string($_POST['Password1']);




// entering the error messages into an array
 if (empty($FirstName)) {
   array_push($error, "FirstName is a mandatory field");
  
  }

  if (empty($LastName)) {
   array_push($error, "LastName is a mandatory field");
  
  }

  if (empty($DateOfBirth)) {
   array_push($error, "DateOfBirth is a mandatory field");
  
  }

  if (empty($PhoneNumber)) {
   array_push($error, "PhoneNumber is a mandatory field");
  
  }

  if (empty($PatientId)) {
   array_push($error, "PatientId is a mandatory field");
  
  }

  if (empty($Age)) {
   array_push($error, "Age is a mandatory field");
  
  }

  if (empty($NextOfKin)) {
   array_push($error, "Next Of Kin is a mandatory field");
  
  }

  if (empty($Password)) {
   array_push($error, "Password is a mandatory field"); 

  }
           
if (count($error) == 0) {
  $Password==bcrypt(Password1)

  $sql ="INSERT INTO patient( name1, name2, birth, phone, PatientId, Age, Kin, Password1)
        VALUES('$FirstName','$LastName','DateOfBirth','PhoneNumber','PatientId','Age','NextOfKin','Password1')"

        mysqli_query($db,$sql);


header('location: login.php');

}



// }
/*

*/
  
?>

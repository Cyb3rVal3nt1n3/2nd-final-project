<!DOCTYPE html>
<html>
<head>
  <title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
  <a href="homepage.php"> <button class="btn btn-info" align="left" style="padding-top: 10px: padding-bottom:10px;">Back</button></a> 
                           <table class="table table-dark">
  <thead>
    <tr>
       <th >Photo</th>
      <th>Patient Id</th>
      <th >First Name</th>
      <th >Last Name</th>
      <th >Date of birth</th>
       <th >Phonne Number</th>
        <th>Next of kin</th>
    </tr>
  </thead>
  <?php
  require_once 'connect.php';

       $query= "SELECT * FROM patient ORDER BY patientId";
       $result = $conn->query($query);
        
if($result->num_rows > 0){
              while ($row=$result->fetch_array()) {


?>  
                      

  <tbody>
    <tr>
      <td> <?php
                              $image=$row['image'];
                              echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" style="height:100px; width:100px;" class="img-thumbnail"/>';
                               ?></td>
      <td><?php echo   $row['patientId']; ?></td>

      <td><?php echo   $row['firstName']; ?></td>
      <td><?php echo   $row['lastName']; ?></td>
      <td><?php echo  $row['dateOfBirth']; ?></td>
      <td><?php echo  $row['phoneNumber']; ?></td>
      <td><?php echo  $row['nextOfKin']; ?></td>
    </tr>
   
  </tbody>
  <?php
}
}
else{
  echo "Error: ".$sql." ".$conn->error;
}
?>
</table>

</body>
</html>
      

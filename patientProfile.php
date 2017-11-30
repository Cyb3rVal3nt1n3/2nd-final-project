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

                           <table class="table table-dark">
  <thead>
    <tr>
       <th >Photo</th>
      <th>Patient Id</th>
      <th >First Name</th>
      <th >Last Name</th>
      <th >Date of birth</th>
       <th >Phone Number</th>
        <th>Next of kin</th>
         <th>Current appointment</th>
          <th>Patient illness</th>
           <th>Treatment</th>
    </tr>
  </thead>
  <?php
  session_start();
 include 'connect.php';
//echo $_SESSION["patientId"];
 $patientId=$_SESSION["patientId"];

  // if (isset('use')) {
   $sql="SELECT * FROM patient INNER JOIN records ON records.patientId=patient.patientId WHERE patient.patientId=$patientId";
    
    $result = $conn->query($sql);

if($result->num_rows > 0){
              while ($row=$result->fetch_assoc()) {


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
       <td><?php echo   $row['current_appointment'];  ?></td>
        <td><?php echo   $row['illness'];  ?></td>
         <td><?php echo   $row['treatment'];  ?></td>

    
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
  <td><a href="editpatient.php?id=<?php echo  $row['patientId']; ?>"> <button type="button" class="btn btn-warning">Edit</button></a></td>
      <td><a href="select.php"> <button class="btn btn-info" align="left" style="padding-top: 10px: padding-bottom:10px;">Back</button></a></td>

</body>
</html>
      

<?php
  require_once 'connect.php';

 $query= "SELECT * FROM patient ORDER BY patientId";
 $result = $conn->query($query);
  while ($row=mysqli_fetch_array($result)) {
    ?>
<div>
  <table class="table table-striped">
    <thead>
      <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Date of birth</th>
      <th>Phone Number</th>
      <th>Patient Id</th>
      <th>Next of Kin</th>
    </tr>
    </thead>
  	<tbody>
      <tr >
           <td><?php  echo $row['firstName']; ?></td>
          <td><?php echo  $row['lastName']; ?></td>
          <td><?php echo $row['dateOfBirth']; ?></td>
          <td><?php  echo $row['phoneNumber']; ?></td>
          <td><?php  echo $row['patientId']; ?></td>
          <td><?php  echo $row['nextOfKin']; ?></td>

 </tr>

  </tbody>
  </table>
</div>
}    

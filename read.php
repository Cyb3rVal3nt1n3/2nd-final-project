<?php
require_once 'connect.php';

 $query= "SELECT * FROM patient";
 $result = $conn->query($query);
  while ($row=mysqli_fetch_array($result)) {
  	$patientId=$row['patientId'];
  	$firstName=$row['firstName'];
  	$lastName=$row['lastName'];
  	$dateOfBirth=$row['dateOfBirth'];
  	$phoneNumber=$row['phoneNumber'];
  	$nextOfKin=$row['nextOfKin'];

  	
  	echo "
  	<table style=width:50%>
  	<tr>
  	<th> Patient Id</th>
  	<th> First Name</th><br>
  	<th> Last Name</th><br>
  	<th> Date of Birth</th>
  	<th> Contacts</th>
  	<th> Next of kin</th>
  	</tr>
  	<tr>
  	<td>$patientId<td>
  	<td>$firstName</td>
  	<td>$lastName</td>
  	<td>$dateOfBirth</td>
  	<td>$phoneNumber</td>
  	<td>$nextOfKin</td><br>
  	</tr>
  	</table>";
  }



?>






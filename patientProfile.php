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
  }
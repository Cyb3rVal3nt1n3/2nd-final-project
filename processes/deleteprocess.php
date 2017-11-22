<?php

$patientId= $_GET['id'];


if (isset($patientId)) {
	 require_once '../connect.php';

	$sql = "DELETE * FROM patient WHERE patientId = '$patientId'";

	$process_sql = $conn->query($sql);
        
        if ($process_sql) {
        	header("Location: read.php");
        }else {
        	echo "<script> alert('<?php echo ' ERROR'.  $conn->connect_error?>); Location.href' homepage.php'</script>";
        }
}
?>
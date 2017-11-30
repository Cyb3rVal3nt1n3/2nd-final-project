<?php

$patientId= $_GET['id'];


if (isset($patientId)) {
	 require_once '../connect.php';

	$sql = "DELETE * FROM patient WHERE patientId = '$patientId'";

	$process_sql = $conn->query($sql);
	?>
	  <select class="selectpicker" name="patientId" required>
                    <option value="" disabled selected>Patient ID</option>
                     <?php
            include("../connect.php");
            $sql = mysqli_query($conn, "SELECT patientId,firstName FROM patient");   
            $row = mysqli_num_rows($sql);
            while ($row = mysqli_fetch_array($sql)){ echo "
            <option value='".$row['patientId']."'>" .$row['firstName'] ." </option>" ;
          
}

?>   
                  </select>
        <?
        if ($process_sql) {
        	header("Location: read.php");
        }else {
        	echo "<script> alert('<?php echo ' ERROR'.  $conn->connect_error?>); Location.href' homepage.php'</script>";
        }
}
?>
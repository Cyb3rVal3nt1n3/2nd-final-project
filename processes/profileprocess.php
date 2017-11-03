<?php
$userName= "";
$userName = $_GET['userName'];

//Getting information on logged in user
if (isset($userName)) {
    $sql = "SELECT * FROM users WHERE userName=$userName";
    $result = $conn->query($sql);

//Check query
    if ($result){
      //If the info is available
            if ($result->num_rows > 0 ) {
              //Loop through the row
           while ($row=$result->fetch_assoc()) {
           }
?>
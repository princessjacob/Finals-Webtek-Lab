<?php

  $petmovetkodb = new mysqli("localhost", "root", "", "petmovetko");
    // Check connection
  if ($petmovetkodb->connect_error) {
    die("Connection failed: " . $petmovetkodb->connect_error);
  }

  $servID = $_POST['servID'];
  // do some validation here to ensure id is safe
  $sql = "SELECT servImage FROM services WHERE servID=$servID";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['dvdimage'];
?>
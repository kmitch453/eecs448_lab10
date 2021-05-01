
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "kayleemitchell", "umahJ3es", "kayleemitchell");

//check connection
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

//close connection
$mysqli->close();
?>

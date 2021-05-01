
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "kayleemitchell", "umahJ3es", "kayleemitchell");

//check connection
if ($mysqli->connect_errno) {
  print("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
$uid = $_POST['user_id'];
$query = "INSERT INTO Users VALUES ($uid)";
if (mysqli.query($query)) {
  print("Save succesful!");
} else {
  print("Save not successful");


//close connection
$mysqli->close();
?>

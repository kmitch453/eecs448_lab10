
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "kayleemitchell", "umahJ3es", "kayleemitchell");

//check connection
if ($mysqli->connect_error) {
  die("Connect failed: %s\n" . $mysqli->connect_error);
}
$uid = $_POST['user_id'];
if ($uid!='') {
  $query = "INSERT INTO Users VALUES ('" . $uid . "')";
}
if ($mysqli->query($query)===TRUE) {
  echo "Save succesful!";
} else {
  echo "Save not successful. Error: " . $query . "<br>" . $mysql->error;
}

//close connection
$mysqli->close();
?>

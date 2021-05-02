<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "kayleemitchell", "umahJ3es", "kayleemitchell");

//check connection
if ($mysqli->connect_error) {
  die("Connect failed: %s\n" . $mysqli->connect_error);
}
$uid = $_POST['user_id'];
$np = $_POST['new_post'];
if ($np!='') {
  $query = "INSERT INTO Posts (author_id, content)  VALUES ('" . $uid . "', ' . $np . ')";
}
if ($mysqli->query($query)===TRUE) {
  echo "Save succesful!";
} else {
  echo "Save not successful. Error: " . $query . "<br>" . $mysql->error;
}

//close connection
$mysqli->close();
?>

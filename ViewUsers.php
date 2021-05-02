<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "kayleemitchell", "umahJ3es", "kayleemitchell");

//check connection
if ($mysqli->connect_error) {
  die("Connect failed: %s\n" . $mysqli->connect_error);
}

$query = "SELECT * FROM Users";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "UserID: " . $row["user_id"] . "<br>";
  }
  
} else {
  echo "No users created";
}

//close connection
$mysqli->close();
?>

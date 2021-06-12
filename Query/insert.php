<?php 

$conn = new mysqli('localhost','root','','test') or
	 die("Connection failed: " . $conn->connect_error);

$name = $_POST['username'];
$email= $_POST['usermail'];


$sql = "INSERT INTO customer VALUES (NULL,'$name','$email')";

if ($conn->query($sql) === TRUE) {
  echo 1;
} else {
  echo 0;
}

$conn->close();

?>
<?php 


$conn = new mysqli('localhost','root','','test') or die("Connection failed: "  . $conn->connection_error);

$Eid =  $_POST['id'];
$name = $_POST['username'];
$email= $_POST['usermail'];


$sql="update customer set name = '$name', email= '$email' where id=$Eid ;";

if($conn->query($sql)){
	echo 1;
}else {
	echo 1;
}
$conn->close();
?>
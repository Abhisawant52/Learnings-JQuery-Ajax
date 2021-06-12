<?php

$conn = new mysqli('localhost','root','','test') or die("Connection failed: "  . $conn->connection_error);


$Cid = $_POST['id'];

$sql = "Delete from customer where id = $Cid";

if($conn->query($sql) == True){
	echo 1;
}else {
	echo 0;
}
$conn->close();
?>
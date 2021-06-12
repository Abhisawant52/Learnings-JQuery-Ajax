<?php

include 'connection.php';
$Cid = $_POST['id'];

$sql = "Delete from customer where id = $Cid";

if($conn->query($sql) == True){
	echo 1;
}else {
	echo 0;
}
$conn->close();
?>
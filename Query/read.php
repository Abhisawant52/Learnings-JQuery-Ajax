<?php
include 'connection.php';

$sql= "select * from customer ";
$result= $conn->query($sql);

if ($result->num_rows > 0) {
	$output='<table class="table table-striped" ">
	<tr><th>ID</th><th>Name</th><th>Email</th><th>Edit</th><th>Delete</th></tr>';
	while($row = $result->fetch_assoc()) {
	
		$output .= '<tr><th>' . $row["id"] . '</th><th>' .$row["name"] .'</th><th>' . $row["email"] . '</th>
		<th><button class="btn-success" data-eid="'.$row["id"].'">Edit</button></th>
		<th><button class="btn-danger" data-id="'.$row["id"].'">Delete</button></th>
		</tr>';
	}
	$output .="</table>";
	
	echo $output;
}else{
	echo '<h2>No record found</h2>';
}
$conn->close();
?>
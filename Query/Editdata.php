<?php 

include 'connection.php';

$EditID= $_POST['Eid'];

$sql= "select * from customer where id = $EditID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
	
		$output = '
		<label>Name: </label> <input type="text" id="edit-name" name="name" value="'.$row["name"].'" /><br><br>
		<input type="hidden" id="edit-id"  value="'.$row["id"].'" />
		<label>Email: </label> <input type="email" pattern="[^ @]*@[^ @]*"  id="edit-mail" name="mail" value="'.$row["email"].'" /><br> <br> 
		<input type="submit" id="Update-btn" value="submit" /><span class="error">All Fields are Required.</span>
		';
	}
	echo $output;
}else{
	echo '<h2>No record found</h2>';
}

$conn->close();
?>  

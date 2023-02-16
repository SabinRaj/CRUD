
     


<?php
	session_start();             /*.This function first checks if a session is already 
	                              started and if none is started then it starts the session.*/
	include_once('connection.php');
	
	// The include_once() function in PHP is mainly used to include one PHP file into another PHP file.

	if(isset($_POST['submit'])){
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$addr = $_POST['address'];
		$sql = "INSERT INTO student (firstname, lastname, address) VALUES
		 ('$fname', '$lname', '$addr')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Student added successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	header('location: index.php');
?>
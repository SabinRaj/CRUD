<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM student WHERE id = '".$_GET['id']."'";

		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Student deleted successfully';
		}
		
	// 	else{
	// 		$_SESSION['error'] = 'Something went wrong in deleting member';
	// 	}
	// }
	// else{
	// 	$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: index.php');
?>
<?php
	$servername="localhost";
    $username="root";
    $password="";
    $dbase="NIST";
	$conn = new mysqli($servername,$username,$password,$dbase);
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}


    $sql= " CREATE DATABASE ktm";
    if($conn->query($sql)===TRUE){
        echo "database created successfully";

    }
	else
    {
    echo " error".$conn->error;
}
$conn->close();
?>
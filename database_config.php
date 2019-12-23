<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="final_practice";
	$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("Connection failed : " .$con->connect_error);
	}
	
?>
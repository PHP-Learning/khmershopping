<?php
	include 'connection.php';

		$con=mysqli_connect($hostname,$username,$password,$databasename);
		if($con->connect_error){
			die("connection fail". $con->connect_error);
		}



?>
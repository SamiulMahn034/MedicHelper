<?php

$username=$_GET['username'];
$password=$_GET['password'];



require_once('db_connect.php');

$connect = mysqli_connect( HOST, USER, PASS, DB )

	or die("Can not connect");



	$results=mysqli_query( $connect, "SELECT * FROM doctor WHERE username = '$username' AND password = '$password'" );
      $check_result= mysqli_num_rows($results)> 0;
	  if($check_result){
		header('location: doctor-dashboard.php');
        
		}
	else {
		header('location: logIg_doctor.php');
	}

	?>







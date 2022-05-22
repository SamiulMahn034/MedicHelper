<?php

$user_name=$_GET['user_name'];
$password=$_GET['password'];



require_once('db_connect.php');

$connect = mysqli_connect( HOST, USER, PASS, DB )

	or die("Can not connect");



	$results=mysqli_query( $connect, "SELECT * FROM patient_info WHERE user_name = '$user_name' AND password = '$password'" );
      $check_result= mysqli_num_rows($results)> 0;
	  if($check_result){
		header('location: patient-dashboard.php');
        
		}
	else {
		header('location: logIg_patient.php');
	}

	?>







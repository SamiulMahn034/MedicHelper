<?php

	$id = $_GET["id"];

	$patient_name = $_GET["patient_name"];

	$patient_number = $_GET["patient_number"];

	$address = $_GET["address"];

	$age = $_GET["age"];
	$blood_group = $_GET["blood_group"];

	$user_name = $_GET["user_name"];

	$password = $_GET["password"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO patient_info VALUES ('$id', '$patient_name','$patient_number','$address','$age','$blood_group','$user_name','$password')")

		or die("Can not execute query");


        header('location: logIg_patient.php')
	




?>
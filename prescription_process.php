<?php

$id = $_GET["id"];

$doctor_id = $_GET["doctor_id"];
$doctor_name = $_GET["doctor_name"];
$patient_id = $_GET["patient_id"];
$patient_name = $_GET["patient_name"];
$time = $_GET["time"];
$date = $_GET["date"];
$medication = $_GET["medication"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO prescription VALUES ('$id', '$doctor_id','$doctor_name','$patient_id','$patient_name','$time','$date','$medication')")

		or die("Can not execute query");


        header('location: appointment_read_d.php')
	




?>
<?php
$id = $_GET["id"];

$doctor_name = $_GET["doctor_name"];

$doctor_number = $_GET["doctor_number"];

$address = $_GET["address"];

$category = $_GET["category"];

$time = $_GET["time"];

$day = $_GET["day"];

$user_name = $_GET["user_name"];

$password = $_GET["password"];
$authQues =  $_GET["authQues"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO doctor VALUES ('$id', '$doctor_name','$doctor_number','$address','$category', '$time','$day','$user_name','$password','$authQues')")

		or die("Can not execute query");


	header('location: logIg_doctor.php')
	




?>
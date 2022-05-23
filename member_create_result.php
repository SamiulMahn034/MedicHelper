<?php

	$id = $_GET["id"];

	$employee_name = $_GET["employee_name"];

	$contact_number = $_GET["contact_number"];

	$address = $_GET["address"];

	$job_title = $_GET["job_title"];

	$user_name = $_GET["user_name"];

	$password = $_GET["password"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO admin VALUES ('$id', '$employee_name','$contact_number','$address','$job_title','$user_name','$password')")

		or die("Can not execute query");


        header('location: member_read.php')
	




?>
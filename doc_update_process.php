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







	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE doctor SET doctor_name='$doctor_name', doctor_number='$doctor_number',address='$address',category='$category',time='$time', day='$day',user_name='$user_name', password='$password' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



        header('location: doctor_read.php')



	

?>
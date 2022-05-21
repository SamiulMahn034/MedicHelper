<?php


$id = $_GET["id"];

$doctor_name = $_GET["doctor_name"];

$doctor_number = $_GET["doctor_number"];

$address = $_GET["address"];

$category = $_GET["category"];

$time = $_GET["time"];

$day = $_GET["day"];

$username = $_GET["username"];

$password = $_GET["password"];
$authQues =  $_GET["authQues"];







	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE doctor SET doctor_name='$doctor_name', doctor_number='$doctor_number',address='$address',category='$category',time='$time', day='$day',username='$username', password='$password', authQues='$authQues' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



        header('location: doctor_read.php')



	

?>
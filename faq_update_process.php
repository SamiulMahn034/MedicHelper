<?php



$id = $_GET["id"];

$name = $_GET["name"];

$description = $_GET["description"];






	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE faq SET name='$name', description='$description' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



        header('location: faq_read.php')



	

?>
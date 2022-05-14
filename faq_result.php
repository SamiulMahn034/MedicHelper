<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$description = $_GET["description"];

	


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

		mysqli_query( $connect, "INSERT INTO faq VALUES ('$id', '$name','$description')")

		or die("Can not execute query");


	header('location: faq_create.php')
	




?>
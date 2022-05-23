<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$short_description = $_GET["short_description"];
	$price = $_GET["price"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO medicine VALUES ('$id', '$name','$short_description','$price')")

		or die("Can not execute query");


	header('location: medicine_list.php')
	




?>
<?php

$user_name=$_GET['user_name'];
$password=$_GET['password'];



require_once('db_connect.php');

$connect = mysqli_connect( HOST, USER, PASS, DB )

	or die("Can not connect");



mysqli_query( $connect, "SELECT * FROM admin WHERE user_name like '$user_name' AND password like '$password'" )
    

	or die("Can not execute query");



echo "Record deleted<br>";

header('location: admin-dashboard.php');




?>

<?php

$id = $_GET["id"];



require_once('db_connect.php');

$connect = mysqli_connect( HOST, USER, PASS, DB )

	or die("Can not connect");



mysqli_query( $connect, "DELETE FROM medicine WHERE id=$id" )

	or die("Can not execute query");



echo "Record deleted<br>";

header('location: medicine_list.php');


echo "<p><a href=read.php>READ all records</a>";

?>
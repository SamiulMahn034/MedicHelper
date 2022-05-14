<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<style>
        body{
            background-color:#AAAAAA; 
        }
		
    </style>
    <title>Medicine</title>
</head>
<body>
<header class="part1" style="background-color:white; height: 50px;">
<a href="dashboard.php"><center><h1 style="padding-top:5px">Medic Helper</h1></center></a>
</header>
<main class="Mid">
      
<center>
	<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM medicine" )
		or die("Can not execute query");
    
	
	echo "<table border> \n";
	echo "<th>Id</th> <th>Name</th> <th>Price</th> <th>Oparetion</th>  \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $id </td>";
		echo "<td> $name </td>";
		echo "<td> $price </td>";
		echo "<td> <a href = ''> Purchase </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	
?>	

	</center>
  
    
</main>
<footer class="part3">
<center><Span>Thanks for being with us</Span></center>     

</footer>

</body>
</html>










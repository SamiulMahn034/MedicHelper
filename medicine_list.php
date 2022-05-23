<?php
include('admin-dashboard_header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Medicine</title>
</head>
<body style="height:1000px; background-image: linear-gradient(#93A5CF,   #E4EfE9);">

    
    <!-- Mid Button -->

<div class="container">
<h4 class="text-white mt-5">Medicine List:</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Short_description</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM medicine" );
    $check_result= mysqli_num_rows($results)> 0;
    if($check_result){
        while( $rows = mysqli_fetch_array( $results ) ) 
        {
            ?>

  <tbody>
    <tr>
      
      <td><?php echo $rows ['id']?></td>
      <td><?php echo $rows ['name']?></td>
      <td><?php echo $rows ['short_description']?></td>
      <td><?php echo $rows ['price']?> ৳</td>
      <td><a href ="medicine_delete.php?id=<?php echo $rows ['id']?>"><button class="btn btn-danger"> Delete</button></a></td>
      <td><a href="medicine_update.php?id=<?php echo $rows ['id']?> &name=<?php echo $rows ['name']?>&short_description=<?php echo $rows ['short_description']?>&price=<?php echo $rows ['price']?>"><button class="btn btn-success">Update</button></a></td>

    </tr>
   
    
  </tbody>



<?php
    }
}
else{
   die("Can not execute query");
}
?>	
</table>	
</div>

</div>
<br><br>
</body>
</html>
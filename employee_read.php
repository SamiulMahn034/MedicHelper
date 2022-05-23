<?php 
include ('admin-dashboard_header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body style="height:1000px; background-image: linear-gradient(#93A5CF,   #E4EfE9);">

    
    <!-- Mid Button -->

<div class="container">
<h4 class="text-white mt-5">Employee List:</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
      <th scope="col">Job Title</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM admin" );
    $check_result= mysqli_num_rows($results)> 0;
    if($check_result){
        while( $rows = mysqli_fetch_array( $results ) ) 
        {
            ?>

  <tbody>
    <tr>
      
      <td><?php echo $rows ['id']?></td>
      <td><?php echo $rows ['employee_name']?></td>
      <td><?php echo $rows ['contact_number']?></td>
      <td><?php echo $rows ['address']?></td>
      <td><?php echo $rows ['job_title']?></td>
      <td><?php echo $rows ['user_name']?></td>
      <td><?php echo $rows ['password']?></td>
      <td><a href ="member_delete.php?id=<?php echo $rows ['id']?>"><button class="btn btn-danger"> Delete</button></a></td>
      <td><a href="member_update.php?id=<?php echo $rows ['id']?> &name=<?php echo $rows ['employee_name']?>&contact_number=<?php echo $rows ['contact_number']?>&address=<?php echo $rows ['address']?> &job_title=<?php echo $rows ['job_title']?> &user_name=<?php echo $rows ['user_name']?> &password=<?php echo $rows ['password']?>"><button class="btn btn-success">Update</button></a></td>

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
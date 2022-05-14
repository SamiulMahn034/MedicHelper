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
<Header class="bg-success bg-gradient text-dark bg-opacity-10">
            <nav class="navbar navbar-expand-lg navbar-light mt-1 me-5 ms-5   ">
                <div class="container-fluid ">
                  <a class="navbar-brand text-white" href="">MedicHelper</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="admin-dashboard.php">Home</a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="#">Doctors</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="medicine_list.php">Medicne</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="#"> FAQ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="#"> Employee</a>
                      </li>
                     
                    </ul>
                    <form class="d-flex">
                    <a href="index.php"><button style="width:75px"  type="button" class="btn btn-outline-dark me-4 rounded-pill  ">LogOut</button></a>
                    
                    <button style="width:100px" type="button" class="btn btn-primary bg-gradient rounded-pill  ">Sign In</button>
                    </form>
                  </div>
                </div>
              </nav>
       
        </Header>
       
    </main>
    
    <!-- Mid Button -->

<div class="container">
<h4 class="text-white mt-5">FAQ List:</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Category</th>
      <th scope="col">Time</th>
      <th scope="col">Day</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      
    </tr>
  </thead>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM doctor" );
    $check_result= mysqli_num_rows($results)> 0;
    if($check_result){
        while( $rows = mysqli_fetch_array( $results ) ) 
        {
            ?>

  <tbody>
    <tr>
      
      <td><?php echo $rows ['id']?></td>
      <td><?php echo $rows ['doctor_name']?></td>
      <td><?php echo $rows ['address']?></td>
      <td><?php echo $rows ['category']?></td>
      <td><?php echo $rows ['time']?></td>
      <td><?php echo $rows ['day']?></td>
      <td><?php echo $rows ['user_name']?></td>
      <td><?php echo $rows ['password']?></td>
      
      <td><a style="text-decoration:none;" href ="doc_delete.php?id=<?php echo $rows ['id'];?>"><button class="btn btn-danger text-white"> Delete </button></a></td>
      <td><a href="doctor_update.php?id=<?php echo $rows ['id']?>&doctor_name=<?php echo $rows ['doctor_name']?>&doctor_number=<?php echo $rows ['doctor_number']?>&address=<?php echo $rows ['address']?>&category=<?php echo $rows ['category']?>&time= <?php echo $rows ['time']?> &day=<?php echo $rows ['day']?> &user_name=<?php echo $rows ['user_name']?> &password=<?php echo $rows ['password']?>"><button class="btn btn-success">Update</button></a></td>

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
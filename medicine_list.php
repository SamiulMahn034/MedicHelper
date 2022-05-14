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
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="doctor_read.php">Doctors</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="medicine_create.php">Medicne</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="faq_read.php"> FAQ</a>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
      
     
    </style>

    <title>MedicHelper-Medicine Shop</title>
</head>
<body style="--bs-bg-opacity: .5;" >
    
    <main class="">
        <Header class="bg-success bg-gradient text-dark bg-opacity-10">
            <nav class="navbar navbar-expand-lg navbar-light mt-1 me-5 ms-5  ">
                <div class="container-fluid ">
                  <a class="navbar-brand text-white" href="index.php">MedicHelper</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="#">Home</a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="#">Find Doctors</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="#">Find Medicals</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="#">About Us</a>
                      </li>
                     
                    </ul>
                    <form class="d-flex">
                    <button style="width:75px"  type="button" class="btn btn-outline-dark me-4 rounded-pill  ">Log In</button>
                    
                    <button style="width:100px" type="button" class="btn btn-primary bg-gradient rounded-pill  ">Sign In</button>
                    </form>
                  </div>
                </div>
              </nav>
       
        </Header>
       
    </main>
    <center><H3 class="text-white mt-5" >Welcome To MedicHelper Medishop</H3></center>
     <center><H1 class="text-white mt-5" >We care, ALLAH Cure</H1></center>
    <!-- Mid Button -->
<div class="container py-5">
        <div class="row mt-4">
    
        <?php


$category=$_GET['category'];



require_once('db_connect.php');

$connect = mysqli_connect( HOST, USER, PASS, DB )

	or die("Can not connect");



	$results = mysqli_query( $connect, "SELECT * FROM doctor WHERE category like '$category'" );
    $check_result= mysqli_num_rows($results)> 0;
    if($check_result){
        while( $rows = mysqli_fetch_array( $results ) ) 
        {
            ?>
            <div class="col-md-3">
                <div class="card m-4" style="width:300px;  ">
                    <img src="imeges/docprof.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $rows ['doctor_name']?></h5>
                            <p class="card-text"><?php echo $rows ['category']?></p>
                            <p class="card-text"><?php echo $rows ['time']?></p>
                            <p class="card-text"><?php echo $rows ['day']?></p>
                            <a href="#" class="btn btn-primary">Take an appoinment</a>
                            
                        </div>
                </div>
            </div>

<?php
    }
}
else{
   die("Can not execute query");
}
?>		
    </div>
</div>
 
<footer></footer>

	
    


<div class="bg-success p-2 text-dark bg-opacity-10">Thanks for being with us</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
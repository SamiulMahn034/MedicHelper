<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
      
     
    </style>

    <title>Dashboard-Medic Helper</title>
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
                    <a href="logIg.php"><button style="width:75px"  type="button" class="btn btn-outline-dark me-4 rounded-pill  ">Log In</button></a>
                    
                    <button style="width:100px" type="button" class="btn btn-primary bg-gradient rounded-pill  ">Sign In</button>
                    </form>
                  </div>
                </div>
              </nav>
       
        </Header>
       
    </main>
    
    <!-- Mid Button -->
<div class="container">
     <center><H3 class="text-white  mt-5" >Remove Doubts</H3></center>
     <center><H1 class="text-white mt-5" >Free Doctor Consultation</H1></center>
    <form action="">
      <input style="width:1200px;" type="text">
      <button style="width:100px;" type="submit" ></button>
    </form>

<h4 class="text-white mt-5">Are you looking for:</h4>
<div style="display:flex; flex-direction:row; justify-content: space-between;">
<a href="doctor.php"><button type="button"  style="height:100px; width:200px;"class=" btn-lg btn btn-outline-success text-white fs-4">Doctor</button></a>
<button type="button" style="height:100px; width:200px; " class="btn btn-outline-info btn-lg  text-white fs-4 ">Consult
  
</button>
<a href="medicine_r.php"><button type="button" style="height:100px; width:200px;" class="btn btn-outline-danger btn-lg text-white fs-4"> Pharmecy</button></a>
<button type="button" style="height:100px; width:200px;" class="btn btn-outline-warning btn-lg text-dark text-white fs-4"> Telemedicine</button>
</div>

</div>
<br><br>
<!-- FAQ Part -->
<div class=" container mt-5" id="faq">
<div style="width:50%;">
  <img src="imeges/docc.jpg" alt="Here is a pic" style="height:300px; width:500px;">
  </div>
  <div class="accordion accordion-flush" id="accordionFlushExample" style="width:50%">
  
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM faq" );
    $check_result= mysqli_num_rows($results)> 0;
    if($check_result){
        while( $rows = mysqli_fetch_array( $results ) ) 
        {
            ?>
 
 
     <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      <?php echo $rows ['name']?>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <?php echo $rows ['description']?>
      
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
<br><br><br>
<footer style="background-color:antiquewhite; text-align: center;">
        <h1> <span >MedicHelper</h1>
        <p>Give us the chance to serve you</p>
    </footer>
    <section style="display: flex; justify-content: space-evenly;" class="container">
      <div>
        <h2> Corparate Office </h2>
        <p>Address: House: 134, Road: 12, Block: E, Banani, Dhaka - 1213</p>
        <p>Hotline: (+880) 9666 787 787</p>
        <p>Email: admin@medichelper.com</p>
        
      </div>
      
      <div>
        <h2> CUSTOMER SERVICE </h2>
        
        <p>Payment Method</p>
        <p>About Us</p>
      </div>
      <div>
        <h2> TERMS & POLICY 2020 </h2>
        <p>Terms & Condition Of Us<p>
        <p>Privacy Polic<p>
        
      </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
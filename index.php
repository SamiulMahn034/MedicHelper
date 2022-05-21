<?php 
include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
      
     
    

    <title>Dashboard-Medic Helper</title>
<link rel="apple-touch-icon" sizes="180x180" href="imeges/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="imeges/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="imeges/favicon-16x16.png">
<link rel="manifest" href="imeges/site.webmanifest">
</head>
<body>
    
    <main class="">
        
       
    </main>
    

    
    <!-- Mid Button -->
<div class="container">
     <center><H3 class="text-white  mt-5" >Remove Doubts</H3></center>
     <center><H1 class="text-white mt-5" >Free Doctor Consultation</H1></center>
<center><form style="display:flex;padding-left:200px;" method="get" action="search_doctor.php">
  <div class="mb-3" style="width:800px;height:50px; ">
    <input type="text" class="form-control" name="category" placeholder="Search doctor by  category">
    
  </div>
 
  <button type="submit" class="btn btn-primary " style="width:100px; height:40px;">Search</button>
</form></center>

<h4 class="text-white mt-5">Are you looking for:</h4>
<div style="display:flex; flex-direction:row; justify-content: space-between;">
<a href="doctor.php"><button type="button"  style="height:100px; width:200px;"class=" btn-lg btn btn-outline-success text-white fs-4">Doctor</button></a>

<a href="medicine_r.php"><button type="button" style="height:100px; width:200px;" class="btn btn-outline-danger btn-lg text-white fs-4"> Pharmecy</button></a>
<button type="button" style="height:100px; width:200px;" class="btn btn-outline-warning btn-lg text-dark text-white fs-4"> Telemedicine</button>
</div>

</div>
<br>

<!-- Carsoul -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imeges/Banner3.jpg" class="d-block w-100" style="height:500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Get Our Best Doctor</h5>
        <a href="doctor_read.php"><button type="button" class="btn btn-primary rounded-pill">Get An appointment</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imeges/Banner2.jpg" class="d-block w-100" style="height:500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="text-dark">Get Authentic Medicine</h5>
      <a href="doctor_read.php"><button type="button" class="btn btn-primary rounded-pill">Get Medicine Now</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imeges/Banner1.png" class="d-block w-100" style="height:500px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Try our Tememedicine Service</h5>
        <a href="doctor_read.php"><button type="button" class="btn btn-primary rounded-pill">Get an Appointment Now</button></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- FAQ Part -->
<div class=" container mt-5" id="faq">
<div style="width:50%;">
  <img src="imeges/Doc 1.png" alt="Here is a pic" style="height:100%; width:500px;">
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
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" >
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

<?php 
include ("footer.php");
?>
</body>
</html>

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
      
     
    </style>

    <title>MedicHelper-Medicine Shop</title>
</head>
<body style="--bs-bg-opacity: .5;" >
    
    <main class="">
        
       
    </main>
    <center><H3 class="text-white mt-5" >Welcome To MedicHelper Medishop</H3></center>
     <center><H1 class="text-white mt-5" >We care, ALLAH Cure</H1></center>
     <center><form style="display:flex;padding-left:500px;" method="get" action="search_medicine.php">
  <div class="mb-3" style="width:800px;height:50px; ">
    <input type="text" class="form-control" name="name" placeholder="Search medicine by  name">
    
  </div>
 
  <button type="submit" class="btn btn-primary " style="width:100px; height:40px;">Search</button>
</form></center>
    <!-- Mid Button -->
<div class="container py-5">
        <div class="row mt-4">
    
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
            <div class="col-md-3">
                <div class="card m-4" style="width: 18rem;  ">
                    <img src="imeges/medicine.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $rows ['name']?></h5>
                            <p class="card-text w-20px"><?php echo $rows ['short_description']?></p>
                            <p class="card-text"><?php echo $rows ['price']?> ৳</p>
                            <a href="logIg_patient.php" class="btn btn-primary">Buy Now</a>
                            
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

	
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php 
include ("footer.php");
?>
</body>
</html>
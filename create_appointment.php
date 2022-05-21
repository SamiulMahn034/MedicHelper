<?php



$doctor_name = $_GET["doctor_name"];


$category = $_GET["category"];

$time = $_GET["time"];

$day = $_GET["day"];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LogIn-MedicHelper</title>
</head>
<body class="container" style="height:1000px; background-image: linear-gradient(#2E3192,  #1BFFFF);">
    <div class="bg-success bg-gradient text-dark bg-opacity-10" style="margin-top:150px; height:900px;">
       
       <div >
      <center><a class="navbar-brand text-white" href="index.php"><h1 style="padding-top:40px;">MedicHelper</h1></a></center> 
      <div class="col-md-3">
                <div class="card m-4" style="width:300px;  ">
                    <img src="imeges/docprof.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $doctor_name ?></h5>
                            <p class="card-text"><?php echo $category ?></p>
                            <p class="card-text"><?php echo $time ?></p>
                            <p class="card-text"><?php  echo $day ?></p>
                            
                            <a href="result_appointment.php?doctor_name=<?php echo $rows ['doctor_name']?>&category=<?php echo $rows ['category']?>&time= <?php echo $rows ['time']?> &day=<?php echo $rows ['day']?> "><button class="btn btn-primary">Take an appoinment</button></a>
                            
                        </div>
                </div>
            </div>

</body>
</html>


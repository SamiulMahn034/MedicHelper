<?php



$id = $_GET["id"];
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
    <title>Appointment-MedicHelper</title>
</head>
<body class="container" style="height:1000px; background-image: linear-gradient(#2E3192,  #1BFFFF); ">
    <div class="bg-success bg-gradient text-dark bg-opacity-10" style="margin-top:150px; height:900px;">
       
       <div >
      <center><a class="navbar-brand text-white" href="index.php"><h1 style="padding-top:40px;">MedicHelper</h1></a></center> 
      <div style="display:flex;flex-direction:row;">
      <div class="col-md-3">
                <div class="card m-4" style="width:300px;  ">
                    <img src="imeges/docprof.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $doctor_name ?></h5>
                            <p class="card-text"><?php echo $category ?></p>
                            <p class="card-text"><?php echo $time ?></p>
                            <p class="card-text"><?php  echo $day ?></p>
                            
                           
                        </div>
                </div>
            </div>
<div>
<form style="width:600px; padding-left:200px;" method=get action="appointment_result.php" >
<input type=hidden name="id"><br>
<input type=hidden name="doctor_id" value="<?php echo $id ?>"> <br>
<input type=hidden name="doctor_name" value="<?php echo $doctor_name ?>"> <br>
<input type=hidden name="time" value="<?php echo $time ?>"> <br>


 
  
  <div class="mb-3">
  <label for="price" class="form-label text-white">ID</label>
    <input type="text" class="form-control" name="p_id">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label text-white">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label text-white">Date</label>
    <input type="date" class="form-control" name="date">
  </div>
  <button type="submit" class="btn btn-primary" style="width:400px;">Done</button>
</form>
            </div>
        </div>
</body>
</html>


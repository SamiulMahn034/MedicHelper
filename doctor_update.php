<?php

$id = $_GET["id"];

$doctor_name = $_GET["doctor_name"];

$doctor_number = $_GET["doctor_number"];

$address = $_GET["address"];

$category = $_GET["category"];

$time = $_GET["time"];

$day = $_GET["day"];

$user_name = $_GET["user_name"];

$password = $_GET["password"];


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
    <div class="bg-success bg-gradient text-dark bg-opacity-10" style="margin-top:150px; height:600px;">
       
       <div >
      <center><a class="navbar-brand text-white" href="index.php"><h1 style="padding-top:40px;">MedicHelper</h1></a></center> 
<form style="width:600px; padding-left:200px;" method=get action="doc_update_process.php" >
<input type=hidden name="id" value="<?php echo $id?>"> <br>
  <div class="mb-3">
    <label for="name" class="form-label text-white">Name</label>
    <input type="text" class="form-control" name="doctor_name" value="<?php echo $doctor_name; ?>">
    
  </div>
  
  <div class="mb-3">
  <label for="price" class="form-label text-white">Phone Number</label>
    <input type="text" class="form-control" name="doctor_number" value="<?php echo $doctor_number; ?>">
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">Address</label>
    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">Category</label>
    <input type="text" class="form-control" name="category" value="<?php echo $category; ?>">
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">Time</label>
    <input type="text" class="form-control" name="time" value="<?php echo $time; ?>">
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">Day</label>
    <input type="text" class="form-control" name="day" value="<?php echo $day; ?>">
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">User Name</label>
    <input type="text" class="form-control" name="user_name" value="<?php echo $user_name; ?>">
  </div>
  <div class="mb-3">
  <label for="password" class="form-label text-white">Password</label>
    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
  </div>
  <div class="mb-3">
    <a style="color:white; text-decoration:none;" href="doctor_read.php">Doctor List</a>
  </div>
  <button type="submit" class="btn btn-primary" style="width:400px;">Update</button>
</form>
       </div>
    </div>
</body>
</html>


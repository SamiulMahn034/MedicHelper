<?php

$id = $_GET["id"];

$name = $_GET["name"];

$description = $_GET["description"];


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
<form style="width:600px; padding-left:200px;" method=get action="faq_update_process.php" >
<input type=hidden name="id" value="<?php echo $id?>"> <br>
  <div class="mb-3">
    <label for="name" class="form-label text-white">Title</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
    
  </div>
  
  <div class="mb-3">
  <label for="price" class="form-label text-white">Description</label>
    <input type="text" class="form-control" name="description" value="<?php echo $description; ?>">
  </div>

  <div class="mb-3">
    <a style="color:white; text-decoration:none;" href="faq_read.php">FAQ List</a>
  </div>
  <button type="submit" class="btn btn-primary" style="width:400px;">Update</button>
</form>
       </div>
    </div>
</body>
</html>


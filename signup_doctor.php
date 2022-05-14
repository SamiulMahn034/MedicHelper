
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
    <div class="bg-success bg-gradient text-dark bg-opacity-10" style="margin-top:150px; height:1000px;">
       
       <div >
      <center><a class="navbar-brand text-white" href="index.php"><h1 style="padding-top:40px;">MedicHelper</h1></a></center> 
<form style="width:600px; padding-left:200px;" method=get action="doc_create.php" >
<input type=hidden name="id" value="<?php echo $id?>"> <br>
  <div class="mb-3">
    <label for="name" class="form-label text-white">Name</label>
    <input type="text" class="form-control" name="doctor_name" >
    
  </div>
  
  <div class="mb-3">
  <label for="price" class="form-label text-white">Phone Number</label>
    <input type="text" class="form-control" name="doctor_number" >
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">Address</label>
    <input type="text" class="form-control" name="address" >
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">Category</label>
    <input type="text" class="form-control" name="category" >
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">Time</label>
    <input type="text" class="form-control" name="time" >
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">Day</label>
    <input type="text" class="form-control" name="day" >
  </div>
  <div class="mb-3">
  <label for="price" class="form-label text-white">User Name</label>
    <input type="text" class="form-control" name="user_name" >
  </div>
  <div class="mb-3">
  <label for="password" class="form-label text-white">Password</label>
    <input type="text" class="form-control" name="password">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text text-white">
      Must be 8-20 and special characters long.
    </span>
  </div>
  <div class="mb-3">
  <label for="password" class="form-label text-white">What is you favourite color?</label>
    <input type="text" class="form-control" name="authQues">
  </div>
  <button type="submit" class="btn btn-primary" style="width:400px;">SignUp</button>
</form>
       </div>
    </div>
</body>
</html>


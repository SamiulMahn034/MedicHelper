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
    <div class="bg-success bg-gradient text-dark bg-opacity-10" style="display:flex; align-items: center; margin-top:100px;">
       <div>
        <img src="imeges/login.jpg" alt="">
       </div>
       <div style="padding-left:100px">
      <center><a class="navbar-brand text-white" href="index.php"><h1>MedicHelper</h1></a></center> 
<form style="width:400px;" action="auth_patient.php" method="get">
  <div class="mb-3">
    <label for="name" class="form-label text-white">Username</label>
    <input type="text" class="form-control" name="user_name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <a style="color:white; text-decoration:none;" href="">Not Registered</a>
    <a style="color:white; text-decoration:none;" href="pass_recovary_p.php">Forget password</a>
  </div>
  <button type="submit" class="btn btn-primary" style="width:400px;">LogIn</button>
</form>
       </div>
    </div>
</body>
</html>
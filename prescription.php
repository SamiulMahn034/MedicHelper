<?php

$id = $_GET["id"];

$doctor_id = $_GET["doctor_id"];
$doctor_name = $_GET["doctor_name"];
$patient_id = $_GET["patient_id"];
$patient_name = $_GET["patient_name"];
$time = $_GET["time"];
$date = $_GET["date"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prescription</title>
</head>
<body class="" style="height:1000px; background-image: linear-gradient(#2E3192,  #1BFFFF);">
<Header class="bg-success bg-gradient text-dark bg-opacity-10">
            <nav class="navbar navbar-expand-lg navbar-light mt-1 me-5 ms-5   ">
                <div class="container-fluid ">
                  <a class="navbar-brand text-white" href="doctor-dashboard.php">MedicHelper</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="doctor-dashboard.php">Home</a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="appointment_read_d.php">Appointment List</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="medicine_doctor.php">Medicne</a>
                      </li>
                     
                     
                     
                    </ul>
                    <form class="d-flex">
                    <a href="logIg_doctor.php"><button style="width:75px"  type="button" class="btn btn-outline-dark me-4 rounded-pill  ">LogOut</button></a>
                    
                    
                    </form>
                  </div>
                </div>
              </nav>
       
        </Header>
       
<form style="width:600px; padding-left:200px;" method=get action="prescription_process.php" >
<input type=hidden name="id" value="<?php echo $id; ?>"> <br>
<div style="display:flex; flex-direction:row;">
<div>
  <div class="mb-3" style="display:flex; flex-direction:row;">
    <label for="name" class="form-label text-white">Doctor_Id</label>
    <div style="padding-left:50px;"> <input  type="text" class="form-control" name="doctor_id" value="<?php echo $doctor_id; ?>"></div>
   
    
  </div>
  
  <div class="mb-3" style="display:flex; flex-direction:row;">
  <label for="price" class="form-label text-white">Dactor Name</label>
  <div style="padding-left:20px;">
  <input type="text" class="form-control" name="doctor_name" value="<?php echo $doctor_name; ?>">
</div>
    
  </div>
  <div class="mb-3">
    <label for="price" class="form-label text-white">Patient_Id</label>
    <input type="text" class="form-control" name="patient_id" value="<?php echo $patient_id; ?>">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label text-white">Patient_Name</label>
    <input type="text" class="form-control" name="patient_name" value="<?php echo $patient_name; ?>">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label text-white">Time</label>
    <input type="text" class="form-control" name="time" value="<?php echo $time; ?>">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label text-white">Date</label>
    <input type="text" class="form-control" name="date" value="<?php echo $date; ?>">
  </div>
  </div>
  </div>
  <div>
  <div class="mb-3">
    <label for="price" class="form-label text-white">Medication</label>
    <input type="text" class="form-control" name="medication" >
  </div>

  <button type="submit" class="btn btn-primary" style="width:400px;">Done</button>
  </div>
</form>
       </div>
    </div>
</body>
</html>


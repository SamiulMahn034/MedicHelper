<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Doctor-dashboard</title>
    <link rel="apple-touch-icon" sizes="180x180" href="imeges/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="imeges/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="imeges/favicon-16x16.png">
<link rel="manifest" href="imeges/site.webmanifest">
</head>
<body style="height:1000px; background-image: linear-gradient(#A1C4FD,  #C2E9FB);">
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
       
    </main>
    <div class="container">
<h4 class="text-white mt-5">Appointment List:</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Doctor_Id</th>
      <th scope="col">Doctor_Name</th>
      <th scope="col">Patient_Id</th>
      <th scope="col">Patient_Name</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM appoinment" );
    $check_result= mysqli_num_rows($results)> 0;
    if($check_result){
        while( $rows = mysqli_fetch_array( $results ) ) 
        {
            ?>

  <tbody>
    <tr>
      
      <td><?php echo $rows ['id']?></td>
      <td><?php echo $rows ['doctor_id']?></td>
      <td><?php echo $rows ['doctor_name']?></td>
      <td><?php echo $rows ['patient_id']?></td>
      <td><?php echo $rows ['patient_name']?></td>
      <td><?php echo $rows ['time']?></td>
      <td><?php echo $rows ['date']?></td>
      <td><a href="prescription.php?id=<?php echo $rows ['id']?> &doctor_id=<?php echo $rows ['doctor_id']?>&doctor_name=<?php echo $rows ['doctor_name']?>&patient_id=<?php echo $rows ['patient_id']?>&patient_name=<?php echo $rows ['patient_name']?>&time=<?php echo $rows ['time']?>&date=<?php echo $rows ['date']?>"><button class="btn btn-success">Give Prescription</button></a></td>
      
    </tr>
   
    
  </tbody>



<?php
    }
}
else{
   die("Can not execute query");
}
?>	
</table>	
</div>

</div>
<br><br> 
    
</body>
</html>
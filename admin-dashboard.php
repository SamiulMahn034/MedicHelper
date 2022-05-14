<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body style="height:1000px; background-image: linear-gradient(#A1C4FD,  #C2E9FB);">
<Header class="bg-success bg-gradient text-dark bg-opacity-10">
            <nav class="navbar navbar-expand-lg navbar-light mt-1 me-5 ms-5   ">
                <div class="container-fluid ">
                  <a class="navbar-brand text-white" href="">MedicHelper</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="admin-dashboard.php">Home</a>
                      </li>
                     
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="doctor_read.php">Doctors</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="medicine_list.php">Medicne</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="faq_read.php"> FAQ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active mx-3 text-white" aria-current="page" href="#"> Employee</a>
                      </li>
                     
                    </ul>
                    <form class="d-flex">
                    <a href="logIg_admin.php"><button style="width:75px"  type="button" class="btn btn-outline-dark me-4 rounded-pill  ">LogOut</button></a>
                    
                    <button style="width:100px" type="button" class="btn btn-primary bg-gradient rounded-pill  ">Sign In</button>
                    </form>
                  </div>
                </div>
              </nav>
       
        </Header>
       
    </main>
    
    <!-- Mid Button -->
<div class="container">


<h4 class="text-white mt-5">Are you looking for:</h4>
<div style="display:flex; flex-direction:row; justify-content: space-between;">
<a href="medicine_create.php"><button type="button"  style="height:100px; width:200px;"class=" btn-lg btn btn-outline-success text-white fs-4" >Add Medicine</button></a>
<a href="faq_create.php"><button type="button" style="height:100px; width:200px; " class="btn btn-outline-info btn-lg  text-white fs-4 ">  Add FAQ</button></a>
<a href="members_create.php"><button type="button" style="height:100px; width:200px;" class="btn btn-outline-danger btn-lg text-white fs-4">Add Members</button></a>
<a href="payment_search.php"><button type="button" style="height:100px; width:200px;" class="btn btn-outline-warning btn-lg text-dark text-white fs-4">Track Payment</button></a>


</div>

</div>
<br><br>
</body>
</html>
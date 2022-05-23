<?php
include('admin-dashboard_header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Dashboard-Admin</title>
</head>
<body style="height:1000px; background-image: linear-gradient(#A1C4FD,  #C2E9FB);">

       
   
    <!-- Mid Button -->
<div class="container" class="bg-dark p-2 text-dark bg-opacity-10">


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
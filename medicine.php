<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<style>
        body{
            background-color:#AAAAAA;
        }
        .form{
            width:500px;
            padding-left:100px;
        }
        .btn1{
            padding-left:200px; 
            
        }
        .btn2{
           width:300px;
           height: 40px;
           background-color: #2980B9;
           color:white;
        }
        .btn3{
           width:300px;
           height: 40px;
           background-color: #2980B9;
           color:white;   
        }

    </style>
    <title>Medicine</title>
</head>
<body>
<header class="part1" style="background-color:white; height: 50px;">
<a href="dashboard.php"><center><h1 style="padding-top:5px">Medic Helper</h1></center></a>
</header>
<main class="form">
<form class="ui form" method=get action=medicine_result.php>

 <input type=hidden name="id"> <br>

<p>
<label for="name">Madicine Name:</label>
 <input type=text name="name"> <br>


<p>
Price: <input type=text name="price"> <br>
 
<input class="btn3" type=submit value="Register">

</form>
  <br>
        Id:<Span id="p1"></Span><br>
		Name:<Span id="p2"></Span><br>
		Price:<Span id="p3"></Span><br>
		
		<button class="btn3" id="btnChange">Click here to check medicine details</button>
	<script>
		let btnChange = document.querySelector("#btnChange");
	
		btnChange.addEventListener('click', () => {
		let id = prompt("Please enter the id:");
		fetch('http://localhost/soft/medicine_ajex.php?id=' + id)
			.then(response => response.json())
			.then(json => {
				let p1 = document.querySelector("#p1");
				let p2 = document.querySelector("#p2");
				let p3 = document.querySelector("#p3");
				
				p1.innerHTML = json['content'][0]['id'];				
				p2.innerHTML = json['content'][0]['name'];
				p3.innerHTML = json['content'][0]['price'];
                
			})
		});
    	</script>
    
</main>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="part3" style="background-color:white">
    <center><h1>Thanks for being with us</h1></center>
      
</footer>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
  	<title>THE PHARMACY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="csslogin/style.css">

  <script src="js/index.js"></script>
    <script src="js/validateForm.js"></script>
    <script>
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(xhttp.readyState = 4 && xhttp.status == 200)
          xhttp.responseText;
      };
      xhttp.open("GET", "php/db_connection.php?action=is_logged_in", false);
      xhttp.send();

      //alert(xhttp.responseText);
      if(xhttp.responseText == "")
        window.location.href = "http://localhost/Pharmacy-Management/index.html";
      if(xhttp.responseText == "true")
        window.location.href = "http://localhost/Pharmacy-Management/home.php";

    </script>

	</head>
	<body class="img js-fullheight" style="background-image: url(imagas/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section" > <b> <span style="color:black">THE PHARMACY</span> </b> ADMIN LOGIN</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h2 class="mb-4 text-center" style="color:black">Invalid Username and Passwords</h2>
		      	<form method="POST" action="logincheck.php" class="signin-form" >
		      		
	            <div class="form-group">
	            	<button type="submit" class="btn btn-default btn-block btn-custom">Back to Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	
								
	            </div>
	          </form>
	          <p class="w-100 text-center" style="color:black">&mdash; Or Contact Admin To Create Account &mdash;</p>
	          
			  
			  <!--..
			 	<div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div> 
			  
			  .-->
			  
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


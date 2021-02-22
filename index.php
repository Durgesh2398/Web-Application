<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Page</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		  <!-- Bootstrap core CSS -->
		  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		<!-- Custom styles for this template -->
		<link href="css/scrolling-nav.css" rel="stylesheet">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="limiter">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="height:55px" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="home.php">Full Stack Developer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">SignIn</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="validate.php"  method="post">
					<span class="login100-form-title">
						New Registration
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="FirstName" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 " >
						<input class="input100" type="text" name="LastName" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" required data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					

                    <div class="wrap-input100 validate-input "data-validate = "Password is required">
                        Status
						<div class="custom-control custom-radio">
    				    	<input type="radio" id="Active" name="Statuss" value="Active" class="custom-control-input" checked>
				    	    <label class="custom-control-label" for="Active">Active</label>
      					</div>
					    <div class="custom-control custom-radio">
    					    <input type="radio" id="Inactive" name="Statuss" value="Inactive" class="custom-control-input">
					        <label class="custom-control-label" for="Inactive">Inactive</label>
					    </div>
                        <span class="focus-input100"></span>
						
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        Admin

						<div class="custom-control custom-radio">
    				    	<input type="radio" id="True" name="Adminn"  value="True" class="custom-control-input" >
				    	    <label class="custom-control-label" for="True">True</label>
      					</div>
					    <div class="custom-control custom-radio">
    					    <input type="radio" id="False" name="Adminn"  value="False" class="custom-control-input" checked>
					        <label class="custom-control-label" for="False">False</label>
					    </div>
						
					</div>

					<div class="container-login100-form-btn">
                        <?php
                            if(isset($_REQUEST['status'])){?>
                                <div id="registerid"style="color:red; text-align:center;" >First Name already exits
                                    <br>
                                </div><br>
                        <?php } ?>
                           
						   
						    <?php
                            if (isset($_SESSION['msg'])) { 
                                echo $_SESSION['msg']; // might need this in a specific place on the page, a div or whatever
                                $_SESSION['msg'] = "";
                                }
                            ?>
						<button class="login100-form-btn">
							Register
						</button>
					</div>


					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							Login To Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	  <!-- Bootstrap core JavaScript -->
	  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>



</body>
</html>
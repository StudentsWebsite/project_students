<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Students</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<meta charset="utf-8">
    <title>Students-Project</title>
    <style>
      /* Modifying the background color */
       
      .navbar-custom {
          background-color: rgb(238, 201, 38);
      }
      /* Modify brand and text color */
       
      .navbar-custom .navbar-brand,
      .navbar-custom .navbar-text {
          color: rgb(2, 12, 2);
      }
  </style>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	   
<form method="post" action="register.php">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<?php include('errors.php'); ?>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username" value="<?php echo $username; ?>">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>
                    

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="email" name="email" value="<?php echo $email; ?>">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password_1">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password_2">
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
				<label style="color: #999999">  Type </label><p></p>
                        <select data-tax="Type" data-id="type" id="<?php echo $type; ?>" name="type" style="width: 40%; height: 100%;">
        <option value="">choose...</option>
        <option value="Student">Student</option>
        <option value="Lecturer">Lecturer</option>
        <option value="Admin">Admin</option>
    </select>
				
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name = "reg_user">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already a member?
						</span>
						</form>

						<a href="login.php">Sign in</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
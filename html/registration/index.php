<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Register</title>
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
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <!--NAVIGATOR BAR-->

 <nav class = "navbar navbar-custom">
        <!--LOGO AND TITLE SECTION-->
        <img id = "logoimg" src="img/logoimg.png" style="width: 100%;max-width:60px">
        <strong style="font-size:40px;font-family: 'Times New Roman', Times, serif;" >Student Records</strong>
        <!--END OF LOGO AND TITLE SECTION-->

        <!--HOME PAGE HYPERLINK-->
        <a href="https://localhost/project_students/html/home.html">
            <img id="homeimg" src="img/homeimg.png" align="right" alt="Home Page" style="width:100%;max-width:40px">
         </a>
        <!--END OF HOME PAGE HYPERLINK-->  

        <!--INFORMATION HYPERLINK-->     
        <a href="https://localhost/project_students/html/information.html">
           <img id = "infoimg" src="img/infoimg.png" align="right" alt="Info Page" style="width:100%;max-width:40px">
         </a>  
        <!--END OF INFORMATION HYPERLINK-->

        <!--CONTACT HYPERLINK-->
        <a href="https://localhost/project_students/html/contact.html">
           <img id="contactimg" src="img/contactimg.png" align="right" alt="Contact Page" style="width:100%;max-width:40px">
        </a>
        <!--END OF CONTACT HYPERLINK-->


  </nav> 
     <!--THE END OF NAVIGATOR BAR-->
     <br>
<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>
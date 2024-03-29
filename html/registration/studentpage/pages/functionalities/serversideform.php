<?php

// initializing variables
$username = "";
$email    = "";
$type     = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project_students');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $type = mysqli_real_escape_string($db, $_POST['type']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($type)) {array_push($errors, "Please choose a type"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if(($type != "Admin") && ($type != "Student") && ($type != "Lecturer")){
    array_push($errors, "Wrong type!");
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, type) 
  			  VALUES('$username', '$email', '$password', '$type')";
  	mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
      array_push($errors, "Username is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }
  $_SESSION['user_id'] = $id;
  if (count($errors) == 0) {
      $password = md5($password);

      $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND type='Student'";
      $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: student.php');
          exit;
      }

      $query1 = "SELECT * FROM users WHERE username='$username' AND password='$password' AND type='Admin'";
      $results1 = mysqli_query($db, $query1);

        if(mysqli_num_rows($results1) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: adminpage/pages/administrator.php');
        exit;
        }

      $query2 = "SELECT * FROM users WHERE username='$username' AND password='$password' AND type='Lecturer'";
      $results2 = mysqli_query($db, $query2);

        if (mysqli_num_rows($results2) == 1) {
          $id = $row["id"];
        $_SESSION['username'] = $username;
        $_SESSION['user_ID']= $result2['id'];
        $_SESSION['success'] = "You are now logged in";
        header('location: lecturerpage/pages/dashboard.php');
        exit;
        }
        
  /*if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND type='$type'";
      $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1 && ($type == 'Student')) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: student.php');
      }
      else if(mysqli_num_rows($results) == 1 && ($type == 'Admin')) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: admin.php');
    }
    elseif (mysqli_num_rows($results) == 1 && ($type == 'Lecturer')) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: lecturer.php');
  }*/
      else {
          array_push($errors, "Wrong username/password combination or Type");
      }
  }
}
  
  ?>



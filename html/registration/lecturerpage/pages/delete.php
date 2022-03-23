<!DOCTYPE html>
<html>
<body background="imgs/wallpaper1.jpg">
<?php
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'project_students');

    $remove = $_GET['id'];
    $query = "DELETE FROM users WHERE id = '$remove'";

    $data = mysqli_query($db,$query);
        
?>
<a class="btn" href="http://localhost/project_students/html/registration/lecturerpage/pages/tablestudents.php">Return back to the page.</a>
<style>
   .btn {
  background-color: #555555; /* Black */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
</body>
</html>
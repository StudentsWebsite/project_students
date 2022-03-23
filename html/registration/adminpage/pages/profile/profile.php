<!-- 
    Christodoula Ioannou 15071
    George Savva 14426
    Pouyan Ghalehmalek  16500
-->

<?php
$conn = mysqli_connect('localhost', 'root', '', 'project_students');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style4.css">
     <link rel="stylesheet" href="test.css">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
        <!-- Theme style -->
        <link rel="stylesheet" href="../includes/css.css">
      </head>
<body>


    <div class="wrapper">
        <!-- Sidebar  -->
         <?php
       $id=$_SESSION['user_ID'];

          $query = "SELECT * FROM users WHERE id = '$id'";
  // Get Result
  $result = mysqli_query($conn, $query);

  // Fetch Data
             $row=$result->fetch_array();
             $name=$row['username'];
             $email=$row['email'];
             $type=$row['type'];
   if($row['picture']!=NULL){
                                $picture=$row['picture'];
                            }else
                            {
                                $picture='dummy.png';
                            }
       ?>
    
        <!-- Page Content  -->
       
     
<div id="deemo">
 <center>
 <button v-on:click="fadeeMe">
    Image
  </button>
</center>
  <transition name="fade" v-on:enter="enter">
    <p v-if="show"><img  style="margin-left:30.8em" height="160" width="160" class=" img-profile rounded-circle "
                                    src="pictures/<?php echo $picture; ?>"></p>
  </transition>
</div>

<style type="text/css">
  .fade-enter-active,
.fade-leave-active {
  transition: opacity 1s
}

.fade-enter,
.fade-leave-to
/* .fade-leave-active in <2.1.8 */

{
  opacity: 0
}
</style>
 <form method="POST"  enctype="multipart/form-data">




      <div class="container d-flex justify-content-center">








        <div class="col-md-12 order-md-4 mt-3">
            <div class="row">

              <div class="col-md-6 mb-4 ">
              <label for="username"><b>Username:</b></label>
              <input type="text" class="form-control" id="name" value="<?php echo $name ?>" placeholder="Name" name="username" readonly />
                
              </div>

            </div>
          </div>
        </div>




       <div class="container d-flex justify-content-center">

          <div class="col-md-12 order-md-4">
            <div class="row">

             
             <div class="col-md-6 mb-4">
            <label for="email"><b>Email:</b></label>
            <input type="email" class="form-control" id="email" value="<?php echo $email ?>" placeholder="Email " name="email" readonly>
            </div>

            </div>
          </div>
        </div>

        <div class="container d-flex justify-content-center">
        <div class="col-md-12 order-md-4 mt-3">
            <div class="row">

              <div class="col-md-6 mb-4 ">
              <label for="type"><b>Type:</b></label>
              <input type="text" class="form-control" id="type" value="<?php echo $type ?>" placeholder="Type" name="type" readonly />
                
              </div>

            </div>
          </div>
        </div>

       <div class="container d-flex justify-content-center">
          <div class="col-md-12 order-md-4">
            <div class="row">     


            </div>
          </div>
        </div>

    </form>




    <div class="container d-flex justify-content-center">
        
    <div class="col-md-12 order-md-4">
    <p> </p>
    <p> </p>
  <a class="btn123" href="http://localhost/project_students/html/registration/adminpage/pages/administrator.php">Go back to the HomePage.</a>
  
<style>
   .btn123 {
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
</div>
          </div>



</div>


  <script type="text/javascript">
 
function timedMsg()
{
var t=setTimeout("document.getElementById('myMsg').style.display='none';",5000);
}
 
</script> <script src="lol.js"> </script>   
<script language="JavaScript" type="text/javascript">timedMsg()</script>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script src="tr.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>Enter the details</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.css" crossorigin="anonymous">
	<script src="bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- navbar -->
  <?php include 'imports/connection.php'; ?>
  <?php include 'imports/calculate.php'; ?>
 <!-- navbar -->
  <div class="container"  style="margin-top: 50px;">

    <form method="post" action="">

      <table class="table table-striped ">
        <tbody>
          <th colspan="2"><h2 style="text-align: center;">Please Log In</h2></th>
          <tr>
            <th>Email: </th>
            <td><input type="text" class="form-control" name="email" placeholder="enter email" required="true"></td>

          </tr>
          <tr>

            <th>Password: </th>
            <td><input size="50" class="form-control" type="Password" name="password" placeholder="enter the Password" required="true"></td>

          </tr>
          <tr>

            <th>Watchman: </th>
            <td>
               <input class="form-check-input" type="checkbox" name="posts">
            </td>

          </tr>


          <tr align="center">
            <td colspan="2">
              <input type="submit" class="btn btn-success" name="login" value="login" >
            </td>
          </tr>

        </tbody>
      </table>
    </form>
    <?php
    if (isset($_POST['login'])) {
      $c_email=$_POST['email'];
      $c_pass=$_POST['password'];
      if(isset($_POST['posts'])){

      $sel_c="select * from watchman 
      where email='".$c_email."' and pass='".$c_pass."'";
      }
      else{
      $sel_c="SELECT email FROM employee WHERE email='".$c_email."' and pass='".$c_pass."'";
      }
      $run_c=mysqli_query($con,$sel_c);
      
      if (!$run_c|| mysqli_num_rows($run_c)==0) {
        echo "<script> alert('credentials are incorrect, please try again!') </script>";  
      }
      else{
        echo "<script> alert('Successful login attemp...redirecting to home page...') </script>";  
          if(isset($_POST['posts'])){
                  echo "<script> window.open('watchman.php','_self') </script>";  
                }
                else{
                  echo "<script> window.open('employee.php','_self') </script>";  
                }

      }
    }
    ?>
  <!-- </div> -->
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Screen</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.css" crossorigin="anonymous">
	<script src="bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- navbar -->
  <?php include 'imports/connection.php'; ?>
  <?php include 'imports/calculate.php'; ?>
 <!-- navbar -->
    
  <div class="container"  style="margin-top: 50px;">
    <div class="alert alert-primary" style="margin: 20px;" role="alert">
      <h2 class="display-6">No of tokens raised:</h2> <h1 class="display-4"><?php echo $token_raised; ?></h1>
    </div>

    <div class="alert alert-warning" style="margin: 20px;" role="alert">
      <h2 class="display-6">No of people served</h2> <h1 class="display-4"><?php echo $customer_served; ?></h1>
    </div>
	
    <div class="alert alert-danger" style="margin: 20px;" role="alert">
      <h2 class="display-6">Waiting List</h2> <h1 class="display-4"><?php echo $waiting_list; ?></h1>
    </div>
<center>
  <div class="row">
  <a href="employee.php?query=serve" class="card text-white bg-primary mb-3"  style="max-width: 20rem; margin: 18px;">
  <div class="card-header">Raise people served counter</div>
  <div class="card-body">
    <h4 class="card-title">Customer Served</h4>
    <p class="card-text">Click this card if one transcation is completed..</p>
  </div>
</a>

<a href="employee.php?query=end" class="card text-white bg-success mb-3"  style="max-width: 20rem; margin: 18px;">
  <div class="card-header">Close the day's collection</div>
  <div class="card-body">
    <h4 class="card-title">End of the day</h4>
    <p class="card-text">Click this card when all the transactions are done and bank is supposed to be closed</p>
  </div>
</a>
<?php
    if(isset($_GET['query'])){
      if($_GET['query']=="serve"){
      $customer_served=raise_serve($con,$customer_served+1);

        echo "<script>alert('customer Served')</script>";
        echo "<script>window.open('employee.php','_self')</script>";
    }
    elseif ($_GET['query']=="end") {
      end_of_day($con,$token_raised,$customer_served);
         echo "<script>alert('Day Ended...')</script>";
        echo "<script>window.open('employee.php','_self')</script>";
    }
  }
    ?>

  </div>
</div>
  </div>

</center>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
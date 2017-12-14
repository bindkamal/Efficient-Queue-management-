<!DOCTYPE html>
<html>
<head>
	<title>Banks's Status</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.css" crossorigin="anonymous">
	<script src="bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- navbar -->
 
 <!-- navbar -->
	<?php include 'imports/connection.php'; ?>
  <?php include 'imports/calculate.php'; ?>
  
 <div class="container"  style="margin-top: 50px;">

<div class="row">
  
  <div class="card text-white bg-success mb-3" style="max-width: 20rem; margin: 18px;" >
  <div class="card-header">No of people served today</div>
  <div class="card-body">
    <h1 class="card-title"><?php echo $customer_served; ?></h1>
    <p class="card-text">add some more related info</p>
  </div>


</div><div class="card text-white bg-primary mb-3" style="max-width: 20rem; margin: 18px;">
  <div class="card-header">No of tokens raised</div>
  <div class="card-body">
    <h1 class="card-title"><?php echo $token_raised; ?></h1>
    <p class="card-text">add some more related info</p>
  </div>
</div>

<div class="card text-white bg-danger mb-3" style="max-width: 20rem; margin: 18px;" >
  <div class="card-header">Waiting List</div>
  <div class="card-body">
    <h1 class="card-title"><?php echo $waiting_list; ?></h1>
    <p class="card-text">add some more related info</p>
  </div>


</div>

<div class="card text-white bg-warning mb-3" style="max-width: 20rem; margin: 18px;">
  <div class="card-header">Current token no. in service</div>
  <div class="card-body">
    <h1 class="card-title"><?php echo $current_token_in_service; ?></h1>
    <p class="card-text">add some more related info</p>
  </div>


</div>
</div>
<hr>
<center>
    <?php
    if(isset($_GET['flag'])){
      $token_raised=raise_token($con,$token_raised+1);
        echo "<script>window.open('page2.php','_self')</script>";
    }
    else{
      echo'
        <form action="page2.php?flag=true" method="POST" style="margin-top: 50px;">
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Enter your phone number..." aria-label="Enter your phone number...">
          <span class="input-group-btn">
            <input class="btn btn-info" type="submit" name="token" value="Raise Token!"></input>
          </span>
        </div>
      </div>
    </div>
  </form>
      ';
    }
    ?>
</center>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Gatekeepr's Space</title>
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
      <h2 class="display-6">No of customer served</h2> <h1 class="display-4"><?php echo $customer_served; ?></h1>
    </div>
	
    <div class="alert alert-danger" style="margin: 20px;" role="alert">
      <h2 class="display-6">Waiting List</h2> <h1 class="display-4"><?php echo $waiting_list; ?></h1>
    </div>

    <div class="row" style="margin-top: inherit;">

      <a href="watchman.php?query=generate" class="card text-white bg-dark mb-3" style="max-width: 20rem;margin-right: auto;margin-left: auto;">
        <div class="card-header">Generate new Token</div>
        <div class="card-body">
          <h4 class="card-title">New Token Genrator</h4>
          <p class="card-text">Clicking this card will generate new token.</p>
        </div>
      </a>



    </div>
  </div>
  <?php
    if(isset($_GET['query']) && $_GET['query']=="generate"){
      $token_raised=raise_token($con,$token_raised+1);

        echo "<script>alert('tickets raised')</script>";
        echo "<script>window.open('watchman.php','_self')</script>";
    }
    ?>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
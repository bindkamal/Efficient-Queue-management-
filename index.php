<!DOCTYPE html>
<html>
<head>
	<title>Enter the details</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.2/dist/css/bootstrap.css" crossorigin="anonymous">
	<script src="bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- navbar -->

 <!-- navbar -->
 <div class="container">

  <!-- table -->
  <form action="page2.php" method="POST">

    <table class="table table-striped" style="margin-top: 50px;">
      <thead>
        <tr >
          <th scope="col" colspan="2" style="text-align: center;"> 
            <h2 class="alert alert-primary">Please Choose The Branch Details</h2>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>State Name</td>
          <td>
            <select class="form-control" name="state">
              <option selected>State</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
			  <option value="Delhi">Delhi</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>District Name</td>
          <td>
            <select class="form-control" name="district">
              <option selected>District</option>
              <option value="Pune">Pune</option>
			  <option value="Mumbai">Mumbai</option>
			  <option value="Nasik">Nasik</option>
			  <option value="Satara">Satara</option>
            </select>
          </td>     
        </tr>
        <tr>
          <td>Branch</td>
          <td>
            <select class="form-control" name="branch">
              <option selected>Branch</option>
			  <option value="DCB Baner">DCB Baner</option>
			  <option value="DCB Shivaji nagar">DCB Shivaji nagar</option>
			  <option value="DCB Talegaon">DCB Talegaon</option>
			  <option value="DCB Akurdi">DCB Akurdi</option> 
            </select>
          </td>     
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;">
            <input type="submit" class="btn btn-success" name="submit_things">
          </td>
        </tr>
      </tbody>
    </table>
    <!-- table -->
  </form>
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
$customer_served;
$token_raised;
$current_token_in_service;
$waiting_list;
$day;

$query="SELECT * FROM customer_served";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$customer_served=$row['data'];

$query="SELECT * FROM token_raised";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$token_raised=$row['data'];

$query="SELECT * FROM current_day";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$day=$row['data'];

$waiting_list = $token_raised - $customer_served;
$current_token_in_service = $customer_served + 1;

function raise_token($con,$val){
	$query="UPDATE token_raised SET data='".$val."'";
	$result=mysqli_query($con,$query);
	if($result){
	return $val;
	}
	else{
		return $val-1;
	}
	
	#$query="INSERT INTO token_servable(data) VALUES('".$val."')";
	#$result=mysqli_query($con,$query);
}

function raise_serve($con,$val){
	$query="UPDATE customer_served SET data='".$val."'";
	$result=mysqli_query($con,$query);
	if($result){
	return $val;
	}
	else{
		return $val-1;
	}
	
	#$query="DELETE FROM token_servable where data='".$val."'";
	#$result=mysqli_query($con,$query);
	
}

function end_of_day($con,$customer_served,$token_raised){
	$query="SELECT * FROM current_day";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);
	$day=$row['data'];
	$day = $day+1;
	$query="INSERT INTO daily_record(day, customer_served, token_raised) VALUES 	('".$day."','".$token_raised."','".$customer_served."')";
	$result=mysqli_query($con,$query);
	if($result){
	// echo "sucess";
	
	}
	else{
	echo "unsucess";
	}
	
	$query="UPDATE current_day SET data='".$day."'";
	$result=mysqli_query($con,$query);
	if($result){
	// echo "sucess";
	
	}
	else{
	echo "somthing went wrong";
	}
	
	$token_raised = 0;
	$query="UPDATE token_raised SET data='".$token_raised."'";
	$result=mysqli_query($con,$query);
	if($result){
	// echo "sucess";
	
	}
	else{
	echo "somthing went wrong";
	}
	
	$customer_served = 0;
	$query="UPDATE customer_served SET data='".$customer_served."'";
	$result=mysqli_query($con,$query);
	if($result){
	// echo "sucess";
	
	}
	else{
	echo "somthing went wrong";
	}
	

	#$query="delete from token_servable where data <1000";
	#$result=mysqli_query($con,$query);

	
	
}


?>

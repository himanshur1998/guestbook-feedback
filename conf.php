<?php
session_start();

// initializing variables
$service_id = "";
$service_name    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// Add Service
if (isset($_POST['add'])) {
  // receive all input values from the form
  $service_id = mysqli_real_escape_string($db, $_POST['service_id']);
  $service_name = mysqli_real_escape_string($db, $_POST['service_name']);
 //orm validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($service_id)) { array_push($errors, "Service_id is required"); }
  if (empty($service_name)) { array_push($errors, "Service_name is required"); }
 
  

  // first check the database to make sure 
  // a service does not already exist with the same service_id and/or service_name
  $service_check_query = "SELECT * FROM service WHERE service_id='$service_id' OR service_name='$service_name' LIMIT 1";
  $result = mysqli_query($db, $service_check_query);
  $service = mysqli_fetch_assoc($result);
  
  

  // Finally, service add if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO service (service_id, service_name) 
  			  VALUES('$service_id', '$service_name')";
  	mysqli_query($db, $query);
  	$_SESSION['service_id'] = $service_id;
  	$_SESSION['success'] = "service add on";
    $_SESSION['added'] = "true";
  }
  header("Location: addservice.php");
}

?>
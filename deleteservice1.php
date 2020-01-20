<?php
//session_start();

// initializing variables
$service_id = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');


if (isset($_POST['reg_user'])) {
  // receive  input values from the form
  $service_id = $_POST['service_id'];

    $query_run = $db->query("DELETE FROM `service`  WHERE `service_id`='$service_id'");
    
     if($query_run){
      echo "service delete";
    }
    else{
      echo "Can't delete";
    }
 
}
?>
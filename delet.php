<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');


if (isset($_POST['reg_user'])) {
  // receive  input values from the form
  $username = $_POST['username'];

    $query_run = $db->query("DELETE FROM users  WHERE username='$username' ");
    
     if($query_run){
       echo '<script>alert("DELETE Successfully!!!");</script>';
      echo '<script>location.href="login.php"</script>';
    }else{
      echo "Can't delete";
    }
 
}
?>
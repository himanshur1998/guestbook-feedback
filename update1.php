<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  $fname = $_POST['fname'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $mob = $_POST['mob'];
  $address = $_POST['address'];

 
    $query_run = $db->query("UPDATE users SET password='$password_1',fname='$fname',dob='$dob',gender='$gender',mob='$mob',address='$address' WHERE username='$username' ");
    //}

    if($query_run){
      //echo "UPDATED successfully";
      echo '<script>alert("Updated Successfully!!!");</script>';
      echo '<script>location.href="welcome.php"</script>';
    }else{
      echo "Can't Update";
    }
 // }
}



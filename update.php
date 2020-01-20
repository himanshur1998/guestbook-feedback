<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>UPDATE</h2>
  </div>
	<?php
  $username = $_SESSION['username'];
  $query= $db->query("SELECT * from users WHERE username='$username';");
  while($row = mysqli_fetch_array($query))
  {
  
  ?>
  <form method="post" action="update1.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" readonly value="<?php echo $row['username']; ?> "  >
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $row['email']; ?>" readonly />
  	</div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" value="<?php echo $row['password'];  ?>">
  	</div>

  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" value="<?php echo $row['password'];  ?>">
  	</div>

  	<div class="input-group">
    <label >Your Full Name </label>
    <input type="text" name="fname" value="<?php echo $row['fname'];  ?>">
    </div>

   <div class="input-group">
    <label >Your Date Of Birth </label>
    <input type="date" name="dob"  value="<?php echo $row['dob']; ?>">
    </div>

   <div class="input-group">
    <label >Gender </label>
   </div>

   <div>
    <label>Male: </label>
    <input type="radio" name="gender"  value="Male"<?php echo $row['gender']=="Male"?"checked":" " ?>>
    <label>Female: </label>
    <input type="radio" name="gender"  value="female" <?php echo $row['gender']=="female"?"checked":" "?>>
    </div>

    <div class="input-group">
    <label>Mobile No: </label>
    <input type="text" name="mob"  value="<?php echo $row['mob']; ?>">
   </div>

   <div class="input-group">
    <label >Address: </label>
    <input type="text" name="address"  value="<?php echo $row['address']; ?>"">
   </div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Update</button>
  	</div>
  <?php 
}
?>
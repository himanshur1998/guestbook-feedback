<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Delete</h2>
  </div>
  <?php
  $username = $_SESSION['username'];
  $query= $db->query("SELECT * from users WHERE username='$username';");
  while($row = mysqli_fetch_array($query))
  {
  
  ?>
  <form method="post" action="block1.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username"   >
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Delete</button>
    </div>
  <?php 
}
?>
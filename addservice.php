<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Service</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
  if (isset($_SESSION['added'])) {
    echo "<center><h2 style='color: green;'>** Service successfully added. **</h2></center>";
    unset($_SESSION['added']);
  } ?>
  <div class="header">
  	<h2>ADD SERVICE</h2>
  </div>
	
  <form method="post" action="conf.php">
  	<div class="input-group">
  	  <label>service_id</label>
  	  <input type="text" name="service_id" >
  	</div>

  	<div class="input-group">
  	  <label>Servicename</label>
  	  <input type="text" name="service_name" >
  	</div>

     <div class="input-group">
  	  <button type="submit" class="btn" name="add">ADD</button>
  	</div>
  	
  	
  </form>
</body>
</html>
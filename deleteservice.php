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

  <form method="post" action="deleteservice1.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Service id</label>
      <input type="text" name="service_id" >
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Delete</button>
    </div>
  </form>
</body>
</html>
 
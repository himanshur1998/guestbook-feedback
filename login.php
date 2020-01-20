<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>LOGIN</h2>
  </div>
	
  <form method="post" action="login_1.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" required>
  	</div>

  	

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" required>
  	</div>

    <div class="input-group">
      <input type="submit" class="btn" name="reg_user" value="Log in">
    </div>
  </form>
</body>
</html>
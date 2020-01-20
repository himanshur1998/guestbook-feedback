
<?php session_start();
//require 'conf.php';
$con=new mysqli("localhost","root","","registration");
?>
<html>
	<head>
			<title>Feedback Form</title>
      <link rel="stylesheet" href="files/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}


.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


.button1 {
border-radius: 8px;font-size: 16px;

}
.button2 {
border-radius: 8px;font-size: 16px;

}

.button3 {
border-radius: 8px; font-size: 16px;}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}


.button:hover span {
  padding-right: 25px;

  }
  
  
.button:hover span:after {
  opacity: 1;
  right: 0;
}

.button1:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button3:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button4:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>
</head>

<body style="background:linear-gradient(#feac5e,#c779d0,#4bc0c8);">
	<div class="container">
        <h1 style="color:black;font-weight:bold;margin-top:20px" align="center">Give Us Feedback</h1>
			<div class="line" style="border:1px solid red;"></div>
		<div class="row">
					
					
					<div class="col-sm-3" style="border-right:1px solid red;margin-left:30px;margin-top:30px;">
          <a href="update.php" class="button button1" style="text-decoration: none">Update Profile </a>
           <a href="delete.php" class="button button1" style="text-decoration: none">Delete Profile</a>
            <a href="logout.php" class="button button1" style="text-decoration: none">logout </a>
					
					</div>
          <form method="post" action="welcome1.php">
	
					<div class="col-sm-6" style="margin-top:20px;margin-left:20px">
						<p style="color:red;font-size:25px;">Please provide your feedback below:</p>
						<div class="row">
               			<label>How do you rate your overall experience?</label>
               		</div></br>
                	<p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="good" >
                    Good
                    </label>
                     <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="excellent" >
                    Excellent
                    </label>

                	</p>
						<p style="color:blue;font-size:22px;">Select Service:</p>
						<select style="width:200px"; name = "select_service">
						<option value="select">Select</option>
            <?php $result = $con->query("SELECT * FROM `service` "); 
            while($row = $result->fetch_assoc()){ ?>
              <option value="<?php echo $row['service_id'] ?> "><?php echo $row['service_name'] ?></option>
            <?php }
            ?>
						
						</select>
						
						
							<div class="row" style="margin-top:20px;margin-left:1px">
							


								<div class="col-sm-12 form-group">
									<label for="comments" style="font-size:20px;margin-top:10px;margin-left:-15px;color:blue;">Comments:</label>
                    
								<textarea style="margin-left:-15px;" class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
								</div>
							</div>
					<div class="row">
						<div class="col-sm-12 form-group">
						<button type="submit" class="btn btn-lg btn-warning btn-block" >Submit </button>
						<button type="submit" class="btn btn-lg btn-warning btn-block" >Clear </button>
						
						</div>
					</div>
        </form>
        </div>
		</div>
	</div>
 </body>
 </html>
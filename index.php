<?php
	session_start();

	# Check for session timeout, else initiliaze time
	if (isset($_SESSION['timeout'])) {	
		# Check Session Time for expiry
		#
		# Time is in seconds. 10 * 60 = 600s = 10 minutes
		if ($_SESSION['timeout'] + 30 * 30 < time()){
			session_destroy();
		}
	}
	else {
		# Initialize variables
		$_SESSION['pass']="";
		$_SESSION['timeout']=time();
	}

	# Store POST data in session variables
	if (isset($_POST["pass"])) {	
		$_SESSION['pass']=hash('sha256',$_POST['pass']);
	}

	# Check Login Data
	#
	# Password is hashed (SHA256). In this case it is 'admin'.
	if($_SESSION['pass'] == "8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918")
	{
		# Load content from local storage
		include("../safe/control.php");
	}
	else
	{
		# Show login form. Request for username and password
		{?>
			<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<body style="background-color:#00384d">
<style>
.bg-2 {
background-color: #00384d;
color :#ffffff;
}
.bg-1 { 
    background-color: #80dfff; /* Green */
    color: #ffffff;
}
</style>
<div class="container-fluid bg-1 text-center center-block">
<h3>Thou shall not pass!</h3>	<br><br>
 <div class="col-sm-4"></div>
 <div class="col-sm-4">
				<form method="POST" action="">
					Password: <input type="password" name="pass" class="form-control"><br/>
					<input type="submit" name="submit" value="Login" class="form-control">
				</form>

</div>
</div>
<div class="container-fluid bg-2 text-center">
<br>
<div-class=col-sm-12">
<h4>The HOME project<h4>
<h1><span class="glyphicon glyphicon-flash"></span></h1>
</div></div>

			</body>
			</html>	
		<?}
	}
?>
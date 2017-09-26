<?php
$switch = $_GET['switch'];
if($switch == "on") {
  $file = fopen("../public_html/switch.json", "w");
  fwrite($file, '{"Switch": "on"}');
  fclose($file);
} 
else if ($switch == "off") {
  $file = fopen("../public_html/switch.json", "w");
  fwrite($file, '{"Switch": "off"}');
  fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	<body>
	<div class="container-fluid">
		<div class = "col-sm-12">
		<h1 class = "text-center display-1">Welcome<small>, Harsh </small></h1>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br><br><br>
	<div class="row">
	<div class="col-md-3">
        </div>
        <div class="col-md-2">
            <a href="?switch=on" class="btn btn-primary btn-lg btn-block btn-huge"><span class="glyphicon glyphicon-flash"></span> On</a>
        </div>
		<div class="col-md-2">
            
        </div>
        <div class="col-md-2">
            <a href="?switch=off" class="btn btn-primary btn-lg btn-block btn-huge"><span class="glyphicon glyphicon-flash"></span> Off</a>
        </div>
		<div class="col-md-3">
        </div>
		</div>
		<br>
		<br>
		<br>
		<div class="col-md-3">
		</div>
		<div class="light-status well col-md-6" style="margin-top: 5px; text-align:center">
          <?php
		  $var = file_get_contents("../public_html/switch.json");
		  $string = json_decode($var, true);
echo ("Current status : ");		  
echo ($string["Switch"]);
          ?>
		</div>
		<div class="col-md-3"></div>

	</body>
  </head>
  
</html>		
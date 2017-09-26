<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<body style="background-color:#00384d">
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <style>
	
::-webkit-input-placeholder { /* Chrome */
  color: black;
}
:-ms-input-placeholder { /* IE 10+ */
  color: black;
}
::-moz-placeholder { /* Firefox 19+ */
  color: black;
  opacity: 1;
}
:-moz-placeholder { /* Firefox 4 - 18 */
  color: black;
  opacity: 1;
}
	
	.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
	
	input {
  border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 2px solid #00384d;
}
	/* Material style */
	.div
	{
	background-color:black;
	height:100%;
	width:100%;
	}
	.bggg
	{
	background-color:#80dfff;
	}
	.bggg.colorswitch { background-color: #00cc00; }
.button.black{
background-color:black;
}
.button {
box-shadow: 0px 0px 15px grey;
outline: none;
  border: none;
  display: block;
  cursor: pointer;
  color: #00384d;
  padding: 65px 45px;
  border-radius: 50%;
  font-size: 80px;
  line-height:30px;
  background: #ffffff;
  overflow:hidden;
  position:relative;
}

.bgg {
background:black;
}

.button{
outline: none;
  position: relative;
  overflow: hidden;
}

.button:after {
overflow:hidden;
  position:relative;
outline: none;
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 13px;
  height: 13px;
  background: rgba(255, 219, 61, .5);
  opacity: 0;
  border-radius: 100%;
  transform: scale(1, 1) translate(-50%);
  transform-origin: 50% 50%;
}

@keyframes ripple {
  0% {
    transform: scale(0, 0);
    opacity: 1;
  }
  20% {
    transform: scale(25, 25);
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: scale(40, 40);
  }
}

.button:focus:not(:active)::after {
overflow:hidden;
  position:relative;
  animation: ripple 1s ease-out;
}
.bg-2 {
background-color: #00384d;
color :#ffffff;
}
.bg-3 {
background-color: #96a4b7
}
.bg-1 { 
    background-color: #80dfff;
    color: #ffffff;
}
</style>
<div class="container-fluid bggg text-center center-block">
<h1 class = "text-center display-1">Welcome<small>, Harsh </small></h1><br>
<h5><small>Press button to toggle the control</small></h5><br>
 <button class="button" id="lol" style="display: block; margin: 0 auto;">&#9728;</button>
	<script>
	$( "#lol" ).on( "click", function() {
	   $(this).toggleClass("black");
		$(this).toggleClass("colorswitch");
});
jQuery(document).ready(function($) {
    $("#detailsgiven").change(function() {
        if($(this).is(":checked")) {                
            $("#details").removeAttr("disabled");
        }
        else {
		 $("#details").attr("disabled", "disabled");
        }
    });
});
jQuery(document).ready(function($) {
    $("#schedule").change(function() {
        if($(this).is(":checked")) {                
            $("#start").removeAttr("disabled");
			$("#end").removeAttr("disabled");
        }
        else {
		 $("#start").attr("disabled", "disabled");
		 $("#end").attr("disabled", "disabled");
        }
    });
});

	</script>
	<br><br>
</div>
<div class="container-fluid bg-3 text-center">
<br>
<div class="col-sm-6">
<h4>Turn Off/On after</h5>
<form>
 <label class="switch">
  <input type="checkbox" name="detailsgiven" id="detailsgiven">
  <div class="slider round"></div>
</label>
    <br>
	<br>
    <input name="details" id="details" placeholder="Enter time in minutes" class="text-center"></input>
</form>
</div>
<div class="col-sm-6">
<h4>Scheduler</h5>
<form>
 <label class="switch">
  <input type="checkbox" name="schedule" id="schedule">
  <div class="slider round"></div>
</label>
    <br>
	<br>
    <input name="start" id="start" placeholder="Time to turn on" class="text-center"></input><br>
	<br><input name="end" id="end" placeholder="Time to turn off" class="text-center"></input>
</form>
</div>
<br>
<br>
</div>
<div class="container-fluid bg-2 text-center">
<br>
<div-class=col-sm-12">
<h4>The HOME project<h4>
<h1><span class="glyphicon glyphicon-flash"></span></h1>
<!-- <h6>&#169; Harsh Mandan, 2017</h6> -->
<h6>Harsh Mandan, 2017</h6>

</div></div>
</body>
</html>
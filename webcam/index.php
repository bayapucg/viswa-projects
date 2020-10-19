<?php 
	include("header.php");
	include('dbconnection.php');
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			background: #555;
		}
		
.blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: #000;    }
    49%{    color: #000; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #000;    }
}		
/* Firefox old*/
@-moz-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 

@-webkit-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
}
/* IE */
@-ms-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 
/* Opera and prob css3 final iteration */
@keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 
.blink-image {
    -moz-animation: blink normal 2s infinite ease-in-out; /* Firefox */
    -webkit-animation: blink normal 2s infinite ease-in-out; /* Webkit */
    -ms-animation: blink normal 2s infinite ease-in-out; /* IE */
    animation: blink normal 2s infinite ease-in-out; /* Opera and prob css3 final iteration */
}
.arrow-rotate {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}
	</style>
	</head>
	<body>
	<section >
		<div class="container mt-4">
			<h1 class="text-center text-white"><i>Welcome to Athom </i></h1>  
			<div class="row justify-content-center d-flex">
				<div class="col-md-4 mt-4">
					<img src="img/touch-icon.png" class="img-fluid">
				</div>
			</div>
			<div class="row justify-content-center d-flex">
				<div class="col-md-7">
					<h4 class="text-white">Place your finger on the sensor at the right hand side</h4>
				</div>
			</div>
			
		</div>
		<div >
				<img  style="position:absolute;right:0;top:50%;width:150px;" class="blink-image arrow-rotate" src="img/arrow.png" >
			</div>
		</section>
	</body>
</html>
<script>
	// setTimeout(function(){ 
		// var request = $.ajax({
			// url: 'checkdetails.php',
			// type: "POST",
			// dataType:'json',
			// data:{looser_form: 'looser_form'}               
		// });
		// request.done(function(msg) {
			// window.location = "results.php";
		// });
		// request.fail(function(jqXHR, textStatus) {
			// window.location = "index.php";
		// });
	// },3000);	
</script>

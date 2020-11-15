<?php 
	include("header.php");
	include('dbconnection.php');
	$query= $dbh->prepare("SELECT id,temp,spo2,bpm from pulseox WHERE statusflag=1 order by  id desc limit 1");
	$query->execute();
	$result=$query->fetch();
	$figureCheck = 0;
	$tempature = "";
	$spo2 = "";
	$bpm = "";
	$emprfid ="";
	$id =0;
	if(isset($result) && !empty($result) && count($result)>0){
		if(isset($result[0]) && $result[0]!=""){						
			$id = $result[0];
			$tempature   = $result[1];
			$spo2   = $result[2];
			$bpm    = $result[3];
			if(isset($result[4]) && $result[4]!=""){	
				$emprfid    = $result[4];
			}			
			$figureCheck=1;
		}else{
			$figureCheck=0;
		}
	}else{
		$figureCheck=0;
	}
?>
<style>
	.cust-wid{
		width:390px !important;
	}
	#my_camera{
		width:100%;
		height:100%;
	}
@media only screen and (max-width: 650px) {
	.cust-wid{
		.cust-wid{
		width:200px !important;
	}
		
	}
}
</style>
<body class="grad">  
	<div class="container-fluid">
		<div class="col-md-12">
			<h1 class="text-center site-col my-4 text-white stoke-apply" >ATOHM WELCOMES YOU</h1>
		</div>
		<form method="POST" id="readingform" name="readingform" action="storeImage.php" >
			<input type="hidden" id="tempature" name="tempature" value="<?php echo $tempature; ?>">
			<input type="hidden" id="spo2" name="spo2" value="<?php echo $spo2; ?>">
			<input type="hidden" id="bpm" name="bpm" value="<?php echo $bpm; ?>">
			<input type="hidden" id="emprfid" name="emprfid" value="<?php echo $emprfid; ?>">
			<input type="hidden" id="figureCheck" name="figureCheck" value="<?php echo $figureCheck; ?>">
			<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="image" class="image-tag">
			<div class="row d-flex justify-content-center">
				<div class="col-md-4 col-4 mt-4">
					<div class="mt-3 " id="my_camera"></div>
					<br/>
					
				</div>
				<div class="col-md-4 mt-4 col-4">
					<div class="row">
						<div class="mt-3 col-md-12">
							
							<input class="form-control rounded-0" type="number" name="phone_number" id="code" placeholder="Phone Number">
							<div class="btn-group-vertical  mt-1" role="group" aria-label="Basic example">					
								<div class="btn-group cust-wid" >
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value + '1';">1</button>
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value + '2';">2</button>
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value + '3';">3</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value + '4';">4</button>
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value + '5';">5</button>
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value + '6';">6</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value + '7';">7</button>
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value + '8';">8</button>
									<button type="button" class="btn btn-outline-secondary" onclick="document.getElementById('code').value=document.getElementById('code').value + '9';">9</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value.slice(0, -1);">&lt;</button>
									<button type="button" class="btn btn-outline-secondary " onclick="document.getElementById('code').value=document.getElementById('code').value + '0';">0</button>
									<button type="button" class="btn btn-primary " onclick="document.getElementById('code').value='';">CLEAR</button>
								</div>
							</div>
						</div>
						<!--<div class="mt-3 col-md-2">
							<label><strong> &nbsp;</strong></label>
							<div>
							<button onClick="validatefun();" type="button" id="btn_cnd" name="btn_cnd" class="btn btn-success rounded-0">Submit</button>
							</div>
						</div>-->
					</div>
				</div>
				<div class="col-md-4 mt-4 text-white col-4">
					<img src="img/rfid.png" class="img-fluid">
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-3 text-center">
					<input class="btn btn-primary rounded-0" id="preview-ope" type="button" value="Take Snapshot" onClick="validatefun()">
					<a href="javascript:void(0);" onClick="validate_form();" class="btn btn-warning rounded-0 text-white" type="button">Skip</a>
					
				</div>
			</div>
		</form>
	</div>
	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>
	
<div class="modal fade" id="validationPop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">		
		<h3 class="modal-title" id="myModalLabel">
			Validation Confirmation
		</h3>
		<button type="button" class="close" onClick="closereload();" title="Close"><span aria-hidden="true">&times;</span></button>
	  </div>
	  <div class="modal-body">
			<p>Place your finger on the right hand side with illustration.</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" onClick="closereload();">Ok</button>
	  </div>
	</div>
  </div>
</div>
<div class="modal fade" id="cvalidationPop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">		
		<h3 class="modal-title" id="myModalLabel">
			Confirmation
		</h3>
	</div>
	  <div class="modal-body">
			<p class="text-center">Saved.</p>
	  </div>	  
	</div>
  </div>
</div>	
	
<script language="JavaScript">
	$("#preview-ope").click(function(){
		// $(".show-priveiw").show();
	});
	function validatefun(){
		var flag = true;
		var spo2 = $("#spo2").val();
		var tempature = $("#tempature").val();		
		Webcam.snap( function(data_uri) {
			var figureCheck = $("#figureCheck").val();
			if(figureCheck==1){	
				if(data_uri!=""){				
					$(".image-tag").val(data_uri);
				} 
				flag = true; 
			}else{
				$("#validationPop").modal('show'); return false;	
			}                       
        });
		var code = $("#code").val();
		if(code!=""){
			if (code.length == 10) {
				flag = true;
			}else{
				alert('Please put 10  digit mobile number');
				$("#code").focus();
				flag = false;
				return false;
			}
		}
		if(tempature==""){
			$("#validationPop").modal('show'); return false;	
		}
		if(spo2==""){
			$("#validationPop").modal('show'); return false;	
		}
		var figureCheck = $("#figureCheck").val();
		if(figureCheck==1){
			$("#readingform").submit();
		}else{
			$("#validationPop").modal('show');
			 return false;	
		}
	}
	function closereload(){
		$("#validationPop").modal('hide');
		window.location = "index.php";
	}
	function validate_form(){
		var request = $.ajax({
			url: 'reloadreportsaving.php',
			type: "POST",
			dataType:'json',
			data:{looser_man: 'webcampage',looser_form: 'looser_form'}               
		});
		request.done(function(msg) {
			if(msg.message=='noresults'){
				window.location = "index.php";
			}else if(msg.message=='visitorsuccess'){
				window.location = "index.php";
			}else if(msg.message=='empsuccess'){
				// $("#cvalidationPop").modal('show');
				setTimeout(function(){ 
					window.location = "successinfo.php";
				},3000);
			}else{
				window.location = "index.php";
			}			
		});
		request.fail(function(jqXHR, textStatus) {
			alert("Request failed: " + textStatus);
		});
	}
    Webcam.set({
       
       
        image_format: 'jpeg',
        jpeg_quality: 90
    });  
	
    Webcam.attach( '#my_camera' );  
	setTimeout(function(){ 
		// var request = $.ajax({
			// url: 'reloadreportsaving.php',
			// type: "POST",
			// dataType:'json',
			// data:{looser_man: 'webcampage',looser_form: 'looser_form'}               
		// });
		request.done(function(msg) {
			if(msg.message=='noresults'){
				window.location = "index.php";
			}else if(msg.message=='visitorsuccess'){
				window.location = "index.php";
			}else if(msg.message=='empsuccess'){
				// $("#cvalidationPop").modal('show');
				setTimeout(function(){ 
					window.location = "successinfo.php";
				},3000);
			}else{
				window.location = "index.php";
			}			
		});
		request.fail(function(jqXHR, textStatus) {
			alert("Request failed: " + textStatus);
		});
	},6000);
</script>
 
</body>
</html>
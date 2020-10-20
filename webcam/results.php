<?php 
	include("header.php"); 
	include('dbconnection.php');
	// echo "Hello";exit;
	$emprfid =0;
	$query= $dbh->prepare("SELECT id,temp,spo2,bpm from pulseox WHERE statusflag=1 order by  id desc limit 1");
	$query->execute();
	$result=$query->fetch();
	$figureCheck = 0;
	$tempature = "";
	$spo2 = "";
	$bpm = "";	
	$pulseoxid =0;
	if(isset($result) && !empty($result) && count($result)>0){
		if(isset($result[0]) && $result[0]!=""){						
			$pulseoxid = $result[0];
			$tempature   = $result[1];
			$spo2   = $result[2];
			$bpm    = $result[3];
			// Check Employee is already logged or not
			$query2= $dbh->prepare("SELECT id,card_uid,username,serialnumber from users_logs WHERE lastidenityflag=1 order by  id desc limit 1");
			$query2->execute();
			$result2=$query2->fetch();
			if(isset($result2) && !empty($result2) && count($result2)>0){
				if(isset($result2[0]) && $result2[0]!=""){
					$uattid = $result2[0];
					$card_uid = $result2[1];
					$username   = ucfirst($result2[2]);
					$serialnumber   = $result2[3];
					$reportertype ='Employee';
					// Reports Inserting process
					$query = $dbh->prepare("INSERT INTO `athomreports` SET `reportertype`='$reportertype',`employee_rfid`='$card_uid',`card_uid`='$card_uid',`username`='$username',`serialnumber`='$serialnumber',`temp`='$tempature',`spo2`='$spo2',`bpm`='$bpm'");
					$query->execute();
					$stmt   = $dbh->query("SELECT LAST_INSERT_ID()");
					$result = $stmt->fetch(PDO::FETCH_ASSOC);
					$LastID=0;
					if(isset($result['LAST_INSERT_ID()']) && $result['LAST_INSERT_ID()']!=""){
						$LastID = $result['LAST_INSERT_ID()']; 
						if($LastID!=0){ 
							$custid = md5($LastID);
							$roww = array(
								'id' =>$LastID,
							);
							$query = $dbh->prepare("UPDATE `athomreports` SET `custid`='$custid' WHERE `id`=?");
							$query->execute(array_values($roww));
							if(isset($pulseoxid) && $pulseoxid!=0){								
								$row = array(
									'id' =>$pulseoxid,
								);
								$query = $dbh->prepare("UPDATE `pulseox` SET `statusflag`=0 WHERE `id`=?");
								$query->execute(array_values($row));
								$row = array(
									'id' =>$uattid,
								);
								$query = $dbh->prepare("UPDATE `users_logs` SET `lastidenityflag`=0 WHERE `id`=?");
								$query->execute(array_values($row));
							}					
							$idd = md5($LastID);							
						}
					}
				}
			}
			$figureCheck=1;		
	?>
	<input type="hidden" id="employeeid" name="employeeid" value="<?php echo $emprfid; ?>">
	<body class="grad" style="height:96vh"> 
		<div class="content ">
			<div class="container mt-4">
				<div class="my-4 text-center">
					<h1 class="text-white">ATOHM Report</h1>
				</div>
				<div class="row my-4  py-4 mx-1 d-flex justify-content-center" >
					<div class="col-md-2">
						<div>
							<img src="img/temperture.png" class="img-fluid">
						</div>
						<div class="text-center bord text-white">							
							<?php
								echo $tempature;
							?><sup>o</sup>F
						</div>
						<div class="text-center lab-text">
							Temperature
						</div>
						
					</div>
					<div class="col-md-2">
						<div>
							<img src="img/oxygen.png" class="img-fluid">
						</div>
						<div class="text-center  bord text-white">
							<?php
								echo $spo2;
							?>
						</div>
							<div class="lab-text text-center">
							Sp O<sub>2</sub>
						</div>
						
					</div>
					<div class="col-md-2">
						<div>
							<img src="img/heart-rate.png" class="img-fluid">
						</div>
						<div class="text-center  bord text-white">
							<?php
								echo $bpm;
							?>
						</div>
							<div class="lab-text text-center">
							bpm
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<script>
	setTimeout(function(){ 
		var request = $.ajax({
			url: 'reloadreportsaving.php',
			type: "POST",
			dataType:'json',
			data:{looser_form: 'looser_form'}               
		});
		request.done(function(msg) {
			if(msg.message=='visitorsuccess'){
				window.location = "webindex.php";
			}else{
				window.location = "successinfo.php";
			}			
		});
		request.fail(function(jqXHR, textStatus) {
			window.location = "index.php";
		});
	},6000);	
</script>
<?php } }else { ?>
	<script>
		window.location = "index.php";
	</script>
<?php }  ?>

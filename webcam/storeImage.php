<?php
	include('dbconnection.php');
    if(isset($_POST['image']) && $_POST['image']!=""){
		$img     = $_POST['image'];			
		
		$folderPath = "upload/";
		$image_parts = explode(";base64,", $img);
		$image_type_aux = explode("image/", $image_parts[0]);
		$image_type = $image_type_aux[1];
	  
		$image_base64 = base64_decode($image_parts[1]);
		$fileName = uniqid() . '.png';
	  
		$file = $folderPath . $fileName;
		file_put_contents($file, $image_base64);
		// echo "<pre>";print_r($_POST);exit;
		$tempature ="";
		if(isset($_POST['tempature']) && $_POST['tempature']!=""){
			$tempature = $_POST['tempature'];
		}
		$spo2 ="";
		if(isset($_POST['spo2']) && $_POST['spo2']!=""){
			$spo2 = $_POST['spo2'];
		}
		$bpm ="";
		if(isset($_POST['bpm']) && $_POST['bpm']!=""){
			$bpm = $_POST['bpm'];
		}
		$emprfid =NULL;
		$username = NULL;
		$serialnumber   = NULL;
		$reportertype ="Visitor";
		if(isset($_POST['emprfid']) && $_POST['emprfid']!=""){
			$emprfid = $_POST['emprfid'];
			$reportertype = 'Employer';
		}else{
			// Check Employee is already logged or not
			$query2= $dbh->prepare("SELECT id,card_uid,username,serialnumber from users_logs WHERE lastidenityflag=1 order by  id desc limit 1");
			$query2->execute();
			$result2=$query2->fetch();
			if(isset($result2) && !empty($result2) && count($result2)>0){
				if(isset($result2[0]) && $result2[0]!=""){
					$uattid = $result2[0];
					$emprfid = $result2[1];
					$username   = ucfirst($result2[2]);
					$serialnumber = $result2[3];
					$reportertype ='Employee';
					$row = array(
						'id' =>$uattid,
					);
					$queryyy = $dbh->prepare("UPDATE `users_logs` SET `lastidenityflag`=0 WHERE `id`=?");
					$queryyy->execute(array_values($row));
				}
			}
		}
		$pNumber ="";
		if(isset($_POST['phone_number']) && $_POST['phone_number']!=""){
			$pNumber = $_POST['phone_number'];
		}	
		$query = $dbh->prepare("INSERT INTO `athomreports` SET `reportertype`='$reportertype',`employee_rfid`='$emprfid',`card_uid`='$emprfid',`username`='$username',`serialnumber`='$serialnumber',`temp`='$tempature',`spo2`='$spo2',`bpm`='$bpm',photoimge='$fileName',mobilenumber='$pNumber'");	
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
				if(isset($_POST['id']) && $_POST['id']!=0){
					$id = $_POST['id'];
					$row = array(
						'id' =>$id,
					);
					$query = $dbh->prepare("UPDATE `pulseox` SET `statusflag`=0 WHERE `id`=?");
					$query->execute(array_values($row));
				}					
				$idd = md5($LastID);
			?>				
			<script>
				window.location = "successinfo.php";
			</script>
		<?php }else{ ?>
				<script>
					window.location = "index.php";
				</script>
			<?php	}
		}else{ ?>
			<script>
				window.location = "index.php";
			</script>
		<?php }
		
}else{ ?>
	<script>
		window.location = "index.php";
	</script>
<?php } 
?>
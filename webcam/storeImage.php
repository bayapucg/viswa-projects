<?php
	include('dbconnection.php');
    if(isset($_POST['image']) && $_POST['image']!=""){
		if(isset($_POST['phone_number']) && $_POST['phone_number']!=""){
			$img     = $_POST['image'];			
			// echo "<pre>";print_r($_POST);exit;
			$folderPath = "upload/";
			$image_parts = explode(";base64,", $img);
			$image_type_aux = explode("image/", $image_parts[0]);
			$image_type = $image_type_aux[1];
		  
			$image_base64 = base64_decode($image_parts[1]);
			$fileName = uniqid() . '.png';
		  
			$file = $folderPath . $fileName;
			file_put_contents($file, $image_base64);
			
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
			$reportertype ="Visitor";
			if(isset($_POST['emprfid']) && $_POST['emprfid']!=""){
				$emprfid = $_POST['emprfid'];
				$reportertype = 'Employer';
			}
			$pNumber ="";
			if(isset($_POST['phone_number']) && $_POST['phone_number']!=""){
				$pNumber = $_POST['phone_number'];
			}	
			$query = $dbh->prepare("INSERT INTO `athomreports` SET `reportertype`='$reportertype',`employee_rfid`='$emprfid', `photoimge`='$fileName',`mobilenumber`='$pNumber',`temp`='$tempature',`spo2`='$spo2',`bpm`='$bpm'");
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
					window.location = "results.php?resid=<?php echo $idd; ?>";
				</script>
		<?php }else{
					echo "Kumar";exit;
				}
			}else{
				echo "Dileep";exit;
			}
		}else{
			echo json_encode(array('status'=>FALSE,'output'=>"Phone number is required."));exit; 	
		} 
	}else{
		echo json_encode(array('status'=>FALSE,'output'=>"Image is required."));exit; 	
	} 
?>
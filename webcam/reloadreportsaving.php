<?php 
	include('dbconnection.php');
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
					$emprfid = $result2[1];
					$username   = ucfirst($result2[2]);
					$serialnumber   = $result2[3];
					$reportertype ='Employee';
					// Reports Inserting process
					$query3 = $dbh->prepare("INSERT INTO `athomreports` SET `reportertype`='$reportertype',`employee_rfid`='$emprfid',`card_uid`='$emprfid',`username`='$username',`serialnumber`='$serialnumber',`temp`='$tempature',`spo2`='$spo2',`bpm`='$bpm'");
					$query3->execute();
					$stmt3   = $dbh->query("SELECT LAST_INSERT_ID()");
					$result3 = $stmt3->fetch(PDO::FETCH_ASSOC);
					$LastID=0;					
					if(isset($result3['LAST_INSERT_ID()']) && $result3['LAST_INSERT_ID()']!=""){
						$LastID = $result3['LAST_INSERT_ID()']; 
						if($LastID!=0){ 
							$custid = md5($LastID);
							$roww = array(
								'id' =>$LastID,
							);
							$query = $dbh->prepare("UPDATE `athomreports` SET `custid`='$custid' WHERE `id`=?");
							$query->execute(array_values($roww));
							if($pulseoxid!=0){								
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
				$figureCheck=1;
				echo json_encode(array('status'=>true,'message'=>'empsuccess'));exit;	
			}else{
				/*
				if(isset($_POST['looser_man']) && $_POST['looser_man']!=""){
					$looser_man = $_POST['looser_man'];
					$emprfid = NULL;
					$card_uid = NULL;
					$username   = NULL;
					$reportertype ='Visitor';
					// Reports Inserting process
					$query = $dbh->prepare("INSERT INTO `athomreports` SET `reportertype`='$reportertype',`employee_rfid`='$emprfid',`card_uid`='$card_uid',`username`='$username',`temp`='$tempature',`spo2`='$spo2',`bpm`='$bpm'");
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
							}					
							$idd = md5($LastID);							
						}
					}
				}
				*/
				echo json_encode(array('status'=>true,'message'=>'visitorsuccess'));exit;
			}				
		}
	}else{
		echo json_encode(array('status'=>true,'message'=>'noresults'));exit;
	}
?>
<?php
	
	include('dbconnection.php');	
	$query= $dbh->prepare("SELECT id,datetime,temp from pulseox where statusflag=1 order by  id desc limit 1");
	$query->execute();
	$result=$query->fetch();
	if(isset($result) && !empty($result) && count($result)>0){
		if(isset($result[0]) && $result[0]!="")
			$last_update = $result[0];
			$temp_data   = $result[1];
			$id = $result[2];
			if($id!=""){
				echo json_encode(array('status'=>true,'message'=>'success'));exit;	
			}else{
				echo json_encode(array('status'=>false,'message'=>'fail'));exit;	
			}
	}else{
		echo json_encode(array('status'=>false,'message'=>'fail'));exit;	
	}

?>
<?php 
	include('dbconnection.php');
	session_start();
	if(isset($_SESSION['userid']) && $_SESSION['userid']!=""){
		$filename = 'athomreports_'.date('YmdHis').'.csv'; 
	    header("Content-Description: File Transfer"); 
	    header("Content-Disposition: attachment; filename=$filename"); 
	    header("Content-Type: application/csv; ");	   
			$fromDate = "";
		$toDate ="";
		if(isset($_GET['fromDate']) && $_GET['fromDate']!=""){
			$fromDate = $_GET['fromDate'];
			if(isset($_GET['toDate']) && $_GET['toDate']!=""){
				$toDate = $_GET['toDate'];
			}else{
				$toDate = $_GET['fromDate'];
			}
		}
		if($fromDate!=""){
			$stmt = $dbh->query("SELECT * FROM athomreports WHERE DATE(createdat) between '$fromDate'	AND '$toDate' ORDER BY id DESC");
		}else{
			$stmt = $dbh->query("SELECT * FROM athomreports ORDER BY id DESC");
		}		
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$file = fopen('php://output', 'w');	 
		$header = array("Employee/Visitor", "EmployeeRFID", "Mobile", "Tempature", "SPO2", "HeartBeet", "Visited Date"); 
		fputcsv($file, $header);
		if(isset($resultSet) && !empty($resultSet) && count($resultSet)>0){ 
			foreach($resultSet as $line){ 
				fputcsv($file,array(ucfirst($line['reportertype']),$line['employee_rfid'],$line['mobilenumber'],$line['temp'],$line['spo2'],$line['bpm'],$line['createdat'])); 
			}
		}
		fclose($file);exit; 
	}else{ ?>
		<script>	
			window.location = 'index.php';
		</script>	
<?php	
	}
?>

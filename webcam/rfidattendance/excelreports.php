<?php
session_start();
if (!isset($_SESSION['Admin-name'])) {
  header("location: login.php");
}
?>
<?php 
	require'connectDB.php';
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
		$sql = "SELECT * FROM athomreports WHERE DATE(createdat) between '$fromDate' AND '$toDate' ORDER BY id DESC";
	}else{
		$sql ="SELECT * FROM athomreports ORDER BY id DESC";
	}
	$resultt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($resultt, $sql)) {
		echo '<p class="error">SQL Error</p>';
	} 
	else{	
		mysqli_stmt_execute($resultt);
		$resultSet = mysqli_stmt_get_result($resultt);		
		$file = fopen('php://output', 'w');	 
		$header = array("Employee/Visitor", "EmployeeRFID", "Mobile", "Tempature", "SPO2", "HeartBeet", "Visited Date"); 
		fputcsv($file, $header);
		while ($line = mysqli_fetch_assoc($resultSet)){
			fputcsv($file,array(ucfirst($line['reportertype']),$line['employee_rfid'],$line['mobilenumber'],$line['temp'],$line['spo2'],$line['bpm'],$line['createdat'])); 
		}
		fclose($file);exit; 
	}
?>

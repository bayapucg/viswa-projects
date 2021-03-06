<?php include("header.php");?>
<body class="grad">
	<?php 
		include("sidebar.php");	
		include('dbconnection.php');		
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
	?>  
<div class="content-wrapper">
    <div class="container-fluid">		
		<div class="row my-4  py-4 mx-1" style="background:#ffffff54;">
			<div class="col-md-3">
				<label for="">From Date</label>
				<input type="date" class="form-control rounded-0" id="fromDate" value="<?php echo $fromDate; ?>" placeholder="Enter Name" >
			</div>
			<div class="col-md-3">
				<label for="">To Date</label>
				<input type="date" class="form-control rounded-0" id="toDate" value="<?php echo $toDate; ?>" placeholder="Enter Name" >
			</div>
			<div class="col-md-3">
				<label for="">&nbsp;</label>
				<div>
					<button type="button" onClick="reports();" class="btn btn-primary bg-white text-dark rounded-0">Filter</button>
				</div>
			</div>
			<div class="col-md-3">
				<label for="">&nbsp;</label>
				<div>
					<button type="button" onClick="reportstoexport();" class="btn btn-primary bg-white text-dark rounded-0">Export</button>
				</div>
			</div>
		</div>
	</div>
    <div class="container-fluid">	
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>User Information</th>
						<th>Report Information</th>
					</tr>
				</thead>
				<tbody>
					<?php if(isset($resultSet) && !empty($resultSet) && count($resultSet)>0){ foreach($resultSet as $result){ ?>
						<tr>
							<td><?php 
								echo ucfirst($result['reportertype']).'<br/>';
								if(isset($result['employee_rfid']) && $result['employee_rfid']!=NULL){
									if(isset($result['employee_rfid']) && $result['employee_rfid']!=NULL){
										echo ucfirst($result['employee_rfid']).'<br/>';
									}
								}else{ ?>
									<?php if(isset($result['photoimge']) && $result['photoimge']!="") { ?>
										<a href="javascript:void(0);" onclick="imabeviewfun(<?php echo $i; ?>);">Image view</a>
										<span id="imge_<?php echo $i; ?>">
											<div class="modal fade" id="validationPop_<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											  <div class="modal-dialog" role="document">
												<div class="modal-content">
												  <div class="modal-header">		
													<h3 class="modal-title" id="myModalLabel">
														Visitor image
													</h3>
													<button type="button" class="close" onClick="closereload(<?php echo $i; ?>);" title="Close"><span aria-hidden="true">&times;</span></button>
												  </div>
												  <div class="modal-body">
														<p><img id="in_<?php echo $i; ?>" src="../upload/<?php echo $result['photoimge']; ?>"></p>
												  </div>
												  <div class="modal-footer">
													<button type="button" class="btn btn-default" onClick="closereload(<?php echo $i; ?>);">Ok</button>
												  </div>
												</div>
											  </div>
											</div>
										</span>
									<?php } ?>
								<?php	echo ucfirst($result['mobilenumber']).'<br/>';
								}								
							?></td>
							<td><?php 
								echo "Tempature: ". $result['temp'].'<br/>';
								echo "SPO2: ".$result['spo2'].'<br/>';
								echo "Heartbeet: ". $result['bpm'].'<br/>';
							?></td>
						</tr>
					<?php } } ?>
				</tbody>
			</table>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#example').DataTable();				
			} );
			function reportstoexport(){
				var fromDate = $("#fromDate").val();
				if(fromDate!=""){					
					var tomDate = $("#toDate").val();
					if(tomDate!=""){
						tomDate = tomDate;
					}else{
						tomDate = fromDate;
					}
					window.location = "excelreports.php?fromDate="+fromDate+"&toDate="+tomDate;
				}else{
					window.location = "excelreports.php";
				}
			}
			function reports(){
				var fromDate = $("#fromDate").val();
				if(fromDate!=""){					
					var tomDate = $("#toDate").val();
					if(tomDate!=""){
						tomDate = tomDate;
					}else{
						tomDate = fromDate;
					}
					window.location = "athomreports.php?fromDate="+fromDate+"&toDate="+tomDate;
				}else{
					window.location = "athomreports.php";
				}
			}
			function imabeviewfun(valid){
				$("#validationPop_"+valid).modal('show');
			}
			function closereload(valid){
				$("#validationPop_"+valid).modal('hide');
				window.location = "reports.php";
			}
		</script>
	</div>
	</body>
</html>
<?php 
	include("header.php");
	include('dbconnection.php');
?>
<body class="grad">
	<?php 
		if(isset($_SESSION['userid']) && $_SESSION['userid']!=""){
			if(isset($_POST['uid']) && $_POST['uid']!=""){
				$uid = $_POST['uid'];
				$uemail = $_POST['uemail'];
				$uname = $_POST['uname'];
				$roww = array(
					'uid' =>$uid,
				);
				if(isset($_POST['password']) && $_POST['password']!=""){
					$password = md5($_POST['password']);
					$query = $dbh->prepare("UPDATE `adminlogins` SET `uname`='$uname',`uemail`='$uemail',`password`='$password'
					WHERE `uid`=?");
				}else{
					$query = $dbh->prepare("UPDATE `adminlogins` SET `uname`='$uname',`uemail`='$uemail' WHERE `uid`=?");
				}				
				$query->execute(array_values($roww));
			?>
			<script>
				window.location = "athomreports.php";
			</script>
		<?php
				
			}
		$uid    = $_SESSION['userid'];		
		include("sidebar.php");					
		$stmt   = $dbh->query("SELECT * FROM adminlogins WHERE uid = '$uid'");
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if(isset($result['uid']) && $result['uid']!=""){
			$uname = "";
			if(isset($result['uname']) && $result['uname']!=""){
				$uname = ucfirst($result['uname']);
			}
			$uemail = "";
			if(isset($result['uemail']) && $result['uemail']!=""){
				$uemail = $result['uemail'];
			}
		?>  
			<div class="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<h4>Profile Update</h4>
						</div>
					</div>
					<form method="post" id="profilesubmit" name="profilesubmit" >
						<div class="row">
							<div class="form-group col-md-6">
								<label for="">Name</label>
								<input type="hidden" id="uid" name="uid" value="<?php echo $result['uid']; ?>" >
								<input type="text" value="<?php echo $uname; ?>" class="form-control rounded-0" name="uname" id="uname" placeholder="Enter Name">
								<span id="error_uname" style="color:red;"></span>
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input type="email" value="<?php echo $uemail; ?>" class="form-control rounded-0" name="uemail" id="uemail" placeholder="Enter email">
								<span id="error_uemail" style="color:red;"></span>
							</div>
							<div class="form-group col-md-6">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control rounded-0" placeholder="Enter password" id="password" name="password">
							</div>
							<div class="col-md-12">
								<button onClick="submitform();" type="button" id="vaildate" name="validate" class="btn btn-primary ">Update</button>
							</div>
						</div>
					</form>
				</div>
			</div>	
		<?php }else{ ?>
			<script>
				window.location = "index.php";
			</script>
		<?php } ?>
	<?php }else{ ?>
		<script>
			window.location = "index.php";
		</script>
	<?php } ?>
	</body>
</html>
<script>
	function submitform(){
		var uname  = $("#uname").val();
		var uemail = $("#uemail").val();
		var flag = true;
		if(uname==""){
			flag = false;
			$("#error_uname").html('Username is required.');
		}
		if(uemail==""){
			flag = false;
			$("#error_uemail").html('Email is required.');
		}
		if(flag==false){
			return false;
		}else{
			$("#profilesubmit").submit();
		}
	}
</script>
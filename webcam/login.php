<?php include("header.php");
	include('dbconnection.php');
	$passwordError ="";
	$verifyError ="";
	$emailError ="";
	if(isset($_POST['submitre']) && $_POST['submitre']=="submitval"){
		if(isset($_POST['uemail']) && $_POST['uemail']!=""){
			if(isset($_POST['password']) && $_POST['password']!=""){
				$uemail   = $_POST['uemail'];
				$password = $_POST['password'];
				$stmt   = $dbh->query("SELECT * FROM adminlogins WHERE uemail = '$uemail' AND password= md5($password)");
				$result = $stmt->fetch(PDO::FETCH_ASSOC);
				if(isset($result['uid']) && $result['uid']!=""){
					$_SESSION['userid']   = $result['uid'];
					$_SESSION['username'] = $result['uname'];
				?>
				<script>
					window.location = "athomreports.php";
				</script>
		<?php
				}else{
					$verifyError ="Email and Password is invalid.";
				}
			}else{
				$passwordError ="Password is required.";
			}
		}else{
			$emailError ="Username is required.";
		}
	}
?>
	<body class="grad align-self-center" style="height:96vh;">  
		<div class="container">
			<div class="col-md-12">
				<h1 class="text-center site-col my-4 text-white stoke-apply" >ATOHM WELCOMES YOU</h1>
			</div>   
			<form id="loginForm" name="loginForm" method="POST">
				<div class="row d-flex justify-content-center mt-100">
					<div class="col-md-5 ">
						<div class=" card  mt-4" style="background:#ffffff66">
							<div class="card-header">
								<h4 class="text-center">Login</h4>
							</div>
							<div class="card-header">
								<div class="form-group">			  
									<input type="text" id="uemail" name="uemail" class="form-control rounded-0" placeholder="Enter user name">
									<span id="error_uemail" style="color:red;"><?php echo $emailError; ?></span>
								</div> 
								<div class="form-group">				
									<input type="password" id="password" name="password" class="form-control rounded-0" placeholder="Enter Password">
									<span id="error_password" style="color:red;"><?php echo $passwordError; ?></span>
								</div> 
								<input type="hidden" id="submitre" name="submitre" value="submitval">
								<span id="finalerror" style="color:red;"><?php echo $verifyError; ?></span></br>
								<div class="form-group">				
									<a style="background:#175a50;border:1px solid #0c332e" class="btn btn-primary rounded-0" href="javascript:void(0);" onClick="validate_url();" >Login</a>
								</div>
							</div>
						</div>
					</div>
				</div>   
			</form>
		</div>  
	</body>
	<script>
		function validate_url(){
			var uemail = $("#uemail").val();
			var password = $("#password").val();
			var flag =true;
			$("#error_uemail").html("");
			$("#error_password").html("");
			if(uemail==""){
				$("#error_uemail").html("Username is required.");
				flag =false;
			}
			if(password==""){
				$("#error_password").html("Pasword is required.");
				flag =false;
			}
			if(flag==false){
				return false;
			}else{
				$("#loginForm").submit();
			}
		}
	</script>
</html>
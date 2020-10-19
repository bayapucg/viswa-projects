<?php if(isset($_SESSION['userid']) && $_SESSION['userid']!=""){ ?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
     <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav navbar-sidenav">
          <a class="nav-link navlogo text-center" href="index.php">
            <img src="img/logo.png">
          </a>
			<li class="nav-item">
				<a class="nav-link sidefrst" href="athomreports.php">
					<span class="textside">Athom Reports</span>
				</a>	
			</li>      
			<li class="nav-item">
				<a class="nav-link sidesthrd" href="profile.php">
				<span class="textside">Account Setting</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link sidesthrd" href="logout.php">
				<span class="textside">Logout</span>
				</a>
			</li>
		</ul>      
		<ul class="navbar-nav2 ml-auto">
			<li class="dropdown" style="list-style-type:none">
				<?php if(isset($_SESSION['userid']) && $_SESSION['userid']!=""){ ?>
					<a href="profile.php" class="text-white" >Welcome <?php echo ucfirst($_SESSION['username']); ?> </a> 					
				<?php }else{ ?>
					<a href="javascript:void(0);" class="text-white">Welcome Athom</a>
				<?php } ?>
			</li>
		</ul>
    </div>
 </nav>
<?php }else{ ?>
	<script>
		window.location = "index.php";
	</script>
<?php } ?>

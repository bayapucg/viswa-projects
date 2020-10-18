<?php 
	$page=basename($_SERVER['PATH_INFO']);
	$abUs ="";
	$contUs ="";
	$homepage ="";
	$services ="";
	$signup ="";
	$signin ="";
	$productsmenu ="";
	$giftcardsmenu ="";
	$checker_cards ="";
	if($page=='aboutus'){
		$abUs ="active_menu";
	}else if($page=='products'){
		$productsmenu ="active_menu";
	}else if($page=='solid-slim-fit-shirt'){
		$productsmenu ="active_menu";
	}else if($page=='solid-cotton-polo-t-shirt'){
		$productsmenu ="active_menu";
	}else if($page=='slim-fit-solid-blazer'){
		$productsmenu ="active_menu";
	}else if($page=='pack-of-2-print-boxers'){
		$productsmenu ="active_menu";
	}else if($page=='mid-wash-skinny-fit-cropped-jeans-with-distressing'){
		$productsmenu ="active_menu";
	}else if($page=='genuine-leather-slip-on-shoes'){
		$productsmenu ="active_menu";
	}else if($page=='giftcards'){
		$giftcardsmenu ="active_menu";
	}else if($page=='contactus'){
		$contUs ="active_menu";
	}else if($page=='privacy-policy'){
		$abUs ="active_menu";
	}else if($page==''){
		$homepage ="active_menu";
	}else if($page=='/'){
		$homepage ="active_menu";
	}else if($page=='index.php'){
		$homepage ="active_menu";
	}else if($page=='terms'){
		$abUs ="active_menu";
	}else if($page=='signup'){
		$homepage ="active_menu";
	}else if($page=='login'){
		$homepage ="active_menu";
	}else if($page=='walmart'){
		$giftcardsmenu ="active_menu";
	}else if($page=='home'){
		$giftcardsmenu ="active_menu";
	}else if($page=='bestbuy'){
		$giftcardsmenu ="active_menu";
	}else if($page=='sephora'){
		$giftcardsmenu ="active_menu";
	}else if($page=='hm'){
		$giftcardsmenu ="active_menu";
	}else if($page=='gamestop'){
		$giftcardsmenu ="active_menu";
	}else if($page=='hotelscom'){
		$giftcardsmenu ="active_menu";
	}else if($page=='jcpenney'){
		$giftcardsmenu ="active_menu";
	}else if($page=='nike'){
		$giftcardsmenu ="active_menu";
	}else if($page=='adidas'){
		$giftcardsmenu ="active_menu";
	}else if($page=='saksfifthavenue'){
		$giftcardsmenu ="active_menu";
	}else if($page=='nordstrom'){
		$giftcardsmenu ="active_menu";
	}else if($page=='ebay'){
		$giftcardsmenu ="active_menu";
	}else if($page=='starbuckscard'){
		$giftcardsmenu ="active_menu";
	}else if($page=='macys'){
		$giftcardsmenu ="active_menu";
	}else if($page=='target'){
		$giftcardsmenu ="active_menu";
	}
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mejor Facio mart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png">
		

		<!-- CSS here -->
		<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	
            
   </head>

   <body>
   <header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Welcome to Mejor Facio mart
					</div>

					<div class="right-top-bar flex-w h-full">
					<a href="<?php echo base_url();?>signup" class="flex-c-m trans-04 p-lr-25">
							Signup
						</a>
					<?php if(isset($_SESSION['id']) && $_SESSION['id']!=""){ ?>
						<a class="flex-c-m trans-04 p-lr-25" href="<?php echo base_url();?>logout">Logout</a>
						<?php }else{ ?>
						<a href="<?php echo base_url();?>login" class="flex-c-m trans-04 p-lr-25">
							Login
						</a>
					<?php } ?>
						
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="<?php echo base_url();?>" class="logo">
						<img src="<?php echo base_url();?>assets/img/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							 <li ><a class="<?php echo $homepage; ?>" href="<?php echo base_url();?>">
								<li><a class="<?php echo $abUs; ?>" href="<?php echo base_url();?>aboutus">About Us</a></li>
                                            <li><a class="<?php echo $productsmenu; ?>" href="<?php echo base_url();?>products">Products List</a></li>
                                            <li><a class="<?php echo $giftcardsmenu; ?>" href="<?php echo base_url();?>giftcards">Giftcards</a></li>                
                                            <li><a class="<?php echo $contUs; ?>" href="<?php echo base_url();?>contactus">Contact</a></li>
											<?php if(isset($_SESSION['id']) && $_SESSION['id']!=""){ ?>
												<li class="md-hide"><a href="<?php echo base_url();?>logout">Logout</a></li>
											<?php }else{ ?>
												<li class="md-hide"><a href="<?php echo base_url();?>login">Login | Signup</a></li>
											<?php } ?>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
					
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="<?php echo base_url();?>assets/img/logo.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				

				<li>
					<div class="right-top-bar flex-w h-full">
						
						<a href="<?php echo base_url();?>signup" class="flex-c-m trans-04 p-lr-25">
							Signup
						</a>
					<?php if(isset($_SESSION['id']) && $_SESSION['id']!=""){ ?>
						<a class="flex-c-m trans-04 p-lr-25" href="<?php echo base_url();?>logout">Logout</a>
						<?php }else{ ?>
						<a href="<?php echo base_url();?>login" class="flex-c-m trans-04 p-lr-25">
							Login
						</a>
					<?php } ?>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
			
				<li ><a class="<?php echo $homepage; ?>" href="<?php echo base_url();?>">
								<li><a class="<?php echo $abUs; ?>" href="<?php echo base_url();?>aboutus">About Us</a></li>
                                            <li><a class="<?php echo $productsmenu; ?>" href="<?php echo base_url();?>products">Products List</a></li>
                                            <li><a class="<?php echo $giftcardsmenu; ?>" href="<?php echo base_url();?>giftcards">Giftcards</a></li>                
                                            <li><a class="<?php echo $contUs; ?>" href="<?php echo base_url();?>contactus">Contact</a></li>

				
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>
   
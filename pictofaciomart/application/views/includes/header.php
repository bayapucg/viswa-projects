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
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Picto Facio Mart</title>
        <meta name="description" content="#">
		<meta name="keywords" content="#">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="icon" href="<?php echo base_url();?>assets/img/fav.png">
		<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital@1&display=swap" rel="stylesheet">
	<!-- CSS here -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/linearicons.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nouislider.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ion.rangeSlider.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ion.rangeSlider.skinFlat.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">            
   </head>
   <body>
   <header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class=" nav-link <?php echo $homepage; ?>" href="<?php echo base_url();?>">Home</a></li>
							<li class="nav-item"><a class=" nav-link <?php echo $abUs; ?>" href="<?php echo base_url();?>aboutus">About Us</a></li>
							<li class="nav-item"><a class=" nav-link <?php echo $productsmenu; ?>" href="<?php echo base_url();?>products">Products List</a></li>
							<li class="nav-item"><a class="nav-link <?php echo $giftcardsmenu; ?>" href="<?php echo base_url();?>giftcards">Giftcards</a></li>                
							<li class="nav-item"><a class="nav-link <?php echo $contUs; ?>" href="<?php echo base_url();?>contactus">Contact</a></li>
							<?php if(isset($_SESSION['id']) && $_SESSION['id']!=""){ ?>
								<li class=" nav-item"><a class="nav-link" href="<?php echo base_url();?>logout">Logout</a></li>
							<?php }else{ ?>
								<li class=" nav-item"><a class="nav-link" href="<?php echo base_url();?>login">Login | Signup</a></li>
							<?php } ?>
						</ul>
						<?php
							if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']=='::1'){
								$ipaddress = '120.0.01';
							}else{
								$ipaddress = $_SERVER['REMOTE_ADDR'];
							}
							$sql = "select SUM(cartitems) AS cnt from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1'";
							$countCartt = $this->db->query($sql)->row();
							$countCart333=0;
							if(isset($countCartt->cnt) && $countCartt->cnt!=''){
								$countCart333 = $countCartt->cnt; 
							}
						?>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item "><a href="<?php echo base_url(); ?>cart" class="cart btn-warning p-2 text-white" style="color:#fff;border-radius:8px;"><span class="fa fa-shopping-cart " style="color:#fff"></span><span id="cartItem" style="margin-left:3px;color:#fff"><?php echo $countCart333; ?></span></a></li>							
						</ul>
					</div>
				</div>
			</nav>
		</div>		
	</header>
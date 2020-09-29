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
        <title>faciostore</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png">

		<!-- CSS here -->
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flaticon.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
   </head>

   <body>
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
				<div class="header-top top-bg d-none d-lg-block" style="background:#feed67;font-weight:bold;padding:10px 10px;">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="text-center">
                                Note: Due to covid-19 pandemic our delivering packages may be delivered late.
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3">
                                  <a href="<?php echo base_url();?>">
								 <div class="logo">
                                <img src="<?php echo base_url();?>assets/img/logo.png" alt="">
                                </div>
								</a>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                   
                                            <li ><a class="<?php echo $homepage; ?>" href="<?php echo base_url();?>">Home</a></li>
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
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-4 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">                         
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
									<?php if(isset($_SESSION['id']) && $_SESSION['id']!=""){ ?>
										<li class="d-none d-lg-block"> <a href="<?php echo base_url();?>logout" class="btn header-btn">Signout</a></li>
									<?php }else{ ?>
										<li class="d-none d-lg-block"> <a href="<?php echo base_url();?>login" class="btn header-btn">Sign in</a></li>
									<?php } ?>                                   
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
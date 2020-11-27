<main>

<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Giftcards</h1>
				<nav class="d-flex align-items-center">
					<a href="<?php echo base_url();?>">Home<span class="lnr lnr-arrow-right"></span></a>
					
					<a class="text-white">Giftcards</a>
				</nav>
			</div>
		</div>
	</div>
</section>
	<section>
		<img src="<?php echo base_url();?>assets/img/giftcard-banner.png" class="img-fluid">
	</section>
	<section class="sm-hide">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-4">
					<h3 style="font-family: 'Overpass', sans-serif;">Celebrate This festival With With More Discounts.</h3>
<p>select any product to buy and you can buy our products with Gift Cards of Favorite Brands.<p>
<p>We accepts various brands Gift cards as payment Option Till January 10.</p>
				</div>
				<div class="col-md-12 mt-4">
					<h3 style="font-family: 'Overpass', sans-serif;">How To Buy with Gift Cards?</h3>
						<ol>
						<li>Select a Product and Proceed to Checkout.</li>
						<li>In Profile: Go to Payment Options and select Gift Cards.</li>
						<li>You will receive a mail Regarding options existing on Gift card Offers and brands.</li>
						<li>You Order value must not exceed 250$.</li>
						<li>Orders will be Closed from Dec 24th to  Dec 26th.</li>
						
						</ol>
						<p><a style="color:#ea7701" href="<?php echo base_url();?>contactus">Get Subscribed for more offers and Updates.</a></p>

				</div>
			</div>
			
		</div>
	</section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				 <div class="container ">
            
            <div class="row  mb-4 d-flex justify-content-center sm-hide">
		
                <!--<div class="col-md-4 col-sm-6 mt-3">
					<a href="https://www.walmartgiftcard.store/">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url();?>assets/img/walmartgift.jpg" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="https://www.walmartgiftcard.store/" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>-->
				<!--<div class="col-md-4 col-sm-6 mt-3">
					<a href="https://www.target.com/">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url();?>assets/img/target.jpg" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="https://www.target.com/" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>-->
				<div class="col-md-4 col-sm-6 mt-3">
					<a href="https://www.home-depot.store/giftcard/checkbalance">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url();?>assets/img/homedepot.jpg" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="https://www.home-depot.store/giftcard/checkbalance" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				
            </div>
			<!--mobile resposnsive-->
			<div class="row  mb-4 d-flex justify-content-center md-hide">
			<?php if(isset($giftcardsinfo_1) && !empty($giftcardsinfo_1) && count($giftcardsinfo_1)>0){
										foreach($giftcardsinfo_1 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_2) && !empty($giftcardsinfo_2) && count($giftcardsinfo_2)>0){
										foreach($giftcardsinfo_2 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_3) && !empty($giftcardsinfo_3) && count($giftcardsinfo_3)>0){
										foreach($giftcardsinfo_3 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_4) && !empty($giftcardsinfo_4) && count($giftcardsinfo_4)>0){
										foreach($giftcardsinfo_4 as $gcard){
									?>
									
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_5) && !empty($giftcardsinfo_5) && count($giftcardsinfo_5)>0){
										foreach($giftcardsinfo_5 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<?php if(isset($giftcardsinfo_6) && !empty($giftcardsinfo_6) && count($giftcardsinfo_6)>0){
										foreach($giftcardsinfo_6 as $gcard){
									?>
                <div class="col-md-4 col-sm-6 mt-3">
					<a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url().'giftcards_images/'.$gcard->gcimage; ?>" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="<?php echo base_url().'giftcards/'.$gcard->display_url; ?>" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>
				<?php } } ?>
				<!-- <div class="col-md-4 col-sm-6 mt-3">
					<a href="https://www.walmartgiftcard.store/">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url();?>assets/img/walmartgift.jpg" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="https://www.walmartgiftcard.store/" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
                </div>-->
					<div class="col-md-4 col-sm-6 mt-3">
					<a href="https://www.home-depot.store/giftcard/checkbalance">
                    <div class="box14 img-thumbnail">
                       <img src="<?php echo base_url();?>assets/img/homedepot.jpg" alt="walmart">
                        <div class="box-content text-center ">
                            <h3 class="title mt-5">&nbsp;</h3>
                            <a href="https://www.home-depot.store/giftcard/checkbalance" class="post" style="position:relative;z-index:5000;">Buy / Check Balance</a>
                            
                        </div>
                    </div>
					</a>
					<div class="md-hide text-center">
						<a href="https://www.home-depot.store/giftcard/checkbalance" class="btn btn-gradin" style="position:relative;z-index:5000;"> Check Balance Here</a>
					</div>
                </div>
            </div>
        </div>
        </div>
			</div>
		</div>
		<section class="md-hide">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-4">
					<h3>Celebrate This festival With With More Discounts.</h3>
<p>select any product to buy and you can buy our products with Gift Cards of Favorite Brands.<p>
<p>We accepts various brands Gift cards as payment Option Till January 10.</p>
				</div>
				<div class="col-md-12 mt-4">
					<h3>How To Buy with Gift Cards?</h3>
						<ol>
						<li>Select a Product and Proceed to Checkout.</li>
						<li>In Profile: Go to Payment Options and select Gift Cards.</li>
						<li>You will receive a mail Regarding options existing on Gift card Offers and brands.</li>
						<li>You Order value must not exceed 250$.</li>
						<li>Orders will be Closed from Dec 24th to  Dec 26th.</li>
						
						</ol>
						<p>Get Subscribed for more offers and Updates.</p>

				</div>
			</div>
			
		</div>
	</section>
		<section class=" pt-4 bg-f5f5f5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="section-title">
						<h2><i>Trending Products with <span style="color:#0071DC">Walmart Gift Card.</span></i></h2>
					</div>
				</div>
			</div>
			</div>
		<div class="owl-carousel active-product-area ">
			<?php if(isset($getproducts_all) && !empty($getproducts_all) && count($getproducts_all)>0){ $k=1; $countofprod =1; foreach($getproducts_all as $productinfo){ 
				if ($countofprod%4 == 1){  
					echo "<div class='single-product-slider'><div class='container'>				
					<div class='row'>";
				}
			?>				
									
						<div class="col-lg-3 col-md-6">
							<div class="single-product card image-trans" style="overflow:hidden;">
								<div class=""  style="overflow:hidden;">	
									<img class="img-fluid " src="<?php echo base_url().'product_images/'.$productinfo->product_image; ?>" alt="<?php echo ucfirst($productinfo->product_name); ?>">
								</div>
								<div class="product-details px-2 text-center">
									<h6 class="site-col"><a href="<?php echo base_url().'products'; ?>"><?php echo ucfirst($productinfo->product_name); ?></a></h6>
										<div class="price">
										<?php 
											$discountPrice =0;
											$productprice     = $productinfo->product_price;
											if($productinfo->product_discount_type==1){
												$discountPricecal = $productinfo->product_discount_fixed;
												$discountPrice = $productprice - $discountPricecal;		
											}else{
												$discountPrice = $productinfo->product_discount_per;
												$discountPricecal = $productprice * ($discountPrice/100);
												$discountPrice = $productprice - $discountPricecal;				
											}
										?>
										<h6>$<?php echo number_format($discountPrice, 2); ?></h6>
										<?php if($discountPrice!=0){ ?>
										<h6 class="l-through">$<?php echo number_format($productprice, 2); ?></h6>
										<?php } ?>
									</div>
									
									<div class="prd-bottom text-center mb-2">
										<a href="<?php echo base_url(); ?>products/<?php echo $productinfo->product_url; ?>" class="btn  btn-gradin border-0 text-white btn-sm">Buy now</a>
									</div>
								</div>
							</div>
						</div>		 			
							
				<?php 
					if ($countofprod%4 == 0)
					{
						echo "</div></div></div>";
					}
				?>
		<?php $countofprod++; } 
			if ($countofprod%4 != 1){ echo "</div></div></div>"; }
		 } ?>	
	</div>
	</section>
	<section class=" pt-4 bg-f5f5f5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="section-title">
						<h2><i>Trending Products with  <span style="color:#cc0000">Target Gift Card.</span></i></h2>
					</div>
				</div>
			</div>
			</div>
		<div class="owl-carousel active-product-area ">
			<?php if(isset($getproducts_all) && !empty($getproducts_all) && count($getproducts_all)>0){ $k=1; $countofprod =1; foreach($getproducts_all as $productinfo){ 
				if ($countofprod%4 == 1){  
					echo "<div class='single-product-slider'><div class='container'>				
					<div class='row'>";
				}
			?>				
									
						<div class="col-lg-3 col-md-6">
							<div class="single-product card image-trans" style="overflow:hidden;">
								<div class=""  style="overflow:hidden;">	
									<img class="img-fluid " src="<?php echo base_url().'product_images/'.$productinfo->product_image; ?>" alt="<?php echo ucfirst($productinfo->product_name); ?>">
								</div>
								<div class="product-details px-2 text-center">
									<h6 class="site-col"><a href="<?php echo base_url().'products'; ?>"><?php echo ucfirst($productinfo->product_name); ?></a></h6>
										<div class="price">
										<?php 
											$discountPrice =0;
											$productprice     = $productinfo->product_price;
											if($productinfo->product_discount_type==1){
												$discountPricecal = $productinfo->product_discount_fixed;
												$discountPrice = $productprice - $discountPricecal;		
											}else{
												$discountPrice = $productinfo->product_discount_per;
												$discountPricecal = $productprice * ($discountPrice/100);
												$discountPrice = $productprice - $discountPricecal;				
											}
										?>
										<h6>$<?php echo number_format($discountPrice, 2); ?></h6>
										<?php if($discountPrice!=0){ ?>
										<h6 class="l-through">$<?php echo number_format($productprice, 2); ?></h6>
										<?php } ?>
									</div>
									
									<div class="prd-bottom text-center mb-2">
										<a href="<?php echo base_url(); ?>products/<?php echo $productinfo->product_url; ?>" class="btn  btn-gradin border-0 text-white btn-sm">Buy now</a>
									</div>
								</div>
							</div>
						</div>		 			
							
				<?php 
					if ($countofprod%4 == 0)
					{
						echo "</div></div></div>";
					}
				?>
		<?php $countofprod++; } 
			if ($countofprod%4 != 1){ echo "</div></div></div>"; }
		 } ?>	
	</div>
	</section>
	<section class=" pt-4 bg-f5f5f5">
			<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="section-title">
						<h2><i>Trending Products with  <span style="color:#f96302">Home depot Gift Card.</span></i></h2>
					</div>
				</div>
			</div>
			</div>
		<div class="owl-carousel active-product-area ">
			<?php if(isset($getproducts_all) && !empty($getproducts_all) && count($getproducts_all)>0){ $k=1; $countofprod =1; foreach($getproducts_all as $productinfo){ 
				if ($countofprod%4 == 1){  
					echo "<div class='single-product-slider'><div class='container'>				
					<div class='row'>";
				}
			?>				
									
						<div class="col-lg-3 col-md-6">
							<div class="single-product card image-trans" style="overflow:hidden;">
								<div class=""  style="overflow:hidden;">	
									<img class="img-fluid " src="<?php echo base_url().'product_images/'.$productinfo->product_image; ?>" alt="<?php echo ucfirst($productinfo->product_name); ?>">
								</div>
								<div class="product-details px-2 text-center">
									<h6 class="site-col"><a href="<?php echo base_url().'products'; ?>"><?php echo ucfirst($productinfo->product_name); ?></a></h6>
										<div class="price">
										<?php 
											$discountPrice =0;
											$productprice     = $productinfo->product_price;
											if($productinfo->product_discount_type==1){
												$discountPricecal = $productinfo->product_discount_fixed;
												$discountPrice = $productprice - $discountPricecal;		
											}else{
												$discountPrice = $productinfo->product_discount_per;
												$discountPricecal = $productprice * ($discountPrice/100);
												$discountPrice = $productprice - $discountPricecal;				
											}
										?>
										<h6>$<?php echo number_format($discountPrice, 2); ?></h6>
										<?php if($discountPrice!=0){ ?>
										<h6 class="l-through">$<?php echo number_format($productprice, 2); ?></h6>
										<?php } ?>
									</div>
									
									<div class="prd-bottom text-center mb-2">
										<a href="<?php echo base_url(); ?>products/<?php echo $productinfo->product_url; ?>" class="btn  btn-gradin border-0 text-white btn-sm">Buy now</a>
									</div>
								</div>
							</div>
						</div>		 			
							
				<?php 
					if ($countofprod%4 == 0)
					{
						echo "</div></div></div>";
					}
				?>
		<?php $countofprod++; } 
			if ($countofprod%4 != 1){ echo "</div></div></div>"; }
		 } ?>	
	</div>
	</section>
	
	
</main>
	

	<style>
	.fix-menu-desktop .wrap-menu-desktop {
		background-color:#fff!important;
	}
	.wrap-menu-desktop {
	
		background-color:transparent !important;
	}
	
	</style>
	<main>
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url('<?php echo base_url();?>assets/img/banner/slide-01.jpg');">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Women Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url('<?php echo base_url();?>assets/img/banner/slide-02.jpg');">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men New-Season
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url('<?php echo base_url();?>assets/img/banner/slide-03.jpg');">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men Collection 2020
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
        
		<div class="container-fluid">
			<div class="col-sm-12">
				<div class="heading_title container">
					<div class="card_inner ">
						<div class="card-body">
							<p style="font-size:1.3rem;margin-bottom: 0px;" align="justify" class="font-italic fw_500 text-center">‘You can also buy our products with gift cards and check gift card balance also.’</p>
						</div>
					</div>								
				</div>
			</div>
		</div>
        <section class="category-area section-padding30">
            <div class="container-fluid">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-4">
                            <h2>Shop by Category</h2>
                        </div>
                    </div>
                </div>
			
			<div class="row">
			<?php if(isset($catdetails1) && !empty($catdetails1) && count($catdetails1)>0){ 
										$j=0;
										foreach($catdetails1 as $key=>$catinfo){ ?>
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="<?php echo base_url(); ?>product_images/<?php echo $catinfo->catimg;?>" alt="<?php echo ucfirst($catinfo->category_name); ?>">
						
						<a href="<?php echo base_url(); ?>products" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									<?php echo ucfirst($catinfo->category_name); ?>
								</span>

								<span class="block1-info stext-102 trans-04">
									New Collection
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
	<?php $j++; } } ?>
				
			</div>
			<div class="row">
			<?php if(isset($catdetails2) && !empty($catdetails2) && count($catdetails2)>0){ 
										$j=0;
										foreach($catdetails2 as $key=>$catinfo){ ?>
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="<?php echo base_url(); ?>product_images/<?php echo $catinfo->catimg;?>" alt="<?php echo ucfirst($catinfo->category_name); ?>">
						
						<a href="<?php echo base_url(); ?>products" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									<?php echo ucfirst($catinfo->category_name); ?>
								</span>

								<span class="block1-info stext-102 trans-04">
									New Collection
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
	<?php $j++; } } ?>
				
			</div>
	

                
            </div>
        </section>
       














	   <section class="latest-product-area ">
            <div class="container">
                <div class="row product-btn d-flex justify-content-end align-items-end">
                    <!-- Section Tittle -->
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="section-tittle mb-30">
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="properties__button f-right">
                            <nav>                                                                                              
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
							<?php if(isset($getproducts_all) && !empty($getproducts_all) && count($getproducts_all)>0){ foreach($getproducts_all as $productinfo){ ?>
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="single-product mb-60">
										<div class="product-img hov-img0">
											<img src="<?php echo base_url().'product_images/'.$productinfo->product_image; ?>" alt="<?php echo ucfirst($productinfo->product_name); ?>">						
										</div>
										<div class="product-caption">
											<h4><a href="<?php echo base_url().'products'; ?>"><?php echo ucfirst($productinfo->product_name); ?></a></h4>
											<div class="price">
												<ul>													
													<?php 
														$discountPrice =0;
														$productprice     = $productinfo->product_price;
														if($productinfo->product_discount_type==1){
															$discountPricecal = $productinfo->product_discount_fixed;
															$discountPrice = $productprice - $discountPricecal;		
														}else{
															
															$discountPricecal = $productprice * ($discountPrice/100);
															$discountPrice = $productprice - $discountPricecal;				
														}
													?>													
													<li>$<?php echo number_format($discountPrice, 2); ?></li>
													<?php if($discountPrice!=0){ ?>
														<li class="discount">$<?php echo number_format($productprice, 2); ?></li>
													<?php } ?>
												</ul>
											</div>
										<div class="mt-1">
											<a href="<?php echo base_url(); ?>products/<?php echo $productinfo->product_url; ?>" class="btn btn-warning btn-sm btn-xs cust-btn text-white">Buy Now</a>
										</div>									
										</div>
									</div>
								</div>
                            <?php } } ?>
                        </div>
                    </div>
                    <!-- Card two -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
							<?php if(isset($getproducts_new) && !empty($getproducts_new) && count($getproducts_new)>0){ foreach($getproducts_new as $productinfo){ ?>
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="single-product mb-60">
										<div class="product-img">
											<img src="<?php echo base_url().'product_images/'.$productinfo->product_image; ?>" alt="<?php echo ucfirst($productinfo->product_name); ?>">
											<div class="new-product">
												<span>New</span>
											</div>
										</div>
										<div class="product-caption">
											<h4><a href="<?php echo base_url().'products'; ?>"><?php echo ucfirst($productinfo->product_name); ?></a></h4>
											<div class="price">
												<ul>													
													<?php 
														$discountPrice =0;
														$productprice     = $productinfo->product_price;
														if($productinfo->product_discount_type==1){
															$discountPricecal = $productinfo->product_discount_fixed;
															$discountPrice = $productprice - $discountPricecal;		
														}else{
															
															$discountPricecal = $productprice * ($discountPrice/100);
															$discountPrice = $productprice - $discountPricecal;				
														}
													?>													
													<li>$<?php echo number_format($discountPrice, 2); ?></li>
													<?php if($discountPrice!=0){ ?>
														<li class="discount">$<?php echo number_format($productprice, 2); ?></li>
													<?php } ?>
												</ul>
											</div>
										<div class="mt-1">
											<a href="<?php echo base_url(); ?>products/<?php echo $productinfo->product_url; ?>" class="btn btn-warning btn-sm btn-xs cust-btn text-white">Buy Now</a>		
										</div>									
										</div>
									</div>
								</div>
                            <?php } } ?>
                        </div>
                    </div>
                    <!-- Card three -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            <?php if(isset($getproducts_featured) && !empty($getproducts_featured) && count($getproducts_featured)>0){ foreach($getproducts_featured as $productinfo){ ?>
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="single-product mb-60">
										<div class="product-img">
											<img src="<?php echo base_url().'product_images/'.$productinfo->product_image; ?>" alt="<?php echo ucfirst($productinfo->product_name); ?>">
											<div class="new-product">
												<span>Featured</span>
											</div>
										</div>
										<div class="product-caption">
											<h4><a href="<?php echo base_url().'products'; ?>"><?php echo ucfirst($productinfo->product_name); ?></a></h4>
											<div class="price">
												<ul>													
													<?php 
														$discountPrice =0;
														$productprice     = $productinfo->product_price;
														if($productinfo->product_discount_type==1){
															$discountPricecal = $productinfo->product_discount_fixed;
															$discountPrice = $productprice - $discountPricecal;		
														}else{
															
															$discountPricecal = $productprice * ($discountPrice/100);
															$discountPrice = $productprice - $discountPricecal;				
														}
													?>													
													<li>$<?php echo number_format($discountPrice, 2); ?></li>
													<?php if($discountPrice!=0){ ?>
														<li class="discount">$<?php echo number_format($productprice, 2); ?></li>
													<?php } ?>
												</ul>
											</div>
										<div class="mt-1">
											<a href="<?php echo base_url(); ?>products/<?php echo $productinfo->product_url; ?>" class="btn btn-warning btn-sm btn-xs cust-btn text-white">Buy Now</a>											
										</div>									
										</div>
									</div>
								</div>
                            <?php } } ?>
                        </div>
                    </div>
                    <!-- card foure -->
                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                        <div class="row">
                             <?php if(isset($getproducts_offer) && !empty($getproducts_offer) && count($getproducts_offer)>0){ foreach($getproducts_offer as $productinfo){ ?>
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="single-product mb-60">
										<div class="product-img">
											<img src="<?php echo base_url().'product_images/'.$productinfo->product_image; ?>" alt="<?php echo ucfirst($productinfo->product_name); ?>">
											<div class="new-product">
												<span>Offer</span>
											</div>
										</div>
										<div class="product-caption">
											<h4><a href="<?php echo base_url().'products'; ?>"><?php echo ucfirst($productinfo->product_name); ?></a></h4>
											<div class="price">
												<ul>													
													<?php 
														$discountPrice =0;
														$productprice     = $productinfo->product_price;
														if($productinfo->product_discount_type==1){
															$discountPricecal = $productinfo->product_discount_fixed;
															$discountPrice = $productprice - $discountPricecal;		
														}else{
															
															$discountPricecal = $productprice * ($discountPrice/100);
															$discountPrice = $productprice - $discountPricecal;				
														}
													?>													
													<li>$<?php echo number_format($discountPrice, 2); ?></li>
													<?php if($discountPrice!=0){ ?>
														<li class="discount">$<?php echo number_format($productprice, 2); ?></li>
													<?php } ?>
												</ul>
											</div>
										<div class="mt-1">
											<a href="<?php echo base_url(); ?>products/<?php echo $productinfo->product_url; ?>" class="btn btn-warning btn-sm btn-xs cust-btn text-white">Buy Now</a>										
										</div>									
										</div>
									</div>
								</div>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
       <div class="best-collection-area section-padding2"  style="background:#f9f9f9">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-end">
                    <!-- Left content -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="best-left-cap">
                            <h2>Best Collection All Time!</h2>                           
                            <a href="<?php echo base_url();?>products" class="btn shop1-btn">Shop Now</a>
                        </div>
                        <div class="best-left-img mb-30 d-none d-sm-block">
                            <img src="<?php echo base_url();?>assets/img/collection/collection1.png" alt="">
                        </div>
                    </div>
                    <!-- Mid Img -->
                     <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <div class="best-mid-img mb-30 ">
                            <img src="<?php echo base_url();?>assets/img/collection/collection2.png" alt="">
                        </div>
                    </div>
                    <!-- Riht Caption -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="best-right-cap ">
                           <div class="best-single mb-30">
                               <div class="single-cap">
                                   <h4>Menz T-Shirts</h4>
                               </div>
                               <div class="single-img">
                                  <img src="<?php echo base_url();?>assets/img/collection/collection3.png" alt="">
                               </div>
                           </div>
                        </div>
                        <div class="best-right-cap">
                           <div class="best-single mb-30">
                               <div class="single-cap active">
                                   <h4>Menz Jeans</h4>
                               </div>
                               <div class="single-img">
                                  <img src="<?php echo base_url();?>assets/img/collection/collection4.png" alt="">
                               </div>
                           </div>
                        </div>
                        <div class="best-right-cap">
                           <div class="best-single mb-30">
                               <div class="single-cap">
                                   <h4>Menz Winter<br> Jacket</h4>
                               </div>
                               <div class="single-img">
                                  <img src="<?php echo base_url();?>assets/img/collection/collection5.png" alt="">
                               </div>
                           </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

    </main>
  

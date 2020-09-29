	<main>
	<!-- slider Area Start -->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height" data-background="<?php echo base_url();?>assets/img/h1_hero.jpg">
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img class="" src="<?php echo base_url();?>assets/img/slide1.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                    <h1 data-animation="fadeInRight" data-delay=".6s">Trending <br> Collection</h1>
                                    <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                        <a href="<?php echo base_url();?>products" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Category Area Start-->
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
				   <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>
						<?php // echo "<pre>";print_r($data);exit; ?>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<?php if(isset($catdetails1) && !empty($catdetails1) && count($catdetails1)>0){ 
										$j=0;
										foreach($catdetails1 as $key=>$catinfo){ ?>
										<div class="col-md-4">
											<a href="<?php echo base_url(); ?>products">
												<div class="single-category mb-30">
													<div class="category-img">
														<img src="<?php echo base_url(); ?>product_images/<?php echo $catinfo->catimg;?>" alt="<?php echo ucfirst($catinfo->category_name); ?>">
														<div class="category-caption">
															<h2><?php echo ucfirst($catinfo->category_name); ?></h2>
															<p>New Collection</p>
														</div>
													</div>
												</div>
											</a>
										</div>
									<?php $j++; } } ?>
								</div>
							</div>
							<div class="carousel-item ">
								<div class="row">
									<?php if(isset($catdetails2) && !empty($catdetails2) && count($catdetails2)>0){ 
										$j=0;
										foreach($catdetails2 as $key=>$catinfo){ ?>
										<div class="col-md-4">
											<a href="<?php echo base_url(); ?>products">
												<div class="single-category mb-30">
													<div class="category-img">
														<img src="<?php echo base_url(); ?>product_images/<?php echo $catinfo->catimg;?>" alt="<?php echo ucfirst($catinfo->category_name); ?>">
														<div class="category-caption">
															<h2><?php echo ucfirst($catinfo->category_name); ?></h2>
															<p>New Collection</p>
														</div>
													</div>
												</div>
											</a>
										</div>
									<?php $j++; } } ?>
								</div>
							</div> 
                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
                  
                </div>
            </div>
        </section>
        <!-- Category Area End-->
        <!-- Latest Products Start -->
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
										<div class="product-img">
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
        <!-- Best Collection End -->
        <!-- Latest Offers Start -->
        <div class="latest-wrapper lf-padding">
            <div class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/latest-offer.png">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="latest-caption">
                                <h2>Get Our<br>Latest Offers News</h2>
                                <p>Subscribe news latter</p>
                            </div>
                        </div>
                         <div class="col-xl-5 col-lg-5 col-md-6 ">
                            <div class="latest-subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Your email here">
                                    <button>Shop Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- man Shape -->
                <div class="man-shape">
                    <img src="<?php echo base_url();?>assets/img/collection/latest-man.png" alt="">
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->
        <!-- Shop Method Start-->
        <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <h6>Free Shipping </h6>
                            <p>Free shipping for all products world wide.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <h6>24/7 Service Available </h6>
                            <p>Online services for all customers.</p>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <h6>Latest Offers</h6>
                            <p>Online best special offers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
        <!-- Gallery Start-->
        
        <!-- Gallery End-->

    </main>
  

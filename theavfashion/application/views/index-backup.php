	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Guaranteed delivery on furniture</h1>
									
									
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?php echo base_url();?>assets/img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content mt-4">
									<h1 class="mt-4"><br>Guaranteed delivery on furniture</h1>
									
									
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?php echo base_url();?>assets/img/banne2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
       
	<main>
	
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
     <section class="owl-carousel active-product-area section_gap bg-f5f5f5">
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php if(isset($getproducts_all) && !empty($getproducts_all) && count($getproducts_all)>0){ foreach($getproducts_all as $productinfo){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product card image-trans" style="overflow:hidden;">
							<div class=""  style="overflow:hidden;">	
								<img class="img-fluid " src="<?php echo base_url().'product_images/'.$productinfo->product_image; ?>" alt="">
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
									<a href="" class="btn  btn-gradin border-0 text-white btn-sm">Buy now</a>
								</div>
							</div>
						</div>
					</div>
					 <?php } } ?>
					
					
				</div>
			</div>
		</div>
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product card image-trans" style="overflow:hidden;">
							<div class=""  style="overflow:hidden;">	
								<img class="img-fluid " src="<?php echo base_url();?>assets/img/products/p1.jpg" alt="">
							</div>
							<div class="product-details px-2 text-center">
								<h6 class="site-col">ADIDAS Glenn M Running Shoes For Men  (Blue)</h6>
								<div class="price">
									<h6>₹1,499</h6>
									<h6 class="l-through">₹2,499</h6>
								</div>
								<div class="prd-bottom text-center mb-2">
									<a href="" class="btn  btn-gradin border-0 text-white btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Buy now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product card image-trans" style="overflow:hidden;">
							<div class=""  style="overflow:hidden;">	
								<img class="img-fluid " src="<?php echo base_url();?>assets/img/products/p4.jpg" alt="">
							</div>
							<div class="product-details px-2 text-center">
								<h6 class="site-col">ADIDAS Glenn M Running Shoes For Men  (Blue)</h6>
								<div class="price">
									<h6>₹1,499</h6>
									<h6 class="l-through">₹2,499</h6>
								</div>
								<div class="prd-bottom text-center mb-2">
									<a href="" class="btn  btn-gradin border-0 text-white btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Buy now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product card image-trans" style="overflow:hidden;">
							<div class=""  style="overflow:hidden;">	
								<img class="img-fluid " src="<?php echo base_url();?>assets/img/products/p3.jpg" alt="">
							</div>
							<div class="product-details px-2 text-center">
								<h6 class="site-col">AX2 MID Men Outdoor Shoes For Men  (Blue, Black, Grey)</h6>
								<div class="price">
									<h6>₹3,689</h6>
									<h6 class="l-through">₹8,099</h6>
								</div>
								<div class="prd-bottom text-center mb-2">
									<a href="" class="btn  btn-gradin border-0 text-white btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Buy now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-product card image-trans" style="overflow:hidden;">
							<div class=""  style="overflow:hidden;">	
								<img class="img-fluid " src="<?php echo base_url();?>assets/img/products/p2.jpg" alt="">
							</div>
							<div class="product-details px-2 text-center">
								<h6 class="site-col">Cri Hase Running Shoes For Men  (White, Green)</h6>
								<div class="price">
									<h6>₹2,719</h6>
									<h6 class="l-through">₹3,999</h6>
								</div>
								<div class="prd-bottom text-center mb-2">
									<a href="" class="btn  btn-gradin border-0 text-white btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Buy now</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- single product slide -->
		
	</section>
        
      

    </main>
  

	<main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/category.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Products List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Latest Products Start -->
        <section class="latest-product-area latest-padding">
            <div class="container">
                <div class="row product-btn d-flex justify-content-between">
					<div class="properties__button">
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
										<div class="product-img hov-img0">
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
											<a href="<?php echo base_url().'product-details'; ?>" class="btn btn-warning btn-sm btn-xs cust-btn">Buy Now</a>											
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
										<div class="product-img hov-img0">
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
										<div class="product-img hov-img0">
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
        <!-- Latest Products End -->

     
        

    </main>

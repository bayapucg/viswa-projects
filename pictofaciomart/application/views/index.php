	 <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  
  .bg-f9f9f9{
	  background:#eee;padding:15px 0px;
  }
  .bg-e9e9e9{
	  background:#f9f9f9;
	  padding:15px 0px;
  }
  </style>
  <div class="clearfix sm-hide">&nbsp;</div>
  <div class="clearfix">&nbsp;</div>
	<div id="demo" class="carousel slide" data-ride="carousel">
  <!--<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>-->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/banner1.png" alt="Giftcard" width="1100" height="500">
     <!-- <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>  --> 
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/banner2.png" alt="Giftcard" width="1100" height="500">
      <!--<div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div> -->  
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class=" bg-e9e9e9">
	<div class="container text-center">
	<h3>Disclaimer: This business is represented or affiliated with Macy's.com</h3>
	</div>
</section>
	<main>	
		
        <section class="category-area section-padding30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-12">
						<div id="blogCarousel" class="carousel slide" data-ride="">							
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
															<div class="category-caption" style="padding:5px 10px 4px 10px;border-raidus:5px;">
																<h2 style="margin-bottom:0"><?php echo ucfirst($catinfo->category_name); ?></h2>
																
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
																
															</div>
														</div>
													</div>
												</a>
											</div>
										<?php $j++; } } ?>
									</div>
								</div> 
							</div>
						</div>
					</div>                  
				</div>
			</div>
		</section>
		
		<section class="latest-product-area ">
            <div class="container">
                <div class="row product-btn ">
                    <!-- Section Tittle -->
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="section-tittle mb-30">
                            <h2>Latest Products</h2>
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
											<div class="price d-flex justify-content-center">
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
												<?php if($discountPrice!=0){ ?> &nbsp;&nbsp;&nbsp;&nbsp;
												<h6 class="l-through">$<?php echo number_format($productprice, 2); ?></h6>
												<?php } ?>
											</div>
										<div class="my-1">
											<a href="<?php echo base_url(); ?>products/<?php echo $productinfo->product_url; ?>" class="btn btn-warning btn-sm btn-xs cust-btn text-white">Buy Now</a>
										</div>									
										</div>
									</div>
								</div>
                            <?php } } ?>
                        </div>
                    </div>
                    <!-- Card two -->
                   
                    
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
		<section class="text-center bg-f9f9f9 py-4">
	<h2><i>"You can also buy our products with your available gift cards"</i></h2>
</section>
</main>
  

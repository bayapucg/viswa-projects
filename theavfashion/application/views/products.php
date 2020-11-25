	<main>
	<div class="clearfix">&nbsp;</div>
<section class="page-start-div" style="background-image: url('<?php echo base_url(); ?>assets/img/home-banner.png');padding:20px 0px;">
		<div class="container">
			<div class="breadcrumb-banner " >
				<div class="text-center pt-4">
					<h1>Products </h1>
					
				</div>
			</div>
		</div>
	</section>


        <!-- Latest Products Start -->
        <section class="latest-product-area ">
            <div class="container ">
		
			<div class="clearfix">&nbsp;</div>
                
                <div class="tab-content mt-4" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
							<?php if(isset($getproducts_all) && !empty($getproducts_all) && count($getproducts_all)>0){ foreach($getproducts_all as $productinfo){ ?>
								<div class="col-xl-3 col-lg-3 col-md-3 p-1">
									<div class="single-product  product-item">
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
												<h6 class="sit-col">$<?php echo number_format($discountPrice, 2); ?></h6>
												<?php if($discountPrice!=0){ ?> &nbsp;&nbsp;&nbsp;&nbsp;
												<h6 class="l-through">$<?php echo number_format($productprice, 2); ?></h6>
												<?php } ?>
											</div>
										<div class="my-1 mx-2">
											<a href="<?php echo base_url(); ?>products/<?php echo $productinfo->product_url; ?>" class="btn btn-warning btn-sm btn-xs cust-btn text-white  btn-block">Buy Now</a>
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
        <!-- Latest Products End -->

        
     
        

    </main>

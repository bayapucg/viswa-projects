<main>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card mb-10">    
					<div class="card-body store-body">
						<div class="product-info">
							<div class="product-gallery">
								<div class="product-gallery-thumbnails">
									<ol class="thumbnails-list list-unstyled">
										<li> <img src="<?php echo base_url().'product_images/'.$getproductinfo->product_image; ?>" alt="<?php echo ucfirst($getproductinfo->product_name); ?>"></li> 
										<li> <img src="<?php echo base_url().'product_images/'.$getproductinfo->catimg; ?>" alt="<?php echo ucfirst($getproductinfo->product_name); ?>"></li>
									</ol>
								</div>
								<div class="product-gallery-featured">
									<img class="img-fluid" src="<?php echo base_url().'product_images/'.$getproductinfo->product_image; ?>" alt="<?php echo ucfirst($getproductinfo->product_name); ?>">
								</div>
							</div>
							<!--
							<div class="product-seller-recommended">
								<div class="product-description mb-5">               
									<h4 class="site_head">Description</h4>
									<p><?php echo ucfirst($getproductinfo->product_description); ?></p>
								</div>				 
							</div>
							-->
						</div>
						<div class="product-payment-details">
							<p class="last-sold text-muted"><small>145 items sold</small></p>
							<h4 class="product-title mb-2"><?php echo $getproductinfo->product_name; ?></h4>
							<?php 
								$discountPrice =0;
								$productprice     = $getproductinfo->product_price;
								if($getproductinfo->product_discount_type==1){
									$discountPricecal = $getproductinfo->product_discount_fixed;
									$discountPrice = $productprice - $discountPricecal;		
								}else{
									
									$discountPricecal = $productprice * ($discountPrice/100);
									$discountPrice = $productprice - $discountPricecal;				
								}
							?>	
							<input type="hidden" id="finalprice" name="finalprice" value="<?php echo number_format($discountPrice, 2); ?>">
							<input type="hidden" id="prdid" name="prdid" value="<?php echo $getproductinfo->prdid; ?>">
							<h4 class="product-price site-head">$<?php echo number_format($discountPrice, 2); ?></h4>
							<h4 style="text-decoration:line-through;color:#2577fd;">$<?php echo number_format($productprice, 2); ?></h4>
							<p class="mb-0"><i class="fa fa-truck"></i> Delivery in all territory</p>
							<div class="text-muted mb-2"><small>know more about delivery time and shipping forms</small></div>
							<div class="clearfix"></div>
							<div class="card_area">
								<div class="product_count_area">
									<p>Quantity</p>
									<div class="product_count d-inline-block">
										<span class="product_count_item inumber-decrement"> <i onClick="add_plus('minus')" class="ti-minus"></i></span>
										<input class="product_count_item input-number" type="text" id="cartitem" name="cartitem" value="1" min="1" max="10">
										<span class="product_count_item number-increment"> <i onClick="add_plus('plus')" class="ti-plus"></i></span>
									</div>
									<span id="price_cal"></span>
								</div>
							</div><br/>			  
							<button class="btn btn-primary btn-block">Buy Now</button>              
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<script>
	const galleryThumbnail = document.querySelectorAll(".thumbnails-list li");
	const galleryFeatured = document.querySelector(".product-gallery-featured img");
	galleryThumbnail.forEach((item) => {
		item.addEventListener("mouseover", function () {
			let image = item.children[0].src;
			galleryFeatured.src = image;
		});
	});
	function add_plus(dtype){
		$('#price_cal').html('');			
		setTimeout(function(){ 
			var cartitem   = $("#cartitem").val();
			var prdid      = $("#prdid").val();		
			$.ajax({
				type:     "POST",
				dataType: "json",
				url: "<?php echo base_url(); ?>Products/cartpostsubmit?time=<?php echo time(); ?>",
				data:{fcartitem:cartitem,prdid:prdid,dtype:dtype},
				success: function(data) {
					console.log(data);return false;      	           
				}
			}); 
		},1000);
	}
</script>
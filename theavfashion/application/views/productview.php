	<main>
	<div class="clearfix">&nbsp;</div>
<section class="page-start-div" style="background-image: url('<?php echo base_url(); ?>assets/img/home-banner.png');padding:20px 0px;">
	<div class="container">
		<div class="breadcrumb-banner " >
			<div class="text-center pt-4">
				<h1>Products Details </h1>
				
			</div>
		</div>
	</div>
</section>
	<div class="container my-4">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-10">
				<div class=" mb-10">    
					<div class="card-body store-body" >
						<div class="product-info" >
							<div class="product-gallery" >
								
								<div class="product-gallery-featured">
									<img class="img-fluid " src="<?php echo base_url().'product_images/'.$getproductinfo->product_image; ?>" alt="<?php echo ucfirst($getproductinfo->product_name); ?>">
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
						<div class="product-payment-details" style="background:transparent">
							
							<h4 class="product-title mb-2"><?php echo $getproductinfo->product_name; ?></h4>
							<?php 
								$discountPrice =0;
								$productprice     = $getproductinfo->product_price;
								if($getproductinfo->product_discount_type==1){
									$discountPricecal = $getproductinfo->product_discount_fixed;
									$discountPrice = $productprice - $discountPricecal;		
								}else{
									$discountPrice = $getproductinfo->product_discount_per;
									$discountPricecal = $productprice * ($discountPrice/100);
									$discountPrice = $productprice - $discountPricecal;				
								}
							?>	
							<input type="hidden" id="finalprice" name="finalprice" value="<?php echo number_format($discountPrice, 2); ?>">
							<input type="hidden" id="prdid" name="prdid" value="<?php echo $getproductinfo->prdid; ?>">
							<h4 class="product-price site-head">$<?php echo number_format($discountPrice, 2); ?> &nbsp; 	<span style="text-decoration:line-through;color:#aaa;">$<?php echo number_format($productprice, 2); ?></span></h4>
						
							
							<div class="card_area d-flex ">
								<div class="">
									
									<?php
										$productid = $getproductinfo->prdid;
										if(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']=='::1'){
											$ipaddress = '120.0.01';
										}else{
											$ipaddress = $_SERVER['REMOTE_ADDR'];
										}				
										
										$sql = "select cartitems AS cnt from cartiformation WHERE cartiformation.ipaddress='$ipaddress' and cartiformation.status='1' and cartiformation.prodid='$productid'";
										$countCarttt = $this->db->query($sql)->row();
										$countCart3333=1;
										if(isset($countCarttt->cnt) && $countCarttt->cnt!=0){
											$countCart3333 = $countCarttt->cnt;
										}	
									?>
									<div class="product_count d-inline-block">
										<span onClick="add_plus('minus')" class="product_count_item inumber-decrement"> <i  class="ti-minus"></i></span>
										<input class="product_count_item input-number rounded-0" type="text" id="cartitem" name="cartitem" value="<?php echo $countCart3333; ?>" min="1" max="10">
										<span onClick="add_plus('plus')" class="product_count_item number-increment"> <i  class="ti-plus"></i></span>
									</div>
									<span id="price_cal"></span>
								</div> &nbsp;&nbsp;&nbsp;&nbsp;
								
								
							</div>		  
							     <div>
									<button class="btn  btn-warning text-white " onClick="buyNow();">Buy Now</button>    
								</div>     
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
			if(dtype=='minus'){
				cartitem = parseInt(cartitem)-1;
			}else{
				cartitem = parseInt(cartitem)+1;
			}
			var prdid      = $("#prdid").val();
			$.ajax({
				type:     "POST",
				dataType: "json",
				url: "<?php echo base_url(); ?>Products/cartpostsubmit?time=<?php echo time(); ?>",
				data:{fcartitem:cartitem,prdid:prdid,dtype:dtype},
				success: function(data) {
					if(data.messagesuccess=='success'){
						var cartcnt = data.cartcnt;
						var cartitemm = data.productcnt;
						$("#cartitem").val(cartitemm);
						$("#cartItem").html(cartcnt);
					}
				}
			}); 
		},1000);
	}
	function buyNow(dtype){
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
					if(data.messagesuccess=='success'){
						var cartcnt = data.cartcnt;
						var cartitemm = data.productcnt;
						$("#cartitem").val(cartitemm);
						$("#cartItem").html(cartcnt);
						window.location="<?php echo base_url(); ?>cart"
					}
				}
			}); 
		},1000);
	}
</script>
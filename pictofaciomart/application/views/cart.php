	<main>
<div class="clearfix">&nbsp;</div>
<section class="page-start-div" style="background-image: url('<?php echo base_url(); ?>assets/img/home-banner.png');padding:20px 0px;">
		<div class="container">
			<div class="breadcrumb-banner " >
				<div class="text-center pt-4">
					<h1>Shoping Cart </h1>
					
				</div>
			</div>
		</div>
	</section>
<section class=" bg-e9e9e9">
	<div class="container text-center">
	<h3>Disclaimer: This business is represented or affiliated with Macy's.com</h3>
	</div>
</section>
    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php if(isset($cartinfo) && !empty($cartinfo) && count($cartinfo)>0){ $i=1; foreach($cartinfo as $cartpage){ if($cartpage->cartitems!=0){ ?>
                            <tr class="">
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                          <img style="width:150px;" class="img-fluid " src="<?php echo base_url(); ?>/product_images/<?php echo $cartpage->product_image; ?>" alt="<?php echo ucfirst($cartpage->product_name); ?>">
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo ucfirst($cartpage->product_name); ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
									<div class="price">
										<?php 
											$discountPrice =0;
											$productprice     = $cartpage->product_price;
											if($cartpage->product_discount_type==1){
												$discountPricecal = $cartpage->product_discount_fixed;
												$discountPrice = $productprice - $discountPricecal;		
											}else{
												$discountPrice = $cartpage->product_discount_per;
												$discountPricecal = $productprice * ($discountPrice/100);
												$discountPrice = $productprice - $discountPricecal;				
											}
										?>
										<h5>$<?php echo number_format($discountPrice, 2); ?></h5>
										<?php if($discountPrice!=0){ ?>
										<s><h6 class="l-through">$<?php echo number_format($productprice, 2); ?></h6></s>
										<?php } ?>
									</div>
                                </td>
                                <td>
                                    <div class="product_count">
										<input type="hidden" id="finalpricee_<?php echo $i; ?>" name="finalpricee_<?php echo $i; ?>" value="<?php echo number_format($discountPrice, 2); ?>">
										<input type="hidden" id="prdid_<?php echo $i; ?>" name="prdid_<?php echo $i; ?>" value="<?php echo $cartpage->prdid; ?>">
                                        <input type="text" name="qty_<?php echo $i; ?>" id="cartitem_<?php echo $i; ?>" maxlength="12" value="<?php echo $cartpage->cartitems; ?>" title="Quantity:"
                                            class="input-text qty">
                                        <button onClick="add_plus('plus',<?php echo $i; ?>)" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onClick="add_plus('minus',<?php echo $i; ?>)" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5>$ <span id="finalPrice_<?php echo $i; ?>"><?php 
										$ddPrice = $discountPrice; 
										$reLoad = $ddPrice * $cartpage->cartitems;
										echo $reLoad;
									?></span></h5>
                                </td>
								<td>
                                    <a href="javascript:void(0);" onClick="deleteCartItem('plus',<?php echo $i; ?>);" class="bg-danger px-2 py-2 text-white " style="border-radius:5px;"><i class="fa fa-trash" aria-hidden="true"></i>
									</a>

                                </td>
                            </tr>
                            <?php $i++; } } } ?>
                        </tbody>
                    </table>
                </div>
				<div class="pull-right">
					<a class="btn btn-warning text-white" href="javascript:void(0);" data-toggle="modal" data-target=".bd-example-modal-lg">Proceed to checkout</a>
				</div>
            </div>
        </div>
    </section>
	<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header gradient-bg">
					<h5 class="modal-title text-white" id="exampleModalLabel">Shipping Address</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<form id="form_validate" name="form_validate" method="POST">
						<div class="row">
						<div class="col-md-6">
							<div class="form-group ">
								<label for="">Name</label>
								<input type="text" class="form-control" id="uname" name="uname" placeholder="Enter user name">
								<span id="error_uname" style="color:red;"></span>
							</div>
							<div class="form-group ">
								<label for="">Mobile</label>
								<input type="number" class="form-control" id="umobile" name="umobile" placeholder="Enter user mobile">
								<span id="error_umobile" style="color:red;"></span>
							</div>
							<div class="form-group ">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="uemail" name="uemail" placeholder="Enter user email">
								<span id="error_uemail" style="color:red;"></span>
							</div> 
						</div>
							
							<div class="form-group col-md-6">
								<label for="">Address</label>
								<textarea class="form-control" rows="7" id="uaddress" name="uaddress"></textarea>
								<span id="error_uaddress" style="color:red;"></span>
							</div>
							<div class="col-md-12 text-center">
								<button onclick="validate_form();" id="btn_form" name="btn_form" type="button" class="btn gradient-bg">Save & Proceed</button>
							</div>					
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script>
	function add_plus(dtype,val){
		setTimeout(function(){ 
			var cartitem    = $("#cartitem_"+val).val();
			var finalpricee = $("#finalpricee_"+val).val();
			if(dtype=='minus'){
				cartitem = parseInt(cartitem)-1;
			}else{
				cartitem = parseInt(cartitem)+1;
			}
			var prdid      = $("#prdid_"+val).val();
			$.ajax({
				type:     "POST",
				dataType: "json",
				url: "<?php echo base_url(); ?>Products/cartpostsubmit?time=<?php echo time(); ?>",
				data:{fcartitem:cartitem,prdid:prdid,dtype:dtype},
				success: function(data) {
					if(data.messagesuccess=='success'){
						var cartcnt = data.cartcnt;
						var cartitemm = data.productcnt;						
						var priceamt= data.cartprice;
						$("#cartitem_"+val).val(cartitem);
						$("#finalPrice_"+val).html(priceamt);
						$("#cartItem").html(cartcnt);
					}
				}
			}); 
		},1000);
	}
	function validate_form(){
		var uname = $("#uname").val();
		var umobile = $("#umobile").val();
		var uemail = $("#uemail").val();
		var uaddress = $("#uaddress").val();
		var flag = true;
		$("#error_uname").html('');
		$("#error_umobile").html('');
		$("#error_uemail").html('');
		$("#error_uaddress").html('');
		if(uname==""){
			flag = false;
			$("#error_uname").html('User name is required');
		}
		if(umobile==""){
			flag = false;
			$("#error_umobile").html('Mobile is required');
		}
		if(uemail==""){
			flag = false;
			$("#error_uemail").html('Email is required');
		}
		if(uaddress==""){
			flag = false;
			$("#error_uaddress").html('Address is required');
		}
		if(flag==false){
			return false;
		}else{
			$("#exampleModal").modal("hide");
			setTimeout(function(){ 
				alert("Something went wrong, Please try again.");
				window.location = '<?php echo base_url(); ?>/products';
			},2000);
		}
	}
	function deleteCartItem(dtype,val){
		var x = confirm("Are you sure you want to delete?");
		if(x){
			setTimeout(function(){ 
				var cartitem    = 0;
				var finalpricee = $("#finalpricee_"+val).val();
				// if(dtype=='minus'){
					// cartitem = parseInt(cartitem)-1;
				// }else{
					// cartitem = parseInt(cartitem)+1;
				// }
				var prdid      = $("#prdid_"+val).val();
				$.ajax({
					type:     "POST",
					dataType: "json",
					url: "<?php echo base_url(); ?>Products/cartpostsubmit?time=<?php echo time(); ?>",
					data:{fcartitem:cartitem,prdid:prdid,dtype:dtype},
					success: function(data) {
						if(data.messagesuccess=='success'){
							alert('Your item was successfully deleted.');
							window.location = "<?php echo base_url(); ?>cart";
						}
					}
				}); 
			},1000);
		}
	}
</script>
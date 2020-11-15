<footer class="footer-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href=""><img src="<?php echo base_url();?>assets/img/logo.png"  alt="" class="img-fluid" style="width:150px;"></a>
                        </div>
                        <p style="color:#b2b2b2">Picto Facio Mart Is a Seasonal sale On Various Products you can exclusively buy with Gift Cards</p>
                      
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="footer-widget">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li><a href="<?php echo base_url();?>aboutus">About Us</a></li>
                            <li><a href="<?php echo base_url(); ?>cart">Cart</a></li>
                            <li><a href="<?php echo base_url();?>products">Products List</a></li>
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="<?php echo base_url();?>giftcards">Giftcards</a></li>
                            <li><a href="<?php echo base_url();?>terms">Terms &amp; Conditions</a></li>
                            <li><a href="<?php echo base_url();?>privacy-policy">Privacy Policy</a></li>
                            <li><a href="<?php echo base_url();?>contactus">Contact</a></li>
                        </ul>
                    </div>
                </div>
              
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class=" text-center text-white">
							Picto Facio Mart - Copyright All rights reserved @<?php echo date('Y'); ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
 
       <!-- Footer Start-->
       
   <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Shipping Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form>
				<div class="form-group">
					<label >Name</label>
					<input type="text" class="form-control" placeholder="Enter text" id="e2email">
				</div>
				<div class="form-group">
					<label >Mobile Num</label>
					<input type="text" class="form-control" placeholder="Enter Mobile" id="eeeemail">
				</div>
				<div class="form-group">
					<label >Email Id</label>
					<input type="text" class="form-control" placeholder="Enter Mobile" id="eeemail">
				</div>
				
				<div class="form-group">
					<label >Address</label>
					
					<textarea class="form-control"></textarea>
					
				</div>
				<div class="form-group">
					<label >Gender</label>
					<div>
					<select class="form-control">
						<option>Select</option>
						<option>Male</option>
						<option>Female</option>
					</select>
					</div>
				</div>
				<div class="clearfix">&nbsp;</div>
				<div class="form-group text-center">
					 <button type="button" class="btn btn-danger" >Submit</button>
				</div>
			</form>
        </div>
        
      
        
      </div>
    </div>
  </div>
 <footer>
	<script src="<?php echo base_url();?>assets/js/jquery-2.2.4.min.js"></script>	
	<script src="<?php echo base_url();?>assets/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
	<script src="<?php echo base_url();?>assets/js/nouislider.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
	<script>		
		function subscribeFun(){
			$("#error_subscribe").html();
			var subscribe = $("#subscribe").val();
			var flag =true;
			if(subscribe==""){
				$("#subscribe").focus(); 
				$("#error_subscribe").html('Subscribe email is required.');
				flag =false;
			}
			if(flag == false){
				return false;
			}else{
				$("#error_subscribe").html('Subscribed is successfully.').css("color","green");
			}
			setTimeout(function(){ 
				$("#subscribe").focus(); 
				$("#error_subscribe").html('');
				$("#subscribe").val(''); 
			},3000);		
		}
	</script>		
    </body>
</html>
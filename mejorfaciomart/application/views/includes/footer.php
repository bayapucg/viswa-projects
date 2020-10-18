 
       <!-- Footer Start-->
       <div class="footer-area footer-padding" style="background:#555">
           <div class="container">
               <div class="row d-flex justify-content-between" style="border-bottom:1px solid #ddd;">
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a  href="<?php echo base_url();?>"><img style="width:150px;" src="<?php echo base_url();?>assets/img/logo.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Mejor facio mart is the digital fashion e-commerce website. Shop trendy, fresh, handpicked styles at the best prices. Shop Online, Buy and Check Gift Card Balance.</p>
                               </div>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="<?php echo base_url();?>aboutus">About</a></li>
                                   <li><a href="<?php echo base_url();?>products"> Products</a></li>
                                   <li><a href="<?php echo base_url();?>giftcards">  Giftcards</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
              
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Support</h4>
                               <ul>
                               
                                <li><a href="<?php echo base_url();?>terms">Terms & Conditions</a></li>
                                <li><a href="<?php echo base_url();?>privacy-policy">Privacy Policy</a></li>
                                <li><a href="<?php echo base_url();?>contactus">Contact us</a></li>
                            </ul>
                           </div>
                       </div>
                   </div>   
				   <!--
				   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Contact</h4>
                                <ul>                               
									<li>Email id : info@.com</li>
									<li>Web &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: www.mejorfaciomartstore.com</li>                              
								</ul>
                           </div>
                       </div>
                   </div>				   
				   -->
               </div>
               <!-- Footer bottom -->
			   <div class="row">
                 <div class="col-xl-7 col-lg-7 col-md-7">
                     <div class="footer-copy-right">
                         <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>   
					</div>
                 </div>
                  <div class="col-xl-5 col-lg-5 col-md-5">
                     <div class="footer-copy-right f-right">
                         <!-- social -->
                         <div class="footer-social">
                             <a target='_blank' href="https://www.linkedin.com/company/mejorfaciomartstore/?viewAsMember=true"><i class="fab fa-linkedin"></i></a>
                             <a target='_blank' href="#"><i class="fab fa-facebook-f"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
           </div>
       </div>
       <!-- Footer End-->

   </footer>
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
	
	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>
</html>
	<main>
<div class="clearfix">&nbsp;</div>
<section class="page-start-div" style="background-image: url('<?php echo base_url(); ?>assets/img/home-banner.png');padding:20px 0px;">
		<div class="container">
			<div class="breadcrumb-banner " >
				<div class="text-center pt-4">
					<h1>Contact us </h1>
					
				</div>
			</div>
		</div>
	</section>

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container"> 
 
					 <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 card p-0 rounded-0">
						<div class="card-header p-0" style="background:#fff">
							 <h2 class="contact-title site_head pt-2 px-3">Get in Touch</h2>
						</div>
						<div class="card-body px-3">
                        <form class="form-contact contact_form" id="contactid" method="post" name="enq">
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
										<input required="" class="form-control valid" name="urname" id="urname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" type="text">
										<span id="error_urname" style="color:red;"></span>
									</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="uremail" id="uremail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" type="email">
										<span id="error_uremail" style="color:red"></span>
                                    </div>
                                </div>
								<div class="col-12">
                                    <div class="form-group">
										<textarea required="" cols="30" rows="4" class="form-control w-100" name="description" id="description" placeholder="Your Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
										<span id="error_description" style="color:red;"></span>
                                    </div>
                                </div>
                               <input type="hidden" id="contact_form_submit" name="contact_form_submit" value="contact_form">
                            </div>
                           <div class="form-group mt-3">
                                <a href="javascript:void(0);" onclick="contactsubmit()" class=" btn-warning btn  rounded-0 text-white">Send</a>
                            </div>
                        </form>
                    </div>
                    </div>
					  <div class="col-lg-6  p-0 rounded-0">
						<img class="img-fluid mt-4" src="<?php echo base_url();?>assets/img/contactus.png">
					  </div>
					
                </div>
            </div>
        </section>
    <script>
		function contactsubmit(){
			var flag =true;
			var description = $("#description").val();
			var uremail     = $("#uremail").val();
			var urname      = $("#urname").val();
			$('#error_description').html('');
			$('#error_uremail').html('');
			$('#error_urname').html('');
			if(description==""){
				flag = false;
				$('#error_description').html('Message is required');
			}
			if(uremail==""){
				flag = false;
				$('#error_uremail').html('Email is required');
			}
			if(urname==""){
				flag = false;
				$('#error_urname').html('User name is required');
			}
			if(flag == false){
				return false;
			}else{
				var mydata = $("#contactid").serialize();
				$.ajax({
					type:     "POST",
					dataType: "json",
					url:      "<?php echo base_url(); ?>postsubmit?time=<?php echo time(); ?>",
					data:     mydata,
					success: function(data) {
						alert('Your request was successfully sent.');
						window.location = "<?php echo base_url(); ?>";
					}
				});
			}
		}
	</script>

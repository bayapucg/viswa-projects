<!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
	<section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="">
                            <h2>New to our Shop?</h2>
                            <p>Facio is the digital fashion e-commerce website. Shop trendy, fresh, handpicked styles at the best prices. Shop Online, Buy and Check Gift Card Balance.</p>
                            <a href="<?php echo base_url();?>signup" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br> Please Sign in now</h3>
                            <form class="row contact_form" id="signin_form" name="signin_form" method="post">
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" required class="form-control" id="email" name="email" value="" placeholder="Email address">
									<span id="error_email" style="color:red;"></span>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" required class="form-control" id="password" name="password" value="" placeholder="Password">
									<span id="error_password" style="color:red;"></span>
                                </div>
								<input type="hidden" id="sub_form" name="sub_form" value="login_form">
                                <div class="col-md-12 form-group">                             
                                    <button onClick="formSubmit();" type="button" id="btn_submit" name="btn_submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<script>
		function formSubmit(){
			var flag      = true;
			var emailId   = $('#email').val();
			var password  = $('#password').val();			
			if(emailId==""){
				$('#email').focus();
				flag = false;
				$("#error_email").html('Email is required.');
			}else{
				$("#error_email").html('');
			}
			if(password==""){
				$('#password').focus();
				flag = false;
				$("#error_password").html('Password is required.');
			}else{
				$("#error_password").html('');
			}
			if(flag==false){
				return false;
			}else{
				var mydata = $("#signin_form").serialize();
				$.ajax({
					type:     "POST",
					dataType: "json",
					url:      "<?php echo base_url(); ?>/postsubmit?time=<?php echo time(); ?>",
					data:     mydata,
					success: function(data) {
						if(data.type === "error") {
							alert("All feilds are required.");
						}else if(data.type === "confirmPwd") {
							alert("Entered email and password is not match.");
						}else if(data.type === "emailexists") {
							alert("Entered email is already with us.");
						}else{
							window.location = "<?php echo base_url(); ?>giftcards";
						}	      	           
					}
				});
			}
		}
	</script>

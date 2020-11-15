	<main>
<div class="clearfix">&nbsp;</div>
<section class="page-start-div" style="background-image: url('<?php echo base_url(); ?>assets/img/home-banner.png');padding:20px 0px;">
		<div class="container">
			<div class="breadcrumb-banner " >
				<div class="text-center pt-4">
					<h1>Login/Register </h1>
					
				</div>
			</div>
		</div>
	</section>

    <!-- slider Area End-->
	<section class="login_part section_padding " style="background-image: url('<?php echo base_url(); ?>assets/img/login-background.png');padding:100px 0px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
            
                <div class="col-lg-5 col-md-5">
                    <div class=" card p-0 py-4" style="border-radius:20px;">
					
                        <div class="login_part_form_iner card-body">
                            
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
                                <div class="col-md-6 form-group mt-4">                             
                                    <button onClick="formSubmit();" type="button" id="btn_submit" name="btn_submit" value="submit" class="btn btn-primary btn-block rounded-0">
                                        log in
                                    </button>
                                </div>
								<div class="col-md-6 form-group mt-4">                             
                                    <a href="<?php echo base_url();?>signup" class="btn btn-dark btn-block rounded-0">Signup</a>
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

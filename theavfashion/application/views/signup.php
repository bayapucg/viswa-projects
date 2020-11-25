	<main>
<div class="clearfix">&nbsp;</div>
<section class="page-start-div" style="background-image: url('<?php echo base_url(); ?>assets/img/home-banner.png');padding:20px 0px;">
		<div class="container">
			<div class="breadcrumb-banner " >
				<div class="text-center pt-4">
					<h1>Signup </h1>
					
				</div>
			</div>
		</div>
	</section>
    <!-- slider Area End-->
	<section class="login_part section_padding " style="margin-top:-40px;" >
        <div class="container">
            <div class="row d-flex justify-content-center">
                
                <div class="col-lg-6 col-md-6">
                    <div class="card p-0">
						
                        <div class="login_part_form_iner card-body">
                          
                            <form method="post" class="row contact_form" id="signup_form" name="signup_form">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="user_name" name="user_name" value="" placeholder="Username">
									<span id="error_name" style="color:red;"></span>	
							   </div>
								<div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email Id">
									<span id="error_email" style="color:red;"></span>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
									<span id="error_password" style="color:red;"></span>
                                </div>
								<div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="cpassword" name="cpassword" value="" placeholder="Confirm Password">
									<span id="error_co_password" style="color:red;"></span>
                                </div>
								<input type="hidden" id="sub_form" name="sub_form" value="signup_form">
                                <div class="col-md-12 form-group d-flex justify-content-between">                                    
                                    <button onClick="return formSubmit();" type="button" id="btn_submit" name="btn_submit" value="submit" class="btn btn-primary btn-block rounded-0 col-md-6">Signup</button>
                                    <a class="lost_pass" href="<?php echo base_url();?>login">Allready Account?</a>
                                </div>
                            </form>
                        </div>
                    </div>
					<div class="clearfix">&nbsp;</div>
					<div class="clearfix">&nbsp;</div>
					<div class="clearfix">&nbsp;</div>
                </div>
            </div>
        </div>
    </section>
	<script>
		function formSubmit(){
			var flag      = true;
			var name      = $('#user_name').val();
			var emailId   = $('#email').val();
			var password  = $('#password').val();
			var cpassword = $('#cpassword').val();
			if(name==""){
				$("#user_name").focus();
				flag = false;
				$("#error_name").html('User name is required.');
			}else{
				$("#error_name").html('');
			}
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
			if(cpassword==""){
				$("#cpassword").focus();
				flag = false;
				$("#error_co_password").html('Confirm Password is required.');
			}else{
				$("#error_co_password").html('');
			}
			if(password!=cpassword){
				$("#cpassword").focus();
				flag = false;
				$("#error_co_password").html('Password and Confirm Password is required.');
			}else{
				$("#error_co_password").html('');
			}
			if(flag==false){
				return false;
			}else{
				var mydata = $("#signup_form").serialize();
				$.ajax({
					type:     "POST",
					dataType: "json",
					url:      "<?php echo base_url(); ?>postsubmit?time=<?php echo time(); ?>",
					data:     mydata,
					success: function(data) {
						if(data.type === "error") {
							alert("All feilds are required.");
						}else if(data.type === "confirmPwd") {
							alert("Password and confirm passwords are not match.");
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
